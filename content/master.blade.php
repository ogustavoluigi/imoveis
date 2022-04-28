<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link ref="stylesheet" href="{{ asset('template/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/master.css') }}">
    <title>@yield('title')</title>
    @yield('head')
</head>

<body>
    <header>
        <div class="container-logo">
            <div class="logo-image"></div>
            <div class="logo-text"></div>
            <h1>EMBARQUE NESTA EXPERIÊNCIA<h1>
        </div>
        <div class="cabecalho'">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Pacotes</a></li>
                <li><a href="#">Aereo</a></li>
                <li><a href="#">Rodoviario</a></li>
            </ul>
        </div>
    </header>
    @yield('content')

    <footer> <p>Texto <a href="#">entre em contato por Email</a></p></footer>

</body>

</html>