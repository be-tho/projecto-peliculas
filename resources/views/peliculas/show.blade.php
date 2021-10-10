<?php
    /** @var \App\Models\Pelicula[] $pelicula */
?>
@extends('layouts.main')

@section('title', 'Información de la película' . $pelicula->titulo)

@section('content')
    <main class="container">
        <section class="video row">
            <div class="video__cont-img col-3">
            @if($pelicula->poster !== null)
                    <div>
                        <img class="w-100" src="{{ url('imgs/' . $pelicula->poster) }}" alt="{{$pelicula->poster_descripcion}}">
                    </div>
                @endif
            </div>
            <div class="video__cont-descripcion col-8">
                <h1 class="mb-3 video__titulo ">{{ $pelicula->titulo }}</h1>
                <ul class="video__cont-descripcion__ul">
                    <li>Precio</li>
                    <li>$ {{$pelicula->precio}}</li>
                    <li>Fecha de estreno</li>
                    <li>{{$pelicula->fecha_estreno}}</li>
                </ul>
                <h2>Sinopsis</h2>
                <p>{{$pelicula->descripcion}}</p>
            </div>
        </section>
    </main>
@endsection
