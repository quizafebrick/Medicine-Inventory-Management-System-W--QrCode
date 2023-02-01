<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MIMSQR</title>
    {{-- * SWEETALERT2 CDN * --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- * JQUERY CDN * --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- * VITE CSS * --}}
    @vite('resources/css/app.css')
    {{-- * LIVEWIRE * --}}
    @livewireStyles
</head>

<body class="bg-slate-300">

    @yield('login')
    @yield('registration')
    @yield('users-index-view')
