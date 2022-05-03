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
        <nav class="navbar navbar-expand-lg py-4 px-2" id="navbar">
            <div class="container">
                <img src="{{ storage('images/navbar.png')}}" alt="Seu Imóvel">
                <a href="{{url('/')}}" class="navbar-brand ">WEB IMÓVEIS </a>
                <div id="navbar-items">
                    <div></div>
                    <form class="d-flex" id="search-form">
                        <input type="search" class="form-control me-2" placeholder="Busque o seu Imóvel"
                            aria-label="Search">
                        <button class="btn secondary-bg-color" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg prymary-bg-color p-2" id="bottom-navbar-container">
            <div class="container">
                <ul class="navbar-nav mb-2 mb-lg-0 collapse navbar-collapse" id="bottom-navbar">
                    <li class="nav-item">
                        <a href="{{url('/somos')}}" class="nav-link">Quem somos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Venda seu Imóvel</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Compre seu Imóvel</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/contato')}}" class="nav-link">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--Segundo nav-->


    @yield('content')
    <footer>
        <div id="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p><b>Acompanhe nossas Redes Sociais <a href="#"><img src="{{ storage('images/insta2.png')}}"
                                        alt="Insta"></a><a href="#"><img src="{{ storage('images/twiter2.png')}}"
                                        alt="Twiter"><a href="#"><img src="{{ storage('images/face2.png')}}"
                                            alt="Face"></b></p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <p><span class="contact-tile">Ligue para:</span> (XX) XXXXX-XXXX</p>
                        <p><span class="contact-tile">Horários:</span> 08:00 - 19:00</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <p><span class="contact-tile">Envie um e-mail:</span> contato@xxxxx.com</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <p><span class="contact-tile">Venha nos visitar:</span> Rua xxxxx, nº xxx</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>


</body>

</html>