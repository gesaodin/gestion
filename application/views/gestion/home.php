
      <?php $this->load->view('gestion/inc/cabecera.php');?>
      <div class="row">
        <!-- Default box -->
        <div class="col-md-8">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Información Básica</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
        
                <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="cedula">Cédula</label>
                        <input type="text" class="form-control" id="cedula" placeholder="Cédula">
                      </div>
                    </div>
                    <div class="col-md-8">    
                      <div class="form-group">
                        <label for="nombre">Nombre y Apellidos</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombres y Apellidos">
                      </div>
                    </div>
                </div>
                  
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="lugar">Lugar de nacimiento</label>
                      <input type="text" class="form-control" id="lugar" placeholder="lugar">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="lugar">Fecha Nacimiento</label>
                      <input type="text" class="form-control" id="fechana" placeholder="lugar">
                    </div>
                  </div>
                </div>
                  
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="lugar">Nacionalidad</label>
                      <select class="form-control">
                          <option>Venezolano</option>
                          <option>Extranjero</option>
                          <option>Gubernamental</option>
                        </select>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="lugar">Edad</label>
                      <input type="text" class="form-control" id="lugar" placeholder="lugar">
                    </div>
                  </div>
                </div>
                        
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lugar">Grado de Instrucción</label>
                        <input type="text" class="form-control" id="lugar" placeholder="lugar">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="lugar">Estado Civil</label>
                        <input type="text" class="form-control" id="lugar" placeholder="lugar">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="lugar">Sexo</label>
                        <select class="form-control">
                            <option>Masculino</option>
                            <option>Femenino</option>
                          </select>
                      </div>
                    </div>                    
                  </div>
    
                  <div class="row">
                      <div class="col-md-8">
                          <div class="form-group">
                            <label for="lugar">Dirección Domiciliaria</label>
                            <input type="text" class="form-control" id="lugar" placeholder="lugar" maxlength="20">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                            <label for="telefono">Número telefonico</label>
                            <input type="text" class="form-control" id="telefono" placeholder="Número telefonico">
                          </div>
                        </div>
                  </div>
    
                  <div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" class="form-control" id="ciudad" placeholder="Ciudad">
                          </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="municipio">Municipio</label>
                              <input type="text" class="form-control" id="municipio" placeholder="Municipio">
                            </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="text" class="form-control" id="estado" placeholder="Estado">
                              </div>
                            </div>
                  </div>
    
                  <div class="row">
                    <div class="col-md-12">
                        <h3>Datos Laborales</h3>
                    </div>
                    
                  </div>
                  
                  <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label for="lugar">Profesión / Ocupación </label>
                          <input type="text" class="form-control" id="profesion" placeholder="lugar">
                        </div>
                      </div>
    
                      <div class="col-md-7">
                          <div class="form-group">
                            <label for="lugar">Cargo Base </label>
                            <select class="form-control" id="gerencia">
                            <?php
                                    foreach ($gerencia as $k => $v) {
                                      echo '<option value="' . $v->nombre . '">' . $v->nombre . '</option>';
                                    }
                                  ?>
                                
                            </select>
                          </div>
                        </div>
                      
                  </div>
    
                  <div class="row">
                  <div class="col-md-4">
                            <div class="form-group">
                              <label for="lugar">Nivel de Riesgo </label>
                              <select class="form-control" id="nivelriesgo">
                                  <option value=""></option>
                                  <option value="ALTO">ALTO</option>
                                  <option value="MEDIO">MEDIO</option>
                                  <option value="MUY ALTO">MUY ALTO</option>
                                  <option value="BAJO">BAJO</option>
                              </select>
                            </div>
                          </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="lugar">Condición Laboral </label>
                          <select class="form-control">
                              <option>Directivo</option>
                              
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                            <label for="puerto">Puerto de Adscripción </label>
                            <select class="form-control" id="puerto">
                            <?php
                                    foreach ($puerto as $k => $v) {
                                      echo '<option value="' . $v->nombre . '">' . $v->nombre . '</option>';
                                    }
                                  ?>
                                
                            </select>
                          </div>
                        </div>
                  </div>
    
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="lugar">Gerencia </label>
                          <select class="form-control">
                              <option>Gerencia de Gestion Humana</option>
                              
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="lugar">Unidad </label>
                            <select class="form-control">
                                <option>NINGUNA</option>
                                
                            </select>
                          </div>
                        </div>
                  </div>
    
                <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="lugar">Cuenta Bancaria</label>
                        <input type="text" class="form-control" id="lugar" placeholder="lugar" maxlength="20">
                      </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-md-12">
                        <h3>Datos Familiares</h3>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-12" id="divFamilia">
                        
                    </div>
                    
                  </div>
  


            </div>
            <!-- /.box-body 9437012r -->
            <div class="box-footer">
                <button type="button" class="btn">Cancelar</button>
                <button type="button" class="btn btn-success float-right pull-right">Aceptar</button>
            </div>
            <!-- /.box-footer-->
          </div>
          
        </div>

        <div class="col-md-4">
            <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Datos</h3>
      
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                      <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                      <i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
              
      
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  
                </div>
                <!-- /.box-footer-->
              </div>
        </div>
        <!-- /.box -->
    </div>

    <?php $this->load->view('gestion/inc/pie.php');?>