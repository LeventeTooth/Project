<?php

namespace App\Http\Controllers\API;

use Validator;
use App\Models\Event;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return response()->json($events, 200);
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
    public function store(StoreEventRequest $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'name' => 'required|string',
            'date' => 'required|date',
            'track_id' => 'required|integer',
        ]);
        
        if($validator->fails()){
            $data = [
                'status' => 422,
                'message' => 'Event creating failed in validation.'
            ];

            return response()->json($data,422);
        }
        else{
            Event::create($request->all());

            $data = [
                'status' => 200,
                'message' => 'Event created successfully.'
            ];

            return response()->json($data,200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $foundEvent = Event::find($event->id);

        if($foundEvent == null){
            $data = [
                'status' => 404,
                'message' => 'Event with this id not found.'
            ];

            return response()->json($data,404);
        } 
        else{
            return response()->json($foundEvent,200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $eventToUpdate = Event::find($event->id);

        $validator = Validator::make($request->all(), 
        [
            'name' => 'required|string',
            'date' => 'required|date',
            'track_id' => 'required|integer',
        ]);
        
        if($validator->fails()){
            $data = [
                'status' => 422,
                'message' => 'Event updtaing failed in validation.'
            ];

            return response()->json($data,422);
        }
        else{
            $eventToUpdate->update($request->all());

            $data = [
                'status' => 200,
                'message' => 'Event updated successfully.'
            ];

            return response()->json($data,200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $eventToDelete = Event::find($event->id);

        if($eventToDelete == null){
            $data = [
                'status' => 404,
                'message' => 'Event with this id not found.'
            ];

            return response()->json($data,404);
        } 
        else{
            $eventToDelete->delete();

            $data = [
                'status' => 200,
                'message' => 'Event deleted successfully.'
            ];

            return response()->json($data,200);
        }
    }
}
