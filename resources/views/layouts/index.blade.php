<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @include('layouts.nav.nav')
    @include('beranda.welcome-header')
    @include('beranda.fasilitas')
    @include('beranda.update')
    @include('beranda.lembaga')
    @include('beranda.cp')
    @include('beranda.lokasi')


    <main class="container">
        @yield('main-content')
    </main>
</body>
</html>
