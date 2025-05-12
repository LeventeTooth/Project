@extends('layouts.template')

@section('title', 'Főoldal')

@section('content')

    <div class="item">
        <h3 class="text-3xl">Következő esemény:</h3>
        <h1 class="text-5xl mb-10">Králka Summer Festival: 06.21</h1>
        <a href="{{ route('events.show', 1) }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-white rounded-lg hover:bg-black hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Megnézem
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
    </div>

    <div class="item">
        <a class="text-5xl mb-10">Már 4 autó közül válaszhatsz!</a><br>
        <a href="{{ route('cars.index') }}"
                        class="mt-10 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-white rounded-lg hover:bg-black hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Megnézem
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
    </div>

    <div class="item">
        <a class="text-5xl mb-10">Mostantól 3 pályán is rendezünk eseményeket!</a><br>
        <a href="{{ route('tracks.index') }}"
                        class="mt-10 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-white rounded-lg hover:bg-black hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Megnézem
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
    </div>

    <div class="item">
        <a class="text-5xl mb-10">Tekints meg galériánkat!</a><br>
        <a href="/pictures"
                        class="mt-10 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-white rounded-lg hover:bg-black hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Galéria
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
    </div>

    <div class="hidden md:block">
        <div class="item">
            <div class="card">
                <div class="p-20 pt-10 pb-10">
                    <h1 class="text-3xl">A KRÁLKA GARAGERŐL:</h1>
                    <br>
                    <p style="font-size: large;">
                    A Králkai Drift Pálya egy sokoldalúan kialakított drift- és szórakoztató motorsport-komplexum, amely ideális választás mind a kezdő, mind a tapasztalt pilóták számára. A pálya vonalvezetése különféle kihívásokat rejt: technikás kanyarok, lendületes ívek és széles manőverezési lehetőségek biztosítják az élményt.

A pályán több, hivatalosan kijelölt drift szakasz található, ahol legálisan és biztonságosan lehet gyakorolni a különböző drift technikákat. Ezek a részek kifejezetten úgy kerültek kialakításra, hogy lehetőséget adjanak mind a tanulásra, mind a látványos autókezelés bemutatására.

A biztonság érdekében bizonyos szakaszokon driftelni tilos. Ezeket kizárólag közlekedési célokra lehet használni, például visszafordulásra vagy áthaladásra. A szabályok betartása elengedhetetlen a zavartalan működés és a balesetek elkerülése érdekében.

A pályához egy külön off-road szakasz is tartozik, amely természetes, földes terepen vezet keresztül. Ez a rész ideális azoknak, akik a csúszós, változatos felületű környezetet kedvelik, és szeretnék fejleszteni járműkezelési tudásukat terepen is.

A helyszínhez rendezvényszervezők és látogatók számára kialakított külön területek és kényelmes parkolási lehetőségek is tartoznak. A Králkai pálya célja, hogy egy barátságos, élményközpontú környezetet biztosítson minden motorsport iránt érdeklődő számára – akár edzésről, akár találkozóról vagy versenyről van szó.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- tablet, telefon navbar -->
    <div class="md:hidden">
        <div class="item">
            <h1 class="text-3xl">A PÁLYÁRÓL:</h1>
            <br>
            <p style="font-size: small;">
            A Králkai Drift Pálya egy sokoldalúan kialakított drift- és szórakoztató motorsport-komplexum, amely ideális választás mind a kezdő, mind a tapasztalt pilóták számára. A pálya vonalvezetése különféle kihívásokat rejt: technikás kanyarok, lendületes ívek és széles manőverezési lehetőségek biztosítják az élményt.

A pályán több, hivatalosan kijelölt drift szakasz található, ahol legálisan és biztonságosan lehet gyakorolni a különböző drift technikákat. Ezek a részek kifejezetten úgy kerültek kialakításra, hogy lehetőséget adjanak mind a tanulásra, mind a látványos autókezelés bemutatására.

A biztonság érdekében bizonyos szakaszokon driftelni tilos. Ezeket kizárólag közlekedési célokra lehet használni, például visszafordulásra vagy áthaladásra. A szabályok betartása elengedhetetlen a zavartalan működés és a balesetek elkerülése érdekében.

A pályához egy külön off-road szakasz is tartozik, amely természetes, földes terepen vezet keresztül. Ez a rész ideális azoknak, akik a csúszós, változatos felületű környezetet kedvelik, és szeretnék fejleszteni járműkezelési tudásukat terepen is.

A helyszínhez rendezvényszervezők és látogatók számára kialakított külön területek és kényelmes parkolási lehetőségek is tartoznak. A Králkai pálya célja, hogy egy barátságos, élményközpontú környezetet biztosítson minden motorsport iránt érdeklődő számára – akár edzésről, akár találkozóról vagy versenyről van szó.
            </p>
        </div>
    </div>
@endsection
