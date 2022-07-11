
<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Diagn&oacute;stico</a>
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
                            <a href="#!" class="breadcrumb">Diagn&oacute;stico</a>
                            <a href="#!" class="breadcrumb"><?php echo $client -> c1Name; ?></a>
                            <a href="../c/dformulario.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                <i class="material-icons blue-grey-text">cancel</i>
                            </a>
                        </div>
                    </div>
                    <form id="form_validation" action="../c/dformulario.php?m=updateDb2&cid=<?php echo $_GET["cid"]; ?>" method="post"
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
                                                                <input value="<?php echo $countryName; ?>" id="countryId" name="countryId" placeholder="" type="text" readonly>
                                                                <label for="countryId">Pais</label>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l2 m-t--10">
                                                            <div class="input-field">
                                                                <input value="<?php echo  $ntrabajadorName ; ?>" id="ntrabajadorId" name="ntrabajadorId" placeholder="" type="text" readonly>
                                                                <label for="ntrabajadorId">Nro de Trabajadores</label>
                                                            </div>
                                                        </div>
                                                         <div class="col s12 m3 l2 m-t--10">
                                                            <div class="input-field">
                                                                <input value="<?php echo $ningresoName; ?>" id="ningresoId" name="ningresoId" placeholder="" type="text" readonly>
                                                                <label for="ningresoId">Nivel de Ingreso en $</label>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3 m-t--10">
                                                            <div class="input-field">
                                                                <input value="<?php echo $economicAreaName; ?>" id="ename" name="ename" placeholder="" type="text" readonly>
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
                                                    <span class="blue-grey-text text-darken-2">Resultados</span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <?php include '../v/dformulario/categorias.php';?>
                                                </div>
                                            </li>
                                            

                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2">Reporte</span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="p-t-20"></div>
                                                    
                                                    <div class="row">
                                                    <div class="col s12 m12 l12">
                                                   <a class="blue-text" href="https://sagra.com.ve/diagnostico/resultado.php?id=<?php echo $_GET["cid"];?>&d=<?php echo $_GET["d"];?>" target="_blank">
                                                       Link del Reporte
                                                   </a>
                                                    </div>
                                                        </div>
                                            
                                
                                                </div>
                                            </li>
                                                  <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2">Pr&oacute;ximos Pasos </span>
                                                </div>
                                                <div class="collapsible-body">
                                                 
                                                 
                                                    
                                                    <div class="row">
                                                                      <div class="col s12 m12 l12">
                                                                         <?php if( $procesado == 0){ ;?>
                                                                        <textarea name="a11" class="ckeditor" ><?php echo $observacion -> a11 ;?></textarea>
                                                                        <?php }
                                                                        else{ ?>
                                                                        <textarea name="a11" class="ckeditor" readonly><?php echo $observacion -> a11 ;?></textarea>
                                                                        <?php }?>
                                                                      </div>
                                                                </div>
                                                    
                                                    
                                            
                                
                                                </div>
                                            </li>
                                                
                                                    
                        
                                        </ul>
                                    <div class="m-t-20"></div>
                             
                                        <div class="row">
                                            <?php if ($procesado == 0){?>
                                            <div class="col s12 m-t-10 ">
                                                <label>
                                                 <input type="checkbox" class="validate filled-in" name="approved" value="1"/>
                                                   <span class="blue-grey-text text-darken-2"><span class="blue-text">Aprobar</span>, Revisado y Corregido!</span>
                                                </label>
                                            </div>
                                            <?php } ?>
                                            
                                            <?php if ($procesado == 0){ ?>
                                            <div class="col s12 m-t-10">
                                                <label>
                                                 <input type="checkbox" <?php if($observacion -> coti ==1){?> checked="checked"  <?php } ?> class="validate filled-in" name="a12" value="1"/>
                                                   <span class="blue-grey-text text-darken-2"><span class="blue-text">Solicitud de cotizaci&oacute;n</span></span>
                                                </label>
                                            </div>
                                            <?php } else{ ?>
                                            <div class="col s12 m-t-10">
                                                <label>
                                                 <input type="checkbox" <?php if($observacion -> coti ==1){?> checked="checked"  <?php } ?> disabled="disabled"  name="a12" value="1" readonly/>
                                                   <span class="blue-grey-text text-darken-2"><span class="blue-text">Solicitud de cotizaci&oacute;n</span></span>
                                                </label>
                                            </div>
                                            
                                            <?php } ?>
                                            
                                        
                                            
                                           
                                            <?php if ($procesado == 0){?>
                                            <div class="col s12 m-t-10 ">
                                                <label>
                                                    <input type="checkbox" class="validate filled-in" required="" />
                                                    <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                </label>
                                            </div>
                                            <?php } ?>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col s12 m-t-10 ">
                                                <a href="../c/dformulario.php?m=index" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
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
<script type="text/javascript">
    $(document).ready(function(){
	$('.tooltipped').tooltip();
	$('.collapsible').collapsible();
});
</script>
<script type="text/javascript" src="../js/shareholder.js"></script>
