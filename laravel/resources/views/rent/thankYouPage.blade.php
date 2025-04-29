@extends('layouts.template')

@section('title', 'Esemenyek')

@section('content')

    <div class="show-event-item">
        <h1 class="text-5xl mt-10">Köszönjük foglalásod!</h1>
        <h1 class="text-4xl mt-10">A pályán találkozunk!</h1>
    </div>
    <div class="show-event-item ">
        <h1 class="text-3xl mt-10">Összefoglaló a foglalásodról</h1>
        <div class="flex flex-wrap justify-center mt-10">


            <div class="w-3/12 relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <tbody>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Esemény
                            </th>
                            <td class="px-6 py-4 text-right text-gray-900">
                                {{ $event->name }}
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Dátum
                            </th>
                            <td class="px-6 py-4 text-right text-gray-900">
                                {{ $event->date }}
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Időpont
                            </th>
                            <td class="px-6 py-4 text-right text-gray-900">
                                {{ $rent_time }}
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Választott autó
                            </th>
                            <td class="px-6 py-4 text-right text-gray-900">
                                {{ $car->model }}
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Foglalás összege
                            </th>
                            <td class="px-6 py-4 text-right text-gray-900">
                                {{ $car->price + $event->track->price }} Ft
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </div>

@endsection