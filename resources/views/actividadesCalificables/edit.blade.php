<!-- resources/views/actividadesCalificables/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Editar Actividad Calificable</h1>
    <form action="{{ route('actividades.update', $actividadCalificable->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $actividadCalificable->nombre }}">
        </div>
        <div class="form-group">
            <label for="calificacion">Calificación:</label>
            <input type="number" name="calificacion" class="form-control" value="{{ $actividadCalificable->calificacion }}">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" class="form-control" value="{{ $actividadCalificable->fecha }}">
        </div>
        <div class="form-group">
            <label for="tema_id">Tema:</label>
            <select name="tema_id" class="form-control">
                @foreach($temas as $tema)
                    <option value="{{ $tema->id }}" {{ $tema->id == $actividadCalificable->tema_id ? 'selected' : '' }}>{{ $tema->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('actividades.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
