    <li>                                           
   
                                            <div class="collapsible-header blue-grey-text text-darken-2" tabindex="0">
                                                <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                Efectivo
                                            </div>                                                                                                                                  
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                  <tr> 
                                                     <td class=""  style="width:86%; color:#455a64;" >
                                                               
                                                                ACTIVIDADES
                                                    </td>
                                                     <td class="" style="color:#0091ea ;"  >
                                                               ASIGNAR PERMISOS 
                                                       </td>
                                              </tr> 
                                              </tbody>
                                                </table>
<?php 

$_permiso = mysqli_query($connection, "
    SELECT * FROM permiso
    WHERE projectId = '" . $c . "'
    AND rubroId = 1
    ORDER BY srubroId
");
$permiso = $_permiso -> fetch_object();
$projectId = $permiso -> projectId;
$rubroId = $permiso -> rubroId;


if ($projectId == $c AND $rubroId == 1) {    ?>

    <form action="../c/project.php?m=updateAsignarpDb&cod=<?php echo 2; ?>&a=<?php echo  1; ?>&b=<?php echo  1; ?>&c=<?php echo  $c; ?>&p=11" method="post" enctype="multipart/form-data">      
   
    <?php    while ($modulep = $_module -> fetch_object()) {

        $_access = mysqli_query($connection, "
            SELECT * FROM permiso
            WHERE srubroId = '" . $modulep -> srubroId  . "'
        ");
        
        $access = $_access -> fetch_object();
        
        $_name = mysqli_query($master, "
            SELECT * FROM srubro
            WHERE srubroId = '" . $modulep -> srubroId  . "'
        ");
    
        $name = $_name -> fetch_object();   
    
    
    ?>
                      <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
    
                            <td class=" blue-grey lighten-2 white-text td-block" style="width:80%">
                            <?php echo $name -> sRubroName;?>
                                
                             </td>
                             
                             <td  class="">
                                   <a class=" tooltipped"  data-tooltip="Completa">
                                       <input value="<?php echo $modulep -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input   value="<?php echo $modulep -> srubroId; ?>" 
                                                                <?php echo $checked = $access -> designateId == 1 ? 'checked' : ''; ?> 
                                                                type="checkbox"  name="jC[<?php echo $modulep -> srubroId; ?>]"/> 
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                                                  </a>
                                 
                                  </td>

                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa">
                                            <input value="<?php echo $modulep -> srubroId; ?>" type="hidden" name="moduleId2[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $modulep -> srubroId; ?>"
                                                                <?php echo $checked = $access -> designateId == 2 ? 'checked' : ''; ?> 
                                                                type="checkbox"  name="jR[<?php echo $modulep -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                               
                                 </td>
                                 
                                 <td class=" white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa y cierra el proyecto.">
                                            <input value="<?php echo $modulep -> srubroId; ?>" type="hidden" name="moduleId3[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $modulep -> srubroId; ?>"
                                                                <?php echo $checked = $access -> designateId == 3 ? 'checked' : ''; ?> 
                                                                type="checkbox"  name="jCr[<?php echo $modulep -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> </a>
                                  </td>
                                  
                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Consultar">
                                            <input value="<?php echo $modulep -> srubroId; ?>" type="hidden" name="moduleId4[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input value="<?php echo $modulep -> srubroId; ?>"
                                                                <?php echo $checked = $access -> designateId == 4 ? 'checked' : ''; ?> 
                                                                type="checkbox"  name="jConsulta[<?php echo $modulep -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                                  </td>                                 
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>


    
<?php }?> 
<div class="row">
                                            <div class="col s12 m-t-30">
                                                <label>
                                                    <input type="checkbox" class="validate filled-in" required="" />
                                                    <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                </label>
                                             </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m-t-20">
                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                            <i class="material-icons">save</i>
                                        </button>
                                    </div> 
                                </div>
                                </form>

<?php }
else{ ?>                                            
<form action="../c/project.php?m=updateAsignarpDb&cod=<?php echo 2; ?>&a=<?php echo  1; ?>&b=<?php echo  1; ?>&c=<?php echo  $c; ?>&p=1" method="post" enctype="multipart/form-data">                                              
                                                <?php
                                                
                                                while ($module = $_module -> fetch_object()) {

                                                    $_access = mysqli_query($connection, "
                                                        SELECT * FROM test
                                                        WHERE srubroId = '" . $module -> srubroId  . "'
                                                    ");
                                                    
                                                    $access = $_access -> fetch_object();
                                                    
                                                    $_name = mysqli_query($master, "
                                                        SELECT * FROM srubro
                                                        WHERE srubroId = '" . $module -> srubroId  . "'
                                                    ");
                                                
                                                    $name = $_name -> fetch_object();

                                                 ?>
                                                  <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
    
                            <td class=" blue-grey lighten-2 white-text td-block" style="width:80%">
                            <?php echo $name -> sRubroName;?>
                                
                             </td>
                             
                             <td  class="">
                                   <a class=" tooltipped"  data-tooltip="Completa">
                                       <input value="<?php echo $module -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input   value="<?php echo $module -> srubroId; ?>"
                                                                type="checkbox"  name="jC[<?php echo $module -> srubroId; ?>]"/> 
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                                                  </a>
                                 
                                  </td>

                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa">
                                            <input value="<?php echo $module -> srubroId; ?>" type="hidden" name="moduleId2[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module -> srubroId; ?>"
                                                                type="checkbox"  name="jR[<?php echo $module -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                               
                                 </td>
                                 
                                 <td class=" white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa y cierra el proyecto.">
                                            <input value="<?php echo $module -> srubroId; ?>" type="hidden" name="moduleId3[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module -> srubroId; ?>"
                                                                type="checkbox"  name="jCr[<?php echo $module -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> </a>
                                  </td>
                                  
                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Consultar">
                                            <input value="<?php echo $module -> srubroId; ?>" type="hidden" name="moduleId4[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input value="<?php echo $module -> srubroId; ?>"
                                                                type="checkbox"  name="jConsulta[<?php echo $module -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                                  </td>                                 
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>


                                                <?php } ?>
                                                 
                                <div class="row">
                                            <div class="col s12 m-t-30">
                                                <label>
                                                    <input type="checkbox" class="validate filled-in" required="" />
                                                    <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                </label>
                                             </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m-t-20">
                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                            <i class="material-icons">save</i>
                                        </button>
                                    </div> 
                                </div>
                                </form>

                                <?php } ?>                                    
                                            </div>
                                             
                                        </li>     