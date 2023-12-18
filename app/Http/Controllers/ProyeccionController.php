<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use App\Models\Pelicula;
use App\Models\Proyeccion;
use App\Models\Sala;
use Illuminate\Http\Request;

class ProyeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('proyecciones.index', [
            'proyecciones' => Proyeccion::with('pelicula', 'sala')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyecciones.create', [
            'peliculas' => Pelicula::all(),
            'salas' => Sala::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //TODO: Este se deberia de usar para el crud de proyección. Añadir posteriormente un comprarEntrada().
    {
        // $validated = $this->validar($request);
        // Entrada::create($validated);
        // if ($validated) {
        //     session()->flash('success', 'Entrada creada correctamente');
        // }
        // return redirect()->route('entradas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyeccion $proyeccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyeccion $proyeccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyeccion $proyeccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyeccion $proyeccion)
    {
        //
    }

    private function validar(REQUEST $request)
    {
        return $request->validate([
            'proyeccion_id' => 'required|int|exists:proyecciones,id',
        ]);
    }
}
