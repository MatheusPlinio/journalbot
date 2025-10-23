<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoginAuthRequest;
use App\Http\Requests\Api\StoreAuthRequest;
use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use Hash;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function __construct(private UserRepositoryInterface $repository)
    {
    }

    /**
     * Create a user
     *
     * @unauthenticated
     */

    public function register(StoreAuthRequest $request)
    {
        $user = $this->repository->store($request->validated());

        if (!$user) {
            return response()->json(["message" => "User not created"], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json(["message" => "User created successfully"], Response::HTTP_CREATED);
    }

    /**
     * Login Access
     *
     * Find user, verify credential, and generate a token access
     *
     */

    public function login(LoginAuthRequest $request)
    {
        $credentials = $request->validated();

        $user = User::where('email', $credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return response()->json([
                "message" => "Credentials not match"
            ], Response::HTTP_UNAUTHORIZED);
        }

        $user->tokens()->delete();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'accessToken' => $token,
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Logout account
     *
     * Delete access tokens a user request.
     *
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout successfully',
        ], Response::HTTP_NO_CONTENT);
    }
}
