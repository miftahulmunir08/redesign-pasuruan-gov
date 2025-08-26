<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        {{-- Poppins --}}
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">

<body>
    {{-- Header --}}
    <header>
        <x-web-info />
        <x-desktop-navigation />
    </header>

    @yield('content')

    {{-- Footer --}}
    <x-footer />

<<<<<<< HEAD:resources/views/pemerintahan/layout.blade.php
    {{-- Javascript --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    @stack('scripts')
</body>
=======
        {{-- Footer --}}
        <x-footer />
        
        {{-- Javascript --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        @stack('scripts')
    </body>
>>>>>>> b26f48364a66b1f37b247d8b60060d6592aea111:resources/views/profil/layout.blade.php

</html>