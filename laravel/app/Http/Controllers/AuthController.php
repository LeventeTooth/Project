<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{

    /* TODO: normalis store validate, belepes utan a belepes gomb helyett profilom, meg a delete, edit/update */
    public function index()
    {
        
        return view('login');
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('main', ['loggedin' => 'true']);
        }

        return back()->withErrors([
            'login' => 'Hibás felhasználónév vagy jelszó.'
        ])->withInput();
    }

    public function create()
    {
        $groups = Group::all();
        return view('register', ['groups'=>$groups]);
    }


    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string',
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


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }

}
