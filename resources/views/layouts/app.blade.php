<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nuovo progetto</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class=" bg-dark">
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
</body>

</html>
