<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
?>
@extends('layouts.main')
@section('title', 'Crear usuario')
@section('content')
    <main class="container py-4">
        <section class="row login">
            <div class="col-12 col-md-7 login__cont">
                <div class="login__titulo">
                    <h1>Registrate</h1>
                    <p>Ingresa tus datos para crear un usuario</p>
                </div>
                <form action="{{ route('auth.create')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control"
                            @error('email') aria-describedby="error-email"
                            @enderror
                            value="{{ old('email') }}"
                        >
                        @error('email')
                        <div class="text-danger" id="error-email">{{$errors->first('email')}}</div>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control"
                            @error('password') aria-describedby="error-password"
                            @enderror
                        >
                        @error('password')
                        <div class="text-danger" id="error-password">{{$errors->first('password')}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn-login btn btn-primary w-100">Registrate</button>
                </form>
            </div>
        </section>
    </main>
@endsection
