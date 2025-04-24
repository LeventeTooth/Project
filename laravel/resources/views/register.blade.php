@extends('layouts.template')

@section('title', 'Regisztarcio')

@section('content')


    <div class="min-h-screen flex items-center justify-center">
        <form class="bg-stone-300 p-8 rounded-lg shadow-lg space-y-4 w-full max-w-md" method="POST" action="{{ route('auth.store') }}">
            @csrf
            <h2 class="text-2xl font-bold text-center text-stone-700">Regisztráció</h2>

            <input type="text" name="name" placeholder="Név"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500" />

            <input type="text" name="username" placeholder="Felhasználónév"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500" />

            <input type="email" name="email" placeholder="Email"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500" />

            <input type="password" name="password" placeholder="Jelszó"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500" />

            <input type="text" name="address" placeholder="Lakcím"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500" />

            <input type="date" name="birth_date" placeholder="Születési dátum"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500" />

            <input type="number" name="age" placeholder="Kor"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500" />

            <p>csapat</p>
            <select name="group_id" class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500"">
                @foreach ($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->title }}</option>
                @endforeach
            </select>


            <button type="submit"
                class="w-full py-2 px-4 rounded border bg-green-500 text-white border-white hover:bg-green-600 duration-700 transition">
                Regisztráció
            </button>

            <a href="{{ route('auth.index') }}" type="button"
                class="w-full text-sm text-stone-700 underline hover:text-green-600 duration-700 transition">
                Már van fiókom, Bejelentkezem
            </a>
        </form>
    </div>

@endsection