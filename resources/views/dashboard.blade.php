@extends('layouts.app')


@section('content')

    <div class="container mt-5">

        Bienvenido {{ auth()->user()->name }}

    </div>

@endsection
