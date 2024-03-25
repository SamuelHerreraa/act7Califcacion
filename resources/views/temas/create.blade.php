<!-- resources/views/temas/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Agregar Tema</h1>
    <form action="{{ route('temas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Agregar</button>
        <a href="{{ route('temas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
