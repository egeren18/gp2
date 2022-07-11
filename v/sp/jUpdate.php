        <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Selecci&oacute;n de Personal</a>
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
                                    <span class="breadcrumb p-l-10">Modificar</span>
                                    <a href="#!" class="breadcrumb">Selecci&oacute;n de Personal</a>
                                    <a href="#!" class="breadcrumb"><?php echo $client -> gestiontalentoName; ?></a>
                                    <a href="../c/sp.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                </div>
                            </div>
                            <form id="form_validation" action="../c/sp.php?m=updateDb&cid=<?php echo $_GET["cid"]; ?>" method="post">
                                <div class="card m-t-10 m-l-5 m-r-5">
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="m-t-20 m-b-20 m-l-20 m-r-20">
                                                <ul class="collapsible">
                                                    <li>
                                                        <div class="collapsible-header">
                                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                            <span class="blue-grey-text text-darken-2">Datos Persona de Contacto</span>
                                                        </div>
                                                        <div class="collapsible-body">
                                                            <div class="p-t-20"></div>
                                                            <div class="row">
                                                                <div class="col s12 m6 l2">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoName; ?>" id="clientprevNameC" name="clientprevNameC" placeholder="" type="text" readonly>
                                                                        <label for="clientName">Nombre </label>
                                                                    
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l2">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoLast; ?>" id="clientprevLastC" name="clientprevLastC" placeholder="" type="text" readonly >
                                                                        <label for="clientNit">Apellido</label>
                                                                    
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l3">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoDate ?>" id="clientprevCargo" name="clientprevCargo" placeholder="" type="text" readonly >
                                                                        <label for="clientNit">Fecha de Nacimiento</label>      
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l3">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoTlf; ?>" id="clientprevCorreoC" name="clientprevCorreoC" placeholder="" type="text" readonly >
                                                                        <label for="clientNit">Tel&eacute;fono</label>      
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l2">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoCorreo; ?>" id="clientprevTlfC" name="clientprevTlfC" placeholder="" type="text" readonly >
                                                                        <label for="clientNit">Correo</label>      
                                                                    </div>
                                                                </div>  
                                                            </div>   
                                                            <div class="row">
                                                                <div class="col s12 m-t--20">
                                                                    <div class="input-field">
                                                                        <textarea id="textarea" name="clientprevDire" class="materialize-textarea" data-length="120" rows="2" readonly ><?php echo $client -> gestiontalentoDire; ?>
                                                                        </textarea>
                                                                        <label class="font-16" for="textarea">Direcci&oacute;n</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m6 l3">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoCiudad; ?>" id="clientprevNameC" name="clientprevNameC" placeholder="" type="text" readonly>
                                                                        <label for="clientName">Ciudad </label>
                                                                    
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l3.0
                                                                ">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoCp; ?>" id="clientprevLastC" name="clientprevLastC" placeholder="" type="text" readonly >
                                                                        <label for="clientNit">C&oacute;digo Postal</label>
                                                                    
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l3">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $countryname; ?>" id="clientprevCargo" name="clientprevCargo" placeholder="" type="text" readonly >
                                                                        <label for="clientNit">pa&iacute;s</label>      
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l3">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $redes; ?>" id="clientprevCorreoC" name="clientprevCorreoC" placeholder="" type="text" readonly >
                                                                        <label for="clientNit">¿C&oacute;mo te enteraste de SAGRA? *</label>      
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>   
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="collapsible-header">
                                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                            <span class="blue-grey-text text-darken-2">Datos Laborales</span>
                                                        </div>
                                                        <div class="collapsible-body">
                                                            <div class="p-t-20"></div>
                                                            <div class="row">
                                                                <div class="col s12 m6 l3">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoAs; ?>" id="clientprevNameE" name="clientprevNameE" placeholder="" type="text" readonly>
                                                                        <label for="clientName">Aspiraci&oacute;n salarial</label>                                  
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l3">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoLogro; ?>" id="clientprevTlfE" name="clientprevTlfE" placeholder="" type="text" readonly >
                                                                        <label for="clientNit">Logros</label>      
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l6">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoUc; ?>" id="clientprevRif" name="clientprevRif" placeholder="" type="text" readonly >
                                                                        <label for="clientNit">Nivel Académico</label>
                                                                    
                                                                    </div>
                                                                </div>
                                                            
                                                                <div class="col s12 m3 l12">
                                                                    <div class="input-field">
                                                                    <textarea id="textarea1" class="materialize-textarea" readonly><?php echo $client -> gestiontalentoExp; ?></textarea>
                                                                        <label for="clientNit">Experiencia Laboral </label>      
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l12">
                                                                    <div class="input-field">
                                                                        <textarea id="textarea1" class="materialize-textarea" readonly><?php echo $client -> gestiontalentoHabilidades; ?></textarea>
                                                                        <label for="clientNit">Describe tus habilidades y competencias</label>      
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l12">
                                                                    <div class="input-field">
                                                                    <textarea id="textarea1" class="materialize-textarea" readonly><?php echo $client -> gestiontalentoSagra; ?></textarea>
                                                                        <label for="clientNit">¿Qu&eacute; conoces de SAGRA?</label>      
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                    
                                        
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="collapsible-header">
                                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                            <span class="blue-grey-text text-darken-2">Referencias Personales</span>
                                                        </div>
                                                        <div class="collapsible-body">
                                                            <div class="p-t-20"></div>
                                                    
                                                        
                                                            <div class="row">
                                                                <div class="col s12 m6 l3">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoN1; ?>" id="clientprevNameE" name="clientprevNameE" placeholder="" type="text" readonly>
                                                                        <label for="clientName">Nombre</label>                                  
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l3">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoA1; ?>" id="clientprevRif" name="clientprevRif" placeholder="" type="text" readonly >
                                                                        <label for="clientNit">Apellido</label>
                                                                    
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l3">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoT1; ?>" id="clientprevTlfE" name="clientprevTlfE" placeholder="" type="text" readonly >
                                                                        <label for="clientNit">Tel&eacute;fono</label>      
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l3">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoE1; ?>" id="clientprevCorreoE" name="clientprevCorreoE" placeholder="" type="text" readonly >
                                                                        <label for="clientNit">¿Hace cuantos años se conocen?</label>      
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                            <div class="row">
                                                                <div class="col s12 m6 l3">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoN2; ?>" id="clientprevNameE" name="clientprevNameE" placeholder="" type="text" readonly>
                                                                        <label for="clientName">Nombre</label>                                  
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l3">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoA2; ?>" id="clientprevRif" name="clientprevRif" placeholder="" type="text" readonly >
                                                                        <label for="clientNit">Apellido</label>
                                                                    
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l3">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoT2; ?>" id="clientprevTlfE" name="clientprevTlfE" placeholder="" type="text" readonly >
                                                                        <label for="clientNit">Tel&eacute;fono</label>      
                                                                    </div>
                                                                </div>
                                                                <div class="col s12 m3 l3">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> gestiontalentoE2; ?>" id="clientprevCorreoE" name="clientprevCorreoE" placeholder="" type="text" readonly >
                                                                        <label for="clientNit">¿Hace cuantos años se conocen?</label>      
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="collapsible-header">
                                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                            <span class="blue-grey-text text-darken-2">Curriculum</span>
                                                        </div>
                                                        <div class="collapsible-body">
                                                            <div class="p-t-20"></div>

                                                            
                                                            <div class="row ">
                                                             
                                                                    
                                                                                    
                                                                    <?php
                                                                            $id = $_GET["cid"];
                                                                            $path2 = "../../../../gestion-talento/curriculum/" . $id;
                                                                                    if (file_exists($path2)) {
                                                                                        $directorio2 = opendir($path2);
                                                                                        while ($archivo2 = readdir($directorio2)) {
                                                                                        if (!is_dir($archivo2)) {?>      
                                                                                <div class="col s12 m12 l3">
                                                                                <p>Curriculum</P>
                                                                                        <a class="blue-text" target="_blank" href="<?php echo $path2;?>/<?php echo $archivo2;?>"><?php echo $archivo2;?></a>
                                                                                        <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Ver el Documento Adjunto">
                                                                                        <i class="material-icons blue-text">info</i></a>
                                                                                        </div>
                                                                    <?php }}}else {
                                                                            $path2 = "../../../../gestion-talento-laboral/curriculum/" . $id;
                                                                                    if (file_exists($path2)) {
                                                                                        $directorio2 = opendir($path2);
                                                                                        while ($archivo2 = readdir($directorio2)) {
                                                                                        if (!is_dir($archivo2)) {?>    
                                                                                        <div class="col s12 m12 l3 ">  
                                                                                       <p>Curriculum</P>
                                                                                        <a class="blue-text" target="_blank" href="<?php echo $path2;?>/<?php echo $archivo2;?>"><?php echo $archivo2;?></a>
                                                                                        <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Ver el Documento Adjunto">
                                                                                        <i class="material-icons blue-text">info</i></a>
                                                                                                                        
                                                                </div>
                                                                <?php }}}}?> 
                                                            
                                                        
                                                            
                                                        
                                                            
                                
                                                </ul>
                                            
                                           
                                                <div class="row">
                                                   <div class="col s12 m6 l3 m-t-20">
                                                       <div class="input-field">
                                                     <small class="blue-grey-text text-darken-2">Sugerido por el sistema</small>
                                                           <input value="Aceptable" disabled="">
                                                       </div>
                                                   </div>
                                                
                                                   <div class="col s12 m6 l3 m-t-20">
                                                       <div class="input-field">
                                                                <small class="blue-grey-text text-darken-2">Calificación Socio Lider</small>
                                                           <input value="Aprobado " disabled="">
                                                       </div>
                                                   </div>
                                                
                                                   <div class="col s12 m6 l3 m-t-20">
                                                
                                                
                                                       <div class="input-field">
                                                           <small class="blue-grey-text text-darken-2">Decisi&oacute;n Socio lider </small>
                                                           <input value="Aprobado" disabled="">
                                                       </div>
                                                   </div>
                                                 </div>
                                                  <?php if ($_GET["cu"] == 2){?>
                                              <div class="row ">
                                                
                                                    <div class="col s12">
                                                        <label>
                                                         <input type="radio" checked readonly/>
                                                            <span class="blue-grey-text text-darken-2"><span class="blue-text">Procesado</span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            <?php }else { ?>
                                                <div class="row ">
                                                
                                                    <div class="col s12">
                                                        <label>
                                                            <input type="radio" name="approved" value="3"/>
                                                            <span class="blue-grey-text text-darken-2"><span class="blue-text">Procesado</span>, pasara al modulo de!</span>
                                                        </label>
                                                    </div>
                                                </div> <?php } ?>
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
                                                        <a href="../c/sp.php?m=index" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
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
