<?php
    /** @var \Illuminate\Support\ViewErrorBag $errors */
    /** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Pais[] $paises*/
?>
@extends('layouts.main')
@section('title', 'Agregar una nueva Película')

@section('content')
    <main class="container py-3" style="background:#fbfbfb;">
        <h1>Agregar una nueva Película</h1>
        <form action="{{ route('peliculas.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 form-group">
                <label for="titulo" class="form-label">Titulo</label>
                <input
                    type="text"
                    class="form-control"
                    name="titulo"
                    id="titulo"
                    @error('titulo') aria-describedby="error-titulo" @enderror
                    value="{{ old('titulo') }}"
                >

                @error('titulo')
                    <div class="text-danger" id="error-titulo">{{$errors->first('titulo')}}</div>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="precio" class="form-label">Precio</label>
                <input type="text"
                       inputmode="numeric"
                       class="form-control"
                       name="precio"
                       id="precio"
                       @error('precio') aria-describedby="error-precio" @enderror
                       value="{{ old('precio') }}"
                >
                @error('precio')
                    <div class="text-danger" id="error_precio">{{$errors->first('precio')}}</div>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="fecha_estreno" class="form-label">Fecha de estreno</label>
                <input
                    type="text"
                    class="form-control"
                    name="fecha_estreno"
                    id="fecha_estreno"
                    @error('fecha_estreno') aria-describedby="error-fecha_estreno" @enderror
                    value="{{ old('fecha_estreno') }}"
                >
                @error('fecha_estreno')
                    <div class="text-danger" id="error-fecha_estreno">{{$errors->first('fecha_estreno')}}</div>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="pais_fk" class="form-label">Pais de origen</label>
                <select name="pais_fk" id="pais_fk" class="form-control" @error('pais_fk') aria-describedby="error-pais_fk" @enderror>
                    <option value="">Elegí el pais...</option>
                    @foreach( $paises as $pais)
                        <option value="{{$pais->pais_id}}"
                            @if(old('pais_fk') == $pais->pais_id) selected @endif
                        >
                            {{$pais->nombre}}
                        </option>
                    @endforeach
                </select>
                @error('pais_fk')
                <div class="text-danger" id="error-pais_fk">{{$errors->first('pais_fk')}}</div>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="descripcion" class="form-label">Sinopsis (Opcional)</label>
                <textarea class="form-control" name="descripcion" id="descripcion">{{ old('descripcion') }}</textarea>
            </div>
            <div class="mb-3 form-group">
                <label for="poster" class="form-label">Póster (Opcional)</label>
                <input type="file" class="form-control" name="poster" id="poster">
            </div>
            <div class="mb-3 form-group">
                <label for="poster_descripcion" class="form-label">Descripcion del Póster (Opcional)</label>
                <input type="text" class="form-control" name="poster_descripcion" id="poster_descripcion" value="{{ old('poster_descripcion') }}">
            </div>
            <button class="btn btn-success w-100 mb-3" type="submit">Publicar</button>
        </form>
    </main>
@endsection
