@extends('layouts.master')

@section('content')
    <h1>Modificar película</h1>
    <form action="#" method="POST">
        @csrf
        @method('PUT')
        <label>Título</label>
        <input type="text" name="title" class="form-control" value="{{ $pelicula['title'] }}">
        <label>Año</label>
        <input type="text" name="year" class="form-control" value="{{ $pelicula['year'] }}">
        <label>Director</label>
        <input type="text" name="director" class="form-control" value="{{ $pelicula['director'] }}">
        <label>Poster</label>
        <input type="text" name="poster" class="form-control" value="{{ $pelicula['poster'] }}">
        <label>Resumen</label>
        <textarea name="synopsis" class="form-control">{{ $pelicula['synopsis'] }}</textarea>
        <button type="submit" class="btn btn-warning mt-3">Modificar película</button>
    </form>
@endsection
