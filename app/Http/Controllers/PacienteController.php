<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function obtenerCitas($id){
        $paciente = Paciente::find($id);

        if (!$paciente) {
            return response()->json(['mensaje' => 'No existe el pacientecon id: ' . $id], 404);
        }

        return $paciente->citas;
    }

    public function obtenerHistorial($id){
        $paciente = Paciente::find($id);

        if (!$paciente) {
            return response()->json(['mensaje' => 'No existe el pacientecon id: ' . $id], 404);
        }

        return $paciente->historial;
    }

}
