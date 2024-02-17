<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login'])->name('view.login');
Route::post('/login', [AuthController::class, 'createLogin'])->name('create.login');
Route::get('/register', [AuthController::class, 'register'])->name('view.register');
