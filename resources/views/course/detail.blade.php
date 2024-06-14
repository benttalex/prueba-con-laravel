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
            <a class="btn btn-outline-warning" href="{{ route('cursos.edit', [ $course->id] ) }}">Editar</a>
            <a class="btn btn-outline-danger" href="{{ route('cursos.destroy', [ $course->id] ) }}">Eliminar</a>
        @endif
    </div>
@endsection
