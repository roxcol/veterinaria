<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direccion;


class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Direccion::all());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         // Validaciones para formulario
         $request->validate([
            'nom_direccion' => 'required|max:100',
        ]);

        $direccion = Direccion::create($request->all());

        return response()->json([
            'mensaje' => 'Dirección creada exitosamente',
            'direccion' => $direccion
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $direccion = Direccion::find($id);

        if (!$direccion) {
            return response()->json(['mensaje' => 'Dirección no encontrada'], 404);
        }

        return response()->json($direccion, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $direccion = Direccion::find($id);

        if (!$direccion) {
            return response()->json(['mensaje' => 'Dirección no encontrada'], 404);
        }

        $request->validate([
            'nom_direccion' => 'required|max:100',
        ]);

        $direccion->update($request->all());

        return response()->json([
            'mensaje' => 'Dirección actualizada exitosamente',
            'direccion' => $direccion
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $direccion = Direccion::find($id);

        if (!$direccion) {
            return response()->json(['mensaje' => 'Dirección no encontrada'], 404);
        }

        $direccion->delete();

        return response()->json(['mensaje' => 'Dirección eliminada exitosamente'], 200);
    
    }
}
