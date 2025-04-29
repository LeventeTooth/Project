<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;


//Navbar routes
Route::get('/', function () {
    return view('main');
})->name("main");

Route::get('/tracks', [TrackController::class, 'index']);

Route::get('/cars', [CarController::class, 'index']);

Route::get('/events', function () {
    return view('events');
})->name("events");

Route::get('/groups', [GroupController::class, 'index']);

Route::get('/pictures', function () {
    return view('pictures');
})->name("pictures");


//Login-register routes
Route::resource('/auth', AuthController::class);
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/my-profile', [AuthController::class, 'account'])->name('auth.account');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'index'])->name('register');