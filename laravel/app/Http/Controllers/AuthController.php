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
        // A felhasználó adatainak betöltése
        $user = User::findOrFail($id);

        // A csoportok lekérése
        $groups = Group::all();

        // A datamodification.blade.php-hez a szükséges adatok átadása
        return view('datamodification', ['user' => $user, 'groups' => $groups]);
    }

    public function update(Request $request, $id)
    {
        // A felhasználó betöltése az id alapján
        $user = User::findOrFail($id);

        // A validáció
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string|max:255',
            'birth_date' => 'required|date',
            'age' => 'required|integer|min:0',
            'group_id' => 'nullable|integer|exists:groups,id'
        ]);

        // A felhasználói adatok frissítése
        $user->update($request->only([
            'name',
            'username',
            'email',
            'address',
            'birth_date',
            'age',
            'group_id'
        ]));

        // Visszairányítás a profil oldalra
        return redirect()->route('auth.account')->with('success', 'Adatok sikeresen frissítve.');
    }
    


    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        $user->delete();
    

        return redirect()->route('main')->with('status', 'User has been deleted successfully!');
    }

}
