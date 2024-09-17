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


    public function consultaActiva(){
        $exite = consulta::where('estado_consulta','Pendiente')->where('paciente_id',$this->id)->count();
        if($exite>0){
            return true;
        }

        return false;
    }
}
