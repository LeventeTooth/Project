<?php

use App\Models\Car;
use App\Models\Group;
use App\Models\Rent;
use App\Models\Track;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return User::all();
});

Route::get('/cars', function () {
    return Car::all();
});

Route::get('/tracks', function () {
    return Track::all();
});

Route::get('/rents', function () {
    return Rent::all();
});

Route::get('/groups', function () {
    return Group::all();
});


