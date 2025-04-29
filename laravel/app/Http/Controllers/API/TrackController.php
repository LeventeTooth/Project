<?php

namespace App\Http\Controllers\API;

use Validator;
use App\Models\Track;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTrackRequest;
use App\Http\Requests\UpdateTrackRequest;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tracks = Track::all();
        return response()->json($tracks);
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
    public function store(StoreTrackRequest $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'name' => 'required|string',
            'location' => 'required|string',
            'price' => 'required|integer',
            'img' => 'required|string'
        ]);
        
        if($validator->fails()){
            $data = [
                'status' => 422,
                'message' => 'Track creating failed in validation.'
            ];

            return response()->json($data,422);
        }
        else{
            Track::create($request->all());

            $data = [
                'status' => 200,
                'message' => 'Track created successfully.'
            ];

            return response()->json($data,200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Track $track)
    {
        $foundTrack = Track::find($track->id);

        if($foundTrack == null){
            $data = [
                'status' => 404,
                'message' => 'Track with this id not found.'
            ];

            return response()->json($data,404);
        } 
        else{
            return response()->json($foundTrack,200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Track $track)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrackRequest $request, Track $track)
    {
        $trackToUpdate = Track::find($track->id);

        $validator = Validator::make($request->all(), 
        [
            'name' => 'required|string',
            'location' => 'required|string',
            'price' => 'required|integer',
            'img' => 'required|string'
        ]);
        
        if($validator->fails()){
            $data = [
                'status' => 422,
                'message' => 'Track updtaing failed in validation.'
            ];

            return response()->json($data,422);
        }
        else{
            $trackToUpdate->update($request->all());

            $data = [
                'status' => 200,
                'message' => 'Track updated successfully.'
            ];

            return response()->json($data,200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Track $track)
    {
        $trackToDelete = Track::find($track->id);

        if($trackToDelete == null){
            $data = [
                'status' => 404,
                'message' => 'Track with this id not found.'
            ];

            return response()->json($data,404);
        } 
        else{
            $trackToDelete->delete();

            $data = [
                'status' => 200,
                'message' => 'Track deleted successfully.'
            ];

            return response()->json($data,200);
        }
    }
}
