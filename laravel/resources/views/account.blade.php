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
                    <td class="px-4 py-2 font-semibold text-gray-700">Jelszó</td>
                    <td class="px-4 py-2" id="password">******</td>
                    <td>
                        <button type="button" id="showPassword">

                            <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-6 h-6 text-gray-500 hover:text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12c0 2.28-1.72 4-4 4s-4-1.72-4-4 1.72-4 4-4 4 1.72 4 4zm4.5 0c0-1.49-1.12-3.1-2.9-4.34C15.39 5.81 12.85 4 10 4c-2.85 0-5.39 1.81-6.6 3.66C5.62 8.9 4.5 10.51 4.5 12s1.12 3.1 2.9 4.34C8.61 18.19 11.15 20 14 20c2.85 0 5.39-1.81 6.6-3.66C18.38 15.1 19.5 13.49 19.5 12z" />
                            </svg>
                        </button>
                    </td>

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
                    <td class="px-4 py-2 font-semibold text-gray-700">Csoport ID</td>
                    <td class="px-4 py-2">{{ $user->group_id }}</td>
                </tr>
                <tr class="border-b">
                    <td class="px-4 py-2 font-semibold text-gray-700">Regisztráció dátuma</td>
                    <td class="px-4 py-2">{{ $user->created_at->format('Y-m-d') }}</td>
                </tr>
            </table>
            </form>
        </div>
        <form action="{{ route('auth.logout') }}" method="POST" class="mt-4">
            @csrf
            <button type="submit"
                class="bg-red-500 text-white px-6 py-2 rounded-md hover:bg-red-700 transition duration-300">
                Kijelentkezés
            </button>
        </form>
    </div>



@endsection