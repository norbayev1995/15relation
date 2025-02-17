<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('index')->middleware('auth');
Route::resource('posts', PostController::class)->middleware('auth');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'handleLogin'])->name('handleLogin');
Route::post('register', [AuthController::class, 'handleRegister'])->name('handleRegister');
Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
