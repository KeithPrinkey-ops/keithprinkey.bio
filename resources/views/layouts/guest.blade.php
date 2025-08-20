<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ Storage::url('logos/78b5f853-b9c3-4c6d-b41a-b716a000d1e3.jpeg') }}">
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @endpush    <!-- Scripts -->
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
