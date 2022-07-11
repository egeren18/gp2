
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
                                            <input type="file" id="archivoAc1[]"  name="archivoAc1[]"  accept="application/pdf"/>
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
                                    <?php } else {
                                        echo '&nbsp;';
                                    } ?>
                                </div>
                                <div class="col s12">
                                </div>
                            </div>


                            <div class="divider "></div>
                            <div class="row">
                                <div class="col s6 m-t-20">
                                    <span class="blue-grey-text text-darken-2">Los términos del contrato fueron aprobados?</span>
                                </div>



                                <div class="col s6 m-t-20">
                                    <?php while ($r_desicion2 = $desicion2 ->fetch_object()) { ?>
                                        <label class="m-l-20">
                                            <input value="<?php echo $r_desicion2 -> desicionId; ?>"  type="radio" name="desicion2" id="decision2" >
                                            <span><?php echo $r_desicion2 -> desicionName; ?></span>
                                        </label><br>
                                        <?php } ?>
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
                                            <input type="file" id="archivoAc2[]"  name="archivoAc2[]"  
                                             accept="application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"/>
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
                                        <?php
                                        }
                                        else {
                                            echo '&nbsp;';
                                        } ?>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col s6">
                                    <div class="input-field">
                                        <small>Monto Total de la Propuesta</small>
                                        <input value="<?php echo $amount; ?>" style="text-align: right ;" type="text" name="amount" class="form-control">
                                    </div>
                                </div>
                                <div class="col s6">
                                    <div class="input-field">
                                        <small>Moneda asociada</small>
                                        <select name="currencyId" placeholder="" class="form-control">
                                            <option>&nbsp;</option>
                                            <?php while ($r_currency = mysqli_fetch_array($currency)) { ?>
                                            <?php $currencyId = $r_currency["currencyId"]; $currencyName = $r_currency["currencyName"]; ?>
                                            <option <?php echo $selected = $dcurrencyId == $currencyId ? 'selected' : ''; ?> value="<?php echo $currencyId; ?>"><?php echo $currencyName; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col s12 m-t-20">
                                            <label>
                                                <input name="ok" type="checkbox" required=""/>
                                                <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                            </label>
                     </div>
                    <div class="row">
                        <div class="col s12 m-t-20">
                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
                    </div>



<!--  Carta de contratacion -->

 <?php if ( $valor  == 4 or $_SESSION["userAdmin"]  == 3  ){ ?>     
<form action="../c/ac.php?m=updateTracingDb2&q=<?php echo $q; ?>&a=<?php echo  $acId; ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col s12">
            <div class="card m-l-10 m-r-10">
                <div class="p-t-20 p-b-20 p-l-20 p-r-20">

                <?php if ( $tracingAc == $acId ){
                    // AQUI VAN LAS CASILLAS CUANDO ESTA LLENADO 
                ?>


                <div class="row">
                        <div class="col s12 m6">
                            <ul class="collection m-t-20">
                                <li class="collection-item blue-grey lighten-2 white-text">Carta de Contratación</li>
                            </ul>
                            
                            <div class="row">
                            <div class="col s12">
                               <?php
                                    $id = $acId;
                                     $path = "../documentoAc1/" . $id;
                                    if (file_exists($path)) {
                                        $directorio = opendir($path);
                                        while ($archivo = readdir($directorio)) {
                                            if (!is_dir($archivo)) {?>      
                                       <div class="file-field input-field">
                                           <div class="btn white tooltipped" data-position="top" data-tooltip="Documento">
                                               <i class="material-icons blue-text">attach_file</i>
                                               <input type="file" id="archivoAc1[]"  name="archivoAc1[]"  accept="application/pdf"/>                           
                                            </div>
                                            <div class="file-path-wrapper">
                                            <input value="<?php echo $archivo; ?>" name="proposal" class="file-path validate" type="text" placeholder="Adjuntar o cambiar Carta de Contratación (Sólo PDF)">
                                        </div>
                                        </div>
                                       
                                    
                                     <a target="_blank" href="../documentoAc1/<?php echo $id; ?>/<?php echo $archivo; ?>">Ver archivo PDF</a>
                                        <a href="#!" class="tooltipped left m-r-10" data-position="right" 
                                        data-tooltip="Si desea sustituir el archivo, adjunte uno nuevo haciendo click en el ícono de adjuntar archivos.">
                                        <i class="material-icons blue-text">info</i></a>              
                                                
                            </div>
                                  <?php }}} ?>

                            </div>
                            <div class="divider m-t-10"></div>
                            <div class="row">
                                <div class="col s6 m-t-20">
                                    <span class="blue-grey-text text-darken-2">Los términos del contrato fueron aprobados?</span>
                                </div>


                                <div class="col s6 m-t-20">
                                        <label>
                                            <input name="group1" type="radio" checked />
                                            <span>Si</span>
                                        </label><br>
                                      
                                </div>                              
                            </div>
                        </div>


                        <div class="col s12 m6">
                            <ul class="collection m-t-20">
                                <li class="collection-item blue-grey lighten-2 white-text">Presupuesto del Proyecto</li>
                            </ul>
                    <div class="row">
                            <div class="col s12">
                               <?php
                                    $id = $acId;
                                     $path = "../documentoAc2/" . $id;
                                    if (file_exists($path)) {
                                        $directorio = opendir($path);
                                        while ($archivo = readdir($directorio)) {
                                            if (!is_dir($archivo)) {?>      
                                        <div class="file-field input-field">
                                            <div class="btn white tooltipped" data-position="top" data-tooltip="Documento">
                                                <i class="material-icons blue-text">attach_file</i>
                                                <input type="file" id="archivoAc1[]"  name="archivoAc1[]"  accept="application/pdf"/>                           
                                                </div>
                                                <div class="file-path-wrapper">
                                                <input value="<?php echo $archivo; ?>" name="proposal" class="file-path validate" type="text" placeholder="Adjuntar o cambiar Carta de Contratación (Sólo PDF)">
                                            </div>
                                            </div>
                                        
                                        
                                            <a target="_blank" href="../documentoAc2/<?php echo $id; ?>/<?php echo $archivo; ?>">Ver archivo</a>
                                            <a href="#!" class="tooltipped left m-r-10" data-position="right" 
                                            data-tooltip="Si desea sustituir el archivo, adjunte uno nuevo haciendo click en el ícono de adjuntar archivos.">
                                            <i class="material-icons blue-text">info</i></a>         
                                                    
                                        </div>
                                    <?php }}} ?>
                              
                            </div>
                        
                            <div class="divider m-t-10"></div>

                            <div class="row">
                                <div class="col s6">
                                    <div class="input-field">
                                    <small class="blue-grey-text text-darken-2">Monto Total de la Propuesta</small>
                                    <input value="<?php echo $billete; ?> " disabled="">
                                    </div>
                                </div>

                                <div class="col s6">
                                    <div class="input-field">
                                    <small class="blue-grey-text text-darken-2">Moneda asociada</small>
                                    <input value="<?php echo $nombreMoneda  ; ?> " disabled="">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>


                    <?php // incluir el los campos cuando esten llenados (son los q me daran la data q lleno el SL)
                    }else {
                        // AQUI VA SI NO SE HA LLENADO 
                        ?>
                        



                    


                    <?php } ?>



                    
                </div>
            </div>
        </div>
    </div>
</form>
<?php } ?>


<!--  Roles del Proyecto -->


<?php if ( $valor  == 4  or $_SESSION["userAdmin"]  == 3 ){ ?>    
<form action="../c/ac.php?m=addPlanningDb&cod=<?php //echo $c; ?>&q=<?php //echo $q; ?>" method="post">
    <div class="row">
        <div class="col s12">
            <div class="card m-l-10 m-r-10">
                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                    <ul class="collection">
                        <li class="collection-item blue-grey lighten-2 white-text">Roles del Proyecto</li>
                    </ul>
                    <div class="row">
                        <div class="col s12 m4">
                            <div class="input-field">
                                <small>Roles</small>
                              <select name="roleId" placeholder="" class="form-control">
                                         <option value="">&nbsp;</option>
                                             <?php while ($r_role = mysqli_fetch_array($roleAc)) { ?>
                                                <?php $roleId = $r_role["roleId"]; $roleName = $r_role["roleName"]; ?>
                                                <option value="<?php echo $roleId; ?>"><?php echo $roleName; ?></option>
                                                <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="input-field">
                                <small>Linea de Servicio</small>
                                <select name="lineId" placeholder="" class="validate" required="">
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
                                <input style="text-align: center;" type="text" name="hour" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Tarifa Real por Rol</small>
                                <input style="text-align: right ;" type="text" name="amount" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col s1 m-t-30">
                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
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
                                            <td id="border-grey" class="center">
                                                <a href="../c/tracing.php?m=updatePlanning&c=<?php //echo $c; ?>&i=<?php //echo $tracingPlanningId; ?>" class="tooltipped m-r-5" data-position="left" data-tooltip="Editar">
                                                    <i class="material-icons blue-text">edit</i>
                                                </a>
                                                <a href="../c/tracing.php?m=deletePlanningDb&c=<?php //echo $c; ?>&i=<?php //echo $tracingPlanningId; ?>" class="tooltipped m-r-5" data-position="left" data-tooltip="Eliminar">
                                                    <i class="material-icons red-text">delete</i>
                                                </a>
                                            </td>
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
</form>
<?php } ?>



<!--  Esquema de facturacion -->

<?php if ( $valor  == 4 or $_SESSION["userAdmin"]  == 3  ){ ?>   
<form action="../c/ac.php?m=addSchemeDb&cod=<?php //echo $c; ?>&q=<?php //echo $q; ?>" method="post">
    <div class="row">
        <div class="col s12 m-t--10">
            <div class="card m-l-10 m-r-10">
                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                    <ul class="collection m-t-20">
                        <li class="collection-item blue-grey lighten-2 white-text">Esquema de Facturación</li>
                    </ul>
                    <div class="row">
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Fecha Factura (Estimada):</small>
                                <input style="text-align: center;" type="text" name="invoiceDate" class="datepicker" required="">
                            </div>
                        </div>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Cantidad de Facturas:</small>
                                <input style="text-align: center;" type="text" name="quantity" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Monto Factura:</small>
                                <input style="text-align: right ;" type="text" name="samount" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Moneda:</small>
                                <select name="scurrencyId" placeholder="" class="validate" required="">
                                    <option value="">&nbsp;</option>
                                    <?php while ($r_scurrency = mysqli_fetch_array($Accurrency)) { ?>
                                    <?php $scurrencyId = $r_scurrency["currencyId"]; $scurrencyName = $r_scurrency["currencyName"]; ?>
                                    <option value="<?php echo $scurrencyId; ?>"><?php echo $scurrencyName; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col s1 m-t-30">
                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
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
                                    <?php //while ($r_scheme = mysqli_fetch_array($scheme)) { ?>
                                    <?php //$tracingSchemeId = $r_scheme["tracingSchemeId"];
                                    //$invoiceDate = $r_scheme["invoiceDate"];
                                    //$quantity = $r_scheme["quantity"];
                                    //$amount = $r_scheme["amount"];
                                    //$currencyId = $r_scheme["currencyName"];
                                    ?>
                                        <tr>
                                            <td id="border-grey" class="center"><?php //echo $invoiceDate; ?></td>
                                            <td id="border-grey" class="center"><?php //echo $quantity; ?></td>
                                            <td id="border-grey" class="right-align"><?php //echo $amount; ?></td>
                                            <td id="border-grey" class="center"><?php //echo $currencyId; ?></td>
                                            <td id="border-grey" class="center">
                                                <a href="../c/tracing.php?m=updateScheme&c=<?php //echo $c; ?>&i=<?php //echo $tracingSchemeId; ?>" class="tooltipped m-r-5" data-position="left" data-tooltip="Editar">
                                                    <i class="material-icons blue-text">edit</i>
                                                </a>
                                                <a href="../c/tracing.php?m=deleteSchemeDb&c=<?php //echo $c; ?>&i=<?php //echo $tracingSchemeId; ?>" class="tooltipped m-r-5" data-position="left" data-tooltip="Eliminar">
                                                    <i class="material-icons red-text">delete</i>
                                                </a>
                                            </td>
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
</form>
<?php } ?> 



