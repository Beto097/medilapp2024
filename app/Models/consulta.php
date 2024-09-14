<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consulta extends Model
{
    use HasFactory;
    protected $table = "consulta";
    protected $primaryKey="id";  
    protected $connection = 'dynamic_connection';

    public function paciente()
    {
        return $this->belongsTo('App\Models\paciente');
    }
}
