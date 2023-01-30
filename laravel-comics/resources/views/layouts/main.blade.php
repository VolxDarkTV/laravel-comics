<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')
    @vite('resources/js/app.js')
    
</head>

    {{-- HEADER --}}
    @include('components/header')

    {{-- MAIN --}}
    @yield('main')

    {{-- PREFOOTER --}}
    @yield('prefooter')

    @yield('comics')

    {{-- FOOTER --}}
    @include('components/footer')

<body>
    
</body>
</html>