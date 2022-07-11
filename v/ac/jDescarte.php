    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Formulario de Descarte</a>
                    <a href="#!" class="breadcrumb ">A&ntilde;adir</a>
                    <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="formdesc de Usuario">
                        <i class="material-icons blue-text">help</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons blue-text">forum</i>
                    </a>
                    <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                        <?php echo $_SESSION["userFullName"];?>
                    </span>
                </div>
            </div>

            <form id="form_validation" action="../c/ac.php?m=descarteDb&clientId=<?php echo $_GET["clientId"];?>&serviceId=<?php echo $_GET["serviceId"];?>&userId=<?php echo $_GET["userId"];?>&gerenteId=<?php echo $_GET["gerenteId"];?>" method="post" enctype="multipart/form-data"  onsubmit="return checkForm(this);" >
                <div class="row">
                    <div class="col s12 m12 l12 m-t-5">
                        <div class="card blue-grey lighten-5 hoverable">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        <span class="blue-text p-l-10">Formulario de Descarte</span>
                                        <a href="../c/formdesc.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                            <i class="material-icons blue-grey-text">cancel</i>
                                        </a>
                                    </div>
                                </div>

                                
                                    <div class="card p-t-20 p-b-15 p-l-20 p-r-20">
                                    
                                                    
                                                   
                                                        <div class="row">
                                                            <div class="col s6 m3 m-t--10">
                                
                                       
                                          
                                                  <table class="blue-grey lighten-4" >
                                                     
                                                        <tr>
                                                            <td>Cuestionario:</td>
                                                          </tr>  
                                                         <tr>
                                                            <td>Cuestionario de Riesgo</td>
                                                         </tr>    
                                                            
                                                  </table>
                                                            </div>
                                                        </div>
                                                        
 
 
                                                  <div class="row"> 
                                                        <div class="col s12 m-t-10">
                                                            <div class='card-panel white-text blue-grey darken-2' style='line-height : 5px;'>Formulario Para Clientes De Segundo Año Para Descartar Que Modelo De Cuestionario Le Aplica</div>
                                                       </div>
                                                                <div class="col s12 m-t-10">
                                                        <div class='card-panel black-text blue-grey lighten-4' style='line-height : 20px;'>¿Ha ocurrido algún evento significativo, en este periodo que pudiera impactar o cambiar el grado de riesgo determinado en la última evaluación de A&C?, alguno o varios de los siguientes puntos:</div>
                                                                </div>
                                                  
                                                  
                                                  <div class="row"> 
                                                        <div class="col s12 m8">
                                                  <table style=" margin-left:10px ">
                                                            <thead>
                                                              <tr>
                                                                  <th>Pregunta</th>
                                                                  
                                                                  <th>Respuesta</th>
                                                              </tr>
                                                            </thead>
                                                    
                                                            <tbody>
                                                              <tr>
                                                                <td>Naturaleza del negocio del cliente.</td>
                                                                <td>
                                                                    <!-- Switch -->
                                                                    
                                                                  <p>
                                                                      
                                                                      
                                             <label class="m-r-10">
                                                <input type="radio" name="approved1" value="1"  required/>
                                                <span class="blue-grey-text text-darken-2"><span class="blue-text">si</span>
                                            </label>                    
                                            <label>
                                                <input type="radio" name="approved1" value="2"  />
                                                <span class="blue-grey-text text-darken-2"><span class="red-text">No</span>
                                            </label>
                                       
                                          
                                                                      
                                                            
                                                                    </p>
                                                                  
                                                                </td>
                                                              </tr>
                                                              <tr>
                                                                <td>Propietarios de la Empresa, Administracion y/o Directores.</td>
                                                                <td>
                                                                    
                                                                    <!-- Switch -->
                                                                 <p>
                                                                     <label class="m-r-10">
                                                <input type="radio" name="approved2" value="1"  required/>
                                                <span class="blue-grey-text text-darken-2"><span class="blue-text">si</span>
                                            </label>                    
                                            <label>
                                                <input type="radio" name="approved2" value="2"  />
                                                <span class="blue-grey-text text-darken-2"><span class="red-text">No</span>
                                            </label>
                                                                    </p>
                                                                    
                                                                </td>
                                                                
                                                                
                                                              </tr>
                                                              <tr>
                                                                <td>Condicion Financiera del cliente.</td>
                                                                <td>
                                                                    
                                                                    <!-- Switch -->
                                                                  <p>
                                                                     <label class="m-r-10">
                                                                            <input type="radio" name="approved3" value="1"  required/>
                                                                            <span class="blue-grey-text text-darken-2"><span class="blue-text">si</span>
                                                                        </label>                    
                                                                        <label>
                                                                            <input type="radio" name="approved3" value="2"  />
                                                                            <span class="blue-grey-text text-darken-2"><span class="red-text">No</span>
                                                                        </label>
                                                                    </p>
                                                                  
                                                                  
                                                                    
                                                                </td>
                                                              </tr>
                                                              
                                                              <tr>
                                                                <td>Alcance y naturaleza de los servicios a proporcionar.</td>
                                                                <td>
                                                                    
                                                                    <!-- Switch -->
                                                                  <p>
                                                                       <label class="m-r-10">
                                                                            <input type="radio" name="approved4" value="1"  required/>
                                                                            <span class="blue-grey-text text-darken-2"><span class="blue-text">si</span>
                                                                        </label>                    
                                                                        <label>
                                                                            <input type="radio" name="approved4" value="2"  />
                                                                            <span class="blue-grey-text text-darken-2"><span class="red-text">No</span>
                                                                        </label>
                                                                    </p>
                                                                  
                                                                  
                                                                    
                                                                </td>
                                                              </tr>
                                                              
                                                              <tr>
                                                                <td>Actitud del cliente hacia la Firma o de la Firma hacia el cliente.</td>
                                                                <td>
                                                                    
                                                                    <!-- Switch -->
                                                                   <p>
                                                                     <label class="m-r-10">
                                                                            <input type="radio" name="approved5" value="1"  required/>
                                                                            <span class="blue-grey-text text-darken-2"><span class="blue-text">si</span>
                                                                        </label>                    
                                                                        <label>
                                                                            <input type="radio" name="approved5" value="2"  />
                                                                            <span class="blue-grey-text text-darken-2"><span class="red-text">No</span>
                                                                        </label>
                                                                  
                                                                  
                                                                    
                                                                </td>
                                                              </tr>
                                                              
                                                              <tr>
                                                                <td>Disponibilidad de recursos de especialistas para manejar la asignacion.</td>
                                                                <td>
                                                                    
                                                                    <!-- Switch -->
                                                                 <p>
                                                                      <label class="m-r-10">
                                                                            <input type="radio" name="approved6" value="1"  required/>
                                                                            <span class="blue-grey-text text-darken-2"><span class="blue-text">si</span>
                                                                        </label>                    
                                                                        <label>
                                                                            <input type="radio" name="approved6" value="2"  />
                                                                            <span class="blue-grey-text text-darken-2"><span class="red-text">No</span>
                                                                        </label>
                                                                    </p>
                                                                  
                                                                    
                                                                </td>
                                                              </tr>
                                                              
                                                              <tr>
                                                                <td>Principales representantes legales (o asesores) por razones que pueden generar preocupacion.</td>
                                                                <td>
                                                                    
                                                                    <!-- Switch -->
                                                                  <p>
                                                                      <label class="m-r-10">
                                                                            <input type="radio" name="approved7" value="1"  required/>
                                                                            <span class="blue-grey-text text-darken-2"><span class="blue-text">si</span>
                                                                        </label>                    
                                                                        <label>
                                                                            <input type="radio" name="approved7" value="2"  />
                                                                            <span class="blue-grey-text text-darken-2"><span class="red-text">No</span>
                                                                        </label>
                                                                    </p>
                                                                  
                                                                  
                                                                    
                                                                </td>
                                                              </tr>
                                                              
                                                              <tr>
                                                                <td>Cualquier asunto que pueda comprometer la independencia y/o reputacion de la firma.</td>
                                                                <td>
                                                                    
                                                                    <!-- Switch -->
                                                              <p>
                                                                      <label class="m-r-10">
                                                                            <input type="radio" name="approved8" value="1"  required/>
                                                                            <span class="blue-grey-text text-darken-2"><span class="blue-text">si</span>
                                                                        </label>                    
                                                                        <label>
                                                                            <input type="radio" name="approved8" value="2"  />
                                                                            <span class="blue-grey-text text-darken-2"><span class="red-text">No</span>
                                                                        </label>
                                                                    </p>
                                                                  
                                                                  
                                                                    
                                                                </td>
                                                              </tr>
                                                            </tbody>
                                                    </table>
                                                  
                                               
                                                  </div>
                                                        
                                                  </div>       
                                                        
                                                        
                                                        
                                                        
                                       
                                                <div class="row">
                                                    <div class="col s12 m-t-10 m-l-10 "style=" margin-left:10px " >
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                                </div>
                                      
                                      
                                        <div class="row">
                                            <div class="col s12 m-t-10 m-l-10 "style=" margin-left:10px " >
                                                <a href="../c/formdesc.php?m=index" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
                                                </a>
                                                <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                                    <i class="material-icons">save</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m-t-15">
                                        <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                        <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </main>

    <div id="help" class="modal">
        <div class="modal-content">
            <p class="">formdesc de Usuario</p>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="modal-footer">
            <button class="modal-close waves-effect waves-light btn blue btn-small">Continuar</button>
        </div>
    </div>

    <?php include '../v/support/modalAdd.php'; ?>

    <script type="text/javascript" src="../js/shareholder.js"></script>
    