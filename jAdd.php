    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="../c/ac.php?m=index" class="breadcrumb hide-on-med-and-down">Aceptaci&oacute;n y Continuidad</a>
                    <a href="#!" class="breadcrumb ">A&ntilde;adir</a>
                    <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                        <i class="material-icons blue-text">help</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons blue-text">forum</i>
                    </a>
                    <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                        <?php echo $_SESSION["userFullName"]; ?>
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m12 l12 m-t-5">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="breadcrumb  p-l-10">Aceptaci&oacute;n y Continuidad</span>
                                    <a href="../c/ac.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                </div>
                            </div>
                            <div class="card m-t-10 m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="m-t-20 m-b-20 m-l-20 m-r-20">
                                            <form id="form_validation" action="../c/ac.php?m=model" method="post">
                                                <div class="row">
                                                    <div class="col s12 m6 m-t-20">
                                                        <div class="input-field">
                                                            <select id="clientId" name="clientId" placeholder="" type="text" class="validate" required="">
                                                                <option value="">&nbsp;</option>
                                                                <?php while ($client = $_client -> fetch_object()) { ?>
                                                                <option value="<?php echo $client -> clientId; ?>"><?php echo $client = strlen($client -> clientName) > 80 ? substr($client -> clientName, 0, 80) . '...' : $client -> clientName; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <label class="font-13" for="clientId">Cliente</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 m-t-20">
                                                        <div class="input-field">
                                                            <select id="serviceId" name="serviceId" placeholder="" type="text" class="validate" required="">
                                                                <option value="">&nbsp;</option>
                                                                <?php while ($service = $_service -> fetch_object()) { ?>
                                                                <option value="<?php echo $service -> serviceId; ?>"><?php echo $service = strlen($service -> serviceName) > 80 ? substr($service -> serviceName, 0, 80) . '...' : $service -> serviceName; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <label class="font-13" for="clientId">Servicio solicitado</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6">
                                                        <div class="input-field">
                                                            <select id="serviceId" name="leaderId" placeholder="" type="text" class="validate" required="">
                                                                <option value="">&nbsp;</option>
                                                                <?php while ($leader = $_leader -> fetch_object()) { ?>
                                                                <option value="<?php echo $leader -> userId; ?>"><?php echo $leader -> userName . " " . $leader -> userSurname; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <label class="font-13" for="leaderId">L&iacute;der del Proyecto</label>
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
                                                    <div class="col s12 m-t-30">
                                                        <a href="../c/ac.php?m=index" class="btn red waves-light">
                                                            <i class="material-icons">cancel</i>
                                                        </a>
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
