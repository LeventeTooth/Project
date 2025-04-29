<?php

namespace App\Http\Controllers\API;

use Validator;
use App\Models\Group;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();
        return response()->json($groups, 200);
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
    public function store(StoreGroupRequest $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'title' => 'required|string'
        ]);
        
        if($validator->fails()){
            $data = [
                'status' => 422,
                'message' => 'Group creating failed in validation.'
            ];

            return response()->json($data,422);
        }
        else{
            Group::create($request->all());

            $data = [
                'status' => 200,
                'message' => 'Group created successfully.'
            ];

            return response()->json($data,200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        $foundGroup = Group::find($group->id);

        if($foundGroup == null){
            $data = [
                'status' => 404,
                'message' => 'Group with this id not found.'
            ];

            return response()->json($data,404);
        } 
        else{
            return response()->json($foundGroup,200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGroupRequest $request, Group $group)
    {
        $groupToUpdate = Group::find($group->id);

        $validator = Validator::make($request->all(), 
        [
            'title' => 'required|string'
        ]);
        
        if($validator->fails()){
            $data = [
                'status' => 422,
                'message' => 'Group updtaing failed in validation.'
            ];

            return response()->json($data,422);
        }
        else{
            $groupToUpdate->update($request->all());

            $data = [
                'status' => 200,
                'message' => 'Group updated successfully.'
            ];

            return response()->json($data,200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $groupToDelete = Group::find($group->id);

        if($groupToDelete == null){
            $data = [
                'status' => 404,
                'message' => 'Group with this id not found.'
            ];

            return response()->json($data,404);
        } 
        else{
            $groupToDelete->delete();

            $data = [
                'status' => 200,
                'message' => 'Group deleted successfully.'
            ];

            return response()->json($data,200);
        }
    }
}
