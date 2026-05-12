<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Historial;
use App\Models\Cita;

class Paciente extends Model{

    public function historial(){
        return $this->hasOne(Historial::class);
    }

    public function citas(){
        return $this->hasMany(Cita::class);
    }
}
