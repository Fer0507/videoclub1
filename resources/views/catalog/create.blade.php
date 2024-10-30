@extends('layouts.master')

@section('content')
    <h1>Añadir película</h1>
    <form action="#" method="POST">
        @csrf
        <label>Título</label>
        <input type="text" name="title" class="form-control">
        <label>Año</label>
        <input type="text" name="year" class="form-control">
        <label>Director</label>
        <input type="text" name="director" class="form-control">
        <label>Poster</label>
        <input type="text" name="poster" class="form-control">
        <label>Resumen</label>
        <textarea name="synopsis" class="form-control"></textarea>
        <button type="submit" class="btn btn-primary mt-3">Añadir película</button>
    </form>
@endsection
