<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    use HasFactory;

    protected $table = "paciente";
    protected $connection = 'mysql';


    public function consultas()
    {
        return $this->hasMany('App\Models\consulta');
    }
}
