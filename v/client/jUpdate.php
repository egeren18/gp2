    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Clientes</a>
                    <a href="#!" class="breadcrumb ">Editar</a>
                    <a href="#helpx" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
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
                                    <a href="#!" class="breadcrumb">Clientes</a>
                                    <a href="#!" class="breadcrumb"><?php echo $client -> clientName; ?></a>
                                    <a href="javascript: history.go(-1)" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                    <a class="right m-r-5 tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                                    <a class="right m-r-5 tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen"><i class="material-icons green-text">file_download</i></a>
                                    <a class="right m-r-5" id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                                    
                                </div>
                            </div>
                            <form id="form_validation" action="../c/client.php?m=updateDb&cid=<?php echo $client -> clientId; ?>" method="post">
                        <div id="main">
                            <div id="screenshot">
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
                                                                <input value="<?php echo $client -> clientContact; ?>" id="clientContact" name="clientContact" placeholder="" type="text" readonly>
                                                                <label for="clientName">Nombre Contacto</label>
                                                             
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> cargo; ?>" id="cargo" name="cargo" placeholder="" type="text" readonly >
                                                                <label for="clientNit">Cargo</label>      
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> correoN; ?>" id="correoN" name="correoN" placeholder="" type="text" readonly >
                                                                <label for="clientNit">Correo</label>      
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l2">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> clientPhone2; ?>" id="clientPhone2" name="clientPhone2" placeholder="" type="text" readonly >
                                                                <label for="clientNit">Tel&eacute;fono</label>      
                                                            </div>
                                                        </div>  
                                                    </div>   
                                                </div>
                                            </li>
                                                      <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2">Datos Empresa</span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="p-t-20"></div>
                                                    <div class="row">
                                                        <div class="col s12 m6 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> clientName; ?>" id="clientName" name="clientName" placeholder="" type="text" readonly>
                                                                <label for="clientName">Nombre o Raz&oacute;n Social</label>                                  
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> clientNit; ?>" id="clientNit" name="clientNit" placeholder="" type="text" readonly >
                                                                <label for="clientNit">N&uacute;mero ID Fiscal (R.I.F)</label>
                                                             
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> clientPhone1; ?>" id="clientPhone1" name="clientPhone1" placeholder="" type="text" readonly >
                                                                <label for="clientNit">Tel&eacute;fono</label>      
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> clientEmail; ?>" id="clientEmail" name="clientEmail" placeholder="" type="text" readonly >
                                                                <label for="clientNit">Correo</label>      
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col s12 m-t--20">
                                                            <div class="input-field">
                                                                <textarea id="textarea" name="clientAddress" class="materialize-textarea" data-length="120" rows="2" readonly ><?php echo $client -> clientAddress; ?>
                                                                </textarea>
                                                                <label class="font-16" for="textarea">Direcci&oacute;n Fiscal</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col s12 m3 l2 m-t--20">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> clientAddress; ?>" id="clientAddress" name="clientAddress" placeholder="" type="text" readonly>
                                                                <label for="clientAddress">Ciudad</label>   
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l2 m-t--20">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> clientState; ?>" id="clientState" name="clientState" placeholder="" type="text" readonly>
                                                                <label for="clientState">Estado</label>   
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l2 m-t--20">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> clientZipCode; ?>" id="clientZipCode" name="clientZipCode" placeholder="" type="text" readonly>
                                                                <label for="clientprevCodigo">C&oacute;digo Postal</label>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l2 m-t--20">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> clientWebPage; ?>" id="clientWebPage" name="clientWebPage" placeholder="" type="text" readonly>
                                                                <label for="clientWebPage">Pagina Web</label>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l2 m-t--20">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> ig; ?>" id="ig" name="ig" placeholder="" type="text" readonly>
                                                                <label for="ig">Instagram</label>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l2 m-t--20">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> li; ?>" id="li" name="li" placeholder="" type="text" readonly>
                                                                <label for="li">Linkedin</label>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l2 m-t--10">
                                                            <div class="input-field">
                                                                <input value="<?php echo $countryname; ?>" id="countryId" name="countryId" placeholder="" type="text" readonly>
                                                                <label for="countryId">Pais</label>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l2 m-t--10">
                                                            <div class="input-field">
                                                                <input value="<?php echo $ntname; ?>" id="ntrabajadorId" name="ntrabajadorId" placeholder="" type="text" readonly>
                                                                <label for="ntrabajadorId">Nro de Trabajadores</label>
                                                            </div>
                                                        </div>
                                                         <div class="col s12 m3 l2 m-t--10">
                                                            <div class="input-field">
                                                                <input value="<?php echo $niname; ?>" id="ningresoId" name="ningresoId" placeholder="" type="text" readonly>
                                                                <label for="ningresoId">Nivel de Ingreso en $</label>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3 m-t--10">
                                                            <div class="input-field">
                                                                <input value="<?php echo $ename; ?>" id="ename" name="ename" placeholder="" type="text" readonly>
                                                                <label for="ename">Sector al que Pertenece</label>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3 m-t--10">
                                                            <div class="input-field">
                                                                <input value="<?php echo $servicename; ?>" id="serviceId" name="serviceId" placeholder="" type="text" readonly>
                                                                <label for="serviceId">Servicio</label>
                                                            </div>
                                                        </div>
                                                     
                                                    </div>
                                                    
                                                    
                                                <div class="row">
                                                    <div class="col s12 m6 l6 m-t--20">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> clientAddress; ?>" id="clientAddress" name="clientAddress" placeholder="" type="text" readonly>
                                                                <label for="clientAddress">Descripci&oacute;n del Servicio</label>   
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l6 m-t--20">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> clientAddress; ?>" id="clientAddress" name="clientAddress" placeholder="" type="text" readonly>
                                                                <label for="clientAddress">Descripci&oacute;n del Sector</label>   
                                                            </div>
                                                        </div>
                                                    </div>    
                                                  <!--<div class="row">

                                                        <div class="col s12 m3 l6 m-t--20">
                                                            <div class="input-field">
                                                                <textarea id="textarea" name="clientprevDescribirSer" class="materialize-textarea" data-length="120" rows="2" readonly></textarea>
                                                                <label class="font-16" for="textarea">Descripci&oacute;n del Servicio</label>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l6 m-t--20">
                                                            <div class="input-field">
                                                                <textarea id="textarea" name="clientprevDescribirSec" class="materialize-textarea" data-length="120" rows="2" readonly></textarea>
                                                                <label class="font-16" for="textarea">Descripci&oacute;n del Sector</label>
                                                            </div>
                                                        </div>

                                                    </div>-->
                                                    
                                                </div>
                                            </li>
                                                    <li>
                                                        <div class="collapsible-header">
                                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                            <span class="blue-grey-text text-darken-2">Sector al que Pertenece</span>
                                                        </div>
                                                        <div class="collapsible-body">
                                                            <div class="p-t-15"></div>
                                                            <div class="row">
                                                                <?php
                                                                while ($economicArea = $_economicArea2 -> fetch_object()) {
                                                                ?>
                                                                <div class="col m6 l4 m-t-5">
                                                                    <label>
                                                                        <input <?php echo $checked = ($client -> economicAreaId == $economicArea -> economicAreaId) ? 'checked' : '' ;  ?> value="<?php echo $economicArea -> economicAreaId; ?>" name="economicAreaId" type="radio"/>
                                                                        <span><?php echo $economicArea -> economicAreaName; ?></span>
                                                                    </label>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col m6 l4 m-t-20">
                                                                    <div class="input-field">
                                                                        <input value="<?php echo $client -> clientAnotherArea;  ?>" id="clientAnotherArea" name="clientAnotherArea" placeholder="" type="text" class="validate">
                                                                        <label for="clientAnotherArea">Otro sector (Especifique):</label>
                                                                        <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="collapsible-header">
                                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                            <span class="blue-grey-text text-darken-2">Estructura Patrimonial</span>
                                                        </div>

                                                        <div class="collapsible-body">
                                                            <div class="field_wrapper m-t-20">
                                                                <?php while ($shareholder = $_shareholder -> fetch_object()) { ?>
                                                                <div class="row">
                                                                    <div class="col l5">
                                                                        <div class="input-field">
                                                                            <input class="hide" name="shareholderId[]" value="<?php echo $shareholder -> shareholderId; ?>">
                                                                            <label for="shareholderName">Nombre del Accionista</label>
                                                                            <input id="shareholderName" type="text" name="shareholderName[]" value="<?php echo $shareholder -> shareholderName; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col l2">
                                                                        <div class="input-field">
                                                                            <input class="hide" name="personId[]" value="<?php echo $shareholder -> personId; ?>">
                                                                            <label for="personId">No. de Identificaci&oacute;n</label>
                                                                            <input id="personId" type="text" name="personId[]" value="<?php echo $shareholder -> personId; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col l2">
                                                                        <div class="input-field">
                                                                            <label for="shareholderPercent">% Acciones</label>
                                                                            <input id="shareholderPercent" type="number" name="shareholderPercent[]" min="0" max="100" step="0.01" class="validate" value="<?php echo $shareholder -> shareholderPercent; ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php } ?>
                                                                <a href="javascript:void(0);" class="add_button" title="Add field">
                                                                    <i class="material-icons m-t-25">add</i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                     <li>
                                                        <div class="collapsible-header">
                                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                            <span class="blue-grey-text text-darken-2">Requerimiento Incial </span>
                                                        </div>

                                                        <div class="collapsible-body">
                                                          <?php if ($client -> documentoId != null){?>
                                                          <!-- codigo para mostrar los documentos --> 
                                                          
                                                            <div class="row ">
                                                        <div class="col s12 m12 l3 m-t-10">
                                                             <?php
                                                                     $id = $client -> documentoId;
                                                                     $path2 = "../../../clientprev1/" . $id;
                                                                            if (file_exists($path2)) {
                                                                                 $directorio2 = opendir($path2);
                                                                                 while ($archivo2 = readdir($directorio2)) {
                                                                                 if (!is_dir($archivo2)) {?>      

                                                                           <p>RIF de la empresa actualizado</P>
                                                                                <a class="blue-text" target="_blank" href="https://sagra.com.ve/clientprev1/<?php echo $id; ?>/<?php echo $archivo2;?>"><?php echo $archivo2;?></a>
                                                                                <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Ver el Documento Adjunto">
                                                                                <i class="material-icons blue-text">info</i></a>
                                                             <?php }}}
                                                             ?>                                    
                                                        </div>
                                                    
                                                        <div class="col s12 m12 l3 m-t-10">                                                                           
                                                             <?php
                                                                     
                                                                     $path2 = "../../../clientprev2/" . $id;
                                                                            if (file_exists($path2)) {
                                                                                 $directorio2 = opendir($path2);
                                                                                 while ($archivo2 = readdir($directorio2)) {
                                                                                 if (!is_dir($archivo2)) {?>      
                                                                           <p>Registro mercantil de la empresa</P>
                                                                                <a class="blue-text" target="_blank" href="https://sagra.com.ve/clientprev2/<?php echo $id; ?>/<?php echo $archivo2;?>"><?php echo $archivo2;?></a>
                                                                                <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Ver el Documento Adjunto">
                                                                                <i class="material-icons blue-text">info</i></a>
                                                             <?php }}}
                                                             ?>                                                             
                                                        </div>
                                                 
                                                        <div class="col s12 m12 l3 m-t-10">                                                                           
                                                             <?php
                                                                     
                                                                     $path2 = "../../../clientprev3/" . $id;
                                                                            if (file_exists($path2)) {
                                                                                 $directorio2 = opendir($path2);
                                                                                 while ($archivo2 = readdir($directorio2)) {
                                                                                 if (!is_dir($archivo2)) {?>      
                                                                           <p>Ultima declaraci&oacute;n de ISLR Disponible </P>
                                                                                <a class="blue-text" target="_blank" href="https://sagra.com.ve/clientprev3/<?php echo $id; ?>/<?php echo $archivo2;?>"><?php echo $archivo2;?></a>
                                                                                <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Ver el Documento Adjunto">
                                                                                <i class="material-icons blue-text">info</i></a>
                                                             <?php }}}
                                                             ?>                                                             
                                                        </div>
                                                  
                                                        <div class="col s12 m12 l3 m-t-10">                                                                           
                                                             <?php
                                                                     
                                                                     $path2 = "../../../clientprev4/" . $id;
                                                                            if (file_exists($path2)) {
                                                                                 $directorio2 = opendir($path2);
                                                                                 while ($archivo2 = readdir($directorio2)) {
                                                                                 if (!is_dir($archivo2)) {?>      
                                                                           <p>Registro mercantil de la empresa</P>
                                                                                <a class="blue-text" target="_blank" href="https://sagra.com.ve/clientprev4/<?php echo $id; ?>/<?php echo $archivo2;?>"><?php echo $archivo2;?></a>
                                                                                <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Ver el Documento Adjunto">
                                                                                <i class="material-icons blue-text">info</i></a>
                                                             <?php }}}
                                                             ?>                                                             
                                                        </div>
                                                    
                                                        <div class="col s12 m12 l3 m-t-10">                                                                           
                                                             <?php
                                                                  
                                                                     $path2 = "../../../clientprev5/" . $id;
                                                                            if (file_exists($path2)) {
                                                                                 $directorio2 = opendir($path2);
                                                                                 while ($archivo2 = readdir($directorio2)) {
                                                                                 if (!is_dir($archivo2)) {?>      
                                                                           <p>Ultimo Estados Financiero Disponible</P>
                                                                                <a class="blue-text" target="_blank" href="https://sagra.com.ve/clientprev5/<?php echo $id; ?>/<?php echo $archivo2;?>"><?php echo $archivo2;?></a>
                                                                                <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Ver el Documento Adjunto">
                                                                                <i class="material-icons blue-text">info</i></a>
                                                             <?php }}}
                                                             ?>                                                             
                                                        </div>
                                                    </div>
                                              
                                                          
                                                          <!-- termina el codigo -->
                                                          <?php } ?>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                                            <i class="material-icons">save</i>
                                                        </button>
                                                    </div>
                                                </div>
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

<?php

// connection
include '../connection.php';

$_modal24 = mysqli_query($master, "
SELECT * FROM cmodal
WHERE moduleId = 25
");
$modal = $_modal24 -> fetch_object();
?>

<div id="helpx" class="modal ">
            <div class="modal-header" style="background-color:#607d8b;">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        <h6><a href="#!" class="breadcrumb white-text">Guia </a>
                        <a href="#!" class="breadcrumb white-text ">Descripci&oacute;n del M&oacute;dulo de <?php echo $modal -> moduleName; ?></a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        </a></h6>
                    </div>
                </div>
            </div>
      
            <div class="modal-content m-t--10">
                
                

                <p>
            <?php echo $modal -> moduleTest2; ?>
                </p>
                <div class="m-t-20"></div>
         
  <a href="#!" class="modal-close btn blue waves-light tooltipped " style="margin-right:5px;" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">play_arrow</i>
         </a>
         <a href="#!" class="modal-close btn red waves-light tooltipped " data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
         </a>
        
            </div>

    <div class="modal-footer">
      
     <div class="row">
                                <div class="col s12 m-t--10 ">
                                    <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                </div>
  </div>
    </div>
    <div class="m-t--20"></div>
        </div>
    <?php include '../v/main/modalS.php'; ?>
    <?php include '../v/support/modalAdd.php'; ?>

    <script type="text/javascript" src="../js/shareholder.js"></script>
<script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-cliente|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>