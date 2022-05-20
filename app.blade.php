<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            @if (View::hasSection('header'))
            <header class="bg-white primary">
                <div class="px-4 py-4 mx-auto text-lg font-semibold text-gray-900 max-w-7xl sm:px-6">
                    @yield('header')
                </div>
            </header>
            @endif

            <main class="w-full px-4 pt-10 mx-auto max-w-7xl sm:px-6">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
