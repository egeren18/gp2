<div class="row">
        <div class="col s12 m-t-20">
            <ul class="collapsible m-l-10 m-r-10">
            <form action="../c/project.php?m=updateAsignarDb&cod=<?php echo 2;?>&a=<?php echo  1;?>&userId=<?php echo $user -> userId;?>&projectId=<?php echo $p;?>&md=<?php echo $b;?>&serviceId=<?php echo $a;?>&u=<?php echo $u;?>" method="post" enctype="multipart/form-data">          
    <li>
    <!-- preguntas -->                                                                          
                                <!-- el beta-->                                           
                                    <!-- ul con las categorrias y preguntas  -->
                                    <div class="row invisible">
                                        <div class="col s12 m12 l12 ">
                                            <ul class="collapsible ">         
                                            
                                            
                                            
                                            <?php 
                                            
                                            $_cp11 = mysqli_query($appa, "
                                                    SELECT * FROM project$v 
                                                ");

                                            $contador = 0;
                                            while($cp = $_cp11 -> fetch_object())
                                            {
                                                $contador++;  
                                                
                                            
                                        // <!-- Categoria 1 -->
                                                $_cpx1 = mysqli_query($appc, "
                                                    SELECT * FROM project$v
                                                    WHERE cacId = '" . $contador .  "' AND  etapaId = 2
                                                    ");
                                            if($cp = $_cpx1 -> fetch_object() != null) {
                                        
                                                $_ccc = mysqli_query($pquest, "
                                                    SELECT * FROM permisos$vv 
                                                    WHERE cacId = '" . $contador .  "' AND userId = '" . $user -> userId . "'
                                                ");
                                                
                                                $_cac1 = mysqli_query($appc , "
                                                    SELECT * FROM project$v
                                                    WHERE cacId = '" . $contador .  "' 
                                                ");
                                                $cac1 = $_cac1 -> fetch_object();
                                                $cac1Name = $cac1 -> cacName;
                                            
                                            ?>
                                                <li>
                                                    <div class="collapsible-header">
                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                        <span class="blue-grey-text text-darken-2"><?php echo $cac1Name;?></span>
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <div class="field_wrapper ">
                                                            <div class="row">
                                                                <div class="col l12">
                                                                        <table>
                                                                                        <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                                                                            <th style="width:5%;" >Nro</th>
                                                                                            <th id="border-white" style="width:55%;">Actividad</th>
                                                                                            <th id="border-white" class="" style="width:20%;"> ASIGNAR PERMISOS </th>
                                                                                            <th id="border-white" class="" style="width:20%;"> Tiempo</th>
                                                                                            
                                                                                        </tr>
                                                                <?php
                                                                $ccontador= 0;
                                                                while ($cp = $_ccc -> fetch_object()) {
                                                                    $ccontador++;
                                                                    $canId = $cp -> actividadId;
                                                                    $mo = $cp -> modeloId;
                                                                    
                                                                    $_cac11 = mysqli_query($appa , "
                                                                            SELECT * FROM project$v
                                                                            WHERE actividadId = '" . $canId.  "' 
                                                                        ");
                                                                        $cac11 = $_cac11 -> fetch_object();
                                                                        $can = $cac11 -> actividadName;
                                                                    ?>
                                                                    
                                                                                
                                                                                <tr class="m-t--10 m-b--10">
                                                                                    <td id="border-grey"><?php echo $cp -> mId;?></td>
                                                                                    <td id="border-grey">
                                                                                        <label>
                                                                                            
                                                                                            <input  value="<?php echo $cp -> amId; ?>" type="hidden" name="" /> 
                                                                                                    <?php echo $can;?> 
                                                                                        </label>
                                                                                    </td>
                                                                                    <td>
                                                                                    <?php 
                                                                                    if($user -> userId == $cp ->  userComplete ) {?>
                                                                                    <a class=" tooltipped"  data-tooltip="Completa">
                                                                                        <input value="<?php echo $cp -> amId;?>"
                                                                                        type="hidden" id="a" name="moduleId[]" />
                                                                                            <label class="">
                                                                                                <input   value="1"  <?php if ($cp -> role == 1){?> checked <?php } ?>
                                                                                                type="radio" name="jb[<?php echo $cp -> amId;?>]"/> 
                                                                                                <span class="blue-grey-text text-darken-2"></span>
                                                                                            </label>
                                                                                        </a>  
                                                                                        
                                                                                        <a class=" tooltipped"  data-tooltip="Revisa">
                                                                                        <input value="<?php echo $cp -> amId;?>" type="hidden" id="a"  name="moduleId2[]" />
                                                                                            <label class="">
                                                                                                <input   value="2"  <?php if ($cp -> role == 2){?> checked <?php } ?>
                                                                                                type="radio" name="jb[<?php echo $cp -> amId;?>]"/> 
                                                                                                <span class="blue-grey-text text-darken-2"></span>
                                                                                            </label>
                                                                                        </a>  
                                                                                        
                                                                                        <a class=" tooltipped"  data-tooltip="Consulta">
                                                                                        <input value="<?php echo $cp -> amId;?>" type="hidden" id="a" name="moduleId3[]" />
                                                                                            <label class="">
                                                                                                <input   value="3"  <?php if ($cp -> role == 3){?> checked <?php } ?>
                                                                                                type="radio" name="jb[<?php echo $cp -> amId;?>]"/> 
                                                                                                <span class="blue-grey-text text-darken-2"></span>
                                                                                            </label>
                                                                                        </a>  
                                                                                    <?php } ?>
                                                                                    
                                                                                    <?php 
                                                                                    $_ccc2 = mysqli_query($pquest, "
                                                                                                SELECT * FROM permisos$vv 
                                                                                                WHERE amId = '" . $cp -> amId .  "' AND userComplete !=0
                                                                                            ");
                                                                                            $aa = 0;
                                                                                            while   ($ccc2 = $_ccc2 -> fetch_object())
                                                                                            {
                                                                                                $aa++;
                                                                                            }
                                                                                    if($aa > 0 and $cp -> userComplete == 0) {?>
                                                                                    <a class=" tooltipped"  data-tooltip="Completa">
                                                                                    <input value="<?php echo $cp -> amId;?>" type="hidden" id="a"  name="moduleId[]" />
                                                                                            <label class="">
                                                                                                <input name="group1<?php echo $cp -> amId; ?>" type="radio" checked disabled="disabled"  />
                                                                                                <span class="blue-grey-text text-darken-2"></span>
                                                                                            </label>
                                                                                        </a>  
                                                                                        
                                                                                        <a class=" tooltipped"  data-tooltip="Revisa">
                                                                                            <input value="<?php echo $cp -> amId;?>" type="hidden" id="a"  name="moduleId2[]" />
                                                                                                <label class="">
                                                                                                    <input   value="2"  <?php if ($cp -> role == 2){?> checked <?php } ?>
                                                                                                    type="radio" name="jb[<?php echo $cp -> amId;?>]"/> 
                                                                                                    <span class="blue-grey-text text-darken-2"></span>
                                                                                                </label>
                                                                                        </a>  
                                                                                        
                                                                                        <a class=" tooltipped"  data-tooltip="Consulta">
                                                                                        <input value="<?php echo $cp -> amId;?>" type="hidden" id="a" name="moduleId3[]" />
                                                                                            <label class="">
                                                                                                <input   value="3"  <?php if ($cp -> role == 3){?> checked <?php } ?>
                                                                                                type="radio" name="jb[<?php echo $cp -> amId;?>]"/> 
                                                                                                <span class="blue-grey-text text-darken-2"></span>
                                                                                            </label>
                                                                                        </a>  
                                                                                    <?php } ?>
                                                                                    
                                                                                    
                                                                                    <?php  if($cp ->  userComplete == 0 and $aa == 0 ) {?>
                                                                                    <a class=" tooltipped"  data-tooltip="Completa">
                                                                                        <input value="<?php echo $cp -> amId;?>"
                                                                                        type="hidden" id="a" name="moduleId[]" />
                                                                                            <label class="">
                                                                                                <input   value="1"  <?php if ($cp -> role == 1){?> checked <?php } ?>
                                                                                                type="radio" name="jb[<?php echo $cp -> amId;?>]"/> 
                                                                                                <span class="blue-grey-text text-darken-2"></span>
                                                                                            </label>
                                                                                        </a>  
                                                                                        
                                                                                        <a class=" tooltipped"  data-tooltip="Revisa">
                                                                                        <input value="<?php echo $cp -> amId;?>" type="hidden" id="a"  name="moduleId2[]" />
                                                                                            <label class="">
                                                                                                <input   value="2"  <?php if ($cp -> role == 2){?> checked <?php } ?>
                                                                                                type="radio" name="jb[<?php echo $cp -> amId;?>]"/> 
                                                                                                <span class="blue-grey-text text-darken-2"></span>
                                                                                            </label>
                                                                                        </a>  
                                                                                        
                                                                                        <a class=" tooltipped"  data-tooltip="Consulta">
                                                                                        <input value="<?php echo $cp -> amId;?>" type="hidden" id="a" name="moduleId3[]" />
                                                                                            <label class="">
                                                                                                <input   value="3"  <?php if ($cp -> role == 3){?> checked <?php } ?>
                                                                                                type="radio" name="jb[<?php echo $cp -> amId;?>]"/> 
                                                                                                <span class="blue-grey-text text-darken-2"></span>
                                                                                            </label>
                                                                                        </a>  
                                                                                    <?php } ?>
                                                                                    </td>
                                                                                    <td class="m-t--10">
                                                                                    
                                                                                    <div class="input-field col s4" >
                                                                                        <input placeholder="Tiempo" id="tiempo" type="text"  name="tiempo<?php echo $cp -> amId;?>" value="<?php echo number_format($cp -> tiempo,2,',','.');?>" class="validate right-align" >
                                                                                    </div>
                                                                                    <div class="input-field col s8">
                                                                                        <select name="tiempoId<?php echo $cp -> amId;?>">
                                                                                        <?php if($cp -> tiempoId == 0) {?>
                                                                                            <option value="" disabled selected>Seleccionar</option>

                                                                                        <?php } else {?>
                                                                                            <?php if ($cp -> tiempoId == 1) {
                                                                                                $name = 'Minutos';
                                                                                            }
                                                                                             if ($cp -> tiempoId == 2) {
                                                                                                $name = 'Horas';
                                                                                            }
                                                                                            
                                                                                            ?>

                                                                                            <option value="<?php echo $cp -> tiempoId;?> "selected> <?php echo $name;?> </option>
                                                                                    
                                                                                            
                                                                                            </option>
                                                                                        
                                                                                        
                                                                                        <?php }?>    
                                                                                            
                                                                                            <option value="1">Minutos</option>
                                                                                            <option value="2">Horas</option>    
                                                                                        </select>

                                                                                    </div>    

                                                                                    </td>
                                                                                    <!--    
                                                                                        <td id="border-grey">

                                                                                        <a class=" tooltipped"  data-tooltip="Completa">
                                                                                            <label class="">
                                                                                                <input   value="1"  type="radio" name="jRead[<?php // echo $ccontador; ?>]" required/> 
                                                                                                <span class="blue-grey-text text-darken-2"></span>
                                                                                            </label>
                                                                                        </a>  
                                                                                        <a class=" tooltipped"  data-tooltip="Revisa">
                                                                                            <label class="">
                                                                                                <input   value="2"  type="radio" name="jRead[<?php // echo $ccontador; ?>]"/> 
                                                                                                <span class="blue-grey-text text-darken-2"></span>
                                                                                            </label>
                                                                                        </a>  
                                                                                        <a class=" tooltipped"  data-tooltip="Revisa y cierra el proyecto">
                                                                                            <label class="">
                                                                                                <input   value="3"  type="radio" name="jRead[<?php // echo $ccontador; ?>]"/> 
                                                                                                <span class="blue-grey-text text-darken-2"></span>
                                                                                            </label>
                                                                                        </a>  
                                                                                        <a class=" tooltipped"  data-tooltip="Consultar">
                                                                                            <label class="">
                                                                                                <input   value="4"  type="radio" name="jRead[<?php //echo $ccontador; ?>]"/> 
                                                                                                <span class="blue-grey-text text-darken-2"></span>
                                                                                            </label>
                                                                                        </a>       

                                                                                        </td>
                                                                                        <td>
                                                                                        <div class="input-field ">
                                                                                        <input  value=""  type="number" class="validate">
                                                                                            </div>


                                                                                        </td>
                                                                -->
                                                                                        </tr>
                                                                                    
                                                                                
                                                            <?php } ?>
                                                            </table>
                                                                        
                                                                    </div>     
                                                            </div>
                                                        </div>
                                                </div>
                                                </li>
                                                <?php }} ?>
                                        <!-- Categoria 1 -->
                                        
                                                                <!-- despegable -->                
                                                            </div>
                                                        </div>
    <!-- preguntas -->      
    </li>            


                                        
                                    
            </ul>
        </div>    
    </div>    

    <div class="row">
                                                <div class="col s12 m-t-20">
                                                    <label>
                                                        <input type="checkbox" class="validate filled-in" required="" />
                                                        <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                    </label>
                                                </div>
    </div>

    <div class="row">
                                        <div class="col s12 m-t-20">
                                            <a href="javascript: history.go(-1)" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                <i class="material-icons">cancel</i>
                                            </a>
                                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                                <i class="material-icons">save</i>
                                            </button>
                                        </div>
    </div>
                                            
                                            
                                            
                                            </form> 