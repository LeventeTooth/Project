@extends('layouts.template')

@section('title', 'Profilom')

@section('content')
    <div class="max-w-lg mx-auto">
        <div class="bg-white shadow-md rounded-lg overflow-hidden mt-8">
            <table class="w-full">
                <tr class="border-b">
                    <td class="px-4 py-2 font-semibold text-gray-700">ID</td>
                    <td class="px-4 py-2">{{ $user->id }}</td>
                </tr>
                <tr class="border-b">
                    <td class="px-4 py-2 font-semibold text-gray-700">Név</td>
                    <td class="px-4 py-2">{{ $user->name }}</td>
                </tr>
                <tr class="border-b">
                    <td class="px-4 py-2 font-semibold text-gray-700">Felhasználónév</td>
                    <td class="px-4 py-2">{{ $user->username }}</td>
                </tr>
                <tr class="border-b">
                    <td class="px-4 py-2 font-semibold text-gray-700">Email</td>
                    <td class="px-4 py-2">{{ $user->email }}</td>
                </tr>

                <tr class="border-b">
                    <td class="px-4 py-2 font-semibold text-gray-700">Cím</td>
                    <td class="px-4 py-2">{{ $user->address }}</td>
                </tr>
                <tr class="border-b">
                    <td class="px-4 py-2 font-semibold text-gray-700">Születési dátum</td>
                    <td class="px-4 py-2">{{ \Carbon\Carbon::parse($user->birth_date)->format('Y-m-d') }}</td>
                </tr>
                <tr class="border-b">
                    <td class="px-4 py-2 font-semibold text-gray-700">Kor</td>
                    <td class="px-4 py-2">{{ \Carbon\Carbon::parse($user->birth_date)->age }}</td>
                </tr>
                <tr class="border-b">
                    <td class="px-4 py-2 font-semibold text-gray-700">Csapat</td>
                    <td class="px-4 py-2">{{ $user->group->title }}</td>
                </tr>
                <tr class="border-b">
                    <td class="px-4 py-2 font-semibold text-gray-700">Regisztráció dátuma</td>
                    <td class="px-4 py-2">{{ $user->created_at->format('Y-m-d') }}</td>
                </tr>
            </table>
            </form>
        </div>
        <div class="flex justify space-x-4 mt-3">
            <a href="{{ route('auth.edit', ['auth' => $user->id]) }}"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Adat módosítás
            </a>
            <form method="POST" action="{{ route('auth.logout') }}" class="inline">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                    Kijelentkezés
                </button>
            </form>

        </div>
    </div>

@endsection