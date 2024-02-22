<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <h1>Halaman utama LARAVEL</h1>
    <hr>
    <a href="{{'/'}}">Home</a>
    <a href="{{'/about'}}">About</a>
    <a href="{{'/contact'}}">Contact Us</a>
    <a href="{{'/siswa'}}">Data Siswa</a>
    <a href="{{'/guru'}}">Data guru</a>
    <hr>
    @yield('content')
    <h4>copy right bla bla bla</h4>
</body>
</html>