<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('page_title')
        </title>

        {{-- assets from directive @vite  --}}
        @vite('resources/js/app.js')
    </head>
    
    <body class="bg-dark text-white">
        @include('partials.header')

        @yield('main_section')

        @include('partials.footer')
    </body>
</html>