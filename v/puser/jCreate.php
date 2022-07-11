    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Suscriptores</a>
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

            <div class="row">
                <div class="col s12 m12 l12 m-t-5">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="breadcrumb  p-l-10">Suscriptores</span>
                                    <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Men&uacute de Inicio">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                    <a href="javascript: history.go(-1);" class="tooltipped right m-l-5" data-position="left" data-tooltip="Atr&aacute;s">
                                        <i class="material-icons blue-grey-text">undo</i>
                                    </a>
                                </div>
                            </div>
                            <form id="form_validation" action="../c/subscriber.php?m=createDb" method="post">
                                <div class="card m-t-10 m-l-5 m-r-5">
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="m-b-20 m-l-20 m-r-20">
                                                <div class="row">
                                                    <div class="col s12 m-t-20">
                                                        <ul class="tabs">
                                                            <li class="tab col l2 blue-grey lighten-5"><a class="active tooltipped" data-position="bottom" data-tooltip="Datos Generales" href="#P1">Datos Generales</a></li>
                                                            <li class="tab col l2 blue-grey lighten-5"><a class="tooltipped" data-position="bottom" data-tooltip="Persona Contacto" href="#P2">Persona Contacto</a></li>
                                                            <li class="tab col l2 blue-grey lighten-5"><a class="tooltipped" data-position="bottom" data-tooltip="Ubicaci&oacute;n" href="#P3">Ubicaci&oacute;n</a></li>
                                                            <li class="tab col l2 blue-grey lighten-5"><a class="tooltipped" data-position="bottom" data-tooltip="Suscripci&oacute;n" href="#P4">Suscripci&oacute;n</a></li>
                                                            <li class="tab col l2 blue-grey lighten-5"><a class="tooltipped" data-position="bottom" data-tooltip="Usuario Principal" href="#P5">Usuario Principal</a></li>
                                                            <li class="tab col l2 blue-grey lighten-5"><a class="tooltipped" data-position="bottom" data-tooltip="Socio de Riesgo" href="#P6">Socio de Riesgo</a></li>
                                                        </ul>
                                                    </div>
                                                    <div id="P1" class="col s12">
                                                        <div class="m-t-30"></div>
                                                        <div class="row">
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="subscriberName" name="subscriberName" placeholder="" type="text" class="validate">
                                                                    <label for="subscriberName">Nombre &oacute; Raz&oacute;n Social</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="subscriberRif" name="subscriberRif" placeholder="" type="text" class="validate">
                                                                    <label for="subscriberRif">R.I.F</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="subscriberPhone1" name="subscriberPhone1" placeholder="" type="text" class="validate">
                                                                    <label for="subscriberPhone1">Tel&eacute;fono 1</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="subscriberPhone2" name="subscriberPhone2" placeholder="" type="text" class="validate">
                                                                    <label for="subscriberPhone2">Tel&eacute;fono 2</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <a class="btn blue tooltipped" id="toP2" href='#P2'data-position="right" data-tooltip="Continuar">
                                                                    <i class="material-icons">chevron_right</i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="P2" class="col s12">
                                                        <div class="m-t-30"></div>
                                                        <div class="row">
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="subscriberContactName" name="subscriberContactName" placeholder="" type="text" class="validate">
                                                                    <label for="subscriberContactName">Nombres</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="subscriberContactSurname" name="subscriberContactSurname" placeholder="" type="text" class="validate">
                                                                    <label for="subscriberContactSurname">Apellidos</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="subscriberContactEmail" name="subscriberContactEmail" placeholder="" type="email" class="validate">
                                                                    <label for="subscriberContactEmail">Correo Electr&oacute;nico</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <a class="btn blue tooltipped" id="toP3" href='#P3'data-position="right" data-tooltip="Continuar">
                                                                    <i class="material-icons">chevron_right</i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="P3" class="col s12">
                                                        <div class="m-t-30"></div>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <div class="input-field">
                                                                    <input id="subscriberAddress" name="subscriberAddress" placeholder="" type="text" class="validate">
                                                                    <label for="subscriberAddress">Direcci&oacute;n Fiscal</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="subscriberCity" name="subscriberCity" placeholder="" type="text" class="validate">
                                                                    <label for="subscriberCity">Ciudad</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="subscriberState" name="subscriberState" placeholder="" type="text" class="validate">
                                                                    <label for="subscriberState">Estado</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="subscriberZipCode" name="subscriberZipCode" placeholder="" type="text" class="validate">
                                                                    <label for="subscriberZipCode">Zona Postal</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <select id="countryId" name="countryId" placeholder="" type="text" class="validate">
                                                                        <option value="">&nbsp;</option>
                                                                        <?php while ($country = $_country -> fetch_object()) { ?>
                                                                        <option value="<?php echo $country -> countryId; ?>"><?php echo $country -> countryName; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <label class="font-13" for="countryId">Pa&iacute;s</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="subscriberWebPage" name="subscriberWebPage" placeholder="" type="text" class="validate">
                                                                    <label for="subscriberWebPage">P&aacute;gina Web</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <a class="btn blue tooltipped" id="toP4" href='#P4'data-position="right" data-tooltip="Continuar">
                                                                    <i class="material-icons">chevron_right</i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="P4" class="col s12">
                                                        <div class="m-t-30"></div>
                                                        <div class="row">
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input id="subscriberUsers" name="subscriberUsers" placeholder="" type="number" class="validate">
                                                                    <label for="subscriberUsers">No. de Usuarios</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="subscriberStart" name="subscriberStart" placeholder="" type="text" class="datepicker validate">
                                                                    <label for="subscriberStart">Fecha de Inicio</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <select id="subscriptionId" name="subscriptionId" placeholder="" type="text" class="validate">
                                                                        <option value="">&nbsp;</option>
                                                                        <?php while ($subscription = $_subscription -> fetch_object()) { ?>
                                                                        <option value="<?php echo $subscription -> subscriptionId; ?>"><?php echo $subscription -> subscriptionName; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <label class="font-13" for="subscriptionId">Tipo de Suscripci&oacute;n</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 m-b-10">
                                                                <div class="blue-grey lighten-5">
                                                                    <p class="blue-text p-t-5 p-b-5 p-l-10">M&oacute;dulos</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <?php while ($module = $_module -> fetch_object()) { ?>
                                                            <div class="col s12 m6 l4">
                                                                <label>
                                                                    <input value="<?php echo $module -> moduleId; ?>" type="hidden" name="jModuleModuleId[]" />
                                                                    <input class="filled-in" type="checkbox" name="jModuleAccess[<?php echo $module -> moduleId; ?>]" checked="" disabled=""/>
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $module -> moduleName; ?></span>
                                                                </label>
                                                            </div>
                                                            <?php } ?>
                                                            <?php while ($moduleNull = $_moduleNull -> fetch_object()) { ?>
                                                            <div class="col s12 m6 l4">
                                                                <label>
                                                                    <input class="filled-in" type="checkbox" disabled=""/>
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $moduleNull -> moduleName; ?></span>
                                                                </label>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 m-t-10 m-b-10">
                                                                <div class="blue-grey lighten-5">
                                                                    <p class="blue-text p-t-5 p-b-5 p-l-10">Auditor&iacute;a</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <?php while ($audit = $_audit -> fetch_object()) { ?>
                                                            <div class="col s12 m6 l4">
                                                                <label>
                                                                    <input value="<?php echo $audit -> moduleId; ?>" type="hidden" name="jAuditModuleId[]" />
                                                                    <input class="filled-in" type="checkbox" name="jAuditAccess[<?php echo $audit -> moduleId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $audit -> moduleName; ?></span>
                                                                </label>
                                                            </div>
                                                            <?php } ?>
                                                            <?php while ($auditNull = $_auditNull -> fetch_object()) { ?>
                                                            <div class="col s12 m6 l4">
                                                                <label>
                                                                    <input class="filled-in" type="checkbox" disabled=""/>
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $auditNull -> moduleName; ?></span>
                                                                </label>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 m-t-10 m-b-10">
                                                                <div class="blue-grey lighten-5">
                                                                    <p class="blue-text p-t-5 p-b-5 p-l-10">Administraci&oacute;n</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <?php while ($administration = $_administration -> fetch_object()) { ?>
                                                            <div class="col s12 m6 l4">
                                                                <label>
                                                                    <input value="<?php echo $administration -> moduleId; ?>" type="hidden" name="jAdministrationModuleId[]" />
                                                                    <input class="filled-in" type="checkbox" name="jAdministrationAccess[<?php echo $administration -> moduleId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $administration -> moduleName; ?></span>
                                                                </label>
                                                            </div>
                                                            <?php } ?>
                                                            <?php while ($administrationNull = $_administrationNull -> fetch_object()) { ?>
                                                            <div class="col s12 m6 l4">
                                                                <label>
                                                                    <input class="filled-in" type="checkbox" disabled=""/>
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $administrationNull -> moduleName; ?></span>
                                                                </label>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 m-t-10 m-b-10">
                                                                <div class="blue-grey lighten-5">
                                                                    <p class="blue-text p-t-5 p-b-5 p-l-10">Recursos Humanos</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <?php while ($rrhh = $_rrhh -> fetch_object()) { ?>
                                                            <div class="col s12 m6 l4">
                                                                <label>
                                                                    <input value="<?php echo $rrhh -> moduleId; ?>" type="hidden" name="jRrhhModuleId[]" />
                                                                    <input class="filled-in" type="checkbox" name="jRrhhAccess[<?php echo $rrhh -> moduleId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $rrhh -> moduleName; ?></span>
                                                                </label>
                                                            </div>
                                                            <?php } ?>
                                                            <?php while ($rrhhNull = $_rrhhNull -> fetch_object()) { ?>
                                                            <div class="col s12 m6 l4">
                                                                <label>
                                                                    <input class="filled-in" type="checkbox" disabled=""/>
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $rrhhNull -> moduleName; ?></span>
                                                                </label>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 m-t-10 m-b-10">
                                                                <div class="blue-grey lighten-5">
                                                                    <p class="blue-text p-t-5 p-b-5 p-l-10">Soporte T&eacute;cnico</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <?php while ($support = $_support -> fetch_object()) { ?>
                                                            <div class="col s12 m6 l4">
                                                                <label>
                                                                    <input value="<?php echo $support -> moduleId; ?>" type="hidden" name="jSupportModuleId[]" />
                                                                    <input class="filled-in" type="checkbox" name="jSupportAccess[<?php echo $support -> moduleId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $support -> moduleName; ?></span>
                                                                </label>
                                                            </div>
                                                            <?php } ?>
                                                            <?php while ($supportNull = $_supportNull -> fetch_object()) { ?>
                                                            <div class="col s12 m6 l4">
                                                                <label>
                                                                    <input class="filled-in" type="checkbox" disabled=""/>
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $supportNull -> moduleName; ?></span>
                                                                </label>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 m-t-10 m-b-10">
                                                                <div class="blue-grey lighten-5">
                                                                    <p class="blue-text p-t-5 p-b-5 p-l-10">Red</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <?php while ($net = $_net -> fetch_object()) { ?>
                                                            <div class="col s12 m6 l4">
                                                                <label>
                                                                    <input value="<?php echo $net -> moduleId; ?>" type="hidden" name="jNetModuleId[]" />
                                                                    <input class="filled-in" type="checkbox" name="jNetAccess[<?php echo $net -> moduleId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $net -> moduleName; ?></span>
                                                                </label>
                                                            </div>
                                                            <?php } ?>
                                                            <?php while ($netNull = $_netNull -> fetch_object()) { ?>
                                                            <div class="col s12 m6 l4">
                                                                <label>
                                                                    <input class="filled-in" type="checkbox" disabled=""/>
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $netNull -> moduleName; ?></span>
                                                                </label>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 m-t-30">
                                                                <a class="btn blue tooltipped" id="toP5" href='#P5'data-position="right" data-tooltip="Continuar">
                                                                    <i class="material-icons">chevron_right</i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="P5" class="col s12">
                                                        <div class="m-t-30"></div>
                                                        <div class="row">
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="userName" name="userName" placeholder="" type="text" class="validate">
                                                                    <label for="userName">Nombres</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="userSurname" name="userSurname" placeholder="" type="text" class="validate">
                                                                    <label for="userSurname">Apellidos</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="userEmail" name="userEmail" placeholder="" type="email" class="validate">
                                                                    <label for="userEmail">Correo Electr&oacute;nico</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <a class="btn blue tooltipped" id="toP6" href='#P6'data-position="right" data-tooltip="Continuar">
                                                                    <i class="material-icons">chevron_right</i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="P6" class="col s12">
                                                        <div class="m-t-30"></div>
                                                        <div class="row">
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="riskPartnerName" name="riskPartnerName" placeholder="" type="text" class="validate">
                                                                    <label for="riskPartnerName">Nombres</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="riskPartnerSurname" name="riskPartnerSurname" placeholder="" type="text" class="validate">
                                                                    <label for="riskPartnerSurname">Apellidos</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input id="riskPartnerEmail" name="riskPartnerEmail" placeholder="socioriesgo@nombredelaempresa" type="email" class="validate">
                                                                    <label for="riskPartnerEmail">Correo Electr&oacute;nico</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <label>
                                                                    <input type="checkbox" class="validate filled-in" required="" />
                                                                    <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 m-t-20">
                                                                <a href="../c/subscriber.php?m=list" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                                    <i class="material-icons">close</i>
                                                                </a>
                                                                <?php echo $action = $_SESSION["userAdmin"] != 4 ? "<button id='vSubscriber' type='submit' class='btn blue waves-effect tooltipped' data-position='right' data-tooltip='Guardar'><i class='material-icons'>save</i></button>" : "<button class='btn disabled'><i class='material-icons'>save</i></button>"; ?>
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
                                    <span class="blue-grey-text font-14 left p-l-10">© 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versión: 1.0.0</span>
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

    <script src="../plugins/jansen.js" type="text/javascript"></script>
    