<?php

use App\Livewire\Home;
use App\Livewire\Auth\Login;
use App\Livewire\Profile;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/', Home::class)->name('home');

    Route::get('/profile', Profile::class)->name('profile');
});

Route::middleware('guest')->group(function () {

    Route::get('/login', Login::class)->name('login');

    Route::get('/register', Register::class)->name('register');
});
