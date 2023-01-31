<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')
    @vite('resources/js/app.js')
    
    
</head>


<body>
    
    {{-- HEADER --}}
    @include('components/header')
    
    {{-- JUMBO --}}
    @yield('jumbo')
    
    {{-- HOME_CARD --}}
    @yield('home_card')
    
    
    
    {{-- PREFOOTER --}}
    @yield('prefooter')
    
    {{-- COMICS P --}}
    @yield('comics')
    
    {{-- FOOTER --}}
    @include('components/footer')
    
    
</body>
</html>

