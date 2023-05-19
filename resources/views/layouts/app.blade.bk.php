<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- TITOLO DELLA PAGINA  --}}
    <title>BoolSteam</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        {{-- INCLUDIAMO LA NAVBAR  --}}
        @include('partials.navbar')
    </header>
    <main class="container my-4">
        {{-- SPAZIO DEDICATO AL CORPO DELLA PAGINA  --}}
        @yield('page.main')
    </main>
</body>

</html>
