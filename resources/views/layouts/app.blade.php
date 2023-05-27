<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Nuovo progetto</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>


<body>
    @include('partials.header')
    {{-- <div class="top-bg-img">
        <img src="/img/template/magic.png" alt="">
    </div> --}}
    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>

</html>
