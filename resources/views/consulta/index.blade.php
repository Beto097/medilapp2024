@extends('layout.app')

@section('head')
      @include('layout.tableHead')
@endsection

@section('js')
    @include('layout.tableJs')
    @include('scripts.validaciones')
@endsection

@section('titulo')
    Consultas
@endsection

@section('contenido')
<div class="row">
  <div class="col-md-12">
      <div class="card">
          <div class="card-body">

            <div class="row">
                <div class="col-md-4">
                  <h5 class="card-title">Consultas</h5>
                  <p class="card-title-desc">Este listado muestra todos los consultas que estan registrados en el sistema.
                  </p>
                </div>
                <div class="col-md-3">
                  @include('mensajes.alertas')
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-3">
                  <div class="row">
                    <div class="col-md-8">
                      <button type="button" class="btn btn-primary waves-effect waves-light"
                        data-bs-toggle="modal" data-animation="bounce"
                        data-bs-target=".addNewConsultaModal">
                        Agregar Consulta
                      </button>
                      {{-- @include('modals.ConsultaModals')   --}}
                    </div>
                    <div class="col-md-4">
                      

                    </div>
                  </div>
                   
                               
                </div>
                
                
            </div>

              
              <div class="table-responsive">
                  <table id="dataTable" class="table table-bordered">
                      <thead>
                          <tr>
                            <th>ID</th>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th>Sexo</th>
                            <th>Edad</th>                            
                            <th>Estado</th>
                            <th>Acciones</th>
                          </tr>
                      </thead>


                      <tbody>
                        @foreach ($resultado as $key=>$fila)
                          <tr style="font-size: 100%;">
                            <td>{{$key+1}}</td>
                            <td>{{$fila->paciente->identificacion_paciente}}</td>
                            <td>{{$fila->paciente->nombre_paciente}} {{$fila->paciente->apellido_paciente}}</td>
                            <td>@if($fila->paciente->sexo_paciente=="m")M @else F @endif</td>
                            <td>{{\Carbon\Carbon::parse($fila->paciente->fecha_nacimiento_paciente)->age}}</td>                            
                            <td><p>{{$fila->estado_consulta}}</p></td>
                            <td>
                              
                             {{--  @if (Auth::user()->accesoRuta('/orden_laboratorio/create'))                        
                                <a class="btn btn-info btn-sm btnIcono" title="Crear Orden" href="{{route('orden_laboratorio.create2', ['id'=> $fila->id] )}}" class=""><i id="iconoBoton" class="fas fa-file-medical"></i></a>
                                
                              @endif
--}}
                              
                              @if (Auth::user()->accesoRuta('/consulta/registrar'))                        
                                <a class="btn btn-info btn-sm btnIcono" title="Atender Consulta" href="{{route('consulta.create', ['id'=> $fila->id] )}}" class=""><i id="iconoBoton" class="fas fa-file-medical"></i></a>
                                
                              @endif  

                              {{-- @if (Auth::user()->accesoRuta('/consulta/update'))
                                <button type="button" class="btn btn-success btn-sm"
                                  data-bs-toggle="modal" data-animation="bounce"
                                  data-bs-target=".editarConsultaModal{{$fila->id}}">
                                  <i id="iconoBoton" class="fas fa-user-edit"></i>
                                </button>  
                                @include('modals.editarConsultaModals')
                              @endif

                              @if (Auth::user()->accesoRuta('/consulta/delete'))
                                @if($fila->estado_consulta == 1)

                                  <a class="btn btn-danger btn-sm btnIcono" title="Eliminar consulta" href="{{route('consulta.delete', ['id'=> $fila->id] )}}" onclick="
                                    return confirm('Desea eliminar este consulta del sistema?')"><i id="iconoBoton" class="fas fa-user-times"></i></a>
                                
                                @else
                                  
                                  <a class="btn btn-warning btn-sm btnIcono" title="Desbloquear consulta" href="{{route('consulta.desbloquear', ['id'=> $fila->id] )}}" onclick="
                                    return confirm('Desea desbloquear este consulta del sistema?')"><i id="iconoBotonW" class="fas fa-user-shield"></i></a>
                                
                                @endif 
                               
                              @endif  --}}
                              
                            </td>
                          </tr>
                        @endforeach

                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  <!-- end col -->
</div>
<!-- end row -->
@endsection



