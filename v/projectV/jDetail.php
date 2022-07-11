    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="../c/project.php?m=list" class="breadcrumb hide-on-med-and-down">Proyectos</a>
                    <a href="#!" class="breadcrumb ">Detalle</a>
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
                <div class="col s12 m12 l12">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="breadcrumb p-l-10">Cliente: <?php echo  $r_client -> clientName; ?></span>
                                    <a href="../c/project.php?m=list" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                </div>
                            </div>
                            <div class="card m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="m-t-20 m-b-20 m-l-20 m-r-20">
                                            <form id="form_validation" action="../c/project.php?m=detailDb&cod=<?php echo  $r_client -> clientId; ?>" method="post">
                                                <div class='row'>
                                                    <div class='col s12'>
                                                        <div class='card-panel white-text blue-grey lighten-2' style='line-height : 20px;'>
                                                            <p>Informaci&oacute;n: En la siguiente lista s&oacute;lo aparecen las A/C vigentes a la fecha.</p>
                                                            <p>A continuación, seleccione la A/C para &eacute;ste proyecto.</p>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                                <div class="row">
                                                    <div class="col s12">
                                                        <table id="" class="" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <td class="blue-grey white-text">AC No.</td>
                                                                    <td class="blue-grey white-text">Proyecto</td>
                                                                    <td width="15%" class="blue-grey white-text center">Fecha Inicio</td>
                                                                    <td width="15%" class="blue-grey white-text center">Fecha Final</td>
                                                                    <td class="blue-grey lighten-1">&nbsp;</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="m-t-5">
                                                                <tr>
                                                                    <td>
                                                                        <input type="hidden" name="clientId" value="<?php echo  $r_client -> clientId; ?>"/>
                                                                        <?php echo $r_ac -> acId; ?>
                                                                    </td>
                                                                    <td>
                                                                        <input type="hidden" name="serviceId" value="<?php echo  $r_ac -> serviceId; ?>"/>
                                                                        <?php echo $r_ac -> serviceName; ?>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="projectDateStart" class="datepicker center" required=""/>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="projectDateExpire" class="datepicker center" required=""/>
                                                                        <input type="hidden" name="projectStatus" value="1"/>
                                                                    </td>
                                                                    <td class="right">
                                                                        <label>
                                                                            <input value="<?php echo $r_ac -> acId; ?>" type="checkbox" name="acId" class="validate" required=""/>
                                                                            <span class="blue-grey-text text-darken-2"></span>
                                                                        </label>
                                                                        <input value="<?php echo $r_ac -> serviceId; ?>" type="hidden" name="serviceId"/>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
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
                                                        <a href="../c/project.php?m=list" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Salir">
                                                            <i class="material-icons">cancel</i>
                                                        </a>
                                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
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
