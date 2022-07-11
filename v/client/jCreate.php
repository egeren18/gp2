    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Clientes</a>
                    <a href="#!" class="breadcrumb ">A&ntilde;adir</a>
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

            <form id="form_validation" action="../c/client.php?m=createDb" method="post">
                <div class="row">
                    <div class="col s12 m12 l12 m-t-5">
                        <div class="card blue-grey lighten-5 hoverable">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        <span class="blue-text p-l-10">Clientes</span>
                                        <a href="javascript: history.go(-1)" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                            <i class="material-icons blue-grey-text">cancel</i>
                                        </a>
                                        <a class="right m-r-5 tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                                        <a class="right m-r-5 tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen"><i class="material-icons green-text">file_download</i></a>
                                        <a class="right m-r-5" id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                                    
                                    </div>
                                </div>
                                
                        <div id="main">
                            <div id="screenshot">
                                <div class="card m-t-10 m-l-5 m-r-5">
                                    <div class="card p-t-20 p-b-15 p-l-20 p-r-20">
                                        <ul class="collapsible">
                                           <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2">Datos Persona Contacto</span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="p-t-20"></div>
                                                    <div class="row">
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input id="nombreN" name="nombreN" placeholder="" type="text" class="validate" required>
                                                                <label for="nombreN">Nombre </label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input id="apellidoN" name="apellidoN" placeholder="" type="text" class="validate" required>
                                                                <label for="apellidoN">Apellido</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                         <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input id="cargoN" name="cargoN" placeholder="" type="text" class="validate" required>
                                                                <label for="cargoN">Cargo</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input id="correoN" name="correoN" placeholder="" type="text" class="validate" required>
                                                                <label for="correoN">Correo Eletro&oacute;ico</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l3">
                                                            <div class="input-field">
                                                                <input id="clientPhone2" name="clientPhone2" placeholder="" type="number" class="validate" required>
                                                                <label for="clientPhone2">Tel&eacute;fono</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
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
                                                        <div class="col s12 m6 l4">
                                                            <div class="input-field">
                                                                <input id="clientName" name="clientName" placeholder="" type="text" class="validate" required>
                                                                <label for="clientName">Nombre o Raz&oacute;n Social</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input id="clientNit" name="clientNit" placeholder="" type="text" class="validate" required>
                                                                <label for="clientNit">NIT</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l2">
                                                            <div class="input-field">
                                                                <input id="clientPhone1" name="clientPhone1" placeholder="" type="number" class="validate" required>
                                                                <label for="clientPhone1">Tel&eacute;fono</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                          <div class="col s12 m3 l3 ">
                                                            <div class="input-field">
                                                                <input id="clientEmail" name="clientEmail" placeholder="" type="email" class="validate" required>
                                                                <label for="clientEmail">Correo Electr&oacute;nico</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col s12 m-t--30">
                                                            <div class="input-field">
                                                                <textarea id="textarea" name="clientAddress" class="materialize-textarea" data-length="120" rows="2" required></textarea>
                                                                <label class="font-16" for="textarea">Direcci&oacute;n Fiscal</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col s12 m6 l4 m-t--20">
                                                            <div class="input-field">
                                                                <input id="clientCity" name="clientCity" placeholder="" type="text" class="validate" required>
                                                                <label for="clientCity">Ciudad</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l4 m-t--20">
                                                            <div class="input-field">
                                                                <input id="clientState" name="clientState" placeholder="" type="text" class="validate" required>
                                                                <label for="clientState">Estado</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l4 m-t--20">
                                                            <div class="input-field">
                                                                <select id="countryId" name="countryId" placeholder="" type="text" class="validate" required>
                                                                    <option value="">&nbsp;</option>
                                                                    <?php
                                                                    while ($r_country = mysqli_fetch_array($country)) {
                                                                        $countryId = $r_country["countryId"];
                                                                        $countryName = $r_country["countryName"];
                                                                        ?>
                                                                        <option value="<?php echo $countryId; ?>"><?php echo $countryName; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label class="font-13" for="countryId">Pa&iacute;s</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l4 m-t--20">
                                                            <div class="input-field">
                                                                <input id="clientZipCode" name="clientZipCode" placeholder="" type="number" class="validate" required>
                                                                <label for="clientZipCode">Zona Postal</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l4 m-t--20">
                                                            <div class="input-field">
                                                                <input id="clientWebPage" name="clientWebPage" placeholder="" type="text" class="validate" >
                                                                <label for="clientWebPage">P&aacute;gina Web</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l4 m-t--20">
                                                            <div class="input-field">
                                                                <input id="ig" name="ig" placeholder="" type="text" class="validate" >
                                                                <label for="ig">Instagram</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l4 m-t--20">
                                                            <div class="input-field">
                                                                <input id="li" name="li" placeholder="" type="text" class="validate" >
                                                                <label for="li">Linkedin</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="col s12 m6 l4 m-t--20">
                                                            <div class="input-field">
                                                                <select id="serviceId" name="serviceId" placeholder="" type="text" class="validate" required>
                                                                    <option value="">&nbsp;</option>
                                                                    <?php
                                                                    while ($r_service = mysqli_fetch_array($service)) {
                                                                        $serviceId = $r_service["serviceId"];
                                                                        $serviceName = $r_service["serviceName"];
                                                                        ?>
                                                                        <option value="<?php echo $serviceId; ?>"><?php echo $serviceName; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label class="font-13" for="serviceId">Servicio</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l4 m-t--20">
                                                            <div class="input-field">
                                                                <select id="nt" name="nt" placeholder="" type="text" class="validate" required>
                                                                    <option value="">&nbsp;</option>
                                                                    <?php
                                                                    while ($r_ntrabajador = mysqli_fetch_array($ntrabajador)) {
                                                                        $ntrabajadorId = $r_ntrabajador["ntrabajadorId"];
                                                                        $ntrabajadorName = $r_ntrabajador["ntrabajadorName"];
                                                                        ?>
                                                                        <option value="<?php echo $ntrabajadorId; ?>"><?php echo $ntrabajadorName; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label class="font-13" for="nt">Numero de trabjadores </label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l4 m-t--20">
                                                            <div class="input-field">
                                                                <select id="ni" name="ni" placeholder="" type="text" class="validate" required>
                                                                    <option value="">&nbsp;</option>
                                                                    <?php
                                                                    while ($r_ningreso = mysqli_fetch_array($ningreso)) {
                                                                        $ningresoId = $r_ningreso["ningresoId"];
                                                                        $ningresoName = $r_ningreso["ningresoName"];
                                                                        ?>
                                                                        <option value="<?php echo $ningresoId; ?>"><?php echo $ningresoName; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label class="font-13" for="ni">Nivel de Ingreso en $ </label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col s12 m-t--20">
                                                            <div class="input-field">
                                                                <textarea id="textarea" name="clientObservations" class="materialize-textarea" data-length="120" rows="2" ></textarea>
                                                                <label class="font-16" for="textarea">Observaciones</label>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                        while ($r_economicArea = mysqli_fetch_array($economicArea)) {
                                                            $economicAreaId = $r_economicArea["economicAreaId"];
                                                            $economicAreaName = $r_economicArea["economicAreaName"];
                                                            ?>
                                                        <div class="col m6 l4 m-t-5">
                                                            <label>
                                                                <input value="<?php echo $economicAreaId; ?>" name="economicAreaId" type="radio"/>
                                                                <span><?php echo $economicAreaName; ?></span>
                                                            </label>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col m6 l4 m-t-20">
                                                            
                                                            
                                                            
                                                            
                                                            <div class="input-field">
                                                                <input id="clientAnotherArea" name="clientAnotherArea" placeholder="" type="text" class="validate">
                                                                <label for="clientAnotherArea"> Si su sector es Otro (Especifique):</label>
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
                                                        <div class="row">
                                                            <div class="col l5">
                                                                <div class="input-field">
                                                                    <label for="shareholderName">Nombre del Accionista</label>
                                                                    <input id="shareholderName" type="text" name="shareholderName[]" required>
                                                                </div>
                                                            </div>
                                                            <div class="col l2">
                                                                <div class="input-field">
                                                                    <label for="personId">No. de Identificac&oacute;n</label>
                                                                    <input id="personId" type="text" name="personId[]" required>
                                                                </div>
                                                            </div>
                                                            <div class="col l2">
                                                                <div class="input-field">
                                                                <label for="shareholderPercent">% Acciones</label>
                                                                <input id="shareholderPercent" type="number" name="shareholderPercent[]" min="0" max="100" step="0.01" class="validate" required>
                                                                </div>
                                                            </div>
                                                            <a href="javascript:void(0);" class="add_button" title="Add field">
                                                                <i class="material-icons m-t-25">add</i>
                                                            </a>
                                                        </div>
                                                    </div>
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