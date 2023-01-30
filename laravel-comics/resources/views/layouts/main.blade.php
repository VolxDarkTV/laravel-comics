<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')
    @vite('resources/js/app.js')
    
</head>
    
    @include('../components/header')
    
    @yield('main')

    @include('../components/footer')

<body>
    
</body>
</html>