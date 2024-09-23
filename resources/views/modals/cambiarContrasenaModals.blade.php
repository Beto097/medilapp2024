<div class="modal fade cambiarContrasenaModal" tabindex="-1" role="dialog"
                      aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title align-self-center"
                    id="exampleModalLabel">Cambiar Contraseña</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('user.newPassword')}}" method="POST" role="form" class="form-horizontal" autocomplete="off">
                    @csrf
                    <div class="mb-0">
                        <div class="row">

                            <div class="col-lg-12">                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Contraseña Actual</span>
                                    <input type="password"  class="form-control"  name="txtOldContrasena" required>
                                                             
                                </div>
                            </div>    
                            <div class="col-lg-12">                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Contraseña Nueva</span>
                                    <input type="password"  class="form-control"  name="txtNewContrasena" required>
                                                             
                                </div>
                            </div> 
                            <div class="col-lg-12">                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Repetir Contraseña Nueva</span>
                                    <input type="password"  class="form-control"  name="txtNewRepContrasena" required>
                                                             
                                </div>
                            </div>                                                                           
                            
                            <div class="col-lg-8">
                                
                            </div>
                            <div class="col-lg-4">                                
                                <button type="submit" id="btnCrearModal" class="btn btn-info w-lg">Cambiar Contraseña</button>
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