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


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<body class="bg-gray-900">

    <header>
        @include('navigation')

        <h1 class="max-w-sm mx-auto">
            <a class="flex justify-center p-4 mt-2  text-8xl text-gray-600 font-bold hover:text-gray-800" href="/">(@_@)</a>
        </h1>

    </header>


    @guest
       {{-- <h1 class="text-lg text-yellow-200 font-bold text-center">Neprihlaseny</h1> --}}
    @endguest

    @auth
        {{-- <h1 class="text-lg text-yellow-200 font-bold text-center">You are LOGGED IN!</h1> --}}
        {{-- <h2 class="text-lg text-yellow-200 font-bold text-center">{{ auth()->user()->name }}</h2> --}}
    @endauth


    <div id="app">
        <main>
             @yield('content')
        </main>
    </div>


    <footer>
        @include('footer')
    </footer>
    
</body>
</html>
