@extends('layouts.template')

@section('title', 'Belepes')

@section('content')





    <div class="flex items-center justify-center min-h-[calc(100vh-260px)] bg-cover bg-center">
        <form class="bg-stone-300 p-8 rounded-lg shadow-lg space-y-6" method="POST" action="{{ route('auth.login') }}">
            @csrf
            @if(session('success'))
                <p class="bg-green-200 text-green-900 border-2 rounded border-green-900 text-center p-3">{{ session('success') }}  <br> Profilomnal lehet csapatot valasztani</p>
            @endif
            <h2 class="text-2xl font-bold text-center text-stone-700">Bejelentkezes</h2>

            <div>
                <label for="username" class="block text-sm font-medium text-stone-700">Felhasznalonev</label>
                <input type="text" id="username" name="username"
                    class="w-full mt-1 p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500" />
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-stone-700">Jelszó</label>
                <input type="password" id="password" name="password"
                    class="w-full mt-1 p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500" />
            </div>

            <button type="submit"
                class="w-full py-2 px-4 rounded border-2 bg-green-500 text-white border-white hover:bg-green-600 transition duration-700">
                Belépés
            </button>
            <a href="{{ route('auth.create') }}" type="button"
                class="text-sm text-stone-700 underline hover:text-green-600 duration-700 transition">
                Nincs még fiókom, Regisztrálok
            </a>
        </form>
    </div>

@endsection