<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raza;


class RazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Raza::all());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom_raza' => 'required|max:100'
        ]);

        $raza = Raza::create($request->all());

        return response()->json([
            'mensaje' => 'Raza creada exitosamente',
            'raza' => $raza
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $raza = Raza::find($id);

        if (!$raza) {
            return response()->json(['mensaje' => 'Raza no encontrada'], 404);
        }

        return response()->json($raza, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $raza = Raza::find($id);

        if (!$raza) {
            return response()->json(['mensaje' => 'Raza no encontrada'], 404);
        }

        $request->validate([
            'nom_raza' => 'required|max:100'
        ]);

        $raza->update($request->all());

        return response()->json([
            'mensaje' => 'Raza actualizada exitosamente',
            'raza' => $raza
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $raza = Raza::find($id);

        if (!$raza) {
            return response()->json(['mensaje' => 'Raza no encontrada'], 404);
        }

        $raza->delete();

        return response()->json(['mensaje' => 'Raza eliminada exitosamente'], 200);
    }
}
