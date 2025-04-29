<?php

namespace App\Http\Controllers\API;

use Validator;
use App\Models\Car;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return response()->json($cars);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'license_plate' => 'required|string',
            'model' => 'required|string',
            'price' => 'required|integer',
            'power' => 'required|string',
            'img' => 'string'
        ]);
        
        if($validator->fails()){
            $data = [
                'status' => 422,
                'message' => 'Car creating failed in validation.'
            ];

            return response()->json($data,422);
        }
        else{
            Car::create($request->all());

            $data = [
                'status' => 200,
                'message' => 'Rent created successfully.'
            ];

            return response()->json($data,200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        $foundCar = Car::find($car->id);

        if($foundCar == null){
            $data = [
                'status' => 404,
                'message' => 'Car with this id not found.'
            ];

            return response()->json($data,404);
        } 
        else{
            return response()->json($foundCar,200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        $carToUpdate = Car::find($car->id);

        $validator = Validator::make($request->all(), 
        [
            'license_plate' => 'required|string',
            'model' => 'required|string',
            'price' => 'required|integer',
            'power' => 'required|string',
            'img' => 'string'
        ]);
        
        if($validator->fails()){
            $data = [
                'status' => 422,
                'message' => 'Car updtaing failed in validation.'
            ];

            return response()->json($data,422);
        }
        else{
            $carToUpdate->update($request->all());

            $data = [
                'status' => 200,
                'message' => 'Car updated successfully.'
            ];

            return response()->json($data,200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $carToDelete = Car::find($car->id);

        if($carToDelete == null){
            $data = [
                'status' => 404,
                'message' => 'Car with this id not found.'
            ];

            return response()->json($data,404);
        } 
        else{
            $carToDelete->delete();

            $data = [
                'status' => 200,
                'message' => 'Car deleted successfully.'
            ];

            return response()->json($data,200);
        }
    }
}
