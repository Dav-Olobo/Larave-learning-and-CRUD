<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <img src="{{asset('images/Mental Health.jpg')}}" alt="" width="10%" height="20px">
        @yield('header')
        @include('layout.sidemenu')
    </header>

<main class="p-4">
    @yield('maincontent')
</main>

<footer>
   @yield('footer')
</footer>
</body>
</html>