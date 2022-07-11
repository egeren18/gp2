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
                    
                    <div class="m-l-10 m-r-10">
                                
                                <div class='row'>
                                    <div class="col s12 m6 l7 m-t--5 m-b-10">
                                        <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                                <table class="blue-grey lighten-4">
                                                
                                                <tr>
                                                            <td>Socio lider </td> <td><?php echo $liderName ?></td>
                                                          </tr>  
                                                         <tr>
                                                            <td>Gerente </td> <td> <?php echo $gerenteName; ?> </td>
                                                         </tr>    
                                                              
                                                         <tr>
                                                             <td>Fecha</td>
                                                            <td>21/06/2021</td>
                                                         </tr>    
                                                           <tr>
                                                            <td >Naturaleza del servicio:</td> <td><?php echo $naturalezaNombre ?> </td>
                                                         </tr>  
                                                         <tr>
                                                            <td>Servicio</td> <td><?php echo $serviceName ?></td>
                                                         </tr>   


                                                </table>
                                        </div>
                                    </div>
                                   
                                </div>
                     </div>
                    <div class="m-l-10 m-r-10">
                   <div class="row">
                       <div class="col s12 ">
                                            <div class="card-panel white-text blue-grey darken-2" style="line-height : 20px;"><p>Roles de Proyecto</p></div>
                    </div>
                   </div>
                   
                  </div> 

<!-- carta -->
    <div class="card-content">
        <div class="card m-t--10 p-l-10 p-r-10">
<!-- contenido de roles de proyecto -->
    

                <!--  tabla -->    
                    <div class="row">
                        <div class="col s12 m-b-10 m-t-30">
                            <table class="white" id="planning">
                                <thead>
                                    <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                        <td id="border-white" class="center" width="20%">Roles</td>
                                        <td id="border-white" class="center" width="20%">Linea de Servicio</td>
                                        <td id="border-white" class="center" width="15%">H/H Proyecto</td>
                                        <td id="border-white" class="center" width="15%">Tarifa Real por Rol</td>
                                        <td id="border-white" class="center" width="15%">Total</td>
                                        <td id="border-white" class="center" width="15%">acci&oacute;n</td>
                                        
                                        
                                    </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $contador=0;
                                            while ($r_planning = mysqli_fetch_array($planning)) { ?>
                                            <?php $tracingPlanningId = $r_planning["tracingPlanningId"];
                                            $roleId = $r_planning["roleId"];
                                            $lineId = $r_planning["lineId"];
                                            $hour = $r_planning["hour"];
                                            $amount = $r_planning["amount"]; 
                                        
                                            
                                            $_rol = mysqli_query($master, "
                                            SELECT * FROM role
                                            WHERE roleId = '" . $roleId . "'
                                            "); 
                                            $rol = $_rol -> fetch_object(); 
                                            $personal = $rol -> roleName ;
                                            
                                            $_lineName = mysqli_query($master, "
                                            SELECT * FROM line
                                            WHERE lineId = '" . $lineId . "'
                                            "); 
                                            $lineName = $_lineName -> fetch_object(); 
                                            $lineName = $lineName -> lineName ;
                                            
                                            $_comparador = mysqli_query($master, "
                                            SELECT * FROM cartypreprojecto
                                            WHERE termycondId = '" . $termycondId . "'
                                            ");
                                            
                                            $comparador = $_comparador -> fetch_object(); 
                                            $mcomparar = $comparador -> amount ;
                                            $mcompararh = $comparador -> horasc ;
                                            
                                            
                                            $totalc=$hour*$amount;
                                            $contador = $contador+$totalc;
                                            $totalh = $totalh+$hour;
                                            
                                            
                                            
                                            ?>
                                            
                                                <tr>
                                                    <td id="border-grey" class="center"><?php echo $personal; ?></td>
                                                    <td id="border-grey" class="center"><?php echo $lineName; ?></td>
                                                    <td id="border-grey" class="center"><?php echo $hour; ?></td>
                                                    <td id="border-grey" class="center"><?php echo $amount; ?></td>
                                                    <td id="border-grey" class="center"><?php echo $totalc; ?></td>
                                                    <td id="border-grey" class="center" class="td-block">
                                                        <a href="../c/tracing.php?m=updatePlanning&c=<?php echo $c; ?>&i=<?php echo $tracingPlanningId; ?>" class="tooltipped m-r-5" data-position="left" data-tooltip="Editar">
                                                            <i class="material-icons blue-text">edit</i>
                                                        </a>
                                                        <a href="../c/tracing.php?m=deletePlanningDb&c=<?php echo $c; ?>&i=<?php echo $tracingPlanningId; ?>" class="tooltipped m-r-5" data-position="left" data-tooltip="Eliminar">
                                                            <i class="material-icons red-text">delete</i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            
                                            <?php } ?>
                                    
                                    <tr>
                                        <td id="border-white" class="center" ></td>
                                        <td id="border-white" class="center" ></td>
                                        <td id="border-white" class="center" ><?php if ($totalh==$mcompararh) { echo $totalh;} ?>
                                                                              
                                                                              <?php if ($totalh!=$mcompararh) {?> <div class="red-text"> <b> <?php echo $totalh ?> </b> </div> <?php } ?>
                                        
                                        </td>
                                        <td id="border-white" class="center" ></td>
                                        
                                        <td id="border-white" class="center" >
                                            <?php if ($contador==$mcomparar) {echo $contador;}  ?>
                                            <?php if ($contador!=$mcomparar) {?> <div class="red-text"> <b> <?php {echo $contador;}  ?> </b> </div> <?php } ?>
                                        </td>
                                       
                                            
                                        
                                </tr>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                <!--  tabla -->

                
   <!-- terminar -->
 <form action="../c/termycond.php?m=updateDb3&termycondId=<?php echo $termycondId?>&serviceId=<?php echo $serviceId?>&clientId=<?php echo $clientId?> "method="post">  
 <div class="row">
                                           
                                            <div class="col s12">
                                            <label>
                                                <input type="radio" name="approved" value="33" required/>
                                                <span class="blue-grey-text text-darken-2"><span class="red-text">Devolver</span>, para revisi&oacute;n y/o correcci&oacute;n!</span>";
                                            </label>
                                        </div>
                                        <div class="col s12">
                                            <label>
                                                <input type="radio" name="approved" value="4"/>
                                                <span class="blue-grey-text text-darken-2"><span class="blue-text">Aprobar</span>, Revisado y Corregido!</span>
                                            </label>
                                        </div>
                                            <div class="col s12 m-t-20">
                                                <label>
                                                    <input name="ok" type="checkbox" required=""/>
                                                    <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                </label>
                                            </div>
                                           

                                            <div class="col s12 m-t-20 m-b-10">
                                                <a href="javascript: history.go(-1)" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
                                                </a>
                                                <button type="submit" class="btn blue waves-effect tooltipped m-l-5" data-position="top" data-tooltip="Guardar"><i class="material-icons">save</i></button>
                                            </div>

         
                         </div>    
  </form>                   
          <!-- terminar -->                
                
        
  

<!--  end contenido de roles de proyecto -->
        
    </div>
</div>   


    
              <ul class="collapsible m-l-10 m-r-10">
    <li>
        <div class="collapsible-header blue-grey-text text-darken-2">
            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                Traza de Terminos y Condiciones 
        </div>

        <div class="collapsible-body">
                             
                                      
        </div>
    </li>
 </ul>        
                 
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