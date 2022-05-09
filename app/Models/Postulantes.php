<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulantes extends Model
{
    use HasFactory;

    //defino las relaciones
    public function estadocivil()
    {
        return $this->belongsTo('App\Models\Estadocivil');
    }
}
