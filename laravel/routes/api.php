<?php

use App\Http\Controllers\API\RentController;
use App\Http\Controllers\API\CarController;
use App\Models\Car;
use App\Models\Group;
use App\Models\Track;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return response()->json(User::all());
});

Route::get('/cars', function () {
    return response()->json(Car::all());
});

Route::get('/tracks', function () {
    return response()->json(Track::all());
});

Route::get('/groups', function () {
    return response()->json(Group::all());
});


//Rent api
Route::resource("/rent", RentController::class);

//Car api
Route::resource("/car", CarController::class);