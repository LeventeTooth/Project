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


//Rent api
Route::resource("/rent", RentController::class);

//Car api
Route::resource("/car", CarController::class);