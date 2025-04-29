@extends('layouts.template')

@section('title', 'Csapatok')

@section('content')

    <div class="hidden md:block">
        <div class="flex justify-center mt-5">
            <a href="{{ route('groups.create') }}"
                class="w-[20%] py-2 px-4 rounded border-2 bg-blue-500 text-white border-white hover:bg-blue-600 duration-700 transition text-center block">
                Új Csapat
            </a>
        </div>
        <div class="flex justify-center mt-6">
            <ul class="bg-gray-50 divide-y divide-gray-200 border border-gray-300 rounded-md w-[40%] text-center">
                @foreach ($groups as $group)
                    <li class="px-4 py-2 hover:bg-gray-300 flex justify-between">
                        <p class="flex items-center justify-center">{{ $group->title }}</p>
                        @auth
                            @if(auth()->user()->group_id === $group->id && $group->title !== 'Nincs')
                                <form action="{{ route('groups.destroy', $group->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded-md">
                                        Törlés
                                    </button>
                                </form>
                            @endif
                        @endauth
                    </li>
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
        <div class="flex justify-center mt-6">
            <ul class="bg-gray-50 divide-y divide-gray-200 border border-gray-300 rounded-md w-[60%] text-center">
                @foreach ($groups as $group)
                    <li class="px-4 py-2 hover:bg-gray-300 flex justify-between items-center">
                        <p>{{ $group->title }}</p>
                        @auth
                            @if(auth()->user()->group_id === $group->id && $group->title !== 'Nincs')
                                <form action="{{ route('groups.destroy', $group->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded-md">
                                        Törlés
                                    </button>
                                </form>
                            @endif
                        @endauth
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
