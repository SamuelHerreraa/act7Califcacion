@extends('layouts.app')

@section('content')
    <div style="width: 70%; margin: 0 auto;">
        @if($tema)
            <h1 class="text-center">Detalles de la Materia: {{ $tema->nombre }}</h1>
            <h2>Actividades:</h2>
            @if($tema->actividades->isEmpty())
                <p>Sin actividades.</p>
            @else
                <ul>
                    @foreach($tema->actividades as $actividad)
                        <li>{{ $actividad->tipo }} - {{ $actividad->calificacion }}</li>
                    @endforeach
                </ul>
            @endif
            <br>
            <div class="text-center">
                <a href="{{ route('actividades.index', ['tema_id' => $tema->id]) }}" class="btn btn-primary">Ver Actividades</a>
                <a href="{{ route('actividades.create', ['tema_id' => $tema->id]) }}" class="btn btn-primary">Agregar Actividad</a>
            </div>
        @else
            <p>El tema no existe.</p>
        @endif
    </div>
@endsection
