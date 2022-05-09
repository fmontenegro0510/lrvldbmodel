<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadocivil extends Model
{
    use HasFactory;
    
    /*** relacion de uno a muchos con postulantes 
     * (-> un postulante tiene un [uno] estado civil) 
     * (<- un estado civil esta en [muchos] postulantes)
    */

    public function postulantes()
    {
        return $this->hasMany(Postulantes::class);
    }
    
}
