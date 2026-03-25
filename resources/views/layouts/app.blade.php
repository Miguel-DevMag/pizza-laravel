<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Pizza - Lenha&Brasa')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('components.header')

    <main>
        @yield('content')
    </main>
</body>
</html>
