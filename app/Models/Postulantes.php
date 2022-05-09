<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulantes extends Model
{
    use HasFactory;

    //defino las relaciones entre Postulante y estado civil
    public function estadocivil()
    {
        return $this->belongsTo('Estadocivil::class');
    }
    //defino las relaciones entre Postulantes y Localidades
    public function localidad()
    {
        return $this->belongsTo('Localidades::class');
    }
}
