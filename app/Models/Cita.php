<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Medico;
use App\Models\Paciente;
class Cita extends Model{
    
    public function medico(){
        return $this->belongsTo(Medico::class);
    }

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
}
