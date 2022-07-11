<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">modal</a>
            <a href="#!" class="breadcrumb ">Modificar</a>
            <a href="#help" class="tooltipped right cmodal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                <i class="material-icons blue-text">help</i>
            </a>
            <a href="#ticket" class="tooltipped right cmodal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
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
                            <span class="breadcrumb  p-l-10">Modificar</span>
                            <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Men&uacute de Inicio">
                                <i class="material-icons blue-grey-text">cancel</i>
                            </a>
                            <a href="javascript: history.go(-1);" class="tooltipped right m-l-5" data-position="left" data-tooltip="Atr&aacute;s">
                                <i class="material-icons blue-grey-text">undo</i>
                            </a>
                        </div>
                    </div>
                    <div class="card m-t-10 m-l-5 m-r-5">
                        <div class="row">
                            <div class="col s12">
                                <div class="m-t-20 m-b-20 m-l-20 m-r-20">
                                    <form id="form_validation" action="../c/cmodal.php?m=updateDb&id=<?php echo $_GET["id"]; ?>" method="post">
                                        <div class="row">
                                            <div class="col s12 m6 l4">
                                                <div class="input-field">
                                                    <input value="<?php echo $cmodal -> moduleName; ?>" id="cmodalName" name="cmodalName" placeholder="" type="text"  readonly>
                                                    <label for="cmodalName">Modulo</label>
                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l4">
                                                <div class="input-field">
                                                    <input value="<?php echo $cmodal -> moduleController; ?>" id="cmodalName" name="cmodalName" placeholder="" type="text" readonly>
                                                    <label for="cmodalName">Modulo Controlador</label>
                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                </div>
                                            </div>
                                            
                                            <div class="col s12 m2">
                                                        <div class="input-field">
                                                            <select id="cmodalType" name="cmodalType" placeholder="" type="text" class="validate">
                                                                <option value="<?php echo $tmodal -> cmodalType ;?>"><?php echo $tmodal -> tmodalName ;?></option>
                                                                <?php while ($tmodal2 = $_tmodal2 -> fetch_object()) { ?>
                                                                   <option value="<?php echo $tmodal2 -> cmodalType ;?>"><?php echo $tmodal2 -> tmodalName ;?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <label class="font-13" for="cmodalType">Tipo de Modal</label>
                                                        </div>
                                            </div>
                                     
                                            
                                            
                                        </div>
                                        <div class="row">
                                        
                                        </div>    


<!-- menus despegable -->

<div class="row">
    <div class="col s12 m-t--20">
         <ul class="collapsible">
                                   <?php if($tmodal -> cmodalType >= 1){ ?>
                                         <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Mensaje al Iniciar el Modulo </span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="p-t-20"></div>

                                            <div class="row">
                                                
                                                <div class="col s12 m6 l12">
                                                    <div class="input-field">
                                                        <textarea class="ckeditor"  id="text1" name="text1" placeholder="" type="text" class="validate"><?php echo $cmodal -> moduleTest1; ?></textarea>
                                                    
                                                        <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> 
                                    <?php } ?>
                                   
                                   <?php if($tmodal -> cmodalType == 2){ ?>
                                      <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Mensaje M&oacute;dal en el Modulo </span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="p-t-20"></div>

                                            <div class="row">
                                                
                                                <div class="col s12 m6 l12">
                                                    <div class="input-field">
                                                        <textarea class="ckeditor"  id="text2" name="text2" placeholder="" type="text" class="validate"><?php echo $cmodal -> moduleTest2; ?></textarea>
                                                    
                                                        <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> 
                                    <?php } ?>
                                   
                                   <?php if($tmodal -> cmodalType == 3){ ?>
                                         <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Mensaje al Iniciar el Modulo </span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="p-t-20"></div>

                                            <div class="row">
                                                
                                                <div class="col s12 m6 l12">
                                                    <div class="input-field">
                                                        <textarea class="ckeditor"  id="text1" name="text1" placeholder="" type="text" class="validate"><?php echo $cmodal -> moduleTest1; ?></textarea>
                                                    
                                                        <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> 
                                    <?php 
                                    if($cmodal -> tituloId == NULL){ ?>
                                    
                                   <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Indicar el n&uacute;mero de campos para este modal </span>
                                        </div>
                                       
                                   </li>
                                    
                                    
                                    
                                    <?php }else {?>
                                     <li>
                                    <div class="collapsible-header">
                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                        <span class="blue-grey-text text-darken-2">Mensaje al estar en el Modulo </span>
                                    </div>
                                    <div class="collapsible-body">
                                        <div class="p-t-20"></div>

                                        <div class="row">
                                            <?php if($cmodal -> tituloId >= 1) {?>
                                            
                                            <div class="col s12 m6 l6 ">
                                                 <div class="input-field">
                                                      <textarea id="ckeditor" name="text7" class="ckeditor m-t-20">
                                                    <?php echo $cmodal -> moduleTest7; ?>
                                                     </textarea>
                                                     <label  for="textarea1">Explicaci&oacute;n</label>
                                                   
                                                 </div>
                                           </div>
                                           
                                            <?php }?>
                                            <?php if($cmodal -> tituloId >= 2) {?>
                                            
                                            <div class="col s12 m6 l6 ">
                                                 <div class="input-field">
                                                      <textarea id="ckeditor" name="text8" class="ckeditor m-t-20">
                                                    <?php echo $cmodal -> moduleTest8;?>
                                                     </textarea>
                                                     <label  for="textarea1">A&ntilde;adir</label>
                                                   
                                                 </div>
                                           </div>
                                            
                                            <?php }?>
                                            <?php if($cmodal -> tituloId >= 3) {?>
                                            
                                             <div class="col s12 m6 l6 ">
                                                 <div class="input-field">
                                                      <textarea id="ckeditor" name="text9" class="ckeditor m-t-20">
                                                    <?php echo $cmodal -> moduleTest9; ?>
                                                     </textarea>
                                                     <label  for="textarea1">Consultar</label>
                                                   
                                                 </div>
                                           </div>
                                            
                                            <?php }?>
                                            <?php if($cmodal -> tituloId >= 4) {?>
                                            
                                            <div class="col s12 m6 l6 ">
                                                 <div class="input-field">
                                                      <textarea id="ckeditor" name="text10" class="ckeditor m-t-20">
                                                    <?php echo $cmodal -> moduleTest10; ?>
                                                     </textarea>
                                                     <label  for="textarea1">Editar</label>
                                                   
                                                 </div>
                                           </div>
                                            
                                            <?php }?>
                                            <?php if($cmodal -> tituloId >= 5) {?>
                                            
                                            <div class="col s12 m6 l6 ">
                                                 <div class="input-field">
                                                      <textarea id="ckeditor" name="text11" class="ckeditor m-t-20">
                                                    <?php echo $cmodal -> moduleTest11; ?>
                                                     </textarea>
                                                     <label  for="textarea1">Eliminar</label>
                                                   
                                                 </div>
                                           </div>
                                            
                                            <?php }?>
                                            
                                            
                                            
                                               
                                             
                                        </div>
                                    </div>
                                </li> 
                                    <?php }}?>
                                   
                                   
                       
                          
                                 
                       
        
                                
                                
                                </ul></div></div>

<!-- -->
                                   
                                        <div class="row">
                                            <div class="col s12 m-t-20">
                                                <label>
                                                    <input type="checkbox" class="validate filled-in" required="" />
                                                    <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 m-t-30">
                                                <a href="javascript: history.go(-1)" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">close</i>
                                                </a>
                                                <?php echo $action = $_SESSION["userAdmin"] != 4 ? "<button id='vcmodal' type='submit' class='btn blue waves-effect tooltipped' data-position='right' data-tooltip='Guardar Cambios'><i class='material-icons'>save</i></button>" : "<button class='btn disabled'><i class='material-icons'>save</i></button>"; ?>
                                            </div>
                                        </div>
                                    </form>
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

<?php include '../v/support/cmodalAdd.php'; ?>

<script src="../plugins/jansen.js" type="text/javascript"></script>
