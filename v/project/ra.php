  <!-- Modal Activo -->
 <div id="activo" class="modal ">
            <div class="modal-header" style="background-color:#607d8b;">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        <h6><a href="#!" class="breadcrumb white-text">Agregar </a>
                        <a href="#!" class="breadcrumb white-text ">Activo</a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        </a></h6>
                    </div>
                </div>
            </div>
      
            <div class="modal-content m-t--10">
 <form id="form_validation" action="../c/project.php?m=ra&c=<?php echo $c;?>&amId=<?php echo $amId;?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>&a=1" method="post">
 
    <div class="row">

    <?php 
    $_c1 = mysqli_query($connection, "SELECT * FROM ractivo WHERE projectId = '" . $c . "' AND  rubroId = 1 and amId = '" . $amId . "'");
    $_c2 = mysqli_query($connection, "SELECT * FROM ractivo WHERE projectId = '" . $c . "' AND  rubroId = 2 and amId = '" . $amId . "'");
    $_c3 = mysqli_query($connection, "SELECT * FROM ractivo WHERE projectId = '" . $c . "' AND  rubroId = 3 and amId = '" . $amId . "'");
    $_c4 = mysqli_query($connection, "SELECT * FROM ractivo WHERE projectId = '" . $c . "' AND  rubroId = 4 and amId = '" . $amId . "'");
    $_c5 = mysqli_query($connection, "SELECT * FROM ractivo WHERE projectId = '" . $c . "' AND  rubroId = 5 and amId = '" . $amId . "'");  
    $_c6 = mysqli_query($connection, "SELECT * FROM ractivo WHERE projectId = '" . $c . "' AND  rubroId = 6 and amId = '" . $amId . "'");
    $_c7 = mysqli_query($connection, "SELECT * FROM ractivo WHERE projectId = '" . $c . "' AND  rubroId = 7 and amId = '" . $amId . "'"); 
    $_c8 = mysqli_query($connection, "SELECT * FROM ractivo WHERE projectId = '" . $c . "' AND  rubroId = 8 and amId = '" . $amId . "'");
    $_c9 = mysqli_query($connection, "SELECT * FROM ractivo WHERE projectId = '" . $c . "' AND  rubroId = 9 and amId = '" . $amId . "'");
    $_c10 = mysqli_query($connection, "SELECT * FROM ractivo WHERE projectId = '" . $c . "' AND  rubroId = 10 and amId = '" . $amId . "'");
    $_c11 = mysqli_query($connection, "SELECT * FROM ractivo WHERE projectId = '" . $c . "' AND  rubroId = 11 and amId = '" . $amId . "'"); 
    $_c12 = mysqli_query($connection, "SELECT * FROM ractivo WHERE projectId = '" . $c . "' AND  rubroId = 12 and amId = '" . $amId . "'");
    $_c13 = mysqli_query($connection, "SELECT * FROM ractivo WHERE projectId = '" . $c . "' AND  rubroId = 13 and amId = '" . $amId . "'");
    $_c14 = mysqli_query($connection, "SELECT * FROM ractivo WHERE projectId = '" . $c . "' AND  rubroId = 14 and amId = '" . $amId . "'");
    $_c15 = mysqli_query($connection, "SELECT * FROM ractivo WHERE projectId = '" . $c . "' AND  rubroId = 15 and amId = '" . $amId . "'");
    $_c16 = mysqli_query($connection, "SELECT * FROM ractivo WHERE projectId = '" . $c . "' AND  rubroId = 16 and amId = '" . $amId . "'");?>
    
    
    
            <!-- select de rubro en refencia a Activo    -->                       
            <div class="col s12 m4 m-t--20">
                <div class="input-field">
                    <small>Rubro</small>
                    <select name="rubroId" placeholder="" class="form-control">
                        <?php if ($cx = $_c1 -> fetch_object() == null){?><option value="1">Efectivo</option><?php }?>
                        <?php if ($cx = $_c2 -> fetch_object() == null){?><option value="2"> Cuentas por Cobrar</option><?php }?>
                        <?php if ($cx = $_c3 -> fetch_object() == null){?><option value="3">Compañias Relacionadas</option><?php }?>
                        <?php if ($cx = $_c4 -> fetch_object() == null){?><option value="4"> Inventarios</option><?php }?>
                        <?php if ($cx = $_c5 -> fetch_object() == null){?> <option value="5">Propiedades, Plantas y Equipos</option><?php }?>
                        <?php if ($cx = $_c6 -> fetch_object() == null){?><option value="6">Gastos Pagados por Anticipado</option><?php }?>
                        <?php if ($cx = $_c7 -> fetch_object() == null){?> <option value="7">Inversiones</option><?php }?>
                    </select>
                </div>
            </div>
            <!-- Monto referente a las Fechas y observaciones     -->                   
            <div class="col s12 m2 m-t--20">
                <div class="input-field">
                    <small>Monto </small>
                    <input style="text-align: right;" type="number" name="monto1" class="form-control" required="">
                </div>
            </div>
            <div class="col s12 m2 m-t--20">
                <div class="input-field">
                    <small>Monto </small>
                    <input style="text-align: right ;" type="number" name="monto2" class="form-control" required="">
                </div>
            </div>
            <div class="col s12 m3 m-t--20">
                <div class="input-field">
                    <small>Observaci&oacute;n </small>
                    <input style="text-align: right ;" type="text" name="text" class="form-control" required="">
                </div>
            </div>
                   
    </div>  
         <div class="row">
                                                    <div class="col s12 m-t-10 ">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                                </div>
                                      
    <div class="row">
            <div class="col s2 m-t-10">
                <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                    <i class="material-icons">save</i>
                </button>
            </div>     
        
    </div>
