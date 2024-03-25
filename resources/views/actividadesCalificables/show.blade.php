<!-- resources/views/actividadesCalificables/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detalles de Actividad Calificable</h1>
    <ul>
        <li><strong>ID:</strong> {{ $actividadCalificable->id }}</li>
        <li><strong>Nombre:</strong> {{ $actividadCalificable->nombre }}</li>
        <li><strong>Calificación:</strong> {{ $actividadCalificable->calificacion }}</li>
        <li><strong>Fecha:</strong> {{ $actividadCalificable->fecha }}</li>
        <li><strong>Tema:</strong> {{ $actividadCalificable->tema->nombre }}</li>
    </ul>
    <a href="{{ route('actividades.index') }}" class="btn btn-primary">Volver</a>
@endsection
