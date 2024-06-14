@extends('layouts.app')


@section('content')

    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <form id="form" class="col-3" action="{{ route('cursos.update', [ 'curso' => $course ]) }}" method="POST">

                @method('PUT')

                <h3>Edicion de Curso</h3>

                <div class="mb-3">
                    <label for="title" class="form-label">Nombre del Curso</label>
                    <input value="{{ $course->title }}" autofocus type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                    <strong id="title_error" class="text-danger"></strong>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea class="form-control" id="description" name="description">
                        {{ $course->description }}
                    </textarea>
                    <strong id="description_error" class="text-danger"></strong>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" {{ $course->status ? 'checked' : '' }} role="switch" id="status" name="status">
                    <label class="form-check-label" for="status">Publicar curso</label>
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
