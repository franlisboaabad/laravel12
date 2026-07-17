<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Web.home');
})->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('Admin.dashboard.index');
    })->name('dashboard');

    Route::get('/login', function () {
        return view('Admin.auth.login');
    })->name('login');
});
