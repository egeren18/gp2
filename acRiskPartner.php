                            <div class="row">
                                <div class="col s12 m-t-20">
                                    <div class="card m-l-10 m-r-10">
                                        <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                            <ul class="collection">
                                                <li class="collection-item blue-grey lighten-2 white-text">Opini&oacute;n del Socio L&iacute;der:</li>
                                            </ul>
                                            <div class="row">
                                                <div class="col s12 m6 l3">
                                                    <div class="input-field">
                                                        <small class="blue-grey-text text-darken-2">Riesgo sugerido por el sistema</small>
                                                        <select id="" name="riskId" placeholder="" type="text" class="" disabled="">
                                                            <option value=""><?php echo $average1; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l3">
                                                    <div class="input-field">
                                                        <small class="blue-grey-text text-darken-2">Calificación Socio Líder</small>
                                                        <select id="riskId" name="riskId" placeholder="" type="text" class="validate" disabled="">
                                                            <?php while ($r_selectRisk2 = $selectRisk2 -> fetch_object()) { ?>
                                                            <option <?php echo $selected = $r_selectRisk1 -> riskId == $r_selectRisk2 -> riskId ? 'selected' : ''; ?> value="<?php echo $r_selectRisk2 -> riskId; ?>"><?php echo $r_selectRisk2 -> riskName; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col m5 offset-m1 m-t-10">
                                                    <label class="m-l-20">
                                                        <input value="0" <?php echo $checked = $r_tracingOpinion -> decision == 0 ? 'checked disabled' : ''; ?> type="radio" name="decision" id="decision" required="" >
                                                        <span>No Decidido</span>
                                                    </label><br/>
                                                    <label class="m-l-20">
                                                        <input value="1" <?php echo $checked = $r_tracingOpinion -> decision == 1 ? 'checked disabled' : ''; ?> type="radio" name="decision" id="decision" <?php echo $disabled = $r_riskPartnerOpinion -> decision == NULL ? '' : 'disabled'; ?>>
                                                        <span>Declinar Cliente/Proyecto</span>
                                                    </label><br/>
                                                    <label class="m-l-20">
                                                        <input value="2" <?php echo $checked = $r_tracingOpinion -> decision == 2 ? 'checked disabled' : ''; ?> type="radio" name="decision" id="decision" <?php echo $disabled = $r_riskPartnerOpinion -> decision == NULL ? '' : 'disabled'; ?>>
                                                        <span>Aprobar Cliente/Proyecto</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m-t-20">
                                    <div class="card m-l-10 m-r-10">
                                        <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                            <form action="../c/ac.php?m=updateTracingRiskPartnerOpinionDb&cod=<?php echo $c; ?>" method="post">
                                                <ul class="collection">
                                                    <li class="collection-item blue-grey lighten-2 white-text">Como Socio de Riesgo, decido:</li>
                                                </ul>
                                                <div class="row">
                                                    <div class="col s12 m-t-20">
                                                        <label class="m-l-20">
                                                            <input value="" <?php echo $checked = $r_riskPartnerOpinion -> decision == 1 ? 'checked' : ''; ?> type="radio" name="decision" id="decision">
                                                            <span>Devolver</span>
                                                        </label><br/>
                                                        <label class="m-l-20">
                                                            <input value="1" <?php echo $checked = $r_riskPartnerOpinion -> decision == 1 ? 'checked' : ''; ?> type="radio" name="decision" id="decision">
                                                            <span>Declinar Cliente/Proyecto</span>
                                                        </label><br/>
                                                        <label class="m-l-20">
                                                            <input value="2" <?php echo $checked = $r_riskPartnerOpinion -> decision == 2 ? 'checked' : ''; ?> type="radio" name="decision" id="decision">
                                                            <span>Aprobar Cliente/Proyecto</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12 m-t-10">
                                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                                            <i class="material-icons">save</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
<!--
<div class="row">
    <div class="col s12 m-t-20">
        <div class="card m-l-10 m-r-10">
            <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                <div class="row">
                    <div class="col s12 m6">
                        <ul class="collection m-t-20">
                            <li class="collection-item blue-grey lighten-2 white-text">Carta de Contratación</li>
                        </ul>
                        <div class="row">
                            <div class="col s12 m-t--10 m-b-5">
                                <?php //if (isset($proposal)) { ?>
                                    <a target="_blank" href="../pdf/<?php //echo $proposal; ?>">Ver archivo PDF</a>
                                    <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Si desea sustituir el archivo, adjunte uno nuevo haciendo click en el ícono de adjuntar archivos."><i class="material-icons blue-text">info</i></a>
                                <?php //} else {
                                    //echo '&nbsp;';
                                //} ?>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="row">
                            <div class="col s6 m-t-20">
                                <span class="blue-grey-text text-darken-2">Los términos del contrato fueron aprobados?</span>
                            </div>
                            <div class="col s6 m-t-20">
                                <label class="m-l-20">
                                    <input value="0" <?php //echo $checked = $term == 0 ? 'checked' : ''; ?> type="radio" name="term" id="term" disabled="">
                                    <span>No Decidido</span>
                                </label><br/>
                                <label class="m-l-20">
                                    <input value="1" <?php //echo $checked = $term == 1 ? 'checked' : ''; ?> type="radio" name="term" id="term" disabled="">
                                    <span>No</span>
                                </label><br/>
                                <label class="m-l-20">
                                    <input value="2" <?php //echo $checked = $term == 2 ? 'checked' : ''; ?> type="radio" name="term" id="term" disabled="">
                                    <span>Si</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <ul class="collection m-t-20">
                            <li class="collection-item blue-grey lighten-2 white-text">Presupuesto del Proyecto</li>
                        </ul>
                        <div class="row">
                            <div class="col s12 m-t--10 m-b-5">
                                <?php //if (isset($budget)) { ?>
                                    <a target="_blank" href="../excel/<?php //echo $budget; ?>">Ver archivo Excel</a>
                                    <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Si desea sustituir el archivo, adjunte uno nuevo haciendo click en el ícono de adjuntar archivos."><i class="material-icons blue-text">info</i></a>
                                <?php //} else {
                                    //echo '&nbsp;';
                                //} ?>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="row">
                            <div class="col s6">
                                <div class="input-field">
                                    <small>Monto Total de la Propuesta</small>
                                    <input value="<?php //echo $amount; ?>" style="text-align: right ;" type="text" name="amount" class="form-control" disabled="">
                                </div>
                            </div>
                            <div class="col s6">
                                <div class="input-field">
                                    <small>Moneda asociada</small>
                                    <select name="currencyId" placeholder="" class="form-control" disabled="">
                                        <option>&nbsp;</option>
                                        <?php //while ($r_currency = mysqli_fetch_array($currency)) { ?>
                                        <?php //$currencyId = $r_currency["currencyId"];
                                        //$currencyName = $r_currency["currencyName"]; ?>
                                        <option <?php //echo $selected = $dcurrencyId == $currencyId ? 'selected' : ''; ?> value="<?php //echo $currencyId; ?>"><?php //echo $currencyName; ?></option>
                                        <?php //} ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col s12 m-t-20">
        <div class="card m-l-10 m-r-10">
            <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                <ul class="collection">
                    <li class="collection-item blue-grey lighten-2 white-text">Roles del Proyecto</li>
                </ul>
                <div class="row">
                    <div class="col s12 m-b-10">
                        <table class="white" id="planning">
                            <thead>
                                <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                    <td id="border-white" class="center" width="20%">Roles</td>
                                    <td id="border-white" class="center" width="20%">Linea de Servicio</td>
                                    <td id="border-white" class="center" width="20%">H/H Proyecto</td>
                                    <td id="border-white" class="center" width="20%">Tarifa Real por Rol</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php //while ($r_planning = mysqli_fetch_array($planning)) { ?>
                                <?php //$tracingPlanningId = $r_planning["tracingPlanningId"];
                                //$jobId = $r_planning["jobName"];
                                //$lineId = $r_planning["lineName"];
                                //$hour = $r_planning["hour"];
                                //$amount = $r_planning["amount"]; ?>
                                    <tr>
                                        <td id="border-grey"><?php //echo $jobId; ?></td>
                                        <td id="border-grey"><?php //echo $lineId; ?></td>
                                        <td id="border-grey" class="center"><?php //echo $hour; ?></td>
                                        <td id="border-grey"><span class="right"><?php //echo $amount; ?></span></td>
                                    </tr>
                                <?php //} ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col s12 m-t-20">
        <div class="card m-l-10 m-r-10">
            <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                <ul class="collection m-t-20">
                    <li class="collection-item blue-grey lighten-2 white-text">Esquema de Facturación</li>
                </ul>
                <div class="row">
                    <div class="col s12 m-b-10">
                        <table class="white" id="planning">
                            <thead>
                                <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                    <td id="border-white" class="center" width="20%">Fecha Factura (Estimada)</td>
                                    <td id="border-white" class="center" width="20%">Cantidad de Facturas:</td>
                                    <td id="border-white" class="center" width="20%">Monto Factura</td>
                                    <td id="border-white" class="center" width="20%">Moneda</td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php //while ($r_scheme = mysqli_fetch_array($scheme)) { ?>
                            <?php //$tracingSchemeId = $r_scheme["tracingSchemeId"];
                            //$invoiceDate = $r_scheme["invoiceDate"];
                            //$quantity = $r_scheme["quantity"];
                            //$amount = $r_scheme["amount"];
                            //$currencyId = $r_scheme["currencyName"]; ?>
                                <tr>
                                        <td id="border-grey" class="center"><?php //echo $invoiceDate; ?></td>
                                        <td id="border-grey" class="center"><?php //echo $quantity; ?></td>
                                        <td id="border-grey" class="right-align"><?php //echo $amount; ?></td>
                                        <td id="border-grey" class="center"><?php //echo $currencyId; ?></td>
                                    </tr>
                            <?php //} ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
