<?php
    /** @var \Illuminate\Database\Eloquent\Collection | \App\Models\Pelicula[] $peliculas */
?>
@extends('layouts.main')
@section('title', 'Listado de las pelis')

@section('content')
    <main class="container">
        <section class="container">
            <!-- Slide Home-->
            <aside>
                <div>
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <figure class="carousel-item active">
                                <img class="d-block w-100" src="{{ url ('imgs/slider/viuda-negra-slider.jpg')}}" alt="Viuda Negra">
                            </figure>
                            <figure class="carousel-item">
                                <img class="d-block w-100" src="{{ url ('imgs/slider/jurasic-park-slider.jpg')}}" alt="Jurasic Park">
                            </figure>
                            <figure class="carousel-item">
                                <img class="d-block w-100" src="{{ url ('imgs/slider/shang-chi-slider.jpg')}}" alt="Shang Chi">
                            </figure>
                            <figure class="carousel-item">
                                <img class="d-block w-100" src="{{ url('imgs/slider/jungle-cruise-slider.jpg') }}" alt="Jungle Cruise">
                            </figure>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </div>
            </aside>
        </section>
        <section>
            <div class="peliculas__titulo">
                <h1>Ver todas las películas y series</h1>
                <hr>
            </div>
            <div class="row peliculas">
                @foreach( $peliculas as $pelicula)
                    <div class="peliculas__cont col-6 col-md-3">
                        <a href="{{ route('peliculas.show', ['id' => $pelicula->pelicula_id]) }}" aria-label="ver informacion sobre {{$pelicula->titulo}}">
                            <figure class="peliculas__cont-figure">
                                <img class="peliculas__cont-img" src="{{ url('imgs/' . $pelicula->poster) }}" alt="{{$pelicula->poster_descripcion}}">
                            </figure>
                            <div class="peliculas__cont-texto">
                                <h4>{{ $pelicula->titulo }}</h4>
                                <p>{{ $pelicula->fecha_estreno }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
