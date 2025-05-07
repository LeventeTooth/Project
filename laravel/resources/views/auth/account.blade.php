@extends('layouts.template')

@section('title', 'Profilom')

@section('content')
    <div class="max-w-[600px] mx-auto">
        <div class="bg-white shadow-md rounded-lg overflow-hidden mt-8 max-w-[500px] mx-auto">
            <h1 class="text-2xl px-5 py-5 text-center font-semibold">Profiladatok</h1>
            <table class="w-full border-t">
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
                    <td class="px-4 py-2 font-semibold text-gray-700">E-mail</td>
                    <td class="px-4 py-2">{{ $user->email }}</td>
                </tr>

                <tr class="border-b">
                    <td class="px-4 py-2 font-semibold text-gray-700">Cím</td>
                    <td class="px-4 py-2">{{ $user->address }}</td>
                </tr>
                <tr class="border-b">
                    <td class="px-4 py-2 font-semibold text-gray-700">Születési dátum</td>
                    <td class="px-4 py-2">{{$user->birth_date }}</td>
                </tr>
                <tr class="border-b">
                    <td class="px-4 py-2 font-semibold text-gray-700">Kor</td>
                    <td class="px-4 py-2">{{$user->age }}</td>
                </tr>
                <tr class="border-b">
                    <td class="px-4 py-2 font-semibold text-gray-700">Csapat</td>
                    <td class="px-4 py-2">{{ $user->group->title ?? 'Még nincs csapatom'}}</td>
                </tr>
                <tr class="border-b">
                    <td class="px-4 py-2 font-semibold text-gray-700">Regisztráció dátuma</td>
                    <td class="px-4 py-2">{{ $user->created_at->format('Y-m-d') }}</td>
                </tr>
            </table>
        </div>
        <div class="flex justify-between  space-x-4 mt-3 max-w-[500px] mx-auto">
            <a href="{{ route('auth.edit', $user->id) }}"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md">
                Adatmódosítás
            </a>
            <form method="POST" action="{{ route('auth.logout') }}" class="inline">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md">
                    Kijelentkezés
                </button>
            </form>
            <form action="{{ route('auth.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md">
                    Fiók törlés
                </button>
            </form>
        </div>
        @if ($user->HasReservation())
            <div class="bg-white shadow-md rounded-lg overflow-hidden my-10">
                <h1 class="text-2xl px-5 py-5 text-center font-semibold">Foglalások</h1>
                <table class="w-full p-5 border-t">
                    <tr class="border-b text-left">
                        <th class="px-4 py-2">Esemény</th>
                        <th class="px-4 py-2">Választott autó</th>
                        <th class="px-4 py-2">Ár</th>
                        <th class="px-4 py-2">Időpont</th>
                    </tr>
                    @foreach ($rents as $rent)
                        <tr class="border-b">
                            <td class="px-4 py-2 hover:text-blue-600"><a href="{{ route('events.show', $rent->event->id) }}">{{ $rent->event->name }}</a></td>
                            <td class="px-4 py-2">{{ $rent->car->model }}</td>
                            <td class="px-4 py-2">{{ $rent->car->price + $rent->event->track->price }} Ft</td>
                            <td class="px-4 py-2">{{ $rent->rent_time }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        @endif
    </div>

@endsection