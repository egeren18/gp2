    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Clientes</a>
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

            <form id="form_validation" action="../c/client.php?m=createDb" method="post">
                <div class="row">
                    <div class="col s12 m12 l12 m-t-5">
                        <div class="card blue-grey lighten-5 hoverable">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        <span class="blue-text p-l-10">Clientes</span>
                                        <a href="../c/client.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                            <i class="material-icons blue-grey-text">cancel</i>
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
                                                                <input id="clientContact" name="clientContact" placeholder="" type="text" class="validate" required>
                                                                <label for="clientContact">Persona Contacto</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l4 m-t--20">
                                                            <div class="input-field">
                                                                <input id="clientPhone1" name="clientPhone1" placeholder="" type="number" class="validate" required>
                                                                <label for="clientPhone1">Tel&eacute;fono Principal</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l4 m-t--20">
                                                            <div class="input-field">
                                                                <input id="clientPhone2" name="clientPhone2" placeholder="" type="number" class="validate" required>
                                                                <label for="clientPhone2">Tel&eacute;fono Alternativo</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l4 m-t--20">
                                                            <div class="input-field">
                                                                <input id="clientEmail" name="clientEmail" placeholder="" type="email" class="validate" required>
                                                                <label for="clientEmail">Correo Electr&oacute;nico</label>
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
                                        <span class="blue-grey-text font-14 left p-l-10">&cuoy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
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
    