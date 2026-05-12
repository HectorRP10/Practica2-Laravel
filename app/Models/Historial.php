<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class Historial extends Model{
    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
}
