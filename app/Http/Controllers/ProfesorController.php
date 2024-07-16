<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function buscar(Request $request)
    {
        $query = $request->input('profesor');
        $resultados = Profesor::where('nombre', 'like', '%' . $query . '%')
                             ->orWhere('apellido', 'like', '%' . $query . '%')
                             ->get();

        return view('busqueda', compact('resultados', 'query'));
    }
    public function show($id)
    {
        $profesor = Profesor::findOrFail($id);
        return view('profesor.perfil', compact('profesor'));
    }
}
