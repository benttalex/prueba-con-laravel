@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <label class="fw-bold">Nombre del Curso</label>
        <h3>
            {{ $course->title }}
        </h3>

        <label class="fw-bold">Descripción</label>
        <p>
            {{ $course->description }}
        </p>

        <label class="fw-bold">Estado</label>
        <p>
            {{ $course->status ? 'Activo' : 'Inactivo' }}
        </p>

        @if( $course->user_id === auth()->user()->id )
            <a class="btn btn-outline-warning" href="{{ route('cursos.edit', [ $course->id ] ) }}">Editar</a>

            <form id="form" data-delete="true" method="POST" action="{{ route('cursos.destroy', [ 'curso' => $course ] ) }}">
                @method('DELETE')

                <div class="spinner-border  text-primary d-none d-block" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <strong id="delete_error" class="text-danger"></strong>

                <button type="submit" class="btn btn-outline-danger" >Eliminar</button>
            </form>


        @endif
    </div>
@endsection
