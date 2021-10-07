<?php
    /** @var \App\Models\Pelicula[] $pelicula */
?>
@extends('layouts.main')

@section('title', 'Información de la película' . $pelicula->titulo)

@section('content')
    <main class="container">
        <h1 class="mb-3">{{ $pelicula->titulo }}</h1>

        <div>
            @if($pelicula->poster !== null)
                <div>
                    <img class="w-100" src="{{ url('imgs/' . $pelicula->poster) }}" alt="{{$pelicula->poster_descripcion}}">
                </div>
            @endif
        </div>
        <ul>
            <li>Precio</li>
            <li>$ {{$pelicula->precio}}</li>
            <li>Fecha de estreno</li>
            <li>{{$pelicula->fecha_estreno}}</li>
        </ul>
        <h2>Sinopsis</h2>
        <p>{{$pelicula->descripcion}}</p>
    </main>
@endsection
