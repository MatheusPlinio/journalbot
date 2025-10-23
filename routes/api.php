<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register'])->name('next.register');
Route::post('/login', [AuthController::class, 'login'])->name('next.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('next.logout');
