@extends('layouts.template')

@section('title', 'Esemenyek')

@section('content')

    <div class="show-event-item">
        <h3 class="text-3xl">{{ $event->date }}</h3>
        <h1 class="text-5xl">{{ $event->name }}</h1>
        <h4 class="mt-8">Napijegy: {{ $event->track->price }} Ft</h4>
        <h4 class="mt-3">Pálya: {{ $event->track->name }}</h4>
        <h4 class="mt-3">Helyszín: {{ $event->track->location }}</h4>
    </div>

    <div class="show-event-item">
        <h1 class="text-5xl mt-10">Válassz autót a foglaláshoz!</h1>
        <div class="mt-5 pt-5 flex flex-wrap justify-center">
            @foreach ($cars as $car)
                <div
                    class="mt-8 p-5 max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
                    <img style="width: 100%;" class="rounded-lg" src="{{ asset( $car->img) }}" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $car->model }}</h5>
                        <p class="mb-3 font-normal text-gray-700 ">{{ $car->power }}</p>
                        <h3 class="mt-5 mb-6 text-xl font-bold tracking-tight text-gray-900 ">{{ $car->price }}
                            Ft</h3>
                        @guest
                            <a href="{{ route('auth.index') }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
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
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                Foglalás
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection