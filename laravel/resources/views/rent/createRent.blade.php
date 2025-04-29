@extends('layouts.template')

@section('title', 'Esemenyek')

@section('content')

    <div class="flex flex-wrap justify-center pt-10">
        <div class="mt-10 p-10 max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm w-10/12">
            <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 text-center mb-10">Foglalás</h5>
            <form class="max-w-sm mx-auto">
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Event name</label>
                    <input type="text" id="eventName"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ $event->name }}" readonly />
                </div>
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Car</label>
                    <input type="text" id="car"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ $car->model }}" readonly />
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                        email</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="name@flowbite.com" required />
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your
                        password</label>
                    <input type="password" id="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        required />
                </div>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            </form>
        </div>
    </div>

@endsection