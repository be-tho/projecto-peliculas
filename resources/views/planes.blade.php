@extends('layouts.main')
@section('title', 'Planes')

@section('content')
    <main class="container py-4">
        <div class="text-center titulo__planes">
            <h1>Elegí tu plan Premium!</h1>
            <p>Mira péliculas sin limites en cualquier dispositivo</p>
        </div>
        <section class="row planes">
            <article class="col-sm-auto planes__article">
                <div class="planes__titulo red">
                    <h2>Individual</h2>
                </div>
                <div class="planes__article-precio">
                    <p>600 ARS/MES</p>
                    <p>1 cuenta</p>
                    <hr>
                </div>
                <div class="planes__article-precio__listado">
                    <ul class="list-unstyled">
                        <li><i class='bx bx-check correcto'></i>Sin anuncios</li>
                        <li><i class='bx bx-check correcto' ></i>Acceso ilimitado a la biblioteca de Stream</li>
                        <li><i class='bx bx-check correcto' ></i>Las peliculas en full HD</li>
                        <li><i class='bx bx-check correcto' ></i>Disponible en 1 dispositivo a la vez</li>
                        <li><i class='bx bx-x cancelado'></i>Ver Sin Conexión</li>
                        <li><i class='bx bx-x cancelado' ></i>Descargar los videos</li>
                    </ul>
                </div>
            </article>
            <article class="col-sm-auto planes__article">
                <div class="planes__titulo indigo">
                    <h2>Dual</h2>
                </div>
                <div class="planes__article-precio">
                    <p>800 ARS/MES</p>
                    <p>2 cuenta</p>
                    <hr>
                </div>
                <div class="planes__article-precio__listado">
                    <ul class="list-unstyled">
                        <li><i class='bx bx-check correcto' ></i>Sin anuncios</li>
                        <li><i class='bx bx-check correcto' ></i>Acceso ilimitado a la biblioteca de Stream</li>
                        <li><i class='bx bx-check correcto' ></i>Las peliculas en full HD</li>
                        <li><i class='bx bx-check correcto' ></i>Disponible en 2 dispositivo a la vez</li>
                        <li><i class='bx bx-check correcto' ></i>Ver Sin Conexión</li>
                        <li><i class='bx bx-x cancelado' ></i>Descargar los videos</li>
                    </ul>
                </div>
            </article>
            <article class="col-sm-auto planes__article">
                <div class="planes__titulo blue">
                    <h2>Familiar</h2>
                </div>
                <div class="planes__article-precio">
                    <p>900 ARS/MES</p>
                    <p>4 cuenta</p>
                    <hr>
                </div>
                <div class="planes__article-precio__listado">
                    <ul class="list-unstyled">
                        <li><i class='bx bx-check correcto' ></i>Sin anuncios</li>
                        <li><i class='bx bx-check correcto' ></i>Acceso ilimitado a la biblioteca de Stream</li>
                        <li><i class='bx bx-check correcto' ></i>Las peliculas en full HD</li>
                        <li><i class='bx bx-check correcto' ></i>Disponible en 4 dispositivos a la vez</li>
                        <li><i class='bx bx-check correcto' ></i>Ver Sin Conexión</li>
                        <li><i class='bx bx-check correcto' ></i>Descargar los videos</li>
                    </ul>
                </div>
            </article>
        </section>
    </main>

@endsection
