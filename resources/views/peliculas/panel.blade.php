<?php
/** @var \Illuminate\Database\Eloquent\Collection | \App\Models\Pelicula[] $peliculas */
?>
@extends('layouts.main')
@section('title', 'Listado de las pelis')

@section('content')
    <main class="container py-3">
        <div class="panel__titulo">
            <h1>Listado de las peliculas</h1>
        </div>
        @if(auth()->user() != null)
        <div class="mb-3"><a class="btn btn-success" href="{{route('peliculas.createForm')}}">Agregar una nueva pelicula</a></div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Img</th>
                    <th>Titulo</th>
                    <th>País</th>
                    <th>Generos</th>
                    <th>Precio</th>
                    <th>Fecha de estreno</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- imprimimos con Blade. --}}
            @foreach($peliculas as $pelicula)
                <tr>
                    {{-- Mostramos las variable con {{}} como la mayoria de los framework de hoy en día --}}
                    <td data-label="Id">{{ $pelicula->pelicula_id }}</td>
                    <td data-label="Portada"><img class="img-tabla" src="{{ url('imgs/' . $pelicula->poster) }}" alt="{{$pelicula->poster_descripcion}}"></td>
                    <td data-label="Título">{{ $pelicula->titulo }}</td>
                    <td data-label="País">{{ $pelicula->pais->nombre }}</td>
                    <td data-label="Genero">
                        @if( $pelicula->generos()->count() > 0)
                            @foreach($pelicula->generos as $genero)
                                <span class="badge bg-success text-light p-1">{{$genero->nombre}}</span>
                            @endforeach
                        @endif
                    </td>
                    <td data-label="Precio">$ {{ $pelicula->precio }}</td>
                    <td data-label="Fecha-estreno">{{ $pelicula->fecha_estreno }}</td>
                    <td data-label="Acciones">
                        <div class="acciones">
                            <a class="btn-acciones btn-acciones__ver" href="{{ route('peliculas.show', ['id' => $pelicula->pelicula_id]) }}" aria-label="ver informacion sobre {{$pelicula->titulo}}"><i class='bx bxs-photo-album' ></i></a>
                            <a class="btn-acciones btn-acciones__editar" href="{{ route('peliculas.editForm', ['id' => $pelicula->pelicula_id]) }}" aria-label="Editar la película {{$pelicula->titulo}}"><i class='bx bxs-edit-alt'></i></a>
                            <form action="{{ route('peliculas.delete', ['id' => $pelicula->pelicula_id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-acciones btn-acciones__eliminar w-100"><i class='bx bxs-x-circle'></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
@endsection
