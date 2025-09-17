<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "ok";
});

Route::resource('events', EventController::class);

Route::get('/login', [AuthController::class, 'show_login'] )->name('show_login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');