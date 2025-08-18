<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;


class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Servicio::all());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom_servicio' => 'required|max:150'
        ]);

        $servicio = Servicio::create($request->all());

        return response()->json([
            'mensaje' => 'Servicio creado exitosamente',
            'servicio' => $servicio
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $servicio = Servicio::find($id);

        if (!$servicio) {
            return response()->json(['mensaje' => 'Servicio no encontrado'], 404);
        }

        return response()->json($servicio, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $servicio = Servicio::find($id);

        if (!$servicio) {
            return response()->json(['mensaje' => 'Servicio no encontrado'], 404);
        }

        $request->validate([
            'nom_servicio' => 'required|max:150'
        ]);

        $servicio->update($request->all());

        return response()->json([
            'mensaje' => 'Servicio actualizado exitosamente',
            'servicio' => $servicio
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $servicio = Servicio::find($id);

        if (!$servicio) {
            return response()->json(['mensaje' => 'Servicio no encontrado'], 404);
        }

        $servicio->delete();

        return response()->json(['mensaje' => 'Servicio eliminado exitosamente'], 200);
    }
}