</form>

                <p>

                </p>
                <div class="m-t-20"></div>
         
     
        
            </div>

    <div class="modal-footer">
      
     <div class="row">
                                <div class="col s12 m-t--10 ">
                                    <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                </div>
  </div>
    </div>
    <div class="m-t--20"></div>
</div>
<!-- Aqui termina activo     -->                 



 <!-- Modal Pasivo -->
<div id="p" class="modal">
            <div class="modal-header" style="background-color:#607d8b;">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        <h6><a href="#!" class="breadcrumb white-text">Agregar </a>
                        <a href="#!" class="breadcrumb white-text ">Pasivo</a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        </a></h6>
                    </div>
                </div>
            </div>
      
            <div class="modal-content m-t--10">
<form id="form_validation" action="../c/project.php?m=ra&c=<?php echo $c;?>&amId=<?php echo $amId;?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>&a=2" method="post">
    <div class="row">              
            <!-- input de pasivo   -->
       
            <!-- select de rubro en refencia a pasivo   -->                       
            <div class="col s12 m5">
                <div class="input-field">
                    <small>Rubro</small>
                    <select name="rubroId" placeholder="" class="form-control">
                    <?php if ($cx = $_c8 -> fetch_object() == null){?><option value="8">Cuentas por Pagar</option><?php }?>
                    <?php if ($cx = $_c9 -> fetch_object() == null){?><option value="9">Obligaciones Bancarias</option><?php }?>
                    <?php if ($cx = $_c10 -> fetch_object() == null){?><option value="10"> Nómina</option><?php }?>
                    <?php if ($cx = $_c11 -> fetch_object() == null){?><option value="11">Gastos Acumulados</option><?php }?>
                    <?php if ($cx = $_c12 -> fetch_object() == null){?><option value="12"> Impuestos</option><?php }?>
                                       
                    </select>
                </div>
            </div>
            <!-- Monto referente a las Fechas y observaciones     -->                   
            <div class="col s12 m2">
                <div class="input-field">
                    <small>Monto </small>
                    <input style="text-align: right;" type="number" name="monto1" class="form-control" required="">
                </div>
            </div>
            <div class="col s12 m2">
                <div class="input-field">
                    <small>Monto </small>
                    <input style="text-align: right ;" type="number" name="monto2" class="form-control" required="">
                </div>
            </div>
            <div class="col s12 m3">
                <div class="input-field">
                    <small>Observaci&oacute;n </small>
                    <input style="text-align: right ;" type="text" name="text" class="form-control" required="">
                </div>
            </div>
                    
                 
    </div> 
  
         <div class="row">
                                                    <div class="col s12 m-t-10 ">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                                </div>
                                      
    <div class="row">
            <div class="col s2 m-t-10">
                <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                    <i class="material-icons">save</i>
                </button>
            </div>     
        
    </div>
</form>  

                <p>

                </p>
                <div class="m-t-20"></div>
         
     
        
            </div>

    <div class="modal-footer">
      
     <div class="row">
                                <div class="col s12 m-t--10 ">
                                    <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                </div>
  </div>
    </div>
    <div class="m-t--20"></div>
</div>

<!-- end pasivo -->



 <!-- Modal Patrimonio -->
<div id="pp" class="modal">
            <div class="modal-header" style="background-color:#607d8b;">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        <h6><a href="#!" class="breadcrumb white-text">Agregar </a>
                        <a href="#!" class="breadcrumb white-text ">Patrimonio</a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        </a></h6>
                    </div>
                </div>
            </div>
      
            <div class="modal-content m-t--10">
    <div class="row">
        <form id="form_validation" action="../c/project.php?m=ra&c=<?php echo $c;?>&amId=<?php echo $amId;?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>&a=3" method="post">
            <!-- input de patrimonio   -->
           
            <!-- select de rubro en refencia a patrimonio    -->                       
            <div class="col s12 m5">
                <div class="input-field">
                    <small>Rubro</small>
                    <select name="rubroId" placeholder="" class="form-control">
                    <?php if ($cx = $_c13 -> fetch_object() == null){?> <option value="13">Patrimonio</option><?php }?>
                    <?php if ($cx = $_c14 -> fetch_object() == null){?><option value="14"> Ganancias y Pérdidas</option><?php }?>
                    <?php if ($cx = $_c15 -> fetch_object() == null){?><option value="15">Otros Procedimientos</option><?php }?>                
                    <?php if ($cx = $_c16 -> fetch_object() == null){?><option value="16">General</option><?php }?>
                    </select>
                </div>
            </div>
            <!-- Monto referente a las Fechas y observaciones     -->                   
            <div class="col s12 m2">
                <div class="input-field">
                    <small>Monto </small>
                    <input style="text-align: right;" type="number" name="monto1" class="form-control" required="">
                </div>
            </div>
            <div class="col s12 m2">
                <div class="input-field">
                    <small>Monto </small>
                    <input style="text-align: right ;" type="number" name="monto2" class="form-control" required="">
                </div>
            </div>
            <div class="col s12 m3">
                <div class="input-field">
                    <small>Observaci&oacute;n </small>
                    <input style="text-align: right ;" type="text" name="text" class="form-control" required="">
                </div>
            </div>
               
                 
    </div>  
         <div class="row">
                                                    <div class="col s12 m-t-10 ">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                                </div>
                                      
    <div class="row">
            <div class="col s2 m-t-10">
                <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                    <i class="material-icons">save</i>
                </button>
            </div>     
        
    </div>
</form>

                <p>

                </p>
                <div class="m-t-20"></div>
         
     
        
            </div>

    <div class="modal-footer">
      
     <div class="row">
                                <div class="col s12 m-t--10 ">
                                    <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                </div>
  </div>
    </div>
    <div class="m-t--20"></div>
</div>

<!-- end pasivo -->