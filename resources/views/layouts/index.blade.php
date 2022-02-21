<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BuxGame - Earn FREE ROBUX Online</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Earn Free ROBUX by completing surveys & watching videos!">
        <meta name="keywords" content="roblox, robux, robux rewards, bloxearn, free robux, earn robux, robux website">
        <meta name="theme-color" content="#272e39">
        <meta name="application-name" content="BuxGame - Earn FREE ROBUX Online">
        <meta property="og:title" content="BuxGame - Earn FREE ROBUX Online">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="BuxGame">
        <meta property="og:description" content="Earn Free ROBUX by completing surveys & watching videos!">
        <meta property="og:locale" content="en">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="d-flex flex-column min-vh-100 body-pv-dark">
        <header>
            @include('guest.header')
        </header>

        <main role="main" class="flex-shrink-0">
            <div class="container-fluid mb-2 p-0">

                @yield("content")
            </div>
        </main>

        <footer class="mt-auto bg-pv-dark">
            @include('layouts.footer')
        </footer>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
    </body>
</html>
