<!-- resources/views/temas/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div style="width: 70%; margin: 0 auto;">
        <h1 class="text-center">Listado de Materias</h1>
        <table class="table table-bordered text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($temas as $tema)
                    <tr>
                        <td><a href="{{ route('temas.show', $tema->id) }}" style="text-decoration: none; color: #000;">{{ $tema->nombre }}</a></td>
                        <td>
                            <form action="{{ route('temas.destroy', $tema->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <div class="text-center">
            <a href="{{ route('temas.create') }}" class="btn btn-success">Agregar Nueva Materia</a>
        </div>
    </div>

    <style>
        /* Cambia el color del enlace cuando se realiza un hover */
        a:hover {
            color: #007bff; /* Cambia el color al azul de Bootstrap cuando se hace hover */
        }
    </style>
@endsection
