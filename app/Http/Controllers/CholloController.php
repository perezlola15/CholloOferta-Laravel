<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class CholloController extends Controller
{
    public function index()
    {
        $chollos = Chollo::all();
        return view('chollos.index', compact('chollos'));
    }

    public function create()
    {
        return view('chollos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:4',
            'descripcion' => 'required',
            'url' => 'required|url',
            'categoria' => 'required',
            'puntuacion' => 'required|integer',
            'precio' => 'required|numeric',
            'disponible' => 'required|boolean',
        ], [
            'titulo' => 'El título es obligatorio',
            'descripcion' => 'La descripción es obligatoria',
            'url' => 'La URL es obligatoria',
            'categoria' => 'La categoria es obligatoria',
            'puntuacion' => 'La puntuación es obligatoria',
            'precio' => 'El precio es obligatorio',
            'disponible' => 'La disponibilidad es obligatoria'
        ]);

        // Convertir el valor del campo disponible a booleano
        $request->merge(['disponible' => $request->has('disponible')]);

        Chollo::create($request->all());

        return redirect()->route('chollos.index')->with('success', 'Chollo creado con éxito');
    }

    public function show($id)
    {
        $chollo = Chollo::find($id);
        return view('chollos.show', compact('chollo'));
    }

    public function edit($id)
    {
        $chollo = Chollo::find($id);
        return view('chollos.edit', compact('chollo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'url' => 'required|url',
            'categoria' => 'required',
            'puntuacion' => 'required|integer',
            'precio' => 'required|numeric',
            'precio_descuento' => 'required|numeric',
            'disponible' => 'required|boolean',
        ]);

        $chollo = Chollo::find($id);
        $chollo->update($request->all());

        return redirect()->route('chollos.index')->with('success', 'Chollo actualizado con éxito');
    }

    public function destroy($id)
    {
        Chollo::destroy($id);

        return redirect()->route('chollos.index')->with('success', 'Chollo eliminado con éxito');
    }
}
