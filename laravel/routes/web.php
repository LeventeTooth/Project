<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name("main");



Route::get('/events', function () {
    return view('events');
})->name("events");

Route::get('/calendar', function () {
    return view('calendar');
})->name("calendar");

Route::resource('/cars', CarController::class);

Route::get('/pictures', function () {
    return view('pictures');
})->name("pictures");

Route::resource('/tracks', TrackController::class);

Route::resource('/auth', AuthController::class);
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/my-profile', [AuthController::class, 'account'])->name('auth.account');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');


Route::get('/register', [App\Http\Controllers\HomeController::class, 'index'])->name('register');
