<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet"> 

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>
    </head>

    <body>
        <div id="root">
            <navbar></navbar>

          
            @yield('content')

        </div>

    </body>

    <script src="{{ asset('js/app.js') }}"></script>
</html>