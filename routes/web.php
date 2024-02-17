<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::get('/', [AuthController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('view.login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('post.login');
Route::get('/register', [AuthController::class, 'register'])->name('view.register');
Route::post('/register', [AuthController::class, 'createRegister'])->name('create.register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
