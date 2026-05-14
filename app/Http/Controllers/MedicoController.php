<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;

class MedicoController extends Controller
{
    public function obtenerCitas($id){
        $medico = Medico::find($id);

        if (!$medico) {
            return response()->json(['mensaje' => 'No existe el médico con id: ' . $id], 404);
        }

        return $medico->citas;
    }
}
