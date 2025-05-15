<div class="modal fade editarRegistroModal{{$fila->id}}" tabindex="-1" role="dialog"
                      aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title align-self-center"
                    id="exampleModalLabel">Historia Clinica</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                    <div class="mb-0">
                        <div class="row">

                            @if (\Carbon\Carbon::parse($paciente->fecha_nacimiento_paciente)->age<18)
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Persona Responsable</span>
                                        <input type="text"  class="form-control" id="inputnombre" placeholder="Ejemplo:Juan Perez" name="txtNombre"
                                        value="{{$fila->responsable_menor}}" required>     
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Parentesco</span>
                                        <input type="text"  class="form-control" id="inputnombre" placeholder="Ejemplo:Juan Perez" name="txtNombre"
                                        value="{{$fila->parentesco_menor}}" required>     
                                    </div>
                                </div>
                            @endif

                            
                            <div class="col-lg-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Nombre del Medico</span>
                                    <input type="text"  class="form-control" id="inputnombre" placeholder="Ejemplo:Juan Perez" name="txtNombre"
                                    value="{{$fila->nombre_medico}}" required>     
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="mb-3"> 
                                    <span>Historia Clinica</span>                                   
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        placeholder="" name="txtHistoriaClinica" rows="3">{{$fila->historia_clinica}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <span>Examen Fisico</span>  
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        placeholder="Comentario" name="txtExamenFisico" rows="3">{{$fila->examen_fisico}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <span>Laboratorios/Examenes</span>  
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        placeholder="Comentario" name="txtLaboratoriosExamenes" rows="3">{{$fila->laboratorios_examenes}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-group mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Diagnóstico</span>
                                    <textarea  class="form-control" id="txtDiagnostico" placeholder="Escriba diagnóstico" name="txtDiagnostico"                                    
                                                                                    value= "{{$consulta->diagnostico}}"></textarea>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <span>Recomendaciones</span>  
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        placeholder="Comentario" name="txtRecomendaciones" rows="3">{{$fila->recomendaciones}}</textarea>
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-4 offset-lg-8">

                             
                                
                            </div>
                        </div>
                
                       
                        
                        
                    </div>                   
                    
                    
               
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>





