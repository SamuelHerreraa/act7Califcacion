<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tema;

class TemaController extends Controller
{
    // Mostrar la lista de temas
    public function index()
    {
        $temas = Tema::all();
        return view('temas.index', compact('temas'));
    }

    // Mostrar el formulario para crear un nuevo tema
    public function create()
    {
        return view('temas.create');
    }

    // Almacenar un nuevo tema en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable|string'
        ]);

        Tema::create($request->all());

        return redirect()->route('temas.index')->with('success', 'Tema creado correctamente.');
    }

    // Mostrar los detalles de un tema específico
    public function show($id)
    {
        $tema = Tema::with('actividades')->find($id);
        return view('temas.show', compact('tema'));
    }

    // Mostrar el formulario para editar un tema existente
    public function edit(Tema $tema)
    {
        return view('temas.edit', compact('tema'));
    }

    // Actualizar un tema en la base de datos
    public function update(Request $request, Tema $tema)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable|string'
        ]);

        $tema->update($request->all());

        return redirect()->route('temas.index')->with('success', 'Tema actualizado correctamente.');
    }

    // Eliminar un tema de la base de datos
    public function destroy(Tema $tema)
    {
        $tema->delete();

        return redirect()->route('temas.index')->with('success', 'Tema eliminado correctamente.');
    }
}