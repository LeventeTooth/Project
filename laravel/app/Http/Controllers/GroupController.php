<?php

namespace App\Http\Controllers;

use App\Models\Group;
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
        return view('group.groups', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('group.createGroup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGroupRequest $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Group::create([
            'title' => $validated['title'],
        ]);
    
        return redirect()->route('groups.index')->with('success', 'Csapat sikeresen létrehozva!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $group = Group::findOrFail($id); // vagy: Group::where('id', $id)->firstOrFail();
        $group->delete();
    
        return redirect()->route('groups.index')->with('success', 'Sikeres törlés');
    }
}
