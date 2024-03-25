<!-- resources/views/actividadesCalificables/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Agregar Actividad Calificable</h1>
    <form action="{{ route('actividades.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
        </div>
        <div class="form-group">
            <label for="calificacion">Calificación:</label>
            <input type="number" name="calificacion" class="form-control" value="{{ old('calificacion') }}">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" class="form-control" value="{{ old('fecha') }}">
        </div>
        <div class="form-group">
            <label for="tema_id">Tema:</label>
            <select name="tema_id" class="form-control">
                @foreach($temas as $tema)
                    <option value="{{ $tema->id }}">{{ $tema->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
        <a href="{{ route('actividades.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
