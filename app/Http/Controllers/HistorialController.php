<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historial;

class HistorialController extends Controller
{
    public function obtenerPaciente($id){
        $historial = Historial::find($id);

        if (!$historial) {
            return response()->json(['mensaje' => 'No existe el historial con id: ' . $id], 404);
        }

        return $historial->paciente;
    }
}
