@extends('layouts.template')

@section('title', 'CsapatLétrehozás')

@section('content')

    <div class="flex items-center justify-center min-h-[calc(100vh-260px)] bg-cover bg-center">
        <form class="bg-stone-300 p-8 rounded-lg shadow-lg space-y-6" method="POST" action="{{ route('groups.store') }}">
            @csrf
            <h2 class="text-2xl font-bold text-center text-stone-700">Csapat létrehozás</h2>

            <div>
                <input type="text" id="title" name="title" placeholder="Csapat neve"
                    class="w-full mt-1 p-2 rounded border border-stone-700 bg-stone-300 focus:outline-none focus:ring-2 focus:ring-green-500 placeholder-gray-500" />
            </div>

            <button type="submit"
                class="w-full py-2 px-4 rounded border-2 bg-green-500 text-white border-white hover:bg-green-600 transition duration-700">
                Létrehozás
            </button>
        </form>
    </div>

@endsection
