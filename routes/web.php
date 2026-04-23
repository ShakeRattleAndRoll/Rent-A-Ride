<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return redirect()->route('login');
});

// Route for login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

// Route for register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

// para sa kung pindoton ra login e redirect sa homepage (E remove kung tarong na ang login system)
Route::get('/', function () {
    return view('home.main');
});

// Post a car route  [CONTROLLER NAME: CarController.php
//                    MODEL: Car.php
//                    MIGRATION: 2026_04_21_100645_car.php ]

Route::get('/post-car', [CarController::class, 'create']);
Route::post('/cars', [CarController::class, 'store']);

//Route for available cars page
Route::get('/available', [CarController::class, 'index']);

// Route for profile page
Route::get('/profile', function () {
    return view('profile.main');
});

//Route for edit profile page
Route::get('/profile/edit', function () {
    return view('profile.edit');
});

//Route for message page
Route::get('/messages', function () {
    return view('message.message');
});

