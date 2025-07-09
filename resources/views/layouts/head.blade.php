<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Welcome') | {{ get_setting('sitename') ?? config('app.name', 'Rent.ng') }}</title>
    <meta name="keywords" content="{{ get_setting('keywords') }}" />
    <meta name="description" content="{{ get_setting('description') }}" />
    <meta itemprop="name" content="{{ get_setting('sitename') ?? config('app.name', 'Rent.ng') }}" />
    <meta itemprop="description" content="{{ get_setting('description') ?? '' }}" />
    {{-- <meta itemprop="image" content="{{ getLogo('mainlogo_white')?->large ?? '' }}" /> --}}
    <meta name="twitter:card" content="product" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{--  <meta name="twitter:site" content="@creativetim " />  --}}
    <meta name="twitter:title" content="{{ get_setting('sitename') ?? config('app.name', 'Rent.ng') }}" />
    <meta name="twitter:description" content="{{ get_setting('description') ?? '' }}" />
    <meta name="twitter:creator" content="@stormcell_tech" />
    {{-- <meta name="twitter:image" content="{{ getLogo('mainlogo_white')?->large ?? '' }}" /> --}}
    {{--  <meta property="fb:app_id" content="655968634437471" /> --}}
    <meta property="og:title" content="{{ get_setting('sitename') ?? config('app.name', 'Rent.ng') }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ url('/') }}" />
    {{-- <meta property="og:image" content="{{ getLogo('mainlogo_white')?->large ?? '' }}" /> --}}
    <meta property="og:description" content="{{ get_setting('description') ?? '' }}" />
    <meta property="og:site_name" content="{{ get_setting('sitename') ?? config('app.name', 'Rent.ng') }}" />
    {{-- dist tag --}}

    {{-- <link rel="icon" type="image/png" href="{{ getLogo('favicon')?->large ?? '' }}" /> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
    

    <!-- In the <head> -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">




    <!-- Scripts -->
    {!! get_setting('header_scripts') ?? '' !!}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        if (localStorage.getItem('darkMode') === 'false' || !('darkMode' in localStorage)) {
            document.querySelector('html').classList.remove('dark');
            document.querySelector('html').style.colorScheme = 'light';
        } else {
            document.querySelector('html').classList.add('dark');
            document.querySelector('html').style.colorScheme = 'dark';
        }
    </script>
</head>


{{-- <body class="antialiased text-gray-600 bg-gray-100 font-inter dark:bg-gray-900 dark:text-gray-400"
    x-data="{ 'darkMode': true, sidebarOpen: false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'dark': darkMode === true }"
    :class="{ 'sidebar-expanded': sidebarExpanded }" x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }" x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"
    class="font-sans antialiased"> --}}

    <body
        x-data="{ page: 'profile', 'loaded': true, 'darkMode': true,'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false, 'isProfileInfoModal': false, 'isProfileAddressModal': false }"
        x-init="
            darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'dark': darkMode === true }" class="dark:bg-slate-900 bg-white dark:text-slate-200"
 >


