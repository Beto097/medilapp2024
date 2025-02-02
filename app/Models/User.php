<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "usuario";
    protected $primaryKey="id";
    protected $connection = 'mysql';
    protected $fillable=array("nombre_usuario","email_usuario","password_usuario","ultima_sesion","rol_id","estado_usuario");

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password_usuario',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Always encrypt the password when it is updated.
     *
     * @param $value
    * @return string
    */


    public function rol()
    {
        return $this->belongsTo('App\Models\rol');
    }

    public function compania()
    {
        return $this->belongsTo('App\Models\compania');
    }

    public function getCompanias()
    {
        return compania::get();
    }



    public function accesoRuta($ruta){

        foreach ($this->rol->pantallas as $pantalla) {
            if ($pantalla->url_pantalla == $ruta) {
                return  true;
            }
        }
        return false;
    }

    
    public function relacionado(){

        if (str_contains($this->nombre_usuario, '1')) {

            $usuarios = User::where('nombre_usuario', 'like', '%1%')->get();
        }
        if (str_contains($this->nombre_usuario, '2')) {

            $usuarios = User::where('nombre_usuario', 'like', '%2%')->get();
        }

        $lista= array();
        foreach($usuarios as $usuario){
            array_push($lista,$usuario->id);
        }
    
        
       return $lista;
    }
    
}
