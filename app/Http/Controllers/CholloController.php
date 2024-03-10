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
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required|url',
            'categoria' => 'required',
            'puntuacion' => 'required|integer',
            'precio' => 'required|numeric',
            'precio_descuento' => 'required|numeric',
            'disponible' => 'required|boolean',
        ], [
            'titulo' => 'El título es obligatorio',
            'descripcion' => 'La descripción es obligatoria',
            'url' => 'La URL es obligatoria',
            'categoria' => 'La categoria es obligatoria',
            'puntuacion' => 'La puntuación es obligatoria',
            'precio' => 'El precio es obligatorio',
            'precio_descuento' => 'El precio con descuento es obligatorio',
            'disponible' => 'La disponibilidad es obligatoria'
        ]);

        // Convertir el valor del campo disponible a booleano
        $request->merge(['disponible' => $request->has('disponible')]);

        Chollo::create($request->all());

        return redirect()->route('chollos.index')->with('success', 'Chollo creado con éxito');
    }

    public function show(Chollo $chollo)
    {
        $chollo = Chollo::findOrFail($chollo->id);
        return view('chollos.show', compact('chollo'));
    }

    public function edit(Chollo $chollo)
    {
        $chollo = Chollo::findOrFail($chollo->id);
        return view('chollos.edit', compact('chollo'));
    }

    public function update(Request $request, Chollo $chollo)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required|url',
            'categoria' => 'required',
            'puntuacion' => 'required|integer',
            'precio' => 'required|numeric',
            'precio_descuento' => 'required|numeric',
            'disponible' => 'required|boolean',
        ], [
            'titulo' => 'El título es obligatorio',
            'descripcion' => 'La descripción es obligatoria',
            'url' => 'La URL es obligatoria',
            'categoria' => 'La categoria es obligatoria',
            'puntuacion' => 'La puntuación es obligatoria',
            'precio' => 'El precio es obligatorio',
            'precio_descuento' => 'El precio con descuento es obligatorio',
            'disponible' => 'La disponibilidad es obligatoria',
        ]);

        $chollo = Chollo::findOrFail($chollo->id);
        $chollo->update($request->all());

        return redirect()->route('chollos.index')->with('success', 'Chollo actualizado con éxito');
    }

    public function destroy(Chollo $chollo)
    {
        $chollo = Chollo::findOrFail($chollo->id);
        $chollo->delete();
        return redirect()->route('chollos.index')->with('success', 'Chollo eliminado con éxito');
    }
}

/* Otra manera

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
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required|url',
            'categoria' => 'required',
            'puntuacion' => 'required|integer',
            'precio' => 'required|numeric',
            'precio_descuento' => 'required|numeric',
            'disponible' => 'required|boolean',
        ], [
            'titulo' => 'El título es obligatorio',
            'descripcion' => 'La descripción es obligatoria',
            'url' => 'La URL es obligatoria',
            'categoria' => 'La categoria es obligatoria',
            'puntuacion' => 'La puntuación es obligatoria',
            'precio' => 'El precio es obligatorio',
            'precio_descuento' => 'El precio con descuento es obligatorio',
            'disponible' => 'La disponibilidad es obligatoria',
        ]);

        $chollo = Chollo::find($id);
        $chollo->update($request->all());

        return redirect()->route('chollos.index')->with('success', 'Chollo actualizado con éxito');
    }

    public function destroy($id)
    {
        Chollo::destroy($id);

        return redirect()->route('chollos.index')->with('success', 'Chollo eliminado con éxito');
    } */

