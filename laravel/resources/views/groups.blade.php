@extends('layouts.template')

@section('title', 'Csapatok')

@section('content')

    <div class="hidden md:block">
        <div class="flex justify-center mt-5">

            <a href="{{ route('groups.create') }}"
                class="w-[35%] py-2 px-4 rounded border-2 bg-blue-500 text-white border-white hover:bg-blue-600 duration-700 transition text-center block">
                Új Csapat
            </a>


        </div>
        <div class=" flex justify-center mt-6">

            <ul class="bg-gray-50 divide-y divide-gray-200 border border-gray-300 rounded-md w-[20%] text-center">
                @foreach ($groups as $group)
                    <li class="px-4 py-2 hover:bg-gray-300">{{ $group->title }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="md:hidden">
        <div class="flex justify-center mt-5">

            <a href="{{ route('groups.create') }}"
                class="w-[70%] py-2 px-4 rounded border-2 bg-blue-500 text-white border-white hover:bg-blue-600 duration-700 transition text-center block">
                Új Csapat
            </a>


        </div>
        <div class=" flex justify-center mt-6">

            <ul class="bg-gray-50 divide-y divide-gray-200 border border-gray-300 rounded-md w-[60%] text-center">
                @foreach ($groups as $group)
                    <li class="px-4 py-2 hover:bg-gray-300">{{ $group->title }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    </div>
@endsection