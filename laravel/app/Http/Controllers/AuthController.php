<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use App\Models\Rent;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{


    public function index()
    {

        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return view('main');
    }

    public function account()
    {
        $rents = [];
        foreach(Rent::all() as $rent){
            if($rent->user_id == Auth::user()->id) array_push($rents, $rent);
        }
        return view('auth.account', ['user' => Auth::user(), 'rents' => $rents]);

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
        return view('auth.register', ['groups' => $groups]);
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


    public function edit($id)
    {
        $user = User::findOrFail($id);

        $groups = Group::all();

        return view('auth.datamodification', ['user' => $user, 'groups' => $groups]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string|max:255',
            'birth_date' => 'required|date',
            'age' => 'required|integer|min:0',
            'group_id' => 'nullable|integer|exists:groups,id'
        ]);

        $user->update($request->only([
            'name',
            'username',
            'email',
            'address',
            'birth_date',
            'age',
            'group_id'
        ]));

        return redirect()->route('auth.account')->with('success', 'Adatok sikeresen frissítve.');
    }
    


    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        $user->delete();
    

        return redirect()->route('main')->with('status', 'User has been deleted successfully!');
    }

}
