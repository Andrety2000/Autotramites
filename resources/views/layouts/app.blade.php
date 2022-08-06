<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> {{ config('app.name', 'Autotramites') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-100">
            @include('layouts.partials.navigation-menu')

            <!-- Page Heading -->

            <!-- Page Content -->
            @section('content')


            @endsection

            <main>
                {{ $slot }}
            </main>


        </div>

        @stack('modals')

        @livewireScripts

        @include('layouts.partials.footer')
    </body>
</html>
