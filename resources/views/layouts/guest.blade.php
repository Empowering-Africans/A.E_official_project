<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ 'A.E_Project' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/public/style.css">

        
        <script src="{{ asset('/index.js') }}"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div
         style="background: url('img/farmland-background.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;  
        height: 100%;
        width: 100%;
        " >
        
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div><br>

            <b> <h1 style="font-size: 30px;"> Welcome to A.E Project</h1> </b>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4  shadow-md bg-white-900 overflow-hidden text-black-500 sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    
        </div>
    </body>
</html>
