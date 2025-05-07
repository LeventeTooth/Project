@extends('layouts.template')

@section('title', 'Esemenyek')

@section('content')

    <div class="flex flex-wrap justify-center pt-10 mb-20">
        <div class="mt-10 p-10 max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm w-10/12">
            <h5 class="mb-5 text-4xl font-bold tracking-tight text-gray-900 text-center mb-10">Foglalás</h5>
            <form id="rent_form" class="max-w-sm mx-auto" method="POST" action="{{ route('rents.store') }}">
                @csrf
                <!-- Hidden inputs -->
                <input type="hidden" name="car_id" value="{{ $car->id }}">
                <input type="hidden" name="event_id" value="{{ $event->id }}">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <!-- Event name -->
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Esemény</label>
                    <input type="text" id="eventName"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ $event->name }}" readonly />
                </div>
                <!-- Car -->
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Választott autó</label>
                    <input type="text" id="car"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ $car->model }}" readonly />
                </div>
                <!-- Rent time -->
                <div class="mb-10">
                        <label for="rent_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Válaszd ki az időpontot</label>
                        <select name="rent_time" id="rent_time"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected value="Válassz időpontot">Válassz időpontot</option>
                            @foreach ($rent_times as $time)
                                @if ($car->IsRentTimeFree($event->id, $time))
                                    <option value="{{ $time }}">{{ $time }}</option>
                                @endif
                            @endforeach
                        </select>
                </div>
                <!-- Price calculate -->
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Fogalalás összege</label>
                    <h4 class="text-2xl mt-3 mb-10 ml-2">{{ $car->price + $event->track->price }} Ft</h4>
                </div>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-100 px-5 py-2.5 text-center">Foglalás</button>
            </form>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('rent_form');
        const select = document.getElementById('rent_time');

        form.addEventListener('submit', function (e) {
            if (select.value === "" || select.value === "Válassz időpontot") {
                e.preventDefault();
                select.classList.add('border-red-500');
                select.classList.remove('border-gray-300');
            }
        });

        select.addEventListener('change', function () {
            if (select.selectedIndex !== 0) {
                select.classList.remove('border-red-500');
                select.classList.add('border-gray-300');
            }
        });
    });
</script>

@endsection