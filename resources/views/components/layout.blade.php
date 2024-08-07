<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>
        @vite('resources/css/app.css')
        {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
        {{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> --}}
        <style>
            body{
                overflow-x: hidden;
            }
        </style>
    </head>
    <body class="overflow-x-[hidden]">


        <main>
           {{ $slot }}
        </main>

        <script src="{{ asset('js/cart.js') }}"></script>
        <script src="{{ asset('js/CartItem.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
          </script>
        <x-flash />
    </body>
</html>
