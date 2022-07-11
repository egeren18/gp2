<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down"><?php echo $serviceName; ?></a>
            <a href="#!" class="breadcrumb "><?php echo $projectName;?></a>
            <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                <i class="material-icons blue-text">help</i>
            </a>
            <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                <i class="material-icons blue-text">forum</i>
            </a>
            <!-- boton leyenda -->
            <a href="#help22" class="tooltipped right modal-trigger " data-position="left" data-tooltip="leyenda">
                <i class="material-icons blue-text">local_offer</i>
            </a>
            <!-- fin boton leyenda -->    
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
                            <span class="breadcrumb p-l-10">Consultar</span>
                            <a href="#!" class="breadcrumb"><?php echo $serviceName; ?></a>
                            <a href="#!" class="breadcrumb"><?php echo $projectName;?></a>
                         
   <!-- botones para funcion para tomar captura este es el boton -->    
                             <a href="../c/main.php?m=menu" class="tooltipped right" data-position="left" data-tooltip="Cerrar"><i class="material-icons blue-text">cancel</i></a>
                            <a class="right  tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                            <a class="right  tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen"><i class="material-icons green-text">file_download</i></a>
                            <a class="right " id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                            <!-- botones para funcion para tomar captura -->     
                            
                            <!-- boton instrucciones -->
                            <a href="#help22" class="tooltipped right modal-trigger " data-position="left" data-tooltip="Instruciones">
                                <i class="material-icons blue-text">local_library</i>
                            </a>
                            <!-- final boton instrucciones -->                              
                            
                            <!-- boton atras -->        
                            <a href="javascript: history.go(-1);" class="tooltipped right blue-text " data-position="left" data-tooltip="Atr&aacute;s">
                                <i class="material-icons blue-text">undo</i>
                            </a>
                            <!-- fin de boton atras -->
                            
                            
                        </div>
                    </div>
     
                        
            <div id="main">
                    <div id="screenshot">               
                        <div class="card m-t-10 m-l-5 m-r-5">
                            <div class="row">
                                <div class="col s12">
                                    <div class="m-t-20 m-b-20 m-l-20 m-r-20">



 <!-- datos vigentes -->
                                                    <div class="row">
                                                        
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="modeloName" value="<?php echo $projectName;?>" name="modeloName" placeholder="" type="text" class="validate" readonly>
                                                                <label for="modeloName">Master Data</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                       
                                                        
                                                        <?php if($version == 1){?>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="sacp" value="<?php echo $date ;?>" name="sacp" placeholder="" type="text" class="validate" readonly>
                                                                <label for="sacp">Fecha de Creaci&oacute;n</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                        
                                                        
                                                        <?php if($version > 1){?>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="sacp" value="<?php echo $date2 ;?>" name="sacp" placeholder="" type="text" class="validate" readonly>
                                                                <label for="sacp">Ultima Actualizaci&oacute;n</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        
                                                         <?php if($version == 1){?>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="sacp" value="<?php echo $_SESSION["userFullName"];?>"
                                                               name="sacp" placeholder="" type="text" class="validate" readonly>
                                                                <label for="sacp">Usuario Creador</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        
                                                         <?php if($version > 1){?>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="sacp" value="<?php echo $_SESSION["userFullName"];?>"
                                                               name="sacp" placeholder="" type="text" class="validate" readonly>
                                                                <label for="sacp">Usuario Actualizaci&oacute;n</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        
                                                         <?php } ?>
                                                         
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="v" value="<?php echo $version;?>" name="v" placeholder="" type="text" class="validate" readonly>
                                                                <label for="v">Versi&oacute;n</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    
                                               <!-- preguntas -->     
                                                    <div class="row">
                                                        <div class="col s12 l12  m-t--10 m-b-30">
                                                            <!-- despegable -->
                                                            <ul class="collapsible ">         
                                                                <li>
                                                                    <div class="collapsible-header grey lighten-4">
                                                                        <i class="material-icons blue-text">list</i>
                                                                        <span class="blue-grey-text text-darken-2">Planificaci&oacute;n</span>
                                                                    </div>
                                                                    <div class="collapsible-body">
                                                                        <div class="field_wrapper ">
                                                                            
                                                                            
                                                                            
                                                                            
                            <!-- el beta-->                                           
                                <!-- ul con las categorrias y preguntas  -->
                                <div class="row invisible">
                                    <div class="col s12 m12 l12 ">
                                          <ul class="collapsible ">         
                                          
                                          
                                          
                                          <?php 
                                          $_cp11 = mysqli_query($appf, "
                                                SELECT * FROM act$v 
                                            ");

                                          $contador = 0;
                                          while($cp = $_cp11 -> fetch_object())
                                          {
                                            $contador++;  
                                              
                                          
                                     // <!-- Categoria 1 -->
                                            $_cpx1 = mysqli_query($appc, "
                                                SELECT * FROM project$v
                                                WHERE cacId = '" . $contador .  "' AND  etapaId = 1
                                                ");
                                        if($cp = $_cpx1 -> fetch_object() != null) {
                                    
                                            $_ccc = mysqli_query($appf, "
                                                SELECT * FROM mod$v 
                                                WHERE cacId = '" . $contador .  "' 
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
                                                                                        <th>Nro</th>
                                                                                        <th id="border-white" style="width:60%;">Actividad</th>
                                                                                        <th id="border-white" style="width:20%;">Modelo</th>
                                                                                        <th id="border-white">Versi&oacute;n</th>
                                                                                        
                                                                                    </tr>
                                                            <?php while ($cp = $_ccc -> fetch_object()) {
                                                                
                                                                $canId = $cp -> actividadId;
                                                                $mo = $cp -> modeloId;
                                                                
                                                                 $_cac11 = mysqli_query($appa , "
                                                                        SELECT * FROM project$v
                                                                        WHERE actividadId = '" . $canId.  "' 
                                                                    ");
                                                                    $cac11 = $_cac11 -> fetch_object();
                                                                    $can = $cac11 -> actividadName;
                                                                ?>
                                                                
                                                                              
                                                                                    <tr>
                                                                                        <td id="border-grey"><?php echo $cp -> mId;?></td>
                                                                                <td id="border-grey">
                                                                                    <label>
                                                                                        
                                                                                         <input  value="<?php echo $cp -> amId; ?>" type="hidden" name="preguntasC1[]" /> 
                                                                                                <?php echo $can;?> 
                                                                                     </label>
                                                                                </td>
                                                                                <td><?php echo $mo ?></td>
                                                                                
                                                                                        <td id="border-grey"><?php echo $cp -> v ?> 
                                                                                    </td>
                                                                                   
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
                                    
                                    
                                    
                                    
                                        </ul>
                                    </div>
                                </div>
                                                                                    
                                   <!-- el beta-->                                         
                                                                        </div>
                                                                   </div>
                                                                </li>
                                                            <!-- despegable -->                
                                                        </div>
                                                    </div>
                                            <!-- preguntas -->       
                                            
                                            
                                            <!-- preguntas -->     
                                                    <div class="row">
                                                        <div class="col s12 l12  m-t--10 m-b-30">
                                                            <!-- despegable -->
                                                            <ul class="collapsible ">         
                                                                <li>
                                                                    <div class="collapsible-header grey lighten-4">
                                                                        <i class="material-icons blue-text">list</i>
                                                                        <span class="blue-grey-text text-darken-2">Estrategia</span>
                                                                    </div>
                                                                    <div class="collapsible-body">
                                                                        <div class="field_wrapper ">
                                                                           <!-- el beta-->                                           
                                <!-- ul con las categorrias y preguntas  -->
                                <div class="row invisible">
                                    <div class="col s12 m12 l12 ">
                                          <ul class="collapsible ">         
                                          
                                          
                                          
                                          <?php 
                                          $_cp11 = mysqli_query($appf, "
                                                SELECT * FROM act$v 
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
                                    
                                            $_ccc = mysqli_query($appf, "
                                                SELECT * FROM mod$v 
                                                WHERE cacId = '" . $contador .  "' 
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
                                                                                        <th>Nro</th>
                                                                                        <th id="border-white" style="width:60%;">Actividad</th>
                                                                                        <th id="border-white" style="width:20%;">Modelo</th>
                                                                                        <th id="border-white">Versi&oacute;n</th>
                                                                                        
                                                                                    </tr>
                                                            <?php while ($cp = $_ccc -> fetch_object()) {
                                                                
                                                                $canId = $cp -> actividadId;
                                                                $mo = $cp -> modeloId;
                                                                
                                                                 $_cac11 = mysqli_query($appa , "
                                                                        SELECT * FROM project$v
                                                                        WHERE actividadId = '" . $canId.  "' 
                                                                    ");
                                                                    $cac11 = $_cac11 -> fetch_object();
                                                                    $can = $cac11 -> actividadName;
                                                                ?>
                                                                
                                                                              
                                                                                    <tr>
                                                                                        <td id="border-grey"><?php echo $cp -> mId;?></td>
                                                                                <td id="border-grey">
                                                                                    <label>
                                                                                        
                                                                                         <input  value="<?php echo $cp -> amId; ?>" type="hidden" name="preguntasC1[]" /> 
                                                                                                <?php echo $can;?> 
                                                                                     </label>
                                                                                </td>
                                                                                <td><?php echo $mo ?></td>
                                                                                
                                                                                        <td id="border-grey"><?php echo $cp -> v ?> 
                                                                                    </td>
                                                                                   
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
                                    
                                    
                                    
                                    
                                        </ul>
                                    </div>
                                </div>
                                                                                    
                                   <!-- el beta--> 
                                                                        </div>
                                                                   </div>
                                                                </li>
                                                            <!-- despegable -->                
                                                        </div>
                                                    </div>
                                            <!-- preguntas -->    
                                             <!-- preguntas -->     
                                                    <div class="row">
                                                        <div class="col s12 l12  m-t--10 m-b-30">
                                                            <!-- despegable -->
                                                            <ul class="collapsible ">         
                                                                <li>
                                                                    <div class="collapsible-header grey lighten-4">
                                                                        <i class="material-icons blue-text">list</i>
                                                                        <span class="blue-grey-text text-darken-2">Ejecuci&oacute;n</span>
                                                                    </div>
                                                                    <div class="collapsible-body">
                                                                        <div class="field_wrapper ">
                                                                         <!-- el beta-->                                           
                                <!-- ul con las categorrias y preguntas  -->
                                <div class="row invisible">
                                    <div class="col s12 m12 l12 ">
                                          <ul class="collapsible ">         
                                          
                                          
                                          
                                          <?php 
                                          $_cp11 = mysqli_query($appf, "
                                                SELECT * FROM act$v 
                                            ");

                                          $contador = 0;
                                          while($cp = $_cp11 -> fetch_object())
                                          {
                                            $contador++;  
                                              
                                          
                                     // <!-- Categoria 1 -->
                                            $_cpx1 = mysqli_query($appc, "
                                                SELECT * FROM project$v
                                                WHERE cacId = '" . $contador .  "' AND  etapaId = 3
                                                ");
                                        if($cp = $_cpx1 -> fetch_object() != null) {
                                    
                                            $_ccc = mysqli_query($appf, "
                                                SELECT * FROM mod$v 
                                                WHERE cacId = '" . $contador .  "' 
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
                                                                                        <th>Nro</th>
                                                                                        <th id="border-white" style="width:60%;">Actividad</th>
                                                                                        <th id="border-white" style="width:20%;">Modelo</th>
                                                                                        <th id="border-white">Versi&oacute;n</th>
                                                                                        
                                                                                    </tr>
                                                            <?php while ($cp = $_ccc -> fetch_object()) {
                                                                
                                                                $canId = $cp -> actividadId;
                                                                $mo = $cp -> modeloId;
                                                                
                                                                 $_cac11 = mysqli_query($appa , "
                                                                        SELECT * FROM project$v
                                                                        WHERE actividadId = '" . $canId.  "' 
                                                                    ");
                                                                    $cac11 = $_cac11 -> fetch_object();
                                                                    $can = $cac11 -> actividadName;
                                                                ?>
                                                                
                                                                              
                                                                                    <tr>
                                                                                        <td id="border-grey"><?php echo $cp -> mId;?></td>
                                                                                <td id="border-grey">
                                                                                    <label>
                                                                                        
                                                                                         <input  value="<?php echo $cp -> amId; ?>" type="hidden" name="preguntasC1[]" /> 
                                                                                                <?php echo $can;?> 
                                                                                     </label>
                                                                                </td>
                                                                                <td><?php echo $mo ?></td>
                                                                                
                                                                                        <td id="border-grey"><?php echo $cp -> v ?> 
                                                                                    </td>
                                                                                   
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
                                    
                                    
                                    
                                    
                                        </ul>
                                    </div>
                                </div>
                                                                                    
                                   <!-- el beta--> 
                                                                        </div>
                                                                   </div>
                                                                </li>
                                                            <!-- despegable -->                
                                                        </div>
                                                    </div>
                                            <!-- preguntas -->  
                                            <!-- preguntas -->     
                                                    <div class="row">
                                                        <div class="col s12 l12  m-t--10 m-b-30">
                                                            <!-- despegable -->
                                                            <ul class="collapsible ">         
                                                                <li>
                                                                    <div class="collapsible-header grey lighten-4">
                                                                        <i class="material-icons blue-text">list</i>
                                                                        <span class="blue-grey-text text-darken-2">Conclusi&oacute;n</span>
                                                                    </div>
                                                                    <div class="collapsible-body">
                                                                        <div class="field_wrapper ">
                                                                     <!-- el beta-->                                           
                                <!-- ul con las categorrias y preguntas  -->
                                <div class="row invisible">
                                    <div class="col s12 m12 l12 ">
                                          <ul class="collapsible ">         
                                          
                                          
                                          
                                          <?php 
                                          $_cp11 = mysqli_query($appf, "
                                                SELECT * FROM act$v 
                                            ");

                                          $contador = 0;
                                          while($cp = $_cp11 -> fetch_object())
                                          {
                                            $contador++;  
                                              
                                          
                                     // <!-- Categoria 1 -->
                                            $_cpx1 = mysqli_query($appc, "
                                                SELECT * FROM project$v
                                                WHERE cacId = '" . $contador .  "' AND  etapaId = 4
                                                ");
                                        if($cp = $_cpx1 -> fetch_object() != null) {
                                    
                                            $_ccc = mysqli_query($appf, "
                                                SELECT * FROM mod$v 
                                                WHERE cacId = '" . $contador .  "' 
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
                                                                                        <th>Nro</th>
                                                                                        <th id="border-white" style="width:60%;">Actividad</th>
                                                                                        <th id="border-white" style="width:20%;">Modelo</th>
                                                                                        <th id="border-white">Versi&oacute;n</th>
                                                                                        
                                                                                    </tr>
                                                            <?php while ($cp = $_ccc -> fetch_object()) {
                                                                
                                                                $canId = $cp -> actividadId;
                                                                $mo = $cp -> modeloId;
                                                                
                                                                 $_cac11 = mysqli_query($appa , "
                                                                        SELECT * FROM project$v
                                                                        WHERE actividadId = '" . $canId.  "' 
                                                                    ");
                                                                    $cac11 = $_cac11 -> fetch_object();
                                                                    $can = $cac11 -> actividadName;
                                                                ?>
                                                                
                                                                              
                                                                                    <tr>
                                                                                        <td id="border-grey"><?php echo $cp -> mId;?></td>
                                                                                <td id="border-grey">
                                                                                    <label>
                                                                                        
                                                                                         <input  value="<?php echo $cp -> amId; ?>" type="hidden" name="preguntasC1[]" /> 
                                                                                                <?php echo $can;?> 
                                                                                     </label>
                                                                                </td>
                                                                                <td><?php echo $mo ?></td>
                                                                                
                                                                                        <td id="border-grey"><?php echo $cp -> v ?> 
                                                                                    </td>
                                                                                   
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
                                    
                                    
                                    
                                    
                                        </ul>
                                    </div>
                                </div>
                                                                                    
                                   <!-- el beta--> 
                                                                        </div>
                                                                   </div>
                                                                </li>
                                                            <!-- despegable -->                
                                                        </div>
                                                    </div>
                                            <!-- preguntas -->   
                                                    
                                            <!-- datos vigentes -->  
                                            
                                    
                                            
                                            
     
                                   
                                   
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
<script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-ac|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>

