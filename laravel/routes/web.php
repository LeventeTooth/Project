<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name("main");



Route::get('events', [EventController::class, 'index'])->name('events.index');

Route::resource('/cars', CarController::class);

Route::get('/pictures', function () {
    return view('pictures');
})->name("pictures");

Route::resource('/tracks', TrackController::class);

Route::resource('/auth', AuthController::class);
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/my-profile', [AuthController::class, 'account'])->name('auth.account');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::resource('/groups', GroupController::class);

Route::get('/register', [App\Http\Controllers\HomeController::class, 'index'])->name('register');


Route::resource('/rents', RentController::class);