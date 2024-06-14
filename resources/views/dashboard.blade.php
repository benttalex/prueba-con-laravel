@extends('layouts.app')

<x-navbar/>

<div class="container mt-5">

    Bienvenido {{ auth()->user()->name }}

</div>
