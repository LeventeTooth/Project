<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = Group::all(); // vagy csak ami kell
        return view('register', ['groups'=>$groups]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'address' => 'nullable|string|max:255',
            'birth_date' => 'required|date',
            'age' => 'required|integer|min:0',
            'group_id' => 'required|exists:groups,id',
        ]);
        
        $validate['password'] = Hash::make($validate['password']);
        
        $user = new User($validate);
        $user->save();
        
        return redirect()->route('auth.index')->with('success', 'Sikeres regisztráció! Jelentkezz be.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
