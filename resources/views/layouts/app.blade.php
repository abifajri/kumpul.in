<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Archivo', sans-serif;
        }

        .sidenav {
        height: 100%;
        width: 250px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #F6FAFF;
        overflow-x: hidden;
        padding-top: 20px;
        padding-left: 40px;
        border-right: 1.5px solid green;
        }

        .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 22px;
        color: #385A82;
        display: block;
        }

        .sidenav a:hover {
        color: #008B75;
        }

        .main {
        margin-left: 160px; /* Same as the width of the sidenav */
        padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
        }
    </style>
</head>
<body>
    <div id="app">
        
        <div class="sidenav">
            <a href="#about">Kumpul.in</a>
            <br>
            <a href="#services">> Timeline</a>
            <a href="#contact">> Profile</a>
            <a href="#clients">> Lobby</a>
            <a href="#contact">> Room</a>
            <a href="#contact">> Chat</a>
            <a href="#contact">> Group</a>
        </div>

        <main class="py-4 main">
            @yield('content')
        </main>
    </div>
</body>
</html>
