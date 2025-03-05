@extends('template')

@section('title', 'WelcomePage')

@section('content')
    <style>
        .item {
            padding: 30px;
            text-align: center;
            color: white;
            background-color: rgba(0, 0, 0, 0.45);
        }

        #card {
            border: solid white 3px;
            border-radius: 20px;
            padding: 10px;
        }
    </style>
    <div class="item">
        <h3>Kovetkezo esemeny:</h3>
        <h1>Kralka Szezonindito: 04.20</h1>
    </div>

    <div class="item" style="margin-top: 300px; padding: 0px;">
        <a style="font-size: 100px;">Jegyek</a>
    </div>

    <div class="item" style="margin-top: 300px;">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10" id="card">
                <h1>A PÁLYÁRÓL:</h1>
                <br>
                <p style="font-size: large;">A BSSW pályát főként alacsony teljesítményű motorok, szupermotók és gokartok számára terveztek. A pálya
                    teljes hossza 1130 méter, és 12 kanyar található rajta, amelyek kihívást jelentenek minden szintű
                    versenyző számára. Egyedi kialakítása miatt hat különböző pályavariáció elérhető a jól megtervezett
                    átkötő szakaszoknak köszönhetően.


                    2024-ben a versenypálya új aszfaltburkolatot kapott, amely jelentősen javította a tapadást és a pálya
                    minőségét. FIM által jóváhagyott, Misano stílusú rázókövek és beton szélesítések is kialakításra
                    kerültek, amelyek biztonságos és élvezetes keretet adtak a pályának.


                    A BSSW pálya sokoldalúsága abban rejlik, hogy mindkét irányban használható, így még több lehetőséget
                    kínál a versenyzőknek és rendezvényszervezőknek egyaránt. A biztonság elsődleges szempont, a pálya
                    minimális szélessége 8 méter, amely bőséges helyet biztosít a manőverezéshez. A célegyenes 12 méter
                    széles, ami lehetővé teszi az előzéseket és a nagy sebességű akciókat.


                    A pálya világítással is fel van szerelve, ami alkalmassá teszi az éjszakai használatra, így akár
                    sötétedés utáni események (endurance versenyek) is tarthatók.


                    A fő versenypályán kívül a szomszédos területen egy külön cross pálya is található, amely további
                    változatosságot kínál a motorsport rajongóknak. Ez lehetővé teszi, hogy egy teljes napot töltsenek
                    versenyzéssel, kielégítve mind a gyorsasági, mind az off-road kedvelőit.


                    Bérelhető bokszokat kínálunk a vendégeink számára. A pálya reggel 9-től délután 5-ig tart nyitva, de
                    egyedi edzésidőpontok is igényelhetők előzetes egyeztetéssel. 30 gokart áll rendelkezésre, így kezdők és
                    tapasztalt vezetők számára egyaránt biztosított a gyakorlási lehetőség.


                    A pálya nyitvatartása alatt büfénk változatos ételkínálattal várja vendégeinket, beleértve a meleg
                    ételeket is, hogy mindenki kellően feltöltődhessen a nap folyamán. Emellett helyszíni gumiműhely is
                    működik, amely biztosítja a résztvevők járműveinek gyors és kényelmes gumicseréjét.


                    A helyszínen METZELER supermoto gumiabroncsok vásárolhatók, első és hátsó kerekekhez, minden keverékben,
                    versenyképes áron.


                    Teljesen versenykész transzponderes időmérő rendszerünk van, amely a pályát három szakaszra osztja, így
                    a részletes köridőmérés biztosított.. A transzponderek bérelhetők, ami kényelmes és költséghatékony
                    lehetőséget kínál a résztvevőknek teljesítményük nyomon követésére az edzések alatt.

                    A paddock elegendő számú elektromos csatlakozással rendelkezik a gumimelegítők számára, biztosítva, hogy
                    minden résztvevő hozzáférjen a szükséges energiaellátáshoz, hogy megfelelően felkészíthesse abroncsait a
                    versenyek előtt.


                    Több, zuhanyzóval ellátott mellékhelyiség áll rendelkezésre, hogy a pilóták felfrissülhessenek a nap
                    végén.


                    Néhány fedélzeti videó a pályáról:

                    https://youtu.be/x-h__W8Aiq4?feature=shared

                    https://youtu.be/N9kfzBwk2oE?si=C88u6N3g2EjjwlQC</p>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
@endsection