<main>

<div class="container">
    
    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Terminos y Condiciones</a>
            <a href="#!" class="breadcrumb ">Editar</a>
            <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
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
    <div class="row">
        <div class="col s12 m12 l12 m-t-5">
            <div class="card blue-grey lighten-5 hoverable">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <span  class="breadcrumb p-l-10 blue-text" >Cliente</span>
                            <a href="#!" class="breadcrumb blue-text" ><?php echo $clientName ?> </a>
                            <a href="../c/termycond.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                    <i class="material-icons blue-text">cancel</i>
                                </a>
                                <a class="right m-r-5 tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                                
                                    <a class="right m-r-5 tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen">
                                        <i class="material-icons green-text">file_download</i></a>
                                        
                                 <a class="right m-r-5" id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                                 
                                  <a href="#Leyenda" class="tooltipped right modal-trigger m-r-10" data-position="left" data-tooltip="Instruciones">
                                        <i class="material-icons blue-text">local_library</i>
                                    </a>
                                  <a href="javascript: history.go(-1);" class="tooltipped right blue-text m-r-10" data-position="left" data-tooltip="Atr&aacute;s">
                                        <i class="material-icons blue-text">undo</i>
                                    </a>
                        </div>
                    </div>
                    
                    
                    
                    
                        <div class="card m-t-10 m-l-5 m-r-5">
                            <div class="row">
                                <div class="col s12">
                                    <div class="m-t-20 m-b-20 m-l-20 m-r-20">
                                     <?php 
                                    $_socios = mysqli_query($master, "
                                    SELECT * FROM termycond
                                    WHERE termycondId = '" . $termycondId . "'
                                    ");

                                    $socios = $_socios -> fetch_object();
                                    $lider = $socios -> userId ;
                                    $gerente = $socios -> userId2 ; 
                                    
                                    $_socioN = mysqli_query($master, "
                                    SELECT * FROM user
                                    WHERE userId = '" . $lider . "'
                                    ");
                                    
                                    $socioN = $_socioN -> fetch_object();
                                    $liderName = $socioN -> userName ;
                                    
                                    $_gerenteN = mysqli_query($master, "
                                    SELECT * FROM user
                                    WHERE userId = '" . $gerente . "'
                                    ");
                                    
                                    $gerenteN = $_gerenteN -> fetch_object();
                                    $gerenteName = $gerenteN -> userName ;
                                    
                                    $_naturalezaN = mysqli_query($master, "
                                    SELECT * FROM service
                                    WHERE serviceId = '" . $serviceId . "'
                                    ");
                                    
                                    $naturalezaN = $_naturalezaN -> fetch_object();
                                    $naturalezaId = $naturalezaN -> natureId ;
                                    
                                    $_naturalezaName = mysqli_query($master, "
                                    SELECT * FROM nature
                                    WHERE natureId = '" . $naturalezaId . "'
                                    ");
                                    
                                    $naturalezaName = $_naturalezaName -> fetch_object();
                                    $naturalezaNombre = $naturalezaName -> natureName ;
                                     
                                     ?>   
                                        
                                        
                            <div class="row">
                                <div class="col s6 m7">
                                
                                       
                                          
                                                  <table class="blue-grey lighten-4" >
                                                     
                                                        <tr>
                                                            <td>Socio lider de T&C</td> <td><?php echo $liderName ?></td>
                                                          </tr>  
                                                         <tr>
                                                            <td>Gerente de T&C</td> <td> <?php echo $gerenteName ?> </td>
                                                         </tr>    
                                                            
                                                   </table>
                                                  
                                                
                                                
                                                
                                    </div>
                                        <div class="col s6 m5">
                                
                               
                                          
                                                <table class="blue-grey lighten-4" >
                                                         <tr>
                                                            <td>Completado por gerente de A&C</td> 
                                                         </tr>  
                                                         <tr>
                                                            <td>Fecha</td>
                                                         </tr>    
                                                </table>      
                                                    
                                                 
                                                
                                    </div>
                                     <div class="col s6 m7">
                                
                                       
                                          
                                                    
                                                <table class="blue-grey lighten-4" >
                                                         <tr>
                                                            <td >Naturaleza del servicio:</td> <td><?php echo $naturalezaNombre ?> </td>
                                                         </tr>  
                                                         <tr>
                                                            <td>Servicio</td> <td><?php echo $serviceName ?></td>
                                                         </tr>    
                                                </table> 
                                                
                                                <table class="blue-grey lighten-4" >
                                                         <tr>
                                                            <td >Periodo de la A&C:</td>
                                                         </tr>  
                                                            
                                                </table>
                                                

                                                
                                                
                                    </div>
                                        <div class="col s6 m5">
                                       
                                                 <table class="blue-grey lighten-4">
                                                      <tr>
                                                        <td >Revisado Por el socio lider de A&C:</td> <td> <?php echo $_SESSION["userFullName"];?></td>
                                                        </tr>
                                                        <tr>
                                                          
                                                            <td>Fecha</td>
                                                        </tr>
                                                     
                                                    </table>
                                                    
                                                                        
                                                                            
                                                        <table class="blue-grey lighten-4" >
                                                         <tr>
                                                            <td >Revisado por el socio de riesgo de A&C:</td>
                                                         </tr>  
                                                         <tr>
                                                            <td>Fecha</td>
                                                         </tr>    
                                                </table>
                                
                                       
                                          
                                                    

                                                
                                    </div>
                                    
                                            </div>
                                            
                                            
                                            
                                            <div class="row"> 
                                                <div class="col s12 m-t-10">
                                                        <div class='card-panel white-text blue-grey darken-2' style='line-height : 5px;'>Requerimientos de t&eacute;rminos y condiciones</div>
                                                </div>
                                            </div>
                                                        
                                 <div class="row">
                                     
                                     <div class="col s12 m12 l12 ">
                                        <ul class="collapsible">
                                            <li>
                                              <div class="collapsible-header grey lighten-4"><i class="material-icons blue-text">list</i>Carta de contrataci&oacute;n y Presupuesto de proyecto</div>
                                              <div class="collapsible-body">
                                                  <?php include '../v/termycond/cartaypreproyecto.php';?>
                                              </div>
                                            </li>
                                        </ul>
                                    </div>
                                     <div class="col s12 m12 l12 m-t-20">
                                        <ul class="collapsible">
                                            <li>
                                              <div class="collapsible-header grey lighten-4"><i class="material-icons blue-text">list</i>Roles de proyecto</div>
                                              <div class="collapsible-body">
                                                  <?php include '../v/termycond/rolproyecto.php';?>
                                              </div>
                                            </li>
                                        </ul>
                                    </div>
                                     <div class="col s12 m12 l12 m-t-20">
                                        <ul class="collapsible">
                                            <li>
                                              <div class="collapsible-header grey lighten-4"><i class="material-icons blue-text">list</i>Esquema de facturaci&oacute;n</div>
                                              <div class="collapsible-body">
                                                  <?php include '../v/termycond/efacturacion.php';?>
                                              </div>
                                            </li>
                                        </ul>
                                    </div>
                             
                                    
                                    
                                 </div>
                               
                                                  
                                                       
                                            
                                           
                               
                                    <div class="row">
                                            <div class="col s12 m-l-40 m-t-20 ">
                                                <label>
                                                    <input type="checkbox" class="validate filled-in" required="" />
                                                    <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                </label>
                                            </div>
                                        
                                        
                                            <div class="col s12 m-t-10 ">
                                                <a href="../c/manual.php?m=index" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
                                                </a>
                                             <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                                    <i class="material-icons">save</i>
                                                </button>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                    </div>
                                </div>
                            </div>
                      
                 
                    <div class="row">
                        <div class="col s12 m-t-10">
                            <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                            <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>

<div id="help" class="modal">
<div class="modal-content">
    <p class="">Manual de Usuario</p>
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