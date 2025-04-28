<?php

namespace App\Http\Controllers;

use App\Models\Rent;
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
        $data = $request->validate([
            'user_id' => 'required|integer',
            'track_id' => 'required|integer',
            'car_id' => 'required|integer',
            'rent_date_time' => 'required|date',
        ]);

        $newRent = Rent::create($data);


        return response()->json(['status' => 200, 'message' => 'Rent successfully created.'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Rent $rent)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rent $rent)
    {
        //
    }
}
