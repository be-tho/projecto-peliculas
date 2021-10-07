@extends('layouts.main')
@section('title', 'Página principal')

@section('content')
    <main class="container">
        <section class="row justify-content-center contacto">
            <div class="col-12">
                <h1 class="mb-3 contacto__h1">Contáctanos!</h1>
                <form action="#" method="post" enctype="multipart/form-data" class="contacto__form">
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="Nombre" class="form-control" placeholder="Nombre" autocomplete="off" required="">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="Apellido" placeholder="Apellido" autocomplete="off" required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <div class="form-group">
                                <label>País</label>
                                <select class="form-control">
                                    <option>Argentina</option>
                                    <option>Chile</option>
                                    <option>Perú</option>
                                    <option>Venezuela</option>
                                    <option>Colombia</option>
                                    <option>Estados Unidos</option>
                                    <option>Bolivia</option>
                                    <option>Inglaterra</option>
                                    <option>Uruguay</option>
                                    <option>Paraguay</option>
                                    <option>Australia</option>
                                    <option>Mexico</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <div class="form-group">
                                <label for="ejemplo">Correo</label>
                                <input id="ejemplo" type="email" name="Email" class="form-control" placeholder="ejemplo@correo.com" autocomplete="off" required="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="msj">Mensaje</label>
                        <textarea id="msj" class="form-control" name="Mensaje" rows="3" placeholder="Escribe tu consulta..."></textarea>
                        <div class="d-flex justify-content-around align-items-center flex-wrap">
                            <input type="submit" value="Enviar" class="btn btn-block mt-4 btn-enviar color-btn col-ms-12 col-md-5">
                            <input type="reset" value="Limpiar" class="btn btn-block btn-outline-secondary mt-4 col-ms-12 col-md-5">
                        </div>
                    </div>

                </form>
            </div>
        </section>
    </main>

@endsection
