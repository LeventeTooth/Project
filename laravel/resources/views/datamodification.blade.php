@extends('layouts.template')

@section('title', 'AdatModositas')

@section('content')


    <div class="min-h-screen flex items-center justify-center">
        <form class="bg-stone-300 p-8 rounded-lg shadow-lg space-y-4 w-full max-w-md" method="POST"
            action="{{ route('auth.update', ['auth' => $user->id]) }}">
            @csrf
            @method('PUT')
            <h2 class="text-2xl font-bold text-center text-stone-700">Adat modositas</h2>

            <input type="text" name="name" placeholder="Nev: {{$user->name}}"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-500" />

            <input type="text" name="username" placeholder="Felhasznalonev: {{ $user->username }}"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-500" />

            <input type="email" name="email" placeholder="Email: {{$user->email}}"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-500" />

            <input type="text" name="address" placeholder="Cim: {{$user->address}}"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-500" />
                
                <input type="number" name="age" placeholder="Kor: {{ $user->age }}"
                    class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-500" />

            <p class="text-gray-500">Szuletesi datum</p>
            <input type="date" name="birth_date" value="{{ $user->birth_date }}"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-500" />



            <p class="text-gray-500">Csapat</p>
            <select name="group_id"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-500">
                <option value="" disabled selected>{{ $user->group->title ?? 'Válassz csoportot' }}</option>
                @foreach ($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->title }}</option>
                @endforeach
            </select>



            <button type="submit"
                class="w-full py-2 px-4 rounded border bg-green-500 text-white border-white hover:bg-green-600 duration-700 transition">
                Modosit
            </button>
        </form>
    </div>


@endsection