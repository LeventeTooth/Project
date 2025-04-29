@extends('layouts.template')

@section('title', 'Esemenyek')

@section('content')

    <div class="flex flex-wrap justify-center pt-10">
        <div class="mt-10 p-10 max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm w-10/12">
            <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 text-center mb-10">Foglalás</h5>
            <form class="max-w-sm mx-auto" method="POST" action="{{ route('rents.store') }}">
                @csrf
                <!-- Hidden inputs -->
                <input type="hidden" name="car_id" value="{{ $car->id }}">
                <input type="hidden" name="event_id" value="{{ $event->id }}">
                <input type="hidden" name="user_id" value="{{ $event->id }}">
                <!-- Event name -->
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Event name</label>
                    <input type="text" id="eventName"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ $event->name }}" readonly />
                </div>
                <!-- Car -->
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Car</label>
                    <input type="text" id="car"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ $car->model }}" readonly />
                </div>
                <!-- Rent time -->
                <div class="mb-10">
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Válaszd ki az időpontot</label>
                        <select name="rent_time" id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Válassz időpontot</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="12:00">12:00</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>
                        </select>
                </div>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            </form>
        </div>
    </div>

@endsection