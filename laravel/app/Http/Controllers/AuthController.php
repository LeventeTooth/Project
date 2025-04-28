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

    /* TODO: normalis store validate, belepes utan a belepes gomb helyett profilom, meg a delete, edit/update, csapatletrehozas */
    public function index()
    {

        return view('login');
    }

    public function logout()
    {
        Auth::logout();
        return view('main');
    }

    public function account()
    {
        $userId = Auth::id();
        $user = User::find($userId);
        return view('account', ['user' => $user]);
    }

    public function login(Request $request)
    {
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
        return view('register', ['groups' => $groups]);
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
        $user = User::find($id);
        $groups = Group::all();
        return view('datamodification', ['groups' => $groups, 'user' => $user]);
    }


    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
    
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'address' => 'nullable|string|max:255',
            'birth_date' => 'nullable|date',
            'age' => 'nullable|integer',
            'group_id' => 'nullable|exists:groups,id',
        ]);
    
        // Logoljuk a változások előtt
        \Log::info('Before Update: ', $user->toArray());
    
        $user->update([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'birth_date' => $request->input('birth_date'),
            'age' => $request->input('age'),
            'group_id' => $request->input('group_id'),
        ]);
    
        // Logoljuk a változások után
        \Log::info('After Update: ', $user->toArray());
    
        return redirect()->route('main');
    }
    


    public function destroy(string $id)
    {
        //
    }

}
