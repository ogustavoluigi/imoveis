<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ storage('images/nave.ico')}}" type="image/x-icon" />
    <link ref="stylesheet" href="{{ storage('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ storage('/css/index.css') }}">
    <link rel="stylesheet" href="{{ storage('/css/master.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>@yield('title')</title>
    @yield('head')
</head>

<body>
    <header>
            <nav class="navbar navbar-expand-lg prymary-bg-color py-4 px-2" id="navbar">
            <div class="container">
            <a href="#" class="navbar-brand">IMÓVEL WEB</a>   
            <div id="navbar-items">
                    <div></div>
                    <form class="d-flex" id="search-form">
                        <input type="search" class="form-control me-2" placeholder="Busque Imóvel" aria-label="Search">
                        <button class="btn secondary-bg-color" type="submit">Pesquisar</button>
                    </form>
                </div>
        </nav>
    </header>
            <!--Segundo nav-->
        <nav class="navbar navbar-expand-lg secondary-bg-color p-2" id="bottom-navbar-container">
            <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bottom-navbar" aria-controls="bottom-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
            </button>
            <ul class="navbar-nav mb-2 mb-lg-0 collapse navbar-collapse" id="bottom-navbar">
               <li class="nav-item">
                   <a href="#" class="nav-link">Quem somos</a>
               </li>
               <li class="nav-item">
                   <a href="#" class="nav-link">Contato</a>
               </li>
            </ul>
               
            </div>


        </nav>
    </header>
    @yield('content')

    <footer>
        <p><b>Estamos ansiosos para realizar seu sonho <a href="#"></a></b></p>
    </footer>

</body>

</html>