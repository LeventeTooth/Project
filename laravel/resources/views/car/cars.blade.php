@extends('layouts.template')

@section('title', 'Autok')

@section('content')


    <div class="show-event-item">
        <h1 class="text-5xl mt-10">Autoink</h1>
        <div class="mt-5 pt-5 flex flex-wrap justify-center">
            @foreach ($cars as $car)
                <div class="mt-8 p-5 max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
                    <img style="width: 100%;" class="rounded-lg" src="{{ asset($car->img) }}" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $car->model }}</h5>
                        <p class="mb-3 font-normal text-gray-700 ">{{ $car->power }}</p>
                        <h3 class="mt-5 mb-6 text-xl font-bold tracking-tight text-gray-900 ">{{ $car->price }}Ft</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection