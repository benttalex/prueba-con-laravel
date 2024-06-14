@extends('home')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <form id="form" class="col-3" action="{{ route('register.store') }}" method="POST">

                <h3>Registro</h3>

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input autofocus type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                    <strong id="name_error" class="text-danger"></strong>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <strong id="email_error" class="text-danger"></strong>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <strong id="password_error" class="text-danger"></strong>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    <strong id="password_error" class="text-danger"></strong>
                </div>

                <div class="mb-3">
                    <a href="{{ route('index') }}">Inicia Sesión</a>
                </div>

                <div class="spinner-border  text-primary d-none d-block" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <strong id="error_error" class="text-danger"></strong>
                <button type="submit" class="btn btn-primary">ENVIAR</button>
            </form>
        </div>
    </div>

@endsection
