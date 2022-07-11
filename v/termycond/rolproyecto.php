<form action="../c/termycond.php?m=createDb3&termycondId=<?php echo $termycondId?>&serviceId=<?php echo $serviceId?>&clientId=<?php echo $clientId?> "method="post">
    <div class="row">
        <div class="col s12 m-t-20">
       
                
                    <ul class="collection">
                        <li class="collection-item blue-grey lighten-2 white-text">Roles del Proyecto</li>
                    </ul>
                    <div class="row">
                        <div class="col s12 m4">
                            <div class="input-field">
                                <small>Roles</small>
                              <select name="roleId" placeholder="" class="form-control">
                                         <option value="">&nbsp;</option>
                                             <?php while ($r_role = mysqli_fetch_array($roleAc)) { ?>
                                                <?php $roleId = $r_role["roleId"]; $roleName = $r_role["roleName"]; ?>
                                                <option value="<?php echo $roleId; ?>"><?php echo $roleName; ?></option>
                                                <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="input-field">
                                <small>Linea de Servicio</small>
                                <select name="lineId" placeholder="" class="validate" required="">
                                    <option value="">&nbsp;</option>
                                    <?php while ($r_line = mysqli_fetch_array($line)) { ?>
                                    <?php $lineId = $r_line["lineId"]; $lineName = $r_line["lineName"]; ?>
                                    <option value="<?php echo $lineId; ?>"><?php echo $lineName; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>H/H Proyecto</small>
                                <input style="text-align: center;" type="text" name="hour" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Tarifa Real por Rol</small>
                                <input style="text-align: right ;" type="number" name="amount" class="form-control" required="">
                            </div>
                        </div>
                        
                        <div class="col s1 m-t-30">
                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m-b-10">
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
                
          
        </div>
   
    
    
    </form>