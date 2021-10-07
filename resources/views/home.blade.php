@extends('layouts.main')
@section('title', 'Página principal')

@section('content')
    <main>
        <div class="home-registrate">
            <img class="home-registrate__img" src="{{ url ('imgs/fondo2.jpg') }}" alt="">
            <div class="home-registrate__fondo">
                <div class="home-registrate__texto">
                    <h1>Películas y series ilimitadas y mucho más.</h1>
                    <h2>Disfruta donde quieras. Cancela cuando quieras.</h2>
                    <h3>¿Quieres ver Stream ya? Registrate crear una cuenta o reiniciar tu membresía de Stream.</h3>
                </div>
            </div>
        </div>
        <div class="home-favorito">
            <img class="home-favorito__img" src="{{ url ('imgs/fondo3.jpg') }}" alt="">
            <div class="home-favorito__fondo">
                <div class="home-favorito__texto">
                    <h2>TENEMOS TU CONTENIDO FAVORITO</h2>
                    <h3>Disfruta donde quieras. Cancela cuando quieras.</h3>
                </div>
            </div>
        </div>
    </main>
@endsection
