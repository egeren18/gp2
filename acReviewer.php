
                            <form action="../c/ac.php?m=updateTracingOpinionDb&cod=<?php echo $c; ?>&q=<?php echo $q; ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col s12 m-t-20">
                                        <div class="card m-l-10 m-r-10">
                                            <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                                <ul class="collection">
                                                    <li class="collection-item blue-grey lighten-2 white-text">En base a mi conocimiento preliminar del posible Cliente/Proyecto y de los indicadores presentes, decido:</li>
                                                </ul>
                                                <div class="row">
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <small class="blue-grey-text text-darken-2">Riesgo sugerido por el sistema</small>
                                                            <select id="" name="riskId" placeholder="" type="text" class="" disabled>
                                                                <option value=""><?php echo $average1;  ?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <small class="blue-grey-text text-darken-2">Calificación Socio Líder</small>
                                                            <select id="riskId" name="riskId" placeholder="" type="text" class="validate" required="" <?php echo $disabled = $r_riskPartnerOpinion -> decision == NULL ? '' : 'disabled'; ?>>
                                                            <option value=""></option>
                                                            <?php while ($r_selectRisk2 = $selectRisk2 -> fetch_object()) { ?>
                                                            <option <?php echo $selected = $r_selectRisk1 -> riskId == $r_selectRisk2 -> riskId ? 'selected' : ''; ?> value="<?php echo $r_selectRisk2 -> riskId; ?>"><?php echo $r_selectRisk2 -> riskName; ?></option>
                                                            <?php } ?>
                                                            </select>
                                                        </div>                                                
                                                    </div>
                                                    <div class="col m5 offset-m1 m-t-10">
                                                        <label class="m-l-20">
                                                            <input value="0" <?php echo $checked = $r_tracingOpinion -> decision == 0 ? 'checked' : ''; ?> type="radio" name="decision" id="decision" required="" <?php echo $disabled = $r_riskPartnerOpinion -> decision == NULL ? '' : 'disabled'; ?>>
                                                            <span>No Decidido</span>
                                                        </label><br/>
                                                        <label class="m-l-20">
                                                            <input value="1" <?php echo $checked = $r_tracingOpinion -> decision == 1 ? 'checked' : ''; ?> type="radio" name="decision" id="decision" <?php echo $disabled = $r_riskPartnerOpinion -> decision == NULL ? '' : 'disabled'; ?>>
                                                            <span>Declinar Cliente/Proyecto</span>
                                                        </label><br/>
                                                        <label class="m-l-20">
                                                            <input value="2" <?php echo $checked = $r_tracingOpinion -> decision == 2 ? 'checked' : ''; ?> type="radio" name="decision" id="decision" <?php echo $disabled = $r_riskPartnerOpinion -> decision == NULL ? '' : 'disabled'; ?>>
                                                            <span>Aprobar Cliente/Proyecto</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12 m-t-20">
                                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar" <?php echo $disabled = $r_riskPartnerOpinion -> decision == NULL ? '' : 'disabled'; ?>>
                                                            <i class="material-icons">save</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form action="../c/ac.php?m=updateTracingDb&cod=<?php echo $c; ?>&q=<?php echo $q; ?>" method="post">
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
                                                            <div class="col s12">
                                                                <div class="file-field input-field">
                                                                    <div class="btn white tooltipped" data-position="top" data-tooltip="Adjuntar archivo PDF">
                                                                        <i class="material-icons blue-text">attach_file</i>
                                                                        <input type="file" name="proposal" accept="application/pdf" <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>/>
                                                                    </div>
                                                                    <div class="file-path-wrapper">
                                                                        <input value="<?php echo $proposal; ?>" name="proposal" class="file-path validate" type="text" placeholder="Adjuntar o cambiar Carta de Contratación (Sólo PDF)">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 m-t--10 m-b-5">
                                                                <?php if (isset($proposal)) { ?>
                                                                <a target="_blank" href="../pdf/<?php echo $proposal; ?>">Ver archivo PDF</a>
                                                                <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Si desea sustituir el archivo, adjunte uno nuevo haciendo click en el ícono de adjuntar archivos."><i class="material-icons blue-text">info</i></a>
                                                                <?php } else { echo '&nbsp;'; } ?>
                                                            </div>
                                                            <div class="col s12"></div>
                                                        </div>
                                                        <div class="divider"></div>
                                                        <div class="row">
                                                            <div class="col s6 m-t-20">
                                                                <span class="blue-grey-text text-darken-2">Los términos del contrato fueron aprobados?</span>
                                                            </div>
                                                            <div class="col s6 m-t-20">
                                                                <label class="m-l-20">
                                                                    <input value="0" <?php echo $checked = $term == 0 ? 'checked' : ''; ?> type="radio" name="term" id="term"  <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>>
                                                                    <span>No Decidido</span>
                                                                </label><br/>
                                                                <label class="m-l-20">
                                                                    <input value="1" <?php echo $checked = $term == 1 ? 'checked' : ''; ?> type="radio" name="term" id="term"  <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>>
                                                                    <span>No</span>
                                                                </label><br/>
                                                                <label class="m-l-20">
                                                                    <input value="2" <?php echo $checked = $term == 2 ? 'checked' : ''; ?> type="radio" name="term" id="term"  <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>>
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
                                                            <div class="col s12">
                                                                <div class="file-field input-field">
                                                                    <div class="btn white tooltipped" data-position="top" data-tooltip="Adjuntar archivo Excel">
                                                                        <i class="material-icons blue-text">attach_file</i>
                                                                        <input type="file" name="budget" accept="application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"  <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>/>
                                                                    </div>
                                                                    <div class="file-path-wrapper">
                                                                        <input value="<?php echo $budget; ?>" name="budget" class="file-path validate" type="text" placeholder="Adjuntar o Cambiar Presupuesto del Proyecto (Sólo Excel)">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 m-t--10 m-b-5">
                                                                <?php if (isset($budget)) { ?>
                                                                    <a target="_blank" href="../excel/<?php echo $budget; ?>">Ver archivo Excel</a>
                                                                    <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Si desea sustituir el archivo, adjunte uno nuevo haciendo click en el ícono de adjuntar archivos."><i class="material-icons blue-text">info</i></a>
                                                                <?php } else { echo '&nbsp;'; } ?>
                                                            </div>
                                                        </div>
                                                        <div class="divider"></div>
                                                        <div class="row">
                                                            <div class="col s6">
                                                                <div class="input-field">
                                                                    <small>Monto Total de la Propuesta</small>
                                                                    <input value="<?php echo $amount; ?>" style="text-align: right ;" type="text" name="amount" class="form-control" <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>>
                                                                </div>
                                                            </div>
                                                            <div class="col s6">
                                                                <div class="input-field">
                                                                    <small>Moneda asociada</small>
                                                                    <select name="currencyId" placeholder="" class="form-control" <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>>
                                                                        <option>&nbsp;</option>
                                                                        <?php while ($r_currency = mysqli_fetch_array($currency)) { ?>
                                                                        <?php $currencyId = $r_currency["currencyId"]; $currencyName = $r_currency["currencyName"]; ?>
                                                                        <option <?php echo $selected = $dcurrencyId == $currencyId ? 'selected' : '' ; ?> value="<?php echo $currencyId; ?>"><?php echo $currencyName; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12 m-t-20">
                                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar"  <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>>
                                                            <i class="material-icons">save</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form action="../c/ac.php?m=addPlanningDb&cod=<?php echo $c; ?>&q=<?php echo $q; ?>" method="post">
                                <div class="row">
                                    <div class="col s12 m-t-20">
                                        <div class="card m-l-10 m-r-10">
                                            <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                                <ul class="collection">
                                                    <li class="collection-item blue-grey lighten-2 white-text">Roles del Proyecto</li>
                                                </ul>
                                                <div class="row">
                                                    <div class="col s12 m4">
                                                        <div class="input-field">
                                                            <small>Roles</small>
                                                            <select name="jobId" placeholder="" class="validate" required="" <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>>
                                                                <option value="">&nbsp;</option>
                                                                <?php while ($r_job = mysqli_fetch_array($job)) { ?>
                                                                <?php $jobId = $r_job["jobId"]; $jobName = $r_job["jobName"]; ?>
                                                                <option value="<?php echo $jobId; ?>"><?php echo $jobName; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m3">
                                                        <div class="input-field">
                                                            <small>Linea de Servicio</small>
                                                            <select name="lineId" placeholder="" class="validate" required="" <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>>
                                                                <option value="">&nbsp;</option>
                                                                <?php while ($r_line = mysqli_fetch_array($line)) { ?>
                                                                <?php $lineId = $r_line["lineId"]; $lineName = $r_line["lineName"]; ?>
                                                                <option value="<?php echo $lineId; ?>"><?php echo $lineName; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m2">
                                                        <div class="input-field">
                                                            <small>H/H Proyecto</small>
                                                            <input style="text-align: center;" type="text" name="hour" class="form-control" required="" <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m2">
                                                        <div class="input-field">
                                                            <small>Tarifa Real por Rol</small>
                                                            <input style="text-align: right ;" type="text" name="amount" class="form-control" required="" <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>>
                                                        </div>
                                                    </div>
                                                    <div class="col s1 m-t-30">
                                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar" <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>>
                                                            <i class="material-icons">save</i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12 m-b-10">
                                                        <table class="white" id="planning">
                                                            <thead>
                                                                <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                                                    <td id="border-white" class="center" width="20%">Roles</td>
                                                                    <td id="border-white" class="center" width="20%">Linea de Servicio</td>
                                                                    <td id="border-white" class="center" width="20%">H/H Proyecto</td>
                                                                    <td id="border-white" class="center" width="20%">Tarifa Real por Rol</td>
                                                                    <td id="border-white" class="center" width="20%"></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php while ($r_planning = mysqli_fetch_array($planning)) { ?>
                                                                <?php $tracingPlanningId = $r_planning["tracingPlanningId"]; $jobId = $r_planning["jobName"]; $lineId = $r_planning["lineName"]; $hour = $r_planning["hour"]; $amount = $r_planning["amount"]; ?>
                                                                <tr>
                                                                    <td id="border-grey"><?php echo $jobId; ?></td>
                                                                    <td id="border-grey"><?php echo $lineId; ?></td>
                                                                    <td id="border-grey" class="center"><?php echo $hour; ?></td>
                                                                    <td id="border-grey"><span class="right"><?php echo $amount; ?></span></td>
                                                                    <td id="border-grey" class="center">
                                                                        <a href="../c/tracing.php?m=updatePlanning&c=<?php echo $c; ?>&i=<?php echo $tracingPlanningId; ?>" class="tooltipped m-r-5" data-position="left" data-tooltip="Editar">
                                                                            <i class="material-icons blue-text">edit</i>
                                                                        </a>
                                                                        <a href="../c/tracing.php?m=deletePlanningDb&c=<?php echo $c; ?>&i=<?php echo $tracingPlanningId; ?>" class="tooltipped m-r-5" data-position="left" data-tooltip="Eliminar">
                                                                            <i class="material-icons red-text">delete</i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form action="../c/ac.php?m=addSchemeDb&cod=<?php echo $c; ?>&q=<?php echo $q; ?>" method="post">
                                <div class="row">
                                    <div class="col s12 m-t-20">
                                        <div class="card m-l-10 m-r-10">
                                            <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                                <ul class="collection m-t-20">
                                                    <li class="collection-item blue-grey lighten-2 white-text">Esquema de Facturación</li>
                                                </ul>
                                                <div class="row">
                                                    <div class="col s12 m2">
                                                        <div class="input-field">
                                                            <small>Fecha Factura (Estimada):</small>
                                                            <input style="text-align: center;" type="text" name="invoiceDate" class="datepicker" required="" <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m2">
                                                        <div class="input-field">
                                                            <small>Cantidad de Facturas:</small>
                                                            <input style="text-align: center;" type="text" name="quantity" class="form-control" required="" <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m2">
                                                        <div class="input-field">
                                                            <small>Monto Factura:</small>
                                                            <input style="text-align: right ;" type="text" name="samount" class="form-control" required="" <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m2">
                                                        <div class="input-field">
                                                            <small>Moneda:</small>
                                                            <select name="scurrencyId" placeholder="" class="validate" required="" <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>>
                                                                <option value="">&nbsp;</option>
                                                                <?php
                                                                while ($r_scurrency = $scurrency -> fetch_object()) {

                                                                    $scurrencyId = $r_scurrency -> currencyId;
                                                                    $scurrencyName = $r_scurrency -> currencyName;
                                                                ?>
                                                                    <option value="<?php echo $scurrencyId; ?>"><?php echo $scurrencyName; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col s1 m-t-30">
                                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar" <?php echo $disabled = $r_riskPartnerOpinion -> decision == 2 ? '' : 'disabled'; ?>>
                                                            <i class="material-icons">save</i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12 m-b-10">
                                                        <table class="white" id="planning">
                                                            <thead>
                                                                <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                                                    <td id="border-white" class="center" width="20%">Fecha Factura (Estimada)</td>
                                                                    <td id="border-white" class="center" width="20%">Cantidad de Facturas:</td>
                                                                    <td id="border-white" class="center" width="20%">Monto Factura</td>
                                                                    <td id="border-white" class="center" width="20%">Moneda</td>
                                                                    <td id="border-white" class="center" width="20%"></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php while ($r_scheme = $scheme -> fetch_object()) { ?>
                                                                <tr>
                                                                    <td id="border-grey" class="center"><?php echo $r_scheme -> invoiceDate; ?></td>
                                                                    <td id="border-grey" class="center"><?php echo $r_scheme -> quantity; ?></td>
                                                                    <td id="border-grey" class="right-align"><?php echo $r_scheme -> amount; ?></td>
                                                                    <td id="border-grey" class="center"><?php echo $r_scheme -> currencyName; ?></td>
                                                                    <td id="border-grey" class="center">
                                                                        <a href="../c/tracing.php?m=updateScheme&c=<?php echo $c; ?>&i=<?php echo $r_scheme -> tracingSchemeId; ?>" class="tooltipped m-r-5" data-position="left" data-tooltip="Editar">
                                                                            <i class="material-icons blue-text">edit</i>
                                                                        </a>
                                                                        <a href="../c/tracing.php?m=deleteSchemeDb&c=<?php echo $c; ?>&i=<?php echo $r_scheme -> tracingSchemeId; ?>" class="tooltipped m-r-5" data-position="left" data-tooltip="Eliminar">
                                                                            <i class="material-icons red-text">delete</i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
