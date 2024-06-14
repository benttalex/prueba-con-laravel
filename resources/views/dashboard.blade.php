@extends('layouts.app')


@section('content')

    <div class="container mt-5">

        Bienvenido {{ auth()->user()->name }}

    </div>
    <div class="container">

        <table id="list" class="display" style="width:100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Ver</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->status ? 'Activo' : 'Inactivo' }}</td>
                    <td>
                        <a class="btn-outline-info" href="{{ route("cursos.show", [ $course->id ] ) }}">
                            Detalle
                        </a>
                    </td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
