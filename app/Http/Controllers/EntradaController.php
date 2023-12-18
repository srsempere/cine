<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use App\Models\Proyeccion;
use App\Models\Sala;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('entradas.index', [
            'entradas' => Entrada::with('proyeccion.pelicula', 'proyeccion.sala')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $proyeccion_id = $request->query('proyeccion_id');
        $proyeccion = Proyeccion::with('pelicula', 'sala')->findOrFail($proyeccion_id);
        return view('entradas.create', [
            'proyeccion' => $proyeccion,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $this->validar($request);
        Entrada::create($validated);
        if ($validated) {
            session()->flash('exito', 'La entrada se ha comprado con éxito.');
        }
        return redirect()->route('entradas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Entrada $entrada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entrada $entrada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entrada $entrada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrada $entrada)
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
