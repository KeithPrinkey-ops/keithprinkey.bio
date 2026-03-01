<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
    {!! $title
        ?? trim($__env->yieldContent('title'))
        ?: config('app.title')
        !!}
    </title>
    <meta name="description"
          content="{{ $description
              ?? trim($__env->yieldContent('description'))
              ?: config('app.description')
          }}">
    <link rel="canonical" href="{{ $canonical ?? url()->current() }}">
    @stack('meta')  {{-- optional extras per-page --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ Storage::url('logos/78b5f853-b9c3-4c6d-b41a-b716a000d1e3.jpeg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ Storage::url('logos/78b5f853-b9c3-4c6d-b41a-b716a000d1e3.jpeg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-ui/4.12.4/index.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-ui/4.12.4/index.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-ui/4.12.4/index.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-ui/4.12.4/index.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-ui/4.12.4/index.js">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ Storage::url('appimages/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ Storage::url('appimages/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ Storage::url('appimages/favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ Storage::url('appimages/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ Storage::url('appimages/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ Storage::url('appimages/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ Storage::url('appimages/site.webmanifest') }}">
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @endpush    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Livewire -->
    @livewireStyles

</head>

<body class="flex flex-col bg-black min-h-screen antialiased">
<x-cookies />
<x-services.services />
<x-leads-banner />


<!-- Navbar -->
<x-navbar />
<!-- Main Content -->
<main class="flex-grow">
    {{ $slot }}
</main>
<!-- Calendly badge widget begin -->
<!-- Footer -->
<x-footer />

<script src="//unpkg.com/alpinejs" defer></script>
@livewireScripts


</body>
</html>
