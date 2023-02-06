<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medince Inventory Management System - Qr Code</title>

    <!-- Alpine v3 -->

    {{-- * JQUERY CDN * --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    {{-- * TAILWIND CSS * --}}
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    {{-- * SWEETALERT2 CDN * --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- * VITE CSS * --}}
    @vite('resources/css/app.css')

    {{-- * LIVEWIRE POWERGRID * --}}
    @livewireStyles
    @powerGridStyles
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


</head>

<body class="bg-slate-300">
    @yield('login')
    @yield('registration')
    @yield('users-index-view')

    {{-- * NAVBAR TOGGLE * --}}
    <script src="{{ asset('js/navbar-toggle.js') }}"></script>
    <script src="{{ asset('js/printPreviewScript.js') }}"></script>


    {{-- * FOR PREVIEWING OF PICTURE * --}}
    <script>
        var loadPreview = function(event) {
            var preview = document.getElementById('loadPreviewImage');
            preview.src = URL.createObjectURL(event.target.files[0]);
        };

        var loadPreview2 = function(event) {
            var preview2 = document.getElementById('loadPreviewImage2');
            preview2.src = URL.createObjectURL(event.target.files[0]);
        };

        $(document).ready(function() {
            $('#btnPrint').printPage();
        });
    </script>
    <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
