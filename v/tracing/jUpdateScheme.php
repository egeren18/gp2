    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Aceptaci&oacute;n y Continuidad</a>
                    <a href="#!" class="breadcrumb ">Socio de Riesgo</a>
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
                <div class="col s12 m12 l12">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <a href="#!" class="blue-grey-text">Seguimiento Aceptación y Continuidad</a>
                                    <a href="javascript: history.go(-1)" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                </div>
                            </div>
                            <div class="card m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                            <form action="../c/tracing.php?m=updateSchemeDb&c=<?php echo $acId; ?>&i=<?php echo $tracingSchemeId; ?>" method="post">
                                                <div class="row">
                                                    <div class="col s12 m2">
                                                        <div class="input-field">
                                                            <small>Fecha Factura (Estimada):</small>
                                                            <input value="<?php echo $invoiceDate; ?>" style="text-align: center;" type="text" name="invoiceDate" class="datepicker" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m2">
                                                        <div class="input-field">
                                                            <small>Cantidad de Facturas:</small>
                                                            <input value="<?php echo $quantity; ?>" style="text-align: center;" type="text" name="quantity" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m2">
                                                        <div class="input-field">
                                                            <small>Monto Factura:</small>
                                                            <input value="<?php echo $amount; ?>" style="text-align: right ;" type="text" name="amount" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m2">
                                                        <div class="input-field">
                                                            <small>Moneda:</small>
                                                            <select name="currencyId" placeholder="" class="validate" required="">
                                                                <option value="">&nbsp;</option>
                                                                <?php while ($r_currency = mysqli_fetch_array($currency)) { ?>
                                                                <?php $currencyId = $r_currency["currencyId"]; $currencyName = $r_currency["currencyName"]; ?>
                                                                <option <?php echo $selected = $scurrencyId == $currencyId ? 'selected' : '' ?> value="<?php echo $currencyId; ?>"><?php echo $currencyName; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12">
                                                        <button type="submit" class="btn blue waves-effect">
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
