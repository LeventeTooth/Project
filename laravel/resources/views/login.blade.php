@extends('layouts.template')

@section('title', 'Belepes')

@section('content')

    <p class="background p-3 text-3xl">Bejelentkezes</p>
    <div class="flex items-center justify-center mt-8">
        <form class="bg-stone-300 p-8 rounded-lg shadow-lg space-y-6">
            <h2 class="text-2xl font-bold text-center text-stone-700">Belépés</h2>

            <div>
                <label for="email" class="block text-sm font-medium text-stone-700">Email</label>
                <input type="email" id="email" name="email"
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
            <button type="button" class="text-sm text-stone-700 underline hover:text-green-600 transition">
                Nincs még fiókom, Regisztrálok
            </button>
        </form>
    </div>

@endsection