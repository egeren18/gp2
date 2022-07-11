    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
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
                                    <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                </div>
                            </div>
                            <div class="card m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                            <table id="example" class="display nowrap" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>Cliente</td>
                                                        <td class="td-block">Servicio</td>
                                                        <td>Estatus</td>
                                                    </tr>
                                                </thead>
                                                <style type="text/css">
                                                table.dataTable
                                                tbody th,
                                                table.dataTable tbody td {
                                                    padding-top: 5px;
                                                    padding-bottom: 4px;
                                                }
                                                </style>
                                                <tbody>
                                                    <?php while ($r_ac = mysqli_fetch_array($ac)) { ?>
                                                    <?php $acId = $r_ac["acId"]; $acClientName = $r_ac["clientName"]; $acStatus = $r_ac["acStatus"]; ?>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td><?php echo $acClientName; ?></td>
                                                        <td>
                                                            <a href="../c/tracing.php?m=detail&c=<?php echo $acId; ?>">
                                                                <?php echo $r_ac["serviceName"]; ?>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <i class="material-icons m-l-20 <?php echo $status = $acStatus == 1 ? 'grey-text' : 'black-text' ?>">
                                                                <?php echo $status = $acStatus == 1 ? 'lock_open' : 'lock' ?>
                                                            </i>
                                                        </td>
                                                    </tr> 
                                                    <?php } ?>
                                                </tbody>
                                            </table>
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
