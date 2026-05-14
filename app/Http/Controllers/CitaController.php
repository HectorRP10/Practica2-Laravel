<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitaController extends Controller
{
    public function obtenerMedico($id){
        $cita = Cita::find($id);

        if (!$cita) {
            return response()->json(['mensaje' => 'No existe la cita con id: ' . $id], 404);
        }

        return $cita->medico;
    }

    public function obtenerPaciente($id){
        $cita = Cita::find($id);

        if (!$cita) {
            return response()->json(['mensaje' => 'No existe la cita con id: ' . $id], 404);
        }

        return $cita->paciente;
    }
}
