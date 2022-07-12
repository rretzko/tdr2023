<!DOCTYPE html>
<html class="h-full bg-gray-100 md:bg-gray-400" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>

</head>
<body class="font-sans antialiased h-full px-2 py-2">

    <main class="flex flex-col sm:flex-row z-0 bg-gray-200 max-w-7xl mx-auto rounded-lg pr-4" > <!-- max-w-6xl = 1152px -->

            <x-menus.sidebar />
            <x-menus.hamburger />

        <div id="page-content" class="absolute top-0  sm:relative w-11/12 md-w-full ">

            <div class="pl-6 mt-12 sm:mt-8">

                <x-menus.user />

                @yield('content')

            </div>

        </div>

    </main>

    @livewireScripts

</body>
</html>
