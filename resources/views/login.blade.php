@extends('home')


@section('content')

    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <form id="form"  class="col-3" action="{{ route('login') }}" method="POST">

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input autofocus type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <strong id="email_error" class="text-danger"></strong>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <strong id="password_error" class="text-danger"></strong>
                </div>

                <div class="mb-3">
                    <a href="{{ route('register.create') }}">Registrate</a>
                </div>

                <div class="spinner-border  text-primary d-none d-block" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <strong id="error_error" class="text-danger d-block"></strong>
                <button type="submit" class="btn btn-primary">ENVIAR</button>
            </form>
        </div>
    </div>

@endsection
