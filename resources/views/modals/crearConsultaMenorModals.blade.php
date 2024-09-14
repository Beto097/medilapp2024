<div class="modal fade crearConsultaMenorModal{{$fila->id}}" tabindex="-1" role="dialog"
                      aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title align-self-center"
                    id="exampleModalLabel">Completar los Datos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('consulta.menor')}}" method="POST" role="form" class="form-horizontal" autocomplete="off">
                    @csrf
                    <div class="mb-0">
                        <div class="row">

                            <div class="col-lg-12">                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Persona Responsable</span>
                                    <input type="text"  class="form-control" placeholder="Ejemplo: Juan Perez" name="txtNombre" required>
                                                             
                                </div>
                            </div>    
                            <div class="col-lg-12">                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Parentesco</span>
                                    <input type="text"  class="form-control" placeholder="Ejemplo: Padre" name="txtParentesco" required>
                                                             
                                </div>
                            </div>                                                                          
                            
                            <div class="col-lg-8">
                                
                            </div>
                            <div class="col-lg-4">
                                <input type="hidden" name="paciente_id" value={{$fila->id}}>
                                <button type="submit" id="btnCrearModal" class="btn btn-info w-lg">Crear Consulta</button>
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