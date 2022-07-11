<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Modelo</a>
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
                            <span class="breadcrumb p-l-10">Editar</span>
                            <a href="#!" class="breadcrumb">Modelo</a>
                            <a href="#!" class="breadcrumb"><?php echo $diagnosticoName;; ?></a>
                            <a href="../c/sac.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                <i class="material-icons blue-grey-text">cancel</i>
                            </a>
                        </div>
                    </div>
                    <form id="form_validation" action="../c/sac.php?m=updateDb&cid=<?php echo $_GET["cid"]; ?>&serviceId=<?php echo $serviceId ;?>"  method="post"
                    enctype="multipart/form-data" onsubmit="return checkForm(this);">
                        <div class="card m-t-10 m-l-5 m-r-5">
                            <div class="row">
                                <div class="col s12">
                                    <div class="m-t-20 m-b-20 m-l-20 m-r-20">



 <!-- datos vigentes -->
                                                    <div class="row">
                                                        <div class="col s12 ">
                                                            <div class='card-panel white-text blue-grey darken-2' style='line-height : 5px;'>Datos Vigente</div>
                                                        </div>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="modeloName" value="<?php echo $modeloName;?>" name="modeloName" placeholder="" type="text" class="validate" readonly>
                                                                <label for="modeloName">Cuestionario</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="sacc" value="<?php echo $sacc;?>" name="sacc" placeholder="" type="text" class="validate" readonly>
                                                                <label for="sacc">Nro Categorias</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="s" value="<?php echo $sacp;?>" name="s" placeholder="" type="text" class="validate" readonly>
                                                                <label for="s">Nro Preguntas</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        
                                                        <?php if($version == 1){?>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="sacp" value="<?php echo $cdate;?>" name="sacp" placeholder="" type="text" class="validate" readonly>
                                                                <label for="sacp">Fecha de Creaci&oacute;n</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                        
                                                        
                                                        <?php if($version > 1){?>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="sacp" value="<?php echo $oldDate;?>" name="sacp" placeholder="" type="text" class="validate" readonly>
                                                                <label for="sacp">Ultima Actualizaci&oacute;n</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        
                                                         <?php if($version == 1){?>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="sacp" value="<?php echo $user -> userName;?> <?php echo $user -> userSurname; ?>"
                                                               name="sacp" placeholder="" type="text" class="validate" readonly>
                                                                <label for="sacp">Usuario Creador</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        
                                                         <?php if($version > 1){?>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="sacp" value="<?php if($version > 1){echo $user -> userName;?> <?php echo $user -> userSurname; }?>"
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
                                                                    <div class="collapsible-header">
                                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                                        <span class="blue-grey-text text-darken-2">Preguntas</span>
                                                                    </div>
                                                                    <div class="collapsible-body">
                                                                        <div class="field_wrapper ">
                                                                            <div class="row">
                                                                                <div class="col s12">
                                                                       <!-- tabla -->
                                                                                <table>
                                                                                    <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                                                                        <th id="border-white">Id</th>
                                                                                        <th id="border-white">Categoria</th>
                                                                                        <th id="border-white">Pregunta</th>
                                                                                    </tr>
                                                                                <?php while($tabla = $_tabla -> fetch_object()){
                                                                                $_tca = mysqli_query($master, "
                                                                                    SELECT * FROM cac
                                                                                    WHERE cacId = '" . $tabla -> cacId . "'
                                                                                ");
                                                                                $tca = $_tca -> fetch_object();
                                                                                $cacName = $tca -> cacName;
                                                                                ?> 
                                                                                    <tr>
                                                                                        <td id="border-grey"><?php echo $tabla -> pacId ;?></td>
                                                                                        <td id="border-grey"><?php echo $cacName ;?></td>
                                                                                        <td id="border-grey"><?php echo $tabla -> pap ;?></td>
                                                                                    </tr>
                                                                                    <?php } ?>
                                                                       </table>
                                                                       <!--tabla -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                   </div>
                                                                </li>
                                                            <!-- despegable -->                
                                                        </div>
                                                    </div>
                                            <!-- preguntas -->       
                                                    
                                            <!-- datos vigentes -->  
                                            
                                            <!-- datos nuevos -->
                                                    <div class="row">
                                                        <div class="col s12  m-t--20">
                                                            <div class='card-panel white-text blue-grey darken-2' style='line-height : 5px;'>Datos a Actualizar</div>
                                                        </div>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="modeloName" value="<?php echo $modeloName;?>" name="modeloName" placeholder="" type="text" class="validate" readonly>
                                                                <label for="modeloName">Cuestionario</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                                     <select id="sacc" name="sacc" placeholder="" type="text" class="validate" required>
                                                                      <option value="" disabled selected>Seleccionar</option>
                                                                      <option value="1">1</option>
                                                                      <option value="2">2</option>
                                                                      <option value="3">3</option>
                                                                      <option value="4">4</option>
                                                                      <option value="5">5</option>
                                                                      <option value="6">6</option>
                                                                      <option value="7">7</option>
                                                                      <option value="8">8</option>
                                                                      <option value="9">9</option>
                                                                      <option value="10">10</option>
                                                                    </select>
                                                                    <label>Nro Categorias</label>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="pac" value="" name="pac" placeholder="" type="number" class="validate" >
                                                                <label for="pac">Nro Preguntas</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                     
                                                   
                                                        
                                                    </div>
                                            <!-- datos vigentes -->
                                            
                                            
                                            
                                            <!-- ul con las categorrias y preguntas  -->
                                <div class="row invisible">
                                    <div class="col s12 m12 l12">
                                          <ul class="collapsible ">         
                                          <!-- Categoria 1 -->
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cac1Name;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php
                                                            $_cpx1 = mysqli_query($rer, "
                                                                    SELECT * FROM m$serviceId
                                                                    WHERE cacId = 1
                                                                ");
                                                            while ($cp = $_cpx1 -> fetch_object()) {
                                                                $can = $cp -> pacName ;?>
                                                                <div class="col l12">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC1[]" />
                                                                    <input class="filled-in" <?php echo $checked = ($cp -> access == 1 ) ? 'checked' : ''; ?> type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $can; ?> </span>
                                                                </label>
                                                                    </div> </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>            
                                                         <?php } ?>
                                                        </div>
                                                    </div>
                                               </div>
                                            </li>
                                    <!-- Categoria 1 -->
                                    <!-- Categoria 2 -->
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cac2Name;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php 
                                                            $_cpx2 = mysqli_query($rer, "
                                                                    SELECT * FROM m$serviceId
                                                                    WHERE cacId = 2
                                                                ");
                                                            while ($cp = $_cpx2 -> fetch_object()) {
                                                                $can = $cp -> pacName ;?>
                                                                <div class="col l12">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC1[]" />
                                                                    <input class="filled-in" <?php echo $checked = ($cp -> access == 1 ) ? 'checked' : ''; ?> type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $can; ?> </span>
                                                                </label>
                                                                    </div> </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>            
                                                         <?php } ?>
                                                        </div>
                                                    </div>
                                               </div>
                                            </li>
                                    <!-- Categoria 2 -->
                                    <!-- Categoria 3 -->
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cac3Name;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php 
                                                            $_cpx3 = mysqli_query($rer, "
                                                                    SELECT * FROM m$serviceId
                                                                    WHERE cacId = 3
                                                                ");
                                                            while ($cp = $_cpx3 -> fetch_object()) {
                                                                
                                                                $can = $cp -> pacName ;?>
                                                                <div class="col l12">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC1[]" />
                                                                    <input class="filled-in" <?php echo $checked = ($cp -> access == 1 ) ? 'checked' : ''; ?> type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $can; ?> </span>
                                                                </label>
                                                                    </div> </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>            
                                                         <?php } ?>
                                                        </div>
                                                    </div>
                                               </div>
                                            </li>
                                    <!-- Categoria 3 -->
                                        <!-- Categoria 4 -->
                                        <?php 
                                        $_cpx4 = mysqli_query($rer, "
                                                SELECT * FROM m$serviceId
                                                WHERE cacId = 4
                                                ");
                                        if($cp = $_cpx4 -> fetch_object() != null) {?>
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cac4Name;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php
                                                            while ($cp = $_cp4 -> fetch_object()) {
                                                                $can = $cp -> pacName ;?>
                                                                <div class="col l12">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC1[]" />
                                                                    <input class="filled-in" <?php echo $checked = ($cp -> access == 1 ) ? 'checked' : ''; ?> type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $can; ?> </span>
                                                                </label>
                                                                    </div> </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>            
                                                         <?php } ?>
                                                        </div>
                                                    </div>
                                               </div>
                                            </li>
                                            <?php } ?>
                                    <!-- Categoria 4 -->
                                      <!-- Categoria 5 -->
                                        <?php
                                     $_cpx5 = mysqli_query($rer, "
                                        SELECT * FROM m$serviceId
                                        WHERE cacId = 5
                                    ");
                                        if($cp = $_cpx5 -> fetch_object() != null) {?>
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cac5Name;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_cp5 -> fetch_object()) {
                                                                $can = $cp -> pacName ;?>
                                                                <div class="col l12">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC1[]" />
                                                                    <input class="filled-in" <?php echo $checked = ($cp -> access == 1 ) ? 'checked' : ''; ?> type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $can; ?> </span>
                                                                </label>
                                                                    </div> </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>            
                                                         <?php } ?>
                                                        </div>
                                                    </div>
                                               </div>
                                            </li>
                                            <?php } ?>
                                    <!-- Categoria 5 -->
                                    <!-- Categoria 6 -->
                                        <?php 
                                         $_cpx6 = mysqli_query($rer, "
                                                SELECT * FROM m$serviceId
                                                WHERE cacId = 6
                                                ");
                                        if($cp = $_cpx6 -> fetch_object() != null) {?>
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cac6Name;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_cp6 -> fetch_object()) {
                                                                $can = $cp -> pacName ;?>
                                                                <div class="col l12">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC1[]" />
                                                                    <input class="filled-in" <?php echo $checked = ($cp -> access == 1 ) ? 'checked' : ''; ?> type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $can; ?> </span>
                                                                </label>
                                                                    </div> </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>            
                                                         <?php } ?>
                                                        </div>
                                                    </div>
                                               </div>
                                            </li>
                                            <?php } ?>
                                    <!-- Categoria 6 -->
                                    <!-- Categoria 7 -->
                                        <?php
                                        $_cpx7 = mysqli_query($rer, "
                                                SELECT * FROM m$serviceId
                                                WHERE cacId = 7
                                                ");
                                        if($cp = $_cpx7 -> fetch_object() != null) {?>
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cac7Name;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_cp7 -> fetch_object()) {
                                                                $can = $cp -> pacName ;?>
                                                                <div class="col l12">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC1[]" />
                                                                    <input class="filled-in" <?php echo $checked = ($cp -> access == 1 ) ? 'checked' : ''; ?> type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $can; ?> </span>
                                                                </label>
                                                                    </div> </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>            
                                                         <?php } ?>
                                                        </div>
                                                    </div>
                                               </div>
                                            </li>
                                            <?php } ?>
                                    <!-- Categoria 7 -->
                                    <!-- Categoria 8 -->
                                        <?php 
                                        $_cpx8 = mysqli_query($rer, "
                                                SELECT * FROM m$serviceId
                                                WHERE cacId = 8
                                                ");
                                        if($cp = $_cpx8 -> fetch_object() != null) {?>
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cac8Name;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_cp8 -> fetch_object()) {
                                                                $can = $cp -> pacName ;?>
                                                                <div class="col l12">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC1[]" />
                                                                    <input class="filled-in" <?php echo $checked = ($cp -> access == 1 ) ? 'checked' : ''; ?> type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $can; ?> </span>
                                                                </label>
                                                                    </div> </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>            
                                                         <?php } ?>
                                                        </div>
                                                    </div>
                                               </div>
                                            </li>
                                            <?php } ?>
                                    <!-- Categoria 8 -->
                                    <!-- Categoria 9 -->
                                        <?php
                                        $_cpx9 = mysqli_query($rer, "
                                                SELECT * FROM m$serviceId
                                                WHERE cacId = 9
                                                ");
                                        if($cp = $_cpx9 -> fetch_object() != null) {?>
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cac9Name;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_cp9 -> fetch_object()) {
                                                                $can = $cp -> pacName ;?>
                                                                <div class="col l12">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC1[]" />
                                                                    <input class="filled-in" <?php echo $checked = ($cp -> access == 1 ) ? 'checked' : ''; ?> type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $can; ?> </span>
                                                                </label>
                                                                    </div> </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>            
                                                         <?php } ?>
                                                        </div>
                                                    </div>
                                               </div>
                                            </li>
                                            <?php } ?>
                                    <!-- Categoria 9 -->
                                    <!-- Categoria 10 -->
                                        <?php
                                        $_cpx10 = mysqli_query($rer, "
                                                SELECT * FROM m$serviceId
                                                WHERE cacId = 10
                                                ");
                                        if($cp = $_cpx10 -> fetch_object() != null) {?>
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cac9Name;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_cp10 -> fetch_object()) {
                                                                $can = $cp -> pacName ;?>
                                                                <div class="col l12">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC1[]" />
                                                                    <input class="filled-in" <?php echo $checked = ($cp -> access == 1 ) ? 'checked' : ''; ?> type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $can; ?> </span>
                                                                </label>
                                                                    </div> </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>            
                                                         <?php } ?>
                                                        </div>
                                                    </div>
                                               </div>
                                            </li>
                                            <?php } ?>
                                    <!-- Categoria 10 -->
                                            
                                        </ul>
                                    </div>
                                </div>
                              
                                            
                                            
                                            
                                            <!-- end ul con las categorrias y preguntas  -->
                                      
                                    <div class="row">
                                            <div class="col s12 m-t-10 ">
                                                <label>
                                                    <input type="checkbox" class="validate filled-in" required="" />
                                                    <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                </label>
                                            </div>
                                        </div>
                                   
                                        <div class="row">
                                            <div class="col s12 m-t-10 ">
                                                <a href="../c/sac.php?m=index" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
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
                    </form>
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
