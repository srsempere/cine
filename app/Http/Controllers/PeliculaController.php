<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('peliculas.index', [
            'peliculas' => Pelicula::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $this->validar($request);
        Pelicula::create($validated);
        if ($validated) {
            session()->flash('exito', 'La película se ha creado correctamente');
        }
        return redirect()->route('peliculas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        return view('peliculas.show', [
            'pelicula' => $pelicula,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $pelicula)
    {
        $pelicula->with('proyecciones', 'salas');
        return view('peliculas.edit', [
            'pelicula' => $pelicula,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        $validated = $this->validar($request);
        if ($validated) {
            $pelicula->update($validated);
            session()->flash('exito', 'La película se ha actualizado correctamente');
            return redirect()->route('peliculas.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();
        session()->flash('exito', 'La película se ha borrado correctamente');
        return redirect()->route('peliculas.index');
    }

    private function validar(REQUEST $request)
    {
        return $request->validate([
            'titulo' => 'required|string|max:50',
        ]);
    }

    public function mostrarEntradas($id)
    {
        // Encuentra la película por su id y carga sus proyecciones relacionadas
        $pelicula = Pelicula::with('proyecciones.entradas')->find($id);

        // Calcula el total de entradas sumando las entradas de cada proyección.
        $totalEntradas = $pelicula->proyecciones->sum(function ($proyeccion) {
            return $proyeccion->entradas->count();
        });
    }
}
