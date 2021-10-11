<?php
    /** @var \App\Models\Pelicula[] $pelicula */
?>
@extends('layouts.main')

@section('title', 'Información de la película' . $pelicula->titulo)

@section('content')
    <main class="container">
        <section class="video row">
            <div class="video__cont-img col-6 col-md-3">
                @if($pelicula->poster !== null)
                    <img class="w-100" src="{{ url('imgs/' . $pelicula->poster) }}" alt="{{$pelicula->poster_descripcion}}">
                @endif
            </div>
            <div class="video__cont-descripcion col-12 col-md-7">
                <h1 class="mb-3 video__titulo">{{ $pelicula->titulo }}</h1>
                <ul class="video__cont-descripcion__ul">
                    <li class="mb-2">Precio : ${{$pelicula->precio}}</li>
                    <li class="mb-2">Fecha de estreno : {{$pelicula->fecha_estreno}}</li>
                </ul>
                <h2>Sinopsis</h2>
                <p>{{$pelicula->descripcion}}</p>
            </div>
        </section>
        <div class="col-12 mb-3 text-center">
            <a href="<?= route('peliculas') ?>" class="btn btn-outline-danger">
                <i class='bx bx-chevron-left'></i><span>Volver</span>
            </a>
        </div>
    </main>
@endsection
