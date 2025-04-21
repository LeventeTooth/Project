@extends('layouts.template')

@section('title', 'Fooldal')

@section('content')

    <div class="item">
        <h3 class="text-3xl">Kovetkezo esemeny:</h3>
        <h1 class="text-5xl">Kralka Szezonindito: 04.05</h1>
    </div>

    <div class="item">
        <a class="text-5xl">Jegyek: 6000Ft/auto</a>
    </div>

    <div class="hidden md:block">
        <div class="item">
            <div class="card">
                <div class="p-20 pt-10 pb-10">
                    <h1 class="text-3xl">A PÁLYÁRÓL:</h1>
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
            <p style="font-size: samll;">
            A Králkai Drift Pálya egy sokoldalúan kialakított drift- és szórakoztató motorsport-komplexum, amely ideális választás mind a kezdő, mind a tapasztalt pilóták számára. A pálya vonalvezetése különféle kihívásokat rejt: technikás kanyarok, lendületes ívek és széles manőverezési lehetőségek biztosítják az élményt.

A pályán több, hivatalosan kijelölt drift szakasz található, ahol legálisan és biztonságosan lehet gyakorolni a különböző drift technikákat. Ezek a részek kifejezetten úgy kerültek kialakításra, hogy lehetőséget adjanak mind a tanulásra, mind a látványos autókezelés bemutatására.

A biztonság érdekében bizonyos szakaszokon driftelni tilos. Ezeket kizárólag közlekedési célokra lehet használni, például visszafordulásra vagy áthaladásra. A szabályok betartása elengedhetetlen a zavartalan működés és a balesetek elkerülése érdekében.

A pályához egy külön off-road szakasz is tartozik, amely természetes, földes terepen vezet keresztül. Ez a rész ideális azoknak, akik a csúszós, változatos felületű környezetet kedvelik, és szeretnék fejleszteni járműkezelési tudásukat terepen is.

A helyszínhez rendezvényszervezők és látogatók számára kialakított külön területek és kényelmes parkolási lehetőségek is tartoznak. A Králkai pálya célja, hogy egy barátságos, élményközpontú környezetet biztosítson minden motorsport iránt érdeklődő számára – akár edzésről, akár találkozóról vagy versenyről van szó.
            </p>
        </div>
    </div>
@endsection