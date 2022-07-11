    <main>

        <!-- Page -->
        <div class="container">

            <!-- Breadcrumb -->
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Proyectos</a>
                    <a href="#!" class="breadcrumb ">Lista</a>
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
                                    <span class="blue-text p-l-10">Proyectos</span>
                                    <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                    <a href="<?php if ($r_l1 -> userStatus == 0 or $r_l1 -> userStatus == 2) { echo $l . '&n=deniedProject'; } else { echo $access = $l1 == 1 ? $a : $l . '&n=deniedProject'; } ?>" class="tooltipped right" data-position="left" data-tooltip="Nuevo Registro">
                                        <i class="material-icons blue-text">add_circle</i>
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
                                                        <td>Cliente</td>
                                                        <td>Proyecto</td>
                                                        <td>Equipo de Trabajo</td>
                                                        <td class="td-block right-align">&nbsp;</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
/*
                                                    while ($r_project = $project -> fetch_object()) {

                                                        $items = mysqli_query(
                                                            $connection, "
                                                            SELECT count(*) AS no FROM acanswer
                                                            WHERE acId = '" . $r_project -> acId . "'
                                                        ");
                                                        
                                                        $r_items = $items -> fetch_object();

                                                        $answer = mysqli_query(
                                                            $connection, "
                                                            SELECT count(*) AS answer FROM acanswer
                                                            WHERE acId = '" . $r_project -> acId . "'
                                                            AND statusId = 1000
                                                        ");
                                                        
                                                        $r_answer = $answer -> fetch_object();

                                                        $list = "<tr>";
                                                        $list.= "<td>{$r_project -> clientName}</td>";
                                                        $list.= $r_items -> no != $r_answer -> answer ? "<td><a href='../c/project.php?m=planning&c={$r_project -> projectId}'>{$r_project -> serviceName}</a></td>" : "<td>{$r_project -> serviceName}</td>";
                                                        $list.= $r_project -> projectStatus == NULL ? "<td>&nbsp;</td>" : "<td><a href='../c/project.php?m=projectTeam&p={$r_project -> projectId}'>Integrantes</a></td>";
                                                        $list.= "<td class='right-align'>";
                                                        $list.= $r_items -> no == $r_answer -> answer ? "<i class='material-icons m-l-20 black-text'>lock</i>" : "<i class='material-icons m-l-20 grey-text'>lock_open</i>";
                                                        $list.= "</td>";
                                                        $list.= "</tr>";
                                                        
                                                        echo $list;
                                                    }
*/                                                        
                                                    ?>
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
