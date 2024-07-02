<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/offers', function(){
    return view('offers');
});

Route::get('/earnings', function(){
    return view('earnings');
});

Route::get('/rewards', function(){
    return view('rewards');
});

Route::get('/cashout', function(){
    return view('cashout');
});

Route::get('/leaderboard', function(){
    return view('leaderboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
