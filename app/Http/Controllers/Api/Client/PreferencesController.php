<?php

namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Source;
use Illuminate\Http\Request;

class PreferencesController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        return response()->json([
            'categories' => $user->categories()->pluck('categories.id'),
            'sources' => $user->sources()->pluck('sources.id'),
            'phone' => $user->phone,
        ]);
    }

    public function categories(Request $request)
    {
        $user = $request->user();

        return response()->json([
            'all' => Category::select('id', 'name')->get(),
            'selected' => $user->categories()->pluck('categories.id'),
        ]);
    }

    public function syncCategories(Request $request)
    {
        $data = $request->validate([
            'category_ids' => ['required', 'array'],
            'category_ids.*' => ['exists:categories,id'],
        ]);

        $request->user()->categories()->sync($data['category_ids']);

        return response()->json([
            'message' => 'Categorias atualizadas com sucesso',
        ]);
    }

    public function sources(Request $request)
    {
        $user = $request->user();

        return response()->json([
            'all' => Source::select('id', 'name')->get(),
            'selected' => $user->sources()->pluck('sources.id'),
        ]);
    }

    public function syncSources(Request $request)
    {
        $data = $request->validate([
            'source_ids' => ['required', 'array'],
            'source_ids.*' => ['exists:sources,id'],
        ]);

        $request->user()->sources()->sync($data['source_ids']);

        return response()->json([
            'message' => 'Fontes atualizadas com sucesso',
        ]);
    }

    public function updateNotifications(Request $request)
    {
        $user = $request->user();

        if ($request->has('phone')) {
            $request->merge(['phone' => preg_replace('/[^0-9]/', '', $request->phone)]);
        }

        $data = $request->validate([
            'phone' => ['nullable', 'string', 'unique:users,phone,' . $user->id],
        ]);

        $user->update([
            'phone' => $data['phone'] ?? null,
        ]);

        return response()->json([
            'message' => 'Notificações atualizadas com sucesso',
        ]);
    }
}
