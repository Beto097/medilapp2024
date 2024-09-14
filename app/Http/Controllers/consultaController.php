<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\consulta;
use App\Models\paciente;
use Carbon\Carbon;
use Session;

class consultaController extends Controller
{
    public function index(){

        if (!Auth::user()) {

            Session::put('url', url()->current());    
            return redirect(route('login.index'));
        }

        if(Auth::user()->accesoRuta('/consulta')){

            if(Auth::user()->accesoRuta('/consulta/all')){

                $resultado = consulta::get();

            }else if(Auth::user()->accesoRuta('/consulta/delete')) {

                $resultado = consulta::where('estado_consulta','<>','Terminado')->get();

            }else{

                $resultado = consulta::where('estado_consulta','Pendiente')->get();

            }

            return view('consulta.index', ["resultado"=>$resultado]);
            
        }

        return redirect(route('index'));

    }

    public function create($id){

        if (!Auth::user()) {

            Session::put('url', url()->current());    
            return redirect(route('login.index'));
        }

        if(Auth::user()->accesoRuta('/consulta')){

            $consulta = consulta::find($id);
            $paciente = paciente::find($consulta->paciente->id);

            return view('consulta.iniciar',['consulta'=>$consulta,'paciente'=>$paciente]);
        }
    }


    public function create2($id){

        if (!Auth::user()) {

            Session::put('url', url()->current());    
            return redirect(route('login.index'));
        }

        if(Auth::user()->accesoRuta('/paciente/consulta')){
                        
  
            $obj_consulta = new consulta();        
            $obj_consulta->paciente_id=$id;
            $obj_consulta->estado_consulta = 'Pendiente';        
            
            $obj_consulta->save();
            return redirect()->back()->withErrors(['status' => "Se ha creado la consulta para el paciente: " .$obj_consulta->paciente->identificacion_paciente ]);
            
        }

        return redirect(route('index'));
    }

    public function save(Request $request){

        if (!Auth::user()) {

            Session::put('url', url()->current());    
            return redirect(route('login.index'));
        }

        if(Auth::user()->accesoRuta('/consulta/registrar')){

            $consulta = consulta::find($request->txtConsultaId);
            $consulta->nombre_medico = $request->txtNombre;
            $consulta->historia_clinica = $request->txtHistoriaClinica;
            $consulta->examen_fisico = $request->txtExamenFisico;
            $consulta->laboratorios_examenes = $request->txtLaboratoriosExamenes;
            $consulta->diagnostico = $request->txtDiagnostico;
            $consulta->recomendaciones = $request->txtRecomendaciones;
            $consulta->fecha_consulta = Carbon::now()->format('Y-m-d');
            $consulta->estado_consulta = 'TERMINADA';
            $consulta->save();

            return redirect()->back()->withErrors(['status' => "Se ha guardo la consulta correctamente"]);

        }

        return redirect(route('index'));
    }
}
