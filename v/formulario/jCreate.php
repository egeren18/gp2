<main>

<div class="container">

<div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down"> Formulario Suscriptores</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">A&ntilde;adir</a>
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

    <form id="form_validation" action="../c/formulario.php?m=createDb" method="post">
        <div class="row">
            <div class="col s12 m12 l12 m-t-5">
                <div class="card blue-grey lighten-5 hoverable">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                            <span class="breadcrumb  p-l-10">Formulario Suscriptores</span>
                            <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Men&uacute de Inicio">
                                <i class="material-icons blue-grey-text">cancel</i>
                            </a>
                            <a href="javascript: history.go(-1);" class="tooltipped right m-l-5" data-position="left" data-tooltip="Atr&aacute;s">
                                <i class="material-icons blue-grey-text">undo</i>
                            </a>
                            </div>
                        </div>

                        <div class="card m-t-10 m-l-5 m-r-5">
                            <div class="card p-t-20 p-b-15 p-l-20 p-r-20">
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Datos Generales</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="p-t-20"></div>

                                            <div class="row">
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="subscriberName" name="subscriberName" value=" <?php echo $sn ;?>" placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberName">Nombre &oacute; Raz&oacute;n Social</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="subscriberRif" name="subscriberRif" value=" <?php echo $srif ;?>" placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberRif">R.I.F</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="subscriberPhone1" name="subscriberPhone1" value=" <?php echo $sp1 ;?>" placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberPhone1">Tel&eacute;fono 1</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="subscriberPhone2" name="subscriberPhone2" placeholder="" value=" <?php echo $sp2 ;?>"  type="text" class="validate" required>
                                                            <label for="subscriberPhone2">Tel&eacute;fono 2</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                </div>


                                        </div>


                                    </li>
                                    <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Persona Contacto</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="p-t-15"></div>
                                         
                                            <div class="row">
                                                    <div class="col s12 m6 l4">
                                                        <div class="input-field">
                                                            <input id="subscriberContactName" name="subscriberContactName" value=" <?php echo $scn ;?>"  placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberContactName">Nombres</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l4">
                                                        <div class="input-field">
                                                            <input id="subscriberContactSurname" name="subscriberContactSurname" value=" <?php echo $scn ;?>"  placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberContactSurname">Apellidos</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l4">
                                                        <div class="input-field">
                                                            <input id="subscriberContactEmail" name="subscriberContactEmail" value=" <?php echo $scemail  ;?>"   placeholder="" type="email" class="validate" required>
                                                            <label for="subscriberContactEmail">Correo Electr&oacute;nico</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Ubicaci&oacute;n</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="field_wrapper m-t-20">
                                            <div class="row">
                                                    <div class="col s12">
                                                        <div class="input-field">
                                                            <input id="subscriberAddress" name="subscriberAddress" value=" <?php echo $scaddress;?>"  placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberAddress">Direcci&oacute;n Fiscal</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                            <input id="subscriberCity" name="subscriberCity" value=" <?php echo $sccity;?>" placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberCity">Ciudad</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                            <input id="subscriberState" name="subscriberState" value=" <?php echo $scstate;?>" placeholder=""  type="text" class="validate" required>
                                                            <label for="subscriberState">Estado</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                      <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                            <select id="countryId" name="countryId"  placeholder="" type="text" class="validate" required>
                                                                <option value="<?php echo $sccountry;?>"><?php echo $countryname ;?> </option>
                                                                <?php while ($country = $_country -> fetch_object()) { ?>
                                                                <option value="<?php echo $country -> countryId; ?>"><?php echo $country -> countryName; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <label class="font-13" for="countryId">Pa&iacute;s</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                            <input id="subscriberZipCode" name="subscriberZipCode" value=" <?php echo $sczip;?>" placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberZipCode">Zona Postal</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="col s12 m6 l4">
                                                        <div class="input-field">
                                                            <input id="subscriberWebPage" name="subscriberWebPage" value=" <?php echo $scweb;?>" placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberWebPage">P&aacute;gina Web</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                       </div>



                                    </li>
                                    <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Suscripci&oacute;n</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="field_wrapper m-t-20">

                                                 <div class="row">
                                                        
                                                    <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                               <select id="subscriberUsers" name="subscriberUsers" placeholder="" type="text" class="validate" required>
                                                                  <option value="<?php echo $scuser;?>"><?php echo $scuser;?></option>
                                                                  <option value="3">3</option>
                                                                  <option value="4">4</option>
                                                                  <option value="5">5</option>
                                                                  <option value="3">6</option>
                                                                  <option value="4">7</option>
                                                                  <option value="5">8</option>
                                                                  <option value="4">9</option>
                                                                  <option value="5">10</option>
                                                              </select>
                                                            <label class="font-13" for="subscriberUsers">No. de Usuarios</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                 
                                                    <div class="col s12 m6 l4">
                                                        <div class="input-field"> 
                                                            <select id="subscriptionId" name="subscriptionId" placeholder="" type="text" class="validate" required>
                                                                <option value="<?php echo $scuser;?>"><?php echo $subscriptioname;?></option>
                                                                <?php while ($subscription = $_subscription -> fetch_object()) { ?>
                                                                <option value="<?php echo $subscription -> subscriptionId; ?>"><?php echo $subscription -> subscriptionName; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <label class="font-13" for="subscriptionId">Tiempo de Suscripci&oacute;n</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div> 
                                                    
                                                                                                        
                                                 </div>
                                            </div>

                                       </div>



                                    </li>
                                    <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Usuario</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="field_wrapper m-t-20">

                                                <div class="row m-t-20">
                                                    <div class="col s12">
                                                        <a class="tooltipped" data-position="bottom" data-tooltip="Socio de Riesgo" href="#">Administrador</a>
                                                    </div>
                                                </div>
                                                <div class="row m-t-20">                                                         
                                                 <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="userName" name="userName" placeholder="" type="text" class="validate" required>
                                                            <label for="userName">Nombres</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="userSurname" name="userSurname" placeholder="" type="text" class="validate" required>
                                                            <label for="userSurname">Apellidos</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="userEmail" name="userEmail" placeholder="" type="email" class="validate" required>
                                                            <label for="userEmail">Correo Electr&oacute;nico</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                     <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="userQuestion" name="userQuestion" placeholder="" type="text" class="validate" required>
                                                            <label for="userQuestion">Color Preferido</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>        

                                                </div>
                                                <div class="row">
                                                    <div class="col s12">
                                                        <a class="tooltipped" data-position="bottom" data-tooltip="Socio de Riesgo" href="#">Socio riesgo</a>
                                                    </div>
                                                </div>

                                                <div class="row m-t-20">
                                                 <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="riskPartnerName" name="riskPartnerName" placeholder="" type="text" class="validate" required>
                                                            <label for="riskPartnerName">Nombres</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="riskPartnerSurname" name="riskPartnerSurname" placeholder="" type="text" class="validate" required>
                                                            <label for="riskPartnerSurname">Apellidos</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="riskPartnerEmail" name="riskPartnerEmail" placeholder="socioriesgo@nombredelaempresa" type="email" class="validate" required>
                                                            <label for="riskPartnerEmail">Correo Electr&oacute;nico</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                      <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="userQuestion2" name="userQuestion2" placeholder="" type="text" class="validate" required>
                                                            <label for="userQuestion2">Color Preferido</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                  
                                                    
                                                                                                        
                                                </div>

                                                <div class="row">
                                                    <div class="col s12">
                                                        <a class="tooltipped" data-position="bottom" data-tooltip="Socio de Riesgo" href="#"> Estandar </a>
                                                    </div>
                                                </div>


                                                <div class="row m-t-20">
                                                 
                                                 <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="userName1" name="userName1" placeholder="" type="text" class="validate" required>
                                                            <label for="userName1">Nombres</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="userSurname1" name="userSurname1" placeholder="" type="text" class="validate" required>
                                                            <label for="userSurname1">Apellidos</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input  id="userEmail1" name="userEmail1" placeholder="" type="email" class="validate" required>
                                                            <label for="userEmail1">Correo Electr&oacute;nico</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                      <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="userQuestion3" name="userQuestion2" placeholder="" type="text" class="validate" required>
                                                            <label for="userQuestion3">Color Preferido</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    
                                                                                                        
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
                                        <a href="../c/client.php?m=index" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                            <i class="material-icons">cancel</i>
                                        </a>
                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
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
