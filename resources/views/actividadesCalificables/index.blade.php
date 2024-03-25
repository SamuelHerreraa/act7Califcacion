<!-- resources/views/actividadesCalificables/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div style="width: 70%; margin: 0 auto;">
        <h1 class="text-center">Listado de Actividades Calificables</h1>
        <table class="table table-bordered text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Calificación</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($actividadesCalificables as $actividad)
                    <tr>
                        <td>{{ $actividad->nombre }}</td>
                        <td>{{ $actividad->calificacion }}</td>
                        <td>{{ $actividad->fecha }}</td>
                        <td>
                        <form action="{{ route('actividades.destroy', $actividad->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection