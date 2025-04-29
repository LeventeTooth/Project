@extends('layouts.template')

@section('title', 'Pályák')

@section('content')

    <div class="show-event-item">
        <h1 class="text-5xl mt-10">Pályáink</h1>
        <div class="mt-5 pt-5 flex flex-wrap justify-center ">
            @foreach ($tracks as $track)
                <div class="mx-6 mt-6 p-5 max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
                <div class="w-full aspect-video overflow-hidden rounded-lg bg-gray-200">
                        <img class="rounded-lg h-full object-cover w-[400px]" src="{{ asset($track->img) }}" alt="" />
                    </div>
                    <div class="p-5">
                        <p class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $track->name }}</p>
                        <p class="mb-3 font-normal text-gray-700 ">{{ $track->location }}</p>
                        <p class="mt-5 mb-6 text-xl font-bold tracking-tight text-gray-900 ">{{ $track->price }}Ft</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
