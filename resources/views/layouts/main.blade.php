<?php
/** @var \Illuminate\Database\Eloquent\Collection | \App\Models\Pelicula[] $peliculas */
?>
    <!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Streamlit :: @yield('title')</title>
    <link rel="stylesheet" href="{{ url ('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ url ('css/estilos.css')}}">

    {{-- Link de box icons   --}}
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <header>
        <a id="logo" href="<?= route('home') ?>">STREAM</a>
        <nav class="col navbar navbar-expand-md navbar-dark bg-blue-dark">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#barra" aria-controls="barra" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="barra">
                <ul class="navbar-nav text-center ml-auto">
                    <li class="nav-item"><a class="nav-link active"  href="<?= route('home') ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= route('peliculas.index') ?>">Peliculas</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= route('contacto') ?>">Contacto</a></li>
                    @auth
                        <li class="nav-item">
                            <form action="{{route('auth.logout')}}" method="post">
                                @csrf
                                <button class="btn nav-link btn-dark">Cerrar Sesión ({{auth()->user()->email}})</button>
                            </form>
                        </li>
                    @elseguest
                        <li class="nav-item"><a class="nav-link btn-dark" href="<?= route('auth.loginForm') ?>">Iniciar Sesión</a></li>
                    @endauth
                </ul>
            </div>
        </nav>
    </header>
    @if( Session::has('message_success'))
        <div class="alert alert-success">{!!Session::get('message_success') !!}</div>
    @endif
    @yield('content')
    <footer class="container-fluid bg-dark ">
        <div class="text-light py-3">
            <section class="footer__redes">
                <h4 class="col-12 text-center text-uppercase font-weight-bold pb-3">Seguinos en nuestras redes</h4>
                <ul class="footer__redes-ul">
                    <li class="footer__redes-ul__li"><a class="footer__btn btn-outline-light btn-floating m-1" role="button" href=""><i class='bx bxl-facebook'></i></a></li>
                    <li class="footer__redes-ul__li"><a class="footer__btn btn-outline-light btn-floating m-1" href=""><i class='bx bxl-instagram-alt' ></i></a></li>
                    <li class="footer__redes-ul__li"><a class="footer__btn btn-outline-light btn-floating m-1" href=""><i class='bx bxl-twitter' ></i></a></li>
                </ul>
            </section>
        </div>
        <div class="row footer_copy text-center p-3">
            <p>© 2021 Copyright by :</p>
            <a class="text-white" href="#">STREAM.com</a>
        </div>
    </footer>
    <script src="{{ url ('js/jquery-3.4.1.js')}}"></script>
    <script src="{{ url ('js/bootstrap.bundle.js')}}"></script>
</body>
</html>
