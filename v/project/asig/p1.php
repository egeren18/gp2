<div class="row">
     <div class="col s12 m-t-20">
         <ul class="collapsible m-l-10 m-r-10">
      
  <!-- 1 planificacion = p1
  Aréa 1 de planificacion
   -->
   <?php include 'p1-1.php'; ?>                       
                           
 <!-- 1 planificacion = p1
  Aréa 2 de planificacion
   -->
     <?php include 'p1-2.php'; ?>    
 <!-- 1 planificacion = p1
  Aréa 3 de planificacion
   -->
 <?php include 'p1-3.php'; ?>    

 <!-- 1 planificacion = p1
  Aréa 4 de planificacion
   -->

 <?php include 'p1-4.php'; ?>    

 <!-- 1 planificacion = p1
  Aréa 5 de planificacion
   -->

   <li>
                                            <div class="collapsible-header blue-grey-text text-darken-2  ">
                                                               <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                               Propiedades, Plantas y Equipos
                                
                                
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
                                                while ($module5 = $_module5 -> fetch_object()) {

                                                    $_access = mysqli_query($connection, "
                                                        SELECT * FROM test
                                                        WHERE srubroId = '" . $module5 -> srubroId  . "'
                                                    ");
                                                    
                                                    $access = $_access -> fetch_object();
                                                    
                                                    $_name = mysqli_query($master, "
                                                        SELECT * FROM srubro
                                                        WHERE srubroId = '" . $module5 -> srubroId  . "'
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
                                       <input value="<?php echo $module5 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input   value="<?php echo $module5 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module5 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                                                  </a>
                                 
                                  </td>

                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa">
                                            <input value="<?php echo $module5 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module5 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module5 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                               
                                 </td>
                                 
                                 <td class=" white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa y cierra el proyecto.">
                                            <input value="<?php echo $module5 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module5 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module5 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> </a>
                                  </td>
                                  
                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Consultar">
                                            <input value="<?php echo $module5 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input value="<?php echo $module5 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module5 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                                  </td>
                                                        </tr>
                                                    </tbody>
                                                </table>


                                                <?php } ?>
                                            </div>
                                        </li>
      <!-- 1 planificacion = p1
  Aréa 6 de planificacion
   -->

   <li>
                                            <div class="collapsible-header blue-grey-text text-darken-2 ">
                                             
                                                               <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                               Gastos Pagados por Anticipado
                                

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
                                                while ($module6 = $_module6 -> fetch_object()) {

                                                    $_access = mysqli_query($connection, "
                                                        SELECT * FROM test
                                                        WHERE srubroId = '" . $module6 -> srubroId  . "'
                                                    ");
                                                    
                                                    $access = $_access -> fetch_object();
                                                    
                                                    $_name = mysqli_query($master, "
                                                        SELECT * FROM srubro
                                                        WHERE srubroId = '" . $module6 -> srubroId  . "'
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
                                       <input value="<?php echo $module6 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input   value="<?php echo $module6 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module6 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                                                  </a>
                                 
                                  </td>

                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa">
                                            <input value="<?php echo $module6 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module6 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module6 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                               
                                 </td>
                                 
                                 <td class=" white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa y cierra el proyecto.">
                                            <input value="<?php echo $module6 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module6 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module6 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> </a>
                                  </td>
                                  
                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Consultar">
                                            <input value="<?php echo $module6 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input value="<?php echo $module6 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module6 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                                  </td>
                                                        </tr>
                                                    </tbody>
                                                </table>


                                                <?php } ?>
                                            </div>
                                        </li> 

    
      <!-- 1 planificacion = p1
  Aréa 7
   -->

   <li>
                                            <div class="collapsible-header blue-grey-text text-darken-2 ">
                                             
                                                               <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                               Inversiones
                                

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
                                                while ($module7 = $_module7 -> fetch_object()) {

                                                    $_access = mysqli_query($connection, "
                                                        SELECT * FROM test
                                                        WHERE srubroId = '" . $module7 -> srubroId  . "'
                                                    ");
                                                    
                                                    $access = $_access -> fetch_object();
                                                    
                                                    $_name = mysqli_query($master, "
                                                        SELECT * FROM srubro
                                                        WHERE srubroId = '" . $module7 -> srubroId  . "'
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
                                       <input value="<?php echo $module7 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input   value="<?php echo $module7 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module7 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                                                  </a>
                                 
                                  </td>

                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa">
                                            <input value="<?php echo $module7 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module7 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module7 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                               
                                 </td>
                                 
                                 <td class=" white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa y cierra el proyecto.">
                                            <input value="<?php echo $module7 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module7 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module7 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> </a>
                                  </td>
                                  
                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Consultar">
                                            <input value="<?php echo $module7 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input value="<?php echo $module7 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module7 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                                  </td>
                                                        </tr>
                                                    </tbody>
                                                </table>


                                                <?php } ?>
                                            </div>
                                        </li> 
      <!-- 1 planificacion = p1
  Aréa 8
   -->

   <li>
                                            <div class="collapsible-header blue-grey-text text-darken-2 ">
                                             
                                                               <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                               Cuentas por Pagar
                                

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
                                                while ($module8 = $_module8 -> fetch_object()) {

                                                    $_access = mysqli_query($connection, "
                                                        SELECT * FROM test
                                                        WHERE srubroId = '" . $module8 -> srubroId  . "'
                                                    ");
                                                    
                                                    $access = $_access -> fetch_object();
                                                    
                                                    $_name = mysqli_query($master, "
                                                        SELECT * FROM srubro
                                                        WHERE srubroId = '" . $module8 -> srubroId  . "'
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
                                       <input value="<?php echo $module8 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input   value="<?php echo $module8 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module8 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                                                  </a>
                                 
                                  </td>

                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa">
                                            <input value="<?php echo $module8 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module8 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module8 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                               
                                 </td>
                                 
                                 <td class=" white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa y cierra el proyecto.">
                                            <input value="<?php echo $module8 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module8 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module8 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> </a>
                                  </td>
                                  
                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Consultar">
                                            <input value="<?php echo $module8 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input value="<?php echo $module8 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module8 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                                  </td>
                                                        </tr>
                                                    </tbody>
                                                </table>


                                                <?php } ?>
                                            </div>
                                        </li> 

   <!-- 1 planificacion = p1
  Aréa 9
   -->

   <li>
                                            <div class="collapsible-header blue-grey-text text-darken-2 ">
                                             
                                                               <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                               Obligaciones Bancarias
                                

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
                                                while ($module9 = $_module9 -> fetch_object()) {

                                                    $_access = mysqli_query($connection, "
                                                        SELECT * FROM test
                                                        WHERE srubroId = '" . $module9 -> srubroId  . "'
                                                    ");
                                                    
                                                    $access = $_access -> fetch_object();
                                                    
                                                    $_name = mysqli_query($master, "
                                                        SELECT * FROM srubro
                                                        WHERE srubroId = '" . $module9 -> srubroId  . "'
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
                                       <input value="<?php echo $module9 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input   value="<?php echo $module9 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module9 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                                                  </a>
                                 
                                  </td>

                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa">
                                            <input value="<?php echo $module9 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module9 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module9 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                               
                                 </td>
                                 
                                 <td class=" white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa y cierra el proyecto.">
                                            <input value="<?php echo $module9 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module9 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module9 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> </a>
                                  </td>
                                  
                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Consultar">
                                            <input value="<?php echo $module9 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input value="<?php echo $module9 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module9 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                                  </td>
                                                        </tr>
                                                    </tbody>
                                                </table>


                                                <?php } ?>
                                            </div>
                                        </li> 

<!-- 1 planificacion = p1
  Aréa 10   -->

   <li>
                                            <div class="collapsible-header blue-grey-text text-darken-2 ">
                                             
                                                               <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                               Nómina
                                

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
                                                while ($module10 = $_module10 -> fetch_object()) {

                                                    $_access = mysqli_query($connection, "
                                                        SELECT * FROM test
                                                        WHERE srubroId = '" . $module10 -> srubroId  . "'
                                                    ");
                                                    
                                                    $access = $_access -> fetch_object();
                                                    
                                                    $_name = mysqli_query($master, "
                                                        SELECT * FROM srubro
                                                        WHERE srubroId = '" . $module10 -> srubroId  . "'
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
                                       <input value="<?php echo $module10 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input   value="<?php echo $module10 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module10 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                                                  </a>
                                 
                                  </td>

                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa">
                                            <input value="<?php echo $module10 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module10 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module10 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                               
                                 </td>
                                 
                                 <td class=" white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa y cierra el proyecto.">
                                            <input value="<?php echo $module10 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module10 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module10 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> </a>
                                  </td>
                                  
                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Consultar">
                                            <input value="<?php echo $module10 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input value="<?php echo $module10 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module10 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                                  </td>
                                                        </tr>
                                                    </tbody>
                                                </table>


                                                <?php } ?>
                                            </div>
                                        </li> 

<!-- 1 planificacion = p1
  Aréa 11   -->

  <li>
                                            <div class="collapsible-header blue-grey-text text-darken-2 ">
                                             
                                                               <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                               Gastos Acumulados
                                

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
                                                while ($module11 = $_module11 -> fetch_object()) {

                                                    $_access = mysqli_query($connection, "
                                                        SELECT * FROM test
                                                        WHERE srubroId = '" . $module11 -> srubroId  . "'
                                                    ");
                                                    
                                                    $access = $_access -> fetch_object();
                                                    
                                                    $_name = mysqli_query($master, "
                                                        SELECT * FROM srubro
                                                        WHERE srubroId = '" . $module11 -> srubroId  . "'
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
                                       <input value="<?php echo $module11 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input   value="<?php echo $module11 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module11 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                                                  </a>
                                 
                                  </td>

                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa">
                                            <input value="<?php echo $module11 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module11 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module11 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                               
                                 </td>
                                 
                                 <td class=" white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa y cierra el proyecto.">
                                            <input value="<?php echo $module11 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module11 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module11 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> </a>
                                  </td>
                                  
                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Consultar">
                                            <input value="<?php echo $module11 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input value="<?php echo $module11 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module11 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                                  </td>
                                                        </tr>
                                                    </tbody>
                                                </table>


                                                <?php } ?>
                                            </div>
                                        </li> 

<!-- 1 planificacion = p1
  Aréa 12   -->

  <li>
                                            <div class="collapsible-header blue-grey-text text-darken-2 ">
                                             
                                                               <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                               Impuestos
                                

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
                                                while ($module12 = $_module12 -> fetch_object()) {

                                                    $_access = mysqli_query($connection, "
                                                        SELECT * FROM test
                                                        WHERE srubroId = '" . $module12 -> srubroId  . "'
                                                    ");
                                                    
                                                    $access = $_access -> fetch_object();
                                                    
                                                    $_name = mysqli_query($master, "
                                                        SELECT * FROM srubro
                                                        WHERE srubroId = '" . $module12 -> srubroId  . "'
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
                                       <input value="<?php echo $module12 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input   value="<?php echo $module12 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module12 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                                                  </a>
                                 
                                  </td>

                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa">
                                            <input value="<?php echo $module12 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module12 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module12 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                               
                                 </td>
                                 
                                 <td class=" white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa y cierra el proyecto.">
                                            <input value="<?php echo $module12 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module12 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module12 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> </a>
                                  </td>
                                  
                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Consultar">
                                            <input value="<?php echo $module12 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input value="<?php echo $module12 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module12 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                                  </td>
                                                        </tr>
                                                    </tbody>
                                                </table>


                                                <?php } ?>
                                            </div>
                                        </li> 

<!-- 1 planificacion = p1
  Aréa 13   -->

  <li>
                                            <div class="collapsible-header blue-grey-text text-darken-2 ">
                                             
                                                               <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                               Patrimonio
                                

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
                                                while ($module13 = $_module13 -> fetch_object()) {

                                                    $_access = mysqli_query($connection, "
                                                        SELECT * FROM test
                                                        WHERE srubroId = '" . $module13 -> srubroId  . "'
                                                    ");
                                                    
                                                    $access = $_access -> fetch_object();
                                                    
                                                    $_name = mysqli_query($master, "
                                                        SELECT * FROM srubro
                                                        WHERE srubroId = '" . $module13 -> srubroId  . "'
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
                                       <input value="<?php echo $module13 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input   value="<?php echo $module13 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module13 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                                                  </a>
                                 
                                  </td>

                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa">
                                            <input value="<?php echo $module13 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module13 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module13 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                               
                                 </td>
                                 
                                 <td class=" white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa y cierra el proyecto.">
                                            <input value="<?php echo $module13 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module13 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module13 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> </a>
                                  </td>
                                  
                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Consultar">
                                            <input value="<?php echo $module13 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input value="<?php echo $module13 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module13 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                                  </td>
                                                        </tr>
                                                    </tbody>
                                                </table>


                                                <?php } ?>
                                            </div>
                                        </li> 


<!-- 1 planificacion = p1
  Aréa 14   -->

  <li>
                                            <div class="collapsible-header blue-grey-text text-darken-2 ">
                                             
                                                               <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                               Ganancias y Pérdidas
                                

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
                                                while ($module14 = $_module14 -> fetch_object()) {

                                                    $_access = mysqli_query($connection, "
                                                        SELECT * FROM test
                                                        WHERE srubroId = '" . $module14 -> srubroId  . "'
                                                    ");
                                                    
                                                    $access = $_access -> fetch_object();
                                                    
                                                    $_name = mysqli_query($master, "
                                                        SELECT * FROM srubro
                                                        WHERE srubroId = '" . $module14 -> srubroId  . "'
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
                                       <input value="<?php echo $module14 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input   value="<?php echo $module14 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module14 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                                                  </a>
                                 
                                  </td>

                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa">
                                            <input value="<?php echo $module14 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module14 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module14 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                               
                                 </td>
                                 
                                 <td class=" white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa y cierra el proyecto.">
                                            <input value="<?php echo $module14 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module14 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module14 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> </a>
                                  </td>
                                  
                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Consultar">
                                            <input value="<?php echo $module14 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input value="<?php echo $module14 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module14 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                                  </td>
                                                        </tr>
                                                    </tbody>
                                                </table>


                                                <?php } ?>
                                            </div>
                                        </li> 


<!-- 1 planificacion = p1
  Aréa 15   -->

  <li>
                                            <div class="collapsible-header blue-grey-text text-darken-2 ">
                                             
                                                               <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                               Otros Procedimientos

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
                                                while ($module15 = $_module15 -> fetch_object()) {

                                                    $_access = mysqli_query($connection, "
                                                        SELECT * FROM test
                                                        WHERE srubroId = '" . $module15 -> srubroId  . "'
                                                    ");
                                                    
                                                    $access = $_access -> fetch_object();
                                                    
                                                    $_name = mysqli_query($master, "
                                                        SELECT * FROM srubro
                                                        WHERE srubroId = '" . $module15 -> srubroId  . "'
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
                                       <input value="<?php echo $module15 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input   value="<?php echo $module15 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module15 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                                                  </a>
                                 
                                  </td>

                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa">
                                            <input value="<?php echo $module15 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module15 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module15 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                               
                                 </td>
                                 
                                 <td class=" white ">
                                   <a class=" tooltipped"  data-tooltip="Revisa y cierra el proyecto.">
                                            <input value="<?php echo $module15 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input    value="<?php echo $module15 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module15 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> </a>
                                  </td>
                                  
                                  <td class="white ">
                                   <a class=" tooltipped"  data-tooltip="Consultar">
                                            <input value="<?php echo $module15 -> srubroId; ?>" type="hidden" name="moduleId[]" />
                                                    
                                                        <div>
                                                            <label class="m-l-20">
                                                                <input value="<?php echo $module15 -> srubroId; ?>"
                                                                 type="radio" name="jRead[<?php echo $module15 -> srubroId; ?>]"/>
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div></a>
                                  </td>
                                                        </tr>
                                                        
                                                        
                                                    </tbody>
                                                </table>


                                                <?php } ?>
                                            </div>
                                        </li> 


                           
         </ul>
    </div>    
 </div>    