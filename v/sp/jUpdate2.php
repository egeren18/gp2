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
                    <form id="form_validation" action="../c/sp.php?m=updateDb2&cid=<?php echo $_GET["cid"]; ?>" method="post"
                     enctype="multipart/form-data" onsubmit="return checkForm(this);">
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
                                                                <input value="<?php echo $client -> gestiontalentoName; ?>" id="nombreE" name="nombreE" placeholder="" type="text" >
                                                                <label for="">Nombre </label>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l2">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> gestiontalentoLast; ?>" id="apellido" name="apellido" placeholder="" type="text"  >
                                                                <label for="apellido">Apellido</label>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> gestiontalentoDate ?>" id="fecha" name="fecha" placeholder="" type="text"  >
                                                                <label for="fecha">Fecha de Nacimiento</label>      
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> gestiontalentoTlf; ?>" id="telefono" name="telefono" placeholder="" type="text"  >
                                                                <label for="telefono">Tel&eacute;fono</label>      
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l2">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> gestiontalentoCorreo; ?>" id="correo" name="correo" placeholder="" type="text"  >
                                                                <label for="correo">Correo</label>      
                                                            </div>
                                                        </div>  
                                                    </div>   
                                                    <div class="row">
                                                        <div class="col s12 m-t--20">
                                                            <div class="input-field">
                                                                <textarea id="textarea" name="direccion" class="materialize-textarea" data-length="120" rows="2"  ><?php echo $client -> gestiontalentoDire; ?>
                                                                </textarea>
                                                                <label class="font-16" for="textarea">Direcci&oacute;n</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col s12 m6 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> gestiontalentoCiudad; ?>" id="ciudad" name="ciudad" placeholder="" type="text" >
                                                                <label for="ciudad">Ciudad </label>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3.0
                                                        ">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> gestiontalentoCp; ?>" id="cp" name="cp" placeholder="" type="text"  >
                                                                <label for="cp">C&oacute;digo Postal</label>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                  <select name="pais" id="pais" class="dropselectsec1" style="margin-left:-3px">
                                                                 <option value="<?php echo $countryid ;?>"><?php echo $countryname;?>  </option>
                                                                 <?php
                                                                    while ($r_country2 = mysqli_fetch_array($country2)) {
                                                                        $countryId = $r_country2["countryId"];
                                                                        $countryName = $r_country2["countryName"];
                                                                        ?>
                                                                        <option value="<?php echo $countryId; ?>"><?php echo $countryName; ?></option>
                                                                    <?php } ?>
                                                                    </select>
                                                                     <label for="pais">pa&iacute;s </label>    
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                
                                                                  <select name="sector" id="sector" class="dropselectsec1" style="margin-left:-3px">
                                                                 <option value="<?php echo $redesid ;?>"><?php echo $redesname;?>  </option>
                                                                 <?php
                                                                    while ($r_r = mysqli_fetch_array($r)) {
                                                                        $redesId = $r_r["redesId"];
                                                                        $redesName = $r_r["redesName"];
                                                                        ?>
                                                                        <option value="<?php echo $redesId; ?>"><?php echo $redesName; ?></option>
                                                                    <?php } ?>
                                                                    </select>
                                                                     <label for="pais">¿C&oacute;mo te enteraste de SAGRA? </label> 
                                                                
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
                                                                <input value="<?php echo $client -> gestiontalentoAs; ?>" id="as" name="as" placeholder="" type="text" >
                                                                <label for="as">Aspiraci&oacute;n salarial</label>                                  
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> gestiontalentoLogro; ?>" id="logro" name="logro" placeholder="" type="text"  >
                                                                <label for="logro">Logros</label>      
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l6">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> gestiontalentoUc; ?>" id="uc" name="uc" placeholder="" type="text"  >
                                                                <label for="uc">Nivel Académico</label>
                                                            
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="col s12 m3 l12">
                                                            <div class="input-field">
                                                            <textarea id="textarea1" name="exp" class="materialize-textarea" ><?php echo $client -> gestiontalentoExp; ?></textarea>
                                                                <label for="textarea1">Experiencia Laboral </label>      
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l12">
                                                            <div class="input-field">
                                                                <textarea id="habilidades" name="habilidades" class="materialize-textarea" ><?php echo $client -> gestiontalentoHabilidades; ?></textarea>
                                                                <label for="habilidades">Describe tus habilidades y competencias</label>      
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l12">
                                                            <div class="input-field">
                                                            <textarea id="sagra" name="sagra"class="materialize-textarea" ><?php echo $client -> gestiontalentoSagra; ?></textarea>
                                                                <label for="sagra">¿Qu&eacute; conoces de SAGRA?</label>      
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
                                                                <input value="<?php echo $client -> gestiontalentoN1; ?>" id="n1" name="n1" placeholder="" type="text" >
                                                                <label for="n1">Nombre</label>                                  
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> gestiontalentoA1; ?>" id="a1" name="a1" placeholder="" type="text"  >
                                                                <label for="a2">Apellido</label>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> gestiontalentoT1; ?>" id="t1" name="t1" placeholder="" type="text"  >
                                                                <label for="t1">Tel&eacute;fono</label>      
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> gestiontalentoE1; ?>" id="e1" name="e1" placeholder="" type="text"  >
                                                                <label for="clientNit">¿Hace cuantos años se conocen?</label>      
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="row">
                                                        <div class="col s12 m6 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> gestiontalentoN2; ?>" id="n2" name="n2" placeholder="" type="text" >
                                                                <label for="n2">Nombre</label>                                  
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> gestiontalentoA2; ?>" id="a2" name="a2" placeholder="" type="text"  >
                                                                <label for="a2">Apellido</label>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> gestiontalentoT2; ?>" id="t2" name="t2" placeholder="" type="text"  >
                                                                <label for="t2">Tel&eacute;fono</label>      
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> gestiontalentoE2; ?>" id="e2" name="e2" placeholder="" type="text"  >
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
                                                                    $path2 = "../../../../curriculum/" . $id;
                                                                            if (file_exists($path2)) {
                                                                                $directorio2 = opendir($path2);
                                                                                while ($archivo2 = readdir($directorio2)) {
                                                                                if (!is_dir($archivo2)) {?>    
                                                                               <div class="col s12 m12 l12 "> Curriculum</div>
                                                                                <div class="col s12 m12 l12 m-t-10">  
                                                                                <a class="blue-text m-t-10" target="_blank" href="<?php echo $path2;?>/<?php echo $archivo2;?>"><?php echo $archivo2;?></a>
                                                                                <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Ver el Documento Adjunto">
                                                                                <i class="material-icons blue-text">info</i></a>
                                                                                                                
                                                                                 </div>
                                                                                 <div class="col s12 l12 m-t-10">
                                                                                   <a class="red-text" href="../v/sp/deletei.php?c=<?php echo $_GET["cid"];?>&a=<?php echo $archivo2;?>" >Eliminar Documento</a>
                                                                                      <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Eliminar el Documento Adjunto">
                                                                                      <i class="material-icons red-text">delete</i></a>
                                                                                 </div>  
                                                        <?php }}}else{ ?>
                                                           <div class="col s12 ">
                                                               <label>Adjuntar Curriculum</label>
                                                                <div class="file-field input-field">
                                                                    <div class="btn white ">
                                                                        <i class="material-icons blue-text">attach_file</i>
                                                                        <input class="blue" type="file" accept="*"  id="archivo2[]" name="archivo2[]">
                                                                    </div>
                                                                    <div class="file-path-wrapper">
                                                                        <input class="file-path validate" type="text" placeholder="Adjuntar im&aacute;gen o capture!">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php  } ?>
                                                                                                        
                                                
                                                    
                                                
                                                    
                        
                                        </ul>
                                    <div class="m-t-20"></div>
                             
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
