<?php

namespace App\Http\Controllers\API;

use Validator;
use App\Models\Rent;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRentRequest;
use App\Http\Requests\UpdateRentRequest;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rents = Rent::all();
        return response()->json($rents);
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
    public function store(StoreRentRequest $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'user_id' => 'required|integer',
            'track_id' => 'required|integer',
            'car_id' => 'required|integer',
            'rent_date_time' => 'required|date',
        ]);
        
        if($validator->fails()){
            $data = [
                'status' => 422,
                'message' => 'Rent creating failed in validation.'
            ];

            return response()->json($data,422);
        }
        else{
            Rent::create($request->all());

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
    public function show(Rent $rent)
    {
        $foundRent = Rent::find($rent->id);

        if($foundRent == null){
            $data = [
                'status' => 404,
                'message' => 'Rent with this id not found.'
            ];

            return response()->json($data,404);
        } 
        else{
            $data = [
                'status' => 200,
                'rent' => $foundRent
            ];

            return response()->json($data,200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rent $rent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRentRequest $request, Rent $rent)
    {
        $rentToUpdate = Rent::find($rent->id);

        $validator = Validator::make($request->all(), 
        [
            'user_id' => 'required|integer',
            'track_id' => 'required|integer',
            'car_id' => 'required|integer',
            'rent_date_time' => 'required|date',
        ]);
        
        if($validator->fails()){
            $data = [
                'status' => 422,
                'message' => 'Rent updtaing failed in validation.'
            ];

            return response()->json($data,422);
        }
        else{
            $rentToUpdate->update($request->all());

            $data = [
                'status' => 200,
                'message' => 'Rent updated successfully.'
            ];

            return response()->json($data,200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rent $rent)
    {
        //
    }
}
