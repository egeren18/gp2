<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Proyecto Sagra GP</a>
            <a href="#!" class="breadcrumb ">Modificar</a>
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

    <form id="form_validation" action="../c/project.php?m=revision2Db&p=p&c=<?php echo $c; ?>&i=<?php echo $i; ?>&x=1" method="post">
        <div class="row">
            <div class="col s12 m12 l12 m-t-5">
                <div class="card blue-grey lighten-5 hoverable">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <a href="#!" class="breadcrumb  m-l-10">Modificar</a>
                                <a href="#!" class="breadcrumb ">Proyecto Sagra GP <?php echo $fa2; ?> </a>
                                <a href="#!" class="breadcrumb"><?php echo "{$user -> userName} {$user -> userSurname}" ?></a>
                                <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Men&uacute de Inicio">
                                    <i class="material-icons blue-grey-text">cancel</i>
                                </a>
                                <a href="javascript: history.go(-1);" class="tooltipped right m-l-5" data-position="left" data-tooltip="Atr&aacute;s">
                                    <i class="material-icons blue-grey-text">undo</i>
                                </a>
                            </div>
                        </div>
                        <div class="card m-t-10 m-l-5 m-r-5">
                            <div class="card p-b-15 p-l-20 p-r-20">
                                <div class="row">
                                
                                    <div class="col s12">
                                        <table class="m-t-20" style="width:100%;">
                                            <?php
                                            $_namer = mysqli_query($master, "
                                                SELECT * FROM rubro
                                                WHERE rubroId = '" . $r . "'
                                            "); 
                                            $namer = $_namer -> fetch_object();
                                            
                                            ?>
                                            <td class="  td-block" style="width:100%">
                                             <?php echo $namer -> rubroName;?>
                                            </td>
                                        </table>       
                                    </div>
                               

                    <div class="col s12">       
                        <table class="m-t-20" style="width:100%;">
                            <tbody>


                           
                                    <?php
                                    while ($module = $_module -> fetch_object()) {

                                        $_access = mysqli_query($connection, "
                                            SELECT * FROM test
                                            WHERE srubroId = '" . $module -> srubroId  . "' AND frecuencia = 1
                                        ");
                                        
                                        $access = $_access -> fetch_object();
                                        
                                         $_access2 = mysqli_query($connection, "
                                            SELECT * FROM test
                                            WHERE srubroId = '" . $module -> srubroId  . "' AND frecuencia = 2
                                        ");
                                        
                                        $access2 = $_access2 -> fetch_object();
                                        
                                         $_access3 = mysqli_query($connection, "
                                            SELECT * FROM test
                                            WHERE srubroId = '" . $module -> srubroId  . "' AND frecuencia = 3
                                        ");
                                        
                                        $access3 = $_access3 -> fetch_object();
                                        
                                         $_access4 = mysqli_query($connection, "
                                            SELECT * FROM test
                                            WHERE srubroId = '" . $module -> srubroId  . "' AND frecuencia = 4
                                        ");
                                        
                                        $access4 = $_access4 -> fetch_object();
                                        
                                         $_access5 = mysqli_query($connection, "
                                            SELECT * FROM test
                                            WHERE srubroId = '" . $module -> srubroId  . "' AND frecuencia = 5
                                        ");
                                        
                                        $access5 = $_access5 -> fetch_object();
                                        
                                         $_access6 = mysqli_query($connection, "
                                            SELECT * FROM test
                                            WHERE srubroId = '" . $module -> srubroId  . "' AND frecuencia = 6
                                        ");
                                        
                                        $access6 = $_access6 -> fetch_object();
                                        
                                        $_name = mysqli_query($master, "
                                            SELECT * FROM srubro
                                            WHERE srubroId = '" . $module -> srubroId  . "'
                                        ");
                                    
                                        $name = $_name -> fetch_object();

                                        
                                    ?>

                        <tr>
    
                            <td class=" blue-grey lighten-2 white-text td-block" style="width:80%">
                                <?php echo $name -> sRubroName;?> 
                                
                             </td>
                             
                             
                         <?php if ($fa2 == 4 ) {?>
                                <td  class="">
                                   <a class=" tooltipped"  data-tooltip="Frecuencia 1">
                                       <input value="<?php echo $module -> srubroId; ?>" type="hidden" name="moduleId1[]" />
                                                        <div>
                                                            <label class="m-l-20">
                                                            <input <?php echo $checked = $access -> srubroStatus == 1 ? 'checked' : ''; ?> 
                                                                    value="<?php echo $module -> srubroId; ?>" type="checkbox" name="jRead1[<?php echo $module -> srubroId; ?>]"/>
                                                         
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                        
                                    </a>
                            </td> 

                         <?php } ?>
                           <?php if ($fa2 >= 2 ) {?>
                                <td  class="">
                                   <a class=" tooltipped"  data-tooltip="Frecuencia 2">
                                       <input value="<?php echo $module -> srubroId; ?>" type="hidden" name="moduleId2[]" />
                                                        <div>
                                                            <label class="m-l-20">
                                                            <input <?php echo $checked = $access2 -> srubroStatus == 1 ? 'checked' : ''; ?> 
                                                                    value="<?php echo $module -> srubroId; ?>" type="checkbox" name="jRead2[<?php echo $module -> srubroId; ?>]"/>
                                                         
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                        
                                    </a>
                            </td> 

                         <?php } ?>
                         <?php if ($fa2 >= 3 ) {?>
                                <td  class="">
                                   <a class=" tooltipped"  data-tooltip="Frecuencia 3">
                                       <input value="<?php echo $module -> srubroId; ?>" type="hidden" name="moduleId3[]" />
                                                        <div>
                                                            <label class="m-l-20">
                                                            <input <?php echo $checked = $access3 -> srubroStatus == 1 ? 'checked' : ''; ?> 
                                                                    value="<?php echo $module -> srubroId; ?>" type="checkbox" name="jRead3[<?php echo $module -> srubroId; ?>]"/>
                                                         
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                        
                                    </a>
                            </td> 

                         <?php } ?> 
                            
                         <?php if ($fa2 >= 4 ) {?>
                                <td  class="">
                                   <a class=" tooltipped"  data-tooltip="Frecuencia 4">
                                       <input value="<?php echo $module -> srubroId; ?>" type="hidden" name="moduleId4[]" />
                                                        <div>
                                                            <label class="m-l-20">
                                                            <input <?php echo $checked = $access4 -> srubroStatus == 1 ? 'checked' : ''; ?> 
                                                                    value="<?php echo $module -> srubroId; ?>" type="checkbox" name="jRead4[<?php echo $module -> srubroId; ?>]"/>
                                                         
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                        
                                    </a>
                            </td> 

                         <?php } ?>       
                            <?php if ($fa2 >= 5 ) {?>
                                <td  class="">
                                   <a class=" tooltipped"  data-tooltip="Frecuencia 5">
                                       <input value="<?php echo $module -> srubroId; ?>" type="hidden" name="moduleId5[]" />
                                                        <div>
                                                            <label class="m-l-20">
                                                            <input <?php echo $checked = $access5 -> srubroStatus == 1 ? 'checked' : ''; ?> 
                                                                    value="<?php echo $module -> srubroId; ?>" type="checkbox" name="jRead5[<?php echo $module -> srubroId; ?>]"/>
                                                         
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                        
                                    </a>
                            </td> 

                         <?php } ?>       
                            <?php if ($fa2 >= 6 ) {?>
                                <td  class="">
                                   <a class=" tooltipped"  data-tooltip="Frecuencia 6">
                                       <input value="<?php echo $module -> srubroId; ?>" type="hidden" name="moduleId6[]" />
                                                        <div>
                                                            <label class="m-l-20">
                                                            <input <?php echo $checked = $access6 -> srubroStatus == 1 ? 'checked' : ''; ?> 
                                                                    value="<?php echo $module -> srubroId; ?>" type="checkbox" name="jRead6[<?php echo $module -> srubroId; ?>]"/>
                                                         
                                                                 <span class="blue-grey-text text-darken-2"></span>
                                                            </label>
                                                        </div> 
                                                        
                                    </a>
                            </td> 

                         <?php } ?>       
                         
                            
                          
                            
                        </tr>
                                    <script>if(!$("#clean<?php echo $module -> moduleId; ?>").is(':checked')){$(".case<?php echo $module -> moduleId; ?>").prop('disabled', true);}$('#clean<?php echo $module -> moduleId; ?>').click(function(){if (this.checked){$(".case<?php echo $module -> moduleId; ?>").prop('disabled', false);}else{$('.case<?php echo $module -> moduleId; ?>').prop('checked', false);$(".case<?php echo $module -> moduleId; ?>").prop('disabled', true);}});</script>
                                    <?php } ?> </table>




                                    </div>
                                </div>
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
                                        <a href="javascript: history.go(-1)" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                            <i class="material-icons">cancel</i>
                                        </a>
                                        <?php echo $action = $_SESSION["userAdmin"] != 4 ? "<button type='submit' class='btn blue waves-effect tooltipped' data-position='top' data-tooltip='Guardar Cambios'><i class='material-icons'>save</i></button>" : "<button class='btn disabled'><i class='material-icons'>save</i></button>"; ?>
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
