<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cita;

class Medico extends Model{
    public function citas(){
        return $this->hasMany(Cita::class);
    }
}
