    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Cuestionario AC</a>
                    <a href="#!" class="breadcrumb ">A&ntilde;adir</a>
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
                                        <span class="blue-text p-l-10">Cuestionario AC</span>
                                        <a href="../c/sac.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                            <i class="material-icons blue-grey-text">cancel</i>
                                        </a>
                                    </div>
                                </div>

                                <div class="card m-t-10 m-l-5 m-r-5">
                                    <div class="card p-t-20 p-b-15 p-l-20 p-r-20">
                                    
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
                                                        <div class="col s12 m6 l3">
                                                            <div class="input-field">
                                                               <input id="sacp" value="<?php echo $user -> userName;?> <?php echo $user -> userSurname; ?>"
                                                               name="sacp" placeholder="" type="text" class="validate" readonly>
                                                                <label for="sacp">Usuario Creador</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        
                                                         <?php if($version > 1){?>
                                                        <div class="col s12 m6 l3">
                                                            <div class="input-field">
                                                               <input id="sacp" value="<?php if($version > 1){echo $user -> userName;?> <?php echo $user -> userSurname; }?>"
                                                               name="sacp" placeholder="" type="text" class="validate" readonly>
                                                                <label for="sacp">Usuario Actualizaci&oacute;n</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        
                                                         <?php } ?>
                                                        
                                                    </div>
                                            <!-- datos vigentes -->  
                                            
                                             <!-- datos nuevos -->
                                                    <div class="row">
                                                        <div class="col s12  m-t--30">
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
                                                               <input id="sacc" value="<?php echo $sacc1;?>" name="sacc" placeholder="" type="text" class="validate" readonly>
                                                                <label for="sacc">Nro Categorias</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="s" value="<?php echo $sacp1;?>" name="s" placeholder="" type="text" class="validate" readonly>
                                                                <label for="s">Nro Preguntas</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                     
                                                   
                                                        
                                                    </div>
                                            <!-- datos vigentes -->
                                            <!-- matriz selecionar casillas -->
                          <form id="form_validation" action="../c/sac.php?m=createDb2&serviceId=<?php echo $serviceId; ?>&sacc1=<?php echo $sacc1;?>&sacp1=<?php echo $sacp1; ?>" method="post">                   
                            <div class="row invisible">
                                <div class="col s12 m12 l12">
                                          <ul class="collapsible ">         
                                        <?php if ( $_cp -> fetch_object() != null) {?>    
                                        <!-- item 1 -->
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cacName1 ;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_cp -> fetch_object()) {?>
                                                                <div class="col l8">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC1[]" />
                                                                    <input class="filled-in" type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]"/>
                                                                    <span class="blue-grey-text text-darken-2"> <?php echo $cp -> pacName; ?><?php echo $cp -> mId; ?></span>
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
                                        <!-- end item-->   
                                        <?php if ( $_cp2 -> fetch_object() != null) {?>
                                          <!-- item 2 -->
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cacName2;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_cp2 -> fetch_object()) {?>
                                                                <div class="col l8">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC2[]" />
                                                                    <input class="filled-in" type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]"/>
                                                                    <span class="blue-grey-text text-darken-2"> <?php echo $cp -> pacName; ?></span>
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
                                        <!-- end item-->   
                                        <?php if ( $_cp3 -> fetch_object() != null) {?>
                                       <!-- item 3 -->
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cacName3;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_cp3 -> fetch_object()) {?>
                                                                <div class="col l8">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC3[]" />
                                                                    <input class="filled-in" type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]"/>
                                                                    <span class="blue-grey-text text-darken-2"> <?php echo $cp -> pacName; ?></span>
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
                                        <!-- end item-->   
                                        <?php if ( $_cp4 -> fetch_object() != null) {?>
                                        <!-- item 4 -->
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cacName4;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_cp4 -> fetch_object()) {?>
                                                                <div class="col l8">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC4[]" />
                                                                    <input class="filled-in" type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]"/>
                                                                    <span class="blue-grey-text text-darken-2"> <?php echo $cp -> pacName; ?></span>
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
                                        <!-- end item--> 
                                        <?php if ( $_cp5 -> fetch_object() != null) {?>
                                         <!-- item 5 -->
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cacName5;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_cp5 -> fetch_object()) {?>
                                                                <div class="col l8">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC5[]" />
                                                                    <input class="filled-in" type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]"/>
                                                                    <span class="blue-grey-text text-darken-2"> <?php echo $cp -> pacName; ?></span>
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
                                        <!-- end item-->   
                                        <?php if ( $_cp6 -> fetch_object() != null) {?>
                                        <!-- item 6 -->
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cacName6;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_cp6 -> fetch_object()) {?>
                                                                <div class="col l8">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC6[]" />
                                                                    <input class="filled-in" type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]"/>
                                                                    <span class="blue-grey-text text-darken-2"> <?php echo $cp -> pacName; ?></span>
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
                                        <!-- end item-->   
                                    <?php if ( $_cp7 -> fetch_object() != null) {?>
                                        <!-- item 7 -->
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cacName7;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_cp7 -> fetch_object()) {?>
                                                                <div class="col l8">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC7[]" />
                                                                    <input class="filled-in" type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]"/>
                                                                    <span class="blue-grey-text text-darken-2"> <?php echo $cp -> pacName; ?></span>
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
                                        <!-- end item-->   
                                        <?php if ( $_cp8 -> fetch_object() != null) {?>
                                         <!-- item 8 -->
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cacName8;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_cp8 -> fetch_object()) {?>
                                                                <div class="col l8">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC8[]" />
                                                                    <input class="filled-in" type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]"/>
                                                                    <span class="blue-grey-text text-darken-2"> <?php echo $cp -> pacName; ?></span>
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
                                        <!-- end item-->  
                                        <!-- item 9 -->
                                        <?php if ( $_cp9 -> fetch_object() != null) {?>
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cacName9;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_cp9 -> fetch_object()) {?>
                                                                <div class="col l8">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC9[]" />
                                                                    <input class="filled-in" type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]"/>
                                                                    <span class="blue-grey-text text-darken-2"> <?php echo $cp -> pacName; ?></span>
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
                                        <!-- end item-->   
                                            <?php if ( $_cp10 -> fetch_object() != null) {?>
                                        <!-- item 10 -->
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cacName10;?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_cp10 -> fetch_object()) {?>
                                                                <div class="col l8">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> pacId; ?>" type="hidden" name="preguntasC10[]" />
                                                                    <input class="filled-in" type="checkbox" name="pc[<?php echo $cp -> pacId; ?>]"/>
                                                                    <span class="blue-grey-text text-darken-2"> <?php echo $cp -> pacName; ?></span>
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
                                        <!-- end item-->   
                                        <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                            <div class="col s12 m-t-20">
                                                
                                                <button type="submit" class="btn blue waves-effect tooltipped " data-position="top" data-tooltip="Guardar">
                                                    <i class="material-icons">save</i>
                                                </button>
                                            </div>
                                        </div>
                           </form>                 
                                            <!-- end matriz selecionar casillas -->
                                            <!--  Matriz de preguntas  
                                            
                                            <div class="row">
                                                <div class="col s12 m-t-10">
                                                    <ul class="collection">
                                                        <li class="collection-item blue-grey lighten-5">
                                                            <p>Matriz</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                            </div> -->
                                            

                                  <!--
                                  <form id="form_validation" action="../c/sac.php?m=createDb2&serviceId=<?php echo $serviceId; ?>&sacc1=<?php echo $sacc1;?>&sacp1=<?php echo $sacp1; ?>" method="post">
                                        <div class="row">
                                            <div class="col s12 m3 m-t-20">
                                                <div class="input-field">
                                                    <label class="active" for="cat">Categoria</label>
                                                    <select id="cat" name="cat" type="text" class="validate" required="">
                                                        <option value="">&nbsp;</option>
                                                        <?php
                                                        
                                                        while ($user = $_categoriaAGG -> fetch_object()) {?>
                                                        <option value="<?php echo $user -> cacId; ?>"><?php echo $user -> cacName ; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12 m8 m-t-20">
                                                <div class="input-field">
                                                    <label class="active" for="pre">Pregunta</label>
                                                    <select id="pre" name="pre" type="text" >
                                                        <option value="">&nbsp;</option>
                                                        <?php while ($designated = $_preguntaAGG -> fetch_object()) { ?>
                                                        <option value="<?php echo $designated -> pacId; ?>"><?php echo $designated -> pacName; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12 m1 m-t-30">
                                                <button type="submit" class="btn blue waves-effect tooltipped" data-position="left" data-tooltip="Guardar">
                                                    <i class="material-icons">save</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>-->
                                    
                                    
                                    
                                            
     
                 
<!-- tabla de la matriz -->
      <!--  <form id="form_validation" action="../c/sac.php?m=createDb&cid=<?php echo $serviceId;?>" method="post" enctype="multipart/form-data"  onsubmit="return checkForm(this);" >                                       
                                        <div class="row">
                                            <div class="col s12 m-t-20 m-b-10">
                                                <table class="white">
                                                    <thead>
                                                        <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                                            <td id="border-white">Categoria</td>
                                                            <td>Id</td>
                                                            <td id="border-white">Pregunta</td>
                                                            <td id="border-white" width="10%"></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php while($m11 = $_m11 -> fetch_object()){
                                                        $_cat = mysqli_query($master, "
                                                            SELECT * FROM cac
                                                            WHERE serviceId = '" . $serviceId . "'
                                                            AND cacId = '" . $m11 -> cacId  . "'
                                                        ");
                                                        $cat = $_cat -> fetch_object();
                                                        $catName = $cat -> cacName;
                                                        
                                                        
                                                        ?> 
                                                        <tr>
                                                            <td><?php echo $catName;?></td>
                                                            <td><?php echo $m11 -> pacId; ?></td>
                                                            <td><?php echo $m11 -> pacName; ?></td>
                                                            <td></td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>    
                                             tabla de la matriz -->
                                            
                                            
                                            <!--  Matriz de preguntas  -->
                                                    
                                                    
                                                    <div class="row">
                                                        <div class="s12">
                                                     <?php include 'list.php';?>
                                                        </div>
                                                    </div>
                                                <div class="row">
                                                    <div class="col s12 m-t-30 ">
                                                        <label>
                                                            <input name="tilde" type="checkbox" class="validate filled-in"/>
                                                            <span style="color-text:black;">Este cuestionareio ya ha sido cargado, esta seguro que desea hacer un update?</span>
                                                        </label>
                                                    </div>
                                                    <div class="col s12 m-t-10 ">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in"  />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                                </div>
                                      
                                      
                                        <div class="row">
                                            <div class="col s12 m-t-20">
                                                <a href="../c/sac.php?m=index" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
                                                </a>
                                                <button type="submit" class="btn blue waves-effect tooltipped <?php if ($mc == $sacp1){ ?>  <?php } else{?>disabled  <?php } ?>" data-position="top" data-tooltip="Guardar">
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
    