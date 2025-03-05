<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="icon" href="{{ asset('images/m.png') }}" type="image/x-icon">
    <title>@yield('title')</title>
    <style>
        #header{
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.45);
            margin-bottom: 400px;
        }
        #navbar {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: fit-content;
        }

        #rollinContent {
            width: 100%;
            height: 100%;
            overflow-y: auto;
        }

        #fixedImg {
            background-image: url({{ asset('images/backgroundImage.png') }});
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #vonal {
            border: solid white 1px;
            width: 0;
            height: 100%;
        }

        a#vonal {
            color: white;
            font-size: 30px;
            text-decoration: none;
            margin: auto;
        }
        #navbar a{
            color: white;
            font-size: 30px;
            margin: 10px;
        }
        .col-6 img{
            height: 150px;
            width: 500px;
        }
        #followUs{
            color: white;
        }
        #followUs img{
            height: 50px;
            width: 50px;
        }
    </style>
</head>

<body>
    <div id="fixedImg">
        <div id="rollinContent">
            <div id="header">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-6">
                        <img src="{{ asset('images/kralka.png') }}" alt="">
                    </div>
                    <div class="col-4" id="followUs">
                        <h1>Kovess minket itt is</h1>
                        <img src="{{ asset('images/insta.png') }}" alt="">
                        <img src="{{ asset('images/facebook.png') }}" alt="">

                    </div>
                    <div class="col-1"></div>
                </div>
                <div id="navbar">
                    <a>Fooldal</a> <a id="vonal"></a>
                    <a>Berautok</a> <a id="vonal"></a>
                    <a>Palya</a> <a id="vonal"></a>
                    <a>Esemenyek</a> <a id="vonal"></a>
                    <a>Naptar</a> <a id="vonal"></a>
                    <a>Arak</a> <a id="vonal"></a>
                    <a>Kepek</a>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</body>

</html>