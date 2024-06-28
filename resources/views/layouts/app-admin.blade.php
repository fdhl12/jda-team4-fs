<!doctype html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset($pengaturan['logo']) }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @hasSection('title')
            @yield('title')
        @else
            {{ config('app.name', 'Laravel') }}
        @endif
    </title>

    @hasSection('robots')
        <meta name="robots" content="@yield('robots')">
    @endif

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
    <style>
        .z-35 {
            z-index: 35;
        }
    </style>

    @hasSection('content')
        {{--@vite('resources/js/admin/dark-mode.js')--}}
    @endif

</head>
<body class="bg-gray-50 dark:bg-gray-700 font-family-karla flex flex-col">

@hasSection('content')

    @include('layouts.partials-admin.header')
    @include('layouts.partials-admin.navbar')

    <div class="sm:ml-64 mt-16 h-screen flex flex-col">

        <div class="mb-auto">
            @yield('content')
        </div>

        @include('layouts.partials-admin.footer')

    </div>
@endif

@hasSection('auth')

    <main class="w-full">
        @yield('auth')
    </main>

@endif

@stack('scripts')

</body>
</html>
