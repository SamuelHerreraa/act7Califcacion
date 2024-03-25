<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActividadCalificable;
use App\Models\Tema;

class ActividadCalificableController extends Controller
{
    // Mostrar la lista de actividades calificables
    public function index()
    {
        $actividadesCalificables = ActividadCalificable::all();
        return view('actividadesCalificables.index', compact('actividadesCalificables'));
    }

    // Mostrar el formulario para crear una nueva actividad calificable
    public function create()
    {
        $temas = Tema::all();
        return view('actividadesCalificables.create', compact('temas'));
    }

    // Almacenar una nueva actividad calificable en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'calificacion' => 'required|numeric',
            'fecha' => 'required|date',
            'tema_id' => 'required|exists:temas,id'
        ]);

        ActividadCalificable::create($request->all());

        return redirect()->route('actividades.index')->with('success', 'Actividad calificable creada correctamente.');
    }

    // Mostrar los detalles de una actividad calificable específica
    public function show(ActividadCalificable $actividadCalificable)
    {
        return view('actividadesCalificables.show', compact('actividadCalificable'));
    }

    // Mostrar el formulario para editar una actividad calificable existente
    public function edit(ActividadCalificable $actividadCalificable)
    {
        $temas = Tema::all();
        return view('actividadesCalificables.edit', compact('actividadCalificable', 'temas'));
    }

    // Actualizar la actividad calificable en la base de datos
    public function update(Request $request, ActividadCalificable $actividadCalificable)
    {
        $request->validate([
            'nombre' => 'required',
            'calificacion' => 'required|numeric',
            'fecha' => 'required|date',
            'tema_id' => 'required|exists:temas,id'
        ]);

        $actividadCalificable->update($request->all());

        return redirect()->route('actividades.index')->with('success', 'Actividad calificable actualizada correctamente.');
    }

    // Eliminar la actividad calificable de la base de datos
    public function destroy(ActividadCalificable $actividad)
    {
        $actividad->delete();
        return redirect()->route('actividades.index')->with('success', 'Actividad eliminada correctamente.');
    }
    
}