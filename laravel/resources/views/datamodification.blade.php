@extends('layouts.template')

@section('title', 'AdatMódosítás')

@section('content')

    <div class="min-h-screen flex items-center justify-center">
        <form class="bg-stone-300 p-8 rounded-lg shadow-lg space-y-4 w-full max-w-md" method="POST"
            action="{{ route('auth.update', $user->id) }}">
            @csrf
            @method('PUT')

            <h2 class="text-2xl font-bold text-center text-stone-700">Adat módosítás</h2>

            <div>
                <label for="name" class="block text-sm font-medium text-stone-700">Név</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}"
                    class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500" />
            </div>

            <div>
                <label for="username" class="block text-sm font-medium text-stone-700">Felhasználónév</label>
                <input type="text" id="username" name="username" value="{{ $user->username }}"
                    class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500" />
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-stone-700">Email</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}"
                    class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500" />
            </div>

            <div>
                <label for="address" class="block text-sm font-medium text-stone-700">Cím</label>
                <input type="text" id="address" name="address" value="{{ $user->address }}"
                    class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500" />
            </div>

            <div>
                <label for="age" class="block text-sm font-medium text-stone-700">Kor</label>
                <input type="number" id="age" name="age" value="{{ $user->age }}"
                    class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500" />
            </div>

            <div>
                <label for="birth_date" class="block text-sm font-medium text-stone-700">Születési dátum</label>
                <input type="date" id="birth_date" name="birth_date" value="{{ $user->birth_date }}"
                    class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500" />
            </div>

            <div>
                <label for="group_id" class="block text-sm font-medium text-stone-700">Csoport</label>
                <select id="group_id" name="group_id"
                    class="w-full p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="" disabled selected>{{ $user->group ? $user->group->title : 'Válassz csoportot' }}</option>
                    @foreach ($groups as $group)
                        <option value="{{ $group->id }}" {{ $user->group_id == $group->id ? 'selected' : '' }}>
                            {{ $group->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit"
                class="w-full py-2 px-4 rounded border-2 bg-green-500 text-white border-white hover:bg-green-600 duration-700 transition">
                Módosít
            </button>
        </form>
    </div>

@endsection
