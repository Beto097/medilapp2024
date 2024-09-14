<div class="modal fade addNewRegistroModal" tabindex="-1" role="dialog"
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
                <form action="{{route('consulta.save')}}" method="POST" role="form" class="form-horizontal" autocomplete="off">
                    @csrf
                    <div class="mb-0">
                        <div class="row">

                            
                            <div class="col-lg-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Nombre del Medico</span>
                                    <input type="text"  class="form-control" id="inputnombre" placeholder="Ejemplo:Juan Perez" name="txtNombre"
                                    value="{{old ('txtNombre')}}" required>     
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="mb-3"> 
                                    <span>Historia Clinica</span>                                   
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        placeholder="" name="txtHistoriaClinica" rows="3">{{old ('txtHistoriaClinica')}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <span>Examen Fisico</span>  
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        placeholder="Comentario" name="txtExamenFisico" rows="3">{{old ('txtExamenFisico')}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <span>Laboratorios/Examenes</span>  
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        placeholder="Comentario" name="txtLaboratoriosExamenes" rows="3">{{old ('txtLaboratoriosExamenes')}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Diagnostico</span>
                                    <input type="text"  class="form-control" id="inputapellido" placeholder="Ejemplo:Perez" name="txtDiagnostico"
                                    value="{{old ('txtDiagnostico')}}" required >  
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <span>Recomendaciones</span>  
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        placeholder="Comentario" name="txtRecomendaciones" rows="3">{{old ('txtRecomandaciones')}}</textarea>
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-4 offset-lg-8">
                                
                                <input type="hidden" name="txtConsultaId" id="txtConsultaId" class="form-control form-control-sm" value="{{$consulta->id}}">
                                <button type="submit" id="btnCrearModal" class="btn btn-info w-lg">Guardar</button>
                            </div>
                        </div>
                
                       
                        
                        
                    </div>                   
                    
                    
                    
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>





