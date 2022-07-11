    <main>

        <!-- Page -->
        <div class="container">

            <!-- Breadcrumb -->
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="../c/ac.php?m=list" class="breadcrumb hide-on-med-and-down">Aceptaci&oacute;n y Continuidad</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down blue-text">Equipo de Trabajo</a>
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
            <!-- #END# Breadcrumb -->

            <!-- Content -->
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="breadcrumb p-l-10">Equipo de Trabajo</span>
                                    <a href="../c/ac.php?m=list" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                </div>
                            </div>
                            <div class="card m-l-5 m-r-5">

                                <div class="p-l-20 p-t-20 p-r-20 p-b-20">
                                    <div class="row">
                                        <div class="col s12 m6 l8 m-b-10">
                                            <table class="blue-grey lighten-5">
                                                <tr>
                                                    <td>Cliente:</td>
                                                    <td><?php echo $clientName; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Servicio:</td>
                                                    <td><?php echo $serviceName; ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m-t-20">
                                            <ul class="collection">
                                                <li class="collection-item blue-grey lighten-5">
                                                    <p>Integrantes del Equipo de Trabajo.</p>
                                                </li>
                                            </ul>                                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m6 m-b-20">
                                            <div class="row">
                                                <div class="col s12 m-t-10">
                                                    <div class="m-t-10 m-b-10">Supervisor:</div>
                                                </div>
                                            </div>
                                            <?php while ($r_reviewer = mysqli_fetch_array($reviewer)) { $separado = explode(',', $teamReviewer); ?>
                                            <?php $acReviewerId = $r_reviewer["userId"]; $acReviewerName = $r_reviewer["userName"] . ' ' . $r_reviewer["userSurname"]; ?>
                                            <div class="row">
                                                <div class="col s12 m-t-10">
                                                    <label>
                                                        <input <?php foreach($separado as $m){ echo $checked = ($m == $acReviewerId) ? "checked=checked":""; } ?> value="<?php echo $acReviewerId; ?>" name="acReviewerId[]" class="filled-in" type="radio" disabled=""/>
                                                        <span class=""><?php echo $acReviewerName; ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="col s12 m6 m-b-20">
                                            <div class="row">
                                                <div class="col s12 m-t-10">
                                                    <div class="m-t-10 m-b-10">Realizadores:</div>
                                                </div>
                                            </div>
                                            <?php while ($r_doer = mysqli_fetch_array($doer)) { $separado = explode(',', $teamDoer); ?>
                                            <?php $acDoerId = $r_doer["userId"]; $acDoerName = $r_doer["userName"] . ' ' . $r_doer["userSurname"]; ?>
                                            <div class="row">
                                                <div class="col s12 m-t-10">
                                                    <label>
                                                        <input <?php foreach($separado as $m){ echo $checked = ($m == $acDoerId) ? "checked=checked":""; } ?> value="<?php echo $acDoerId; ?>" name="acDoerId[]" class="filled-in" type="checkbox" disabled=""/>
                                                        <span class=""><?php echo $acDoerName; ?></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <?php } ?>
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
            <!-- #END# Content -->

        </div>
        <!-- #END# Page -->

    </main>

    <!-- Help -->
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
    <!-- #END# Help -->

    <!-- Ticket -->
    <?php include '../v/support/modalAdd.php'; ?>
    <!-- #END# Ticket -->
