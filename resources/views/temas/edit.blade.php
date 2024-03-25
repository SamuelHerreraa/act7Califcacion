<!-- resources/views/temas/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Editar Tema</h1>
    <form action="{{ route('temas.update', $tema->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $tema->nombre }}">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control">{{ $tema->descripcion }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('temas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
