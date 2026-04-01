<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Login
Route::get('/login', function(){
    return view('auth.login');
})->name('login');

Route::get('/', [MainController::class, 'index'])->name('home');