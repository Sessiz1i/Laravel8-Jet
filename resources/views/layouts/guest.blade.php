<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <style>
        a {
            color: inherit;
            text-decoration: none;
            /*         text-decoration: none;
                     background-color: transparent;*/
        }

        a:hover {
            color: inherit;
            text-decoration: none;
            /*          color: #0056b3;
                      text-decoration: underline;*/
        }

        a:not([href]):not([class]) {
            color: inherit;
            text-decoration: none;
        }

        a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none;
        }
    </style>
</head>
<body class="font-sans antialiased">
<x-jet-banner/>
<div class="min-h-screen bg-gray-100">
    @livewire('navigation-menu')
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 pb-3 px-4 sm:px-6 lg:px-8">
                <h3 class="font-semibold text-gray-800 leading-tight">
                    {{ $header }}
                </h3>
            </div>
        </header>
    @endif
<!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
</body>
</html>
