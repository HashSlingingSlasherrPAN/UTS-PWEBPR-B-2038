<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/logo.png">

    <title>@yield('name')</title>
    @vite('resources/css/app.css')
</head>
<body class="mx-[190px]">

    {{-- Conditionally include navbar2 for the register page and navbar for the login page --}}
    @if(request()->is('register'))
        @include('components.navbar2')
    @elseif(request()->is('/'))
        @include('components.navbar')
    @elseif (request()->is('dashboard'))
        @include('components.navbar')
    @endif

    @yield('content')

    @include('components.footer')
</body>
</html>
