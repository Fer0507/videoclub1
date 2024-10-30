@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <img src="{{ $pelicula->poster }}" style="height:200px" />
        </div>
        <div class="col-sm-8">
            <h4>{{ $pelicula->title }}</h4>
            <p><b>Año:</b> {{ $pelicula->year }}</p>
            <p><b>Director:</b> {{ $pelicula->director }}</p>
            <p><b>Resumen:</b> {{ $pelicula->synopsis }}</p>
            <p><b>Estado:</b>
                {{ $pelicula->rented ? 'Película actualmente alquilada' : 'Película disponible' }}
            </p>

            <a href="#" class="btn {{ $pelicula->rented ? 'btn-danger' : 'btn-primary' }}">
                {{ $pelicula->rented ? 'Devolver película' : 'Alquilar película' }}
            </a>
            <a href="{{ url('/catalog/edit/' . $pelicula->id) }}" class="btn btn-warning">Editar película</a>
            <a href
