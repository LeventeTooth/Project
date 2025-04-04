<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/m.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body>
    <div class="navbar" style="background-image: url({{ asset('images/backgroundImage.png') }});">
        <div class="w-full h-full overflow-y-auto">
            <div class="p-5 bg-black/45">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-1"></div>
                    <div class="col-span-6">
                        <img src="{{ asset('images/kralka.png') }}" alt="Logo" class="h-36 w-full object-contain">
                    </div>
                    <div class="col-span-4 text-white" id="followUs">
                        <h1 class="text-xl">Kövess minket itt is</h1>
                        <div class="flex space-x-4">
                            <img src="{{ asset('images/insta.png') }}" alt="Instagram" class="h-12 w-12">
                            <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="h-12 w-12">
                        </div>
                    </div>
                    <div class="col-span-1"></div>
                </div>
                <div class="text-center mt-4">
                    <div class="hidden md:block">
                        <div class="flex justify-center space-x-6">
                            <a href="{{route("welcome")}}" class="text-white text-xl px-4">Főoldal</a>
                            <div class="hidden md:block border-l border-white h-8"></div>
                            <a href="#" class="text-white text-xl px-4">Beruházók</a>
                            <div class="hidden md:block border-l border-white h-8"></div>
                            <a href="#" class="text-white text-xl px-4">Pálya</a>
                            <div class="hidden md:block border-l border-white h-8"></div>
                            <a href="#" class="text-white text-xl px-4">Események</a>
                            <div class="hidden md:block border-l border-white h-8"></div>
                            <a href="#" class="text-white text-xl px-4">Naptár</a>
                            <div class="hidden md:block border-l border-white h-8"></div>
                            <a href="#" class="text-white text-xl px-4">Árak</a>
                            <div class="hidden md:block border-l border-white h-8"></div>
                            <a href="#" class="text-white text-xl px-4">Képek</a>
                        </div>
                    </div>
                    <div class="md:hidden">
                        <button id="menu-button" class="text-white text-3xl">☰</button>
                        <div id="mobile-menu" class="hidden">
                            <div class="space-y-4 mt-4">
                                <a href="#" class="text-white text-lg block">Főoldal</a>
                                <a href="#" class="text-white text-lg block">Beruházók</a>
                                <a href="#" class="text-white text-lg block">Pálya</a>
                                <a href="#" class="text-white text-lg block">Események</a>
                                <a href="#" class="text-white text-lg block">Naptár</a>
                                <a href="#" class="text-white text-lg block">Árak</a>
                                <a href="#" class="text-white text-lg block">Képek</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>

    <script>
        // Hamburger Menu Toggle
        const menuButton = document.getElementById('menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
