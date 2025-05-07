@extends('layouts.template')

@section('title', 'Események')

@section('content')

    <div class="bg-black/60 show-event-item flex flex-wrap justify-center ">
        <table>
            <tr>
                <td class="">
                    <img class="rounded-lg h-[330px] object-cover w-[600px]" src="{{ asset($event->img) }}" alt="" />
                </td>
                <td class="w-[50px]"></td>
                <td class="">
                    <h3 class="text-2xl">{{ $event->date }}</h3>
                    <h1 class="text-5xl">{{ $event->name }}</h1>
                    <h4 class="mt-8">Napijegy: {{ $event->track->price }} Ft</h4>
                    <h4 class="mt-3">Pálya: {{ $event->track->name }}</h4>
                    <h4 class="mt-3">Helyszín: {{ $event->track->location }}</h4>
                </td>
            </tr>
        </table>

    </div>

    <div class="show-event-item text-center bg-black/45">
        <h1 class="text-5xl mt-10">Válassz autót a foglaláshoz!</h1>
        <div class="mt-5 pt-5 flex flex-wrap justify-center">
            @foreach ($cars as $car)

                <div class="mt-8 mx-6 p-5 max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
                    <div class="w-full aspect-video overflow-hidden rounded-lg bg-gray-200">
                        <img class="rounded-lg h-full object-cover w-[400px]" src="{{ asset($car->img) }}" alt="" />
                    </div>
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $car->model }}</h5>
                        <p class="mb-3 font-normal text-gray-700 ">{{ $car->power }}</p>
                        <h3 class="mt-5 mb-6 text-xl font-bold tracking-tight text-gray-900 ">{{ $car->price }} Ft</h3>
                        @if ($car->HasAvailableTimeForRent($event->id))

                            @guest
                                <a href="{{ route('auth.index') }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Jelentkezz be a foglaláshoz
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            @endguest
                            @auth
                                <a href="{{ route('rents.createRent', [$event, $car]) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Foglalás
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            @endauth

                        @else

                            <div
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white text-gray-800 bg-gray-300 rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Minden időpont foglalt
                            </div>

                        @endif
                    </div>
                </div>

            @endforeach
        </div>
    </div>

@endsection