<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name("main");

Route::get('/track', function () {
    return view('track');
})->name("track");

Route::get('/events', function () {
    return view('events');
})->name("events");

Route::get('/calendar', function () {
    return view('calendar');
})->name("calendar");

Route::get('/prices', function () {
    return view('prices');
})->name("prices");

Route::get('/pictures', function () {
    return view('pictures');
})->name("pictures");


Auth::routes();

Route::get('/register', [App\Http\Controllers\HomeController::class, 'index'])->name('register');
