@extends('layouts.template')

@section('title', 'AdatMódosítás')

@section('content')

    <div class="min-h-screen flex items-center justify-center">
<!--         <form class="bg-stone-300 p-8 rounded-lg shadow-lg space-y-4 w-full max-w-md" method="POST"
            action="{{ route('auth.update', $user) }}">
            @csrf
            @method('PUT')
            <h2 class="text-2xl font-bold text-center text-stone-700">Adat módosítás</h2>

            <input type="text" name="name" placeholder="Név: {{$user->name}}"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-500" />

            <input type="text" name="username" placeholder="Felhasználónév: {{ $user->username }}"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-500" />

            <input type="email" name="email" placeholder="Email: {{$user->email}}"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-500" />

            <input type="text" name="address" placeholder="Cím: {{$user->address}}"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-500" />

            <input type="number" name="age" placeholder="Kor: {{ $user->age }}"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-500" />

            <p class="text-gray-500">Születési dátum</p>
            <input type="date" name="birth_date" value="{{ $user->birth_date }}"
                class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-500" />

            <p class="text-gray-500">Csapat</p>
            <div class="flex justify-between">
                <select name="group_id"
                    class="w-[65%] p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-500">
                    <option value="" disabled selected>{{ $user->group->title ?? 'Válassz csoportot' }}</option>
                    @foreach ($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->title }}</option>
                    @endforeach
                </select>

                <a href="{{ route('group.create') }}"
                    class="w-[30%] py-2 px-4 rounded border-2 bg-blue-500 text-white border-white hover:bg-blue-600 duration-700 transition text-center block">
                    Új Csapat
                </a>
            </div>

            <button type="submit"
                class="w-full py-2 px-4 rounded border bg-green-500 text-white border-white hover:bg-green-600 duration-700 transition">
                Módosít
            </button>
        </form> -->
        <form method="POST" action="{{ route('auth.update', $user) }}">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $user->name }}">
    <input type="text" name="username" value="{{ $user->username }}">
    <input type="email" name="email" value="{{ $user->email }}">
    <input type="text" name="address" value="{{ $user->address }}">
    <input type="number" name="age" value="{{ $user->age }}">
    <input type="date" name="birth_date" value="{{ $user->birth_date }}">
    <select name="group_id">
        <option value="{{ $user->group_id }}" selected>{{ $user->group->title ?? 'Válassz csoportot' }}</option>
        @foreach ($groups as $group)
            <option value="{{ $group->id }}">{{ $group->title }}</option>
        @endforeach
    </select>
    <button type="submit">Modosít</button>
</form>
    </div>

@endsection
