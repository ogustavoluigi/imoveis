<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ storage('images/logo.ico')}}" type="image/x-icon" />
    <link ref="stylesheet" href="{{ storage('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ storage('/css/master.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>@yield('title')</title>
    @yield('head')
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <img src="{{ storage('images/nave.ico')}}" alt="WEB IMOVEL">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Encotre seu imóvel aqui" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>      
    </header>
    @yield('content')

    <footer>
        <p>Texto <a href="#">entre em contato por Email</a></p>
    </footer>

</body>

</html>