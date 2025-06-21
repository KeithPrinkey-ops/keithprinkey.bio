<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keith Prinkey Bio</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="data:image/svg+xml,&lt;svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22&gt;&lt;text y=%22.9em%22 font-size=%2290%22&gt;⭐️&lt;/text&gt;&lt;/svg&gt;">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Livewire -->
    @livewireStyles
</head>

<body class="flex flex-col bg-black min-h-screen antialiased">
<x-banner />
<!-- Navbar -->
<x-navbar />
<!-- Main Content -->
<main class="flex-grow">
    {{ $slot }}
</main>

<!-- Footer -->
<x-footer />

<script src="//unpkg.com/alpinejs" defer></script>
@livewireScripts

</body>
</html>
