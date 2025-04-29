<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Rent;
use App\Models\Event;
use App\Models\Car;
use App\Http\Requests\StoreRentRequest;
use App\Http\Requests\UpdateRentRequest;
use function Laravel\Prompts\error;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function createRent(Event $event, Car $car)
    {
        return view('rent.createRent', ['event'=>$event, 'car'=>$car]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRentRequest $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'user_id' => 'required|integer',
            'car_id' => 'required|integer',
            'rent_time' => 'required|string',
            'event_id' => 'required|integer'
        ]);
        
        if($validator->fails()){
            return error('Rent creating failed in validation.');
        }
        else{
            Rent::create($request->all());

            session([
                'rent_data' => [
                    'car_id' => $request['car_id'],
                    'event_id' => $request['event_id'],
                    'user_id' => $request['user_id'],
                    'rent_time' => $request['rent_time'],
                ]
            ]);

            return redirect()->route('rents.thankYouPage');
        }
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

    public function thankYouPage()  
    {
        $rent_data = session('rent_data');
        if (!$rent_data || !isset($rent_data['event_id'], $rent_data['car_id'], $rent_data['rent_time'])) {
            abort(404, 'Szükséges foglalási adatok nem találhatók a session-ben.');
        }
        $event = Event::find($rent_data['event_id']);
        $car = Car::find($rent_data['car_id']);
        return view('rent.thankYouPage', ['event'=>$event, 'car'=>$car, 'rent_time'=>$rent_data['rent_time']]);
    }
}
