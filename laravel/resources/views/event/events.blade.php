@extends('layouts.template')

@section('title', 'Események')

@section('content')

    <div class="flex flex-wrap justify-center mt-20 pt-10">
        @foreach ($events as $event)
            <div class="p-5 mx-6 max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm mt-8">
                <a href="#">
                    <img class="rounded-lg object-cover h-[230px] w-[400px]" src="{{ $event->img }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $event->name }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $event->date }}</p>
                    <a href="{{ route('events.show', $event->id) }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Megnézem
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
