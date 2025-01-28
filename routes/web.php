<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('index')->middleware('auth');
Route::resource('posts', PostController::class)->middleware('auth');

Route::get('login', [UserController::class, 'login'])->name('login');
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('login', [UserController::class, 'handleLogin'])->name('handleLogin');
Route::post('register', [UserController::class, 'handleRegister'])->name('handleRegister');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
