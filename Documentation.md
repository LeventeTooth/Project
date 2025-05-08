
# Tóth Levente Bálint, Pácz Barnabás, Prukner András

## Projekt:

A projektünk egy autóbérlési és versenypálya-kezelési rendszer, amelynek célja, hogy felhasználóbarát weboldalt és asztali alkalmazást biztosítson a felhasználók számára. A projekt két fő komponensből áll:

Laravel Weboldal: Az online felhasználók számára lehetővé teszi a pályák és autók foglalását.
MAUI Asztali Alkalmazás: Adminisztációs felületett biztosít az autók, pályák, események kezelésére
Mindkét rendszer egy közös REST API-t használ, amely az adatokat egy központi adatbázisból szolgáltatja.

## Használt rendszerek

### Laravel:

#### Funkciók:

* Felhasználói regisztráció és bejelentkezés
* Versenypálya foglalás
* Autók bérlése
* Webes felület az autók és pálya kezelésére

### MAUI Asztali Alkalmazás:

#### Funkciók:

* Az API-n keresztül:
* Versenypályák felvétele, modósítása, törlése
* Autók felvétele, modósítása, törlése
* Események felvétele, modósítása, törlése

## REST API:

## Laravel alapú API

### Fő Funkciók:

* Adatok elérhetővé tétele az adatbázisból
* Hitelesítés és jogosultságkezelés
* Foglalások kezelése
* Adatok szűrése és keresése
* Adatbázis struktúra:
* Felhasználók (regisztrált ügyfelek és adminok)
* Autók (elérhető bérleti járművek)
* Versenypályák (foglalható helyszínek)
* Foglalások (felhasználói és adminisztratív tranzakciók)
* Jövőbeli Bővítési Lehetőségek:
* Mobilalkalmazás fejlesztése Androidra és iOS-re
* Támogatás többnyelvű kezelőfelülethez

#### Githgub Letrehozasa

* Github link: https://github.com/LeventeTooth/Project.git



#### Az adatbázis megtervezése:
----

Az adatbázis tervezéséhez a `drawsql.app` nevű oldalt használtuk. Tervezéskor figyelembe vettünk rengeteg szmepontot, hogy milyen adatokra lesz szükségünk az ötleteink megvalósításához, mikre lehet szükség.

#### C# MAUI alkalmazás:

Az asztali (windows) felhasználásra tervezett programot a Mincrosoft .NET keretrendszerében; .NET MAUI- ban készítettük el. A MAUI lehetőséget biztosít, hogy letisztultan, átláthatóan tudnjunk MVVM `(Model View ViewModel)`struktúrával dolgozni.
* A `Model` az adatok szerkezerte 
* A `View` a felhasználó által látható kezelőfelület
* A `ViewModel` az pedig az az egység ami az elöző két részt összeköti

A három rész eggyüt alkott egy egész programot. 
Töreketünk a különálló részek szeparálására.
