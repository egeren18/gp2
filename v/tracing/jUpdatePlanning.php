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
                                            <form action="../c/tracing.php?m=updatePlanningDb&c=<?php echo $acId; ?>&i=<?php echo $tracingPlanningId; ?>" method="post">
                                                <div class="row">
                                                    <div class="col s12 m4">
                                                        <div class="input-field">
                                                            <small>Roles</small>
                                                            <select name="jobId" placeholder="" class="validate" required="">
                                                                <option value="">&nbsp;</option>
                                                                <?php
                                                                while ($r_job = mysqli_fetch_array($job)) {
                                                                    $jobId = $r_job["jobId"];
                                                                    $jobName = $r_job["jobName"];
                                                                    ?>
                                                                    <option <?php echo $selected = $sjobId == $jobId ? 'selected' : '' ?> value="<?php echo $jobId; ?>"><?php echo $jobName; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m4">
                                                        <div class="input-field">
                                                            <small>Linea de Servicio</small>
                                                            <select name="lineId" placeholder="" class="validate" required="">
                                                                <?php
                                                                while ($r_line = mysqli_fetch_array($line)) {
                                                                    $lineId = $r_line["lineId"];
                                                                    $lineName = $r_line["lineName"];
                                                                    ?>
                                                                    <option <?php echo $selected = $slineId == $lineId ? 'selected' : '' ?> value="<?php echo $lineId; ?>"><?php echo $lineName; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m2">
                                                        <div class="input-field">
                                                            <small>H/H Proyecto</small>
                                                            <input style="text-align: center;" value="<?php echo $hour; ?>" type="text" name="hour" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m2">
                                                        <div class="input-field">
                                                            <small>Tarifa Real por Rol</small>
                                                            <input style="text-align: right;" value="<?php echo $amount; ?>" type="text" name="amount" class="form-control">
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
