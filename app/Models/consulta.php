<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Carbon\Carbon;

class consulta extends Model
{
    use HasFactory;
    protected $table = "consulta";
    protected $primaryKey="id";  
    protected $connection = 'mysql';

    public function paciente()
    {
        return $this->belongsTo('App\Models\paciente');
    }

    public static function actualizarEstados(){
        $consultas = consulta::Where('estado_consulta','EN CURSO')->get();
        $consultas_pendientes = consulta::Where('estado_consulta','Pendiente')->get();

        foreach ($consultas as $consulta) {           

            if($consulta->updated_at->addHours(8)<Carbon::now()){
                $consulta->estado_consulta = "TERMINADA";
                $consulta->save();
            }
        }
        foreach ($consultas_pendientes as $consulta) {           

            if($consulta->updated_at->addHours(12)<Carbon::now()){
                $consulta->estado_consulta = "CANCELADA";
                $consulta->save();
            }
            
        }
    }
}
