    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="../c/project.php?m=list" class="breadcrumb hide-on-med-and-down">Proyectos</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Estrategia</a>
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
                <div class="col s12 m6 l3">
                    <a href="../c/project.php?m=planning&c=<?php echo $c; ?>" class="waves-effect waves-light btn btn-block blue-grey lighten-1 hoverable">
                        <i class="material-icons blue-grey-text text-darken-2 left">extension</i>
                        <span class="left">PLANIFICACI&Oacute;N</span>
                    </a>
                </div>
                <div class="col s12 m6 l3">
                    <a href="../c/project.php?m=strategy&c=<?php echo $c; ?>" class="waves-effect waves-light btn btn-block blue-grey darken-2 hoverable">
                        <i class="material-icons blue-text left">extension</i>
                        <span class="blue-grey-text text-lighten-4 left">ESTRATEGIA</span>
                    </a>
                </div>
                <div class="col s12 m6 l3">
                    <a href="../c/project.php?m=execution&c=<?php echo $c; ?>" class="waves-effect waves-light btn btn-block blue-grey lighten-1 hoverable">
                        <i class="material-icons blue-grey-text text-darken-2 left">extension</i>
                        <span class="blue-grey-text text-lighten-4 left">EJECUCI&Oacute;N</span>
                    </a>
                </div>
                <div class="col s12 m6 l3">
                    <a href="../c/project.php?m=conclusion&c=<?php echo $c; ?>" class="waves-effect waves-light btn btn-block blue-grey lighten-1 hoverable">
                        <i class="material-icons blue-grey-text text-darken-2 left">extension</i>
                        <span class="blue-grey-text text-lighten-4 left">CONCLUSI&Oacute;N</span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12 m-t-20">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="breadcrumb p-l-10">Cliente: <?php echo $r_project -> clientName; ?></span>
                                    <a href="../c/project.php?m=list" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                </div>
                            </div>
                            <div class="m-l-10">
                                <div class="row">
                                    <div class="col s12 m6 l7 m-t--5 m-b-10">
                                        <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                            <table class="blue-grey lighten-4">
                                                <tr>
                                                    <td>Supervisado por:</td>
                                                    <td>
                                                        <?php
                                                        $user = array();
                                                        while ($reviewerTeam = $_reviewerTeam -> fetch_object()) {
                                                            $user[] = $reviewerTeam -> userName . " " . $reviewerTeam -> userSurname;
                                                        }
                                                        $team = implode(', ', $user);
                                                        echo $team;
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Realizado por:</td>
                                                    <td>
                                                        <?php
                                                        $user = array();
                                                        while ($doerTeam = $_doerTeam -> fetch_object()) {
                                                            $user[] = $doerTeam -> userName . " " . $doerTeam -> userSurname;
                                                        }
                                                        $team = implode(', ', $user);
                                                        echo $team;
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Naturaleza del Servicio:</td>
                                                    <td><?php echo $r_nature -> natureName; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Servicio:</td>
                                                    <td><?php echo $r_service -> serviceName; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Período del Proyecto:</td>
                                                    <td>
                                                        Desde <span class="p-l-5 p-r-5"><?php echo $r_project -> projectDateStart; ?></span>
                                                        Hasta <span class="p-l-5"><?php echo $r_project -> projectDateExpire; ?></span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l5 m-t--5 m-b-10">
                                        <div class="p-t-10 p-b-20">
                                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                            <script type="text/javascript">
                                            google.charts.load('current', {'packages':['corechart']});
                                            google.charts.setOnLoadCallback(drawChart);
                                            function drawChart() {
                                                var data = google.visualization.arrayToDataTable([
                                                    ['Acción', 'Cumplimiento'],
                                                    ['En Proceso', <?php echo $qIP; ?>],
                                                    ['Completado', <?php echo $qC; ?>],
                                                    ['Por Corregir', <?php echo $qTC; ?>],
                                                    ['Revisado', <?php echo $qR; ?>],
                                                    ['Cerrado', <?php echo $qF; ?>],
                                                    ['Sin Editar', <?php echo $qty - $qIP - $qC - $qTC - $qR - $qF; ?>]
                                                ]);
                                                var options = {
                                                    is3D: true,
                                                    width:350,
                                                    height:150,
                                                    title: '',
                                                    chartArea: { 'width': '95%', 'height': '95%' },
                                                    colors: ['#ff9800', '#4CAF50', '#f44336', '#2196F3', '#000000', '#cfd8dc'],
                                                    backgroundColor: 'transparent',
                                                    legend: { position: 'left', textStyle: { color: 'grey', fontSize: 10 }}
                                                };
                                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                                chart.draw(data, options);
                                            }
                                            </script>
                                            <div class="right" id="piechart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <?php

                                        $status = mysqli_query(
                                            $connection, "
                                            SELECT * FROM projectstrategyanswer
                                            WHERE projectId = '" . $c . "'
                                        ");

                                        while ($r_status = $status -> fetch_object()) {

                                            $icon = "<div class='q-items'><a href='../c/project.php?m=question&c=" . $c . "&p=p&i=" . $r_status -> projectIId . "'>";

                                            if ($r_status -> statusId == NULL) {
                                                $icon.= $r_status -> projectIId;
                                            }
                                            elseif ($r_status -> statusId == 1) {
                                                $icon.= "<i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped orange-text' data-position='top'>done</i>";
                                            }
                                            elseif ($r_status -> statusId == 2) {
                                                $icon.= "<i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped green-text' data-position='top'>done</i>";
                                            }
                                            elseif ($r_status -> statusId == 3) {
                                                $icon.= "<i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped red-text' data-position='top'>warning</i>";
                                            }
                                            elseif ($r_status -> statusId == 4) {
                                                $icon.= "<i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i>";
                                            }
                                            elseif ($r_status -> statusId == 5) {
                                                $icon.= "<i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped black-text' data-position='top'>lock</i>";
                                            }
                                            
                                            $icon.= "</a></div>";
                                            
                                            echo $icon;
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m-t-10">
                                    <ul class="collapsible m-l-10 m-r-10">
                                        <li>
                                            <div class="collapsible-header blue-grey-text text-darken-2">
                                                <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                Plan Detallado de Auditor&iacute;a
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($r_qStrategy_1 = mysqli_fetch_array($qStrategy_1)) {
                                                    if ($r_qStrategy_1["itemArea"] == 1) {
                                                        $itemName = $r_qStrategy_1["itemName"];
                                                        $itemId = $r_qStrategy_1["itemId"];
                                                    ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                                <?php echo $itemName; ?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=s&c=<?php echo $c; ?>&i=<?php echo $r_qStrategy_1["itemId"]; ?>">
                                                                    <i class="material-icons blue-grey-text text-lighten-5">edit</i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <?php }} ?>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header blue-grey-text text-darken-2">
                                                <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                Discusiones con el Equipo de Auditor&iacute;a y la Gerencia
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($r_qStrategy_2 = mysqli_fetch_array($qStrategy_2)) {
                                                    if ($r_qStrategy_2["itemArea"] == 2) {
                                                        $itemName = $r_qStrategy_2["itemName"];
                                                        $itemId = $r_qStrategy_2["itemId"];
                                                    ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                                <?php echo $itemName; ?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=s&c=<?php echo $c; ?>&i=<?php echo $r_qStrategy_2["itemId"]; ?>">
                                                                    <i class="material-icons blue-grey-text text-lighten-5">edit</i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <?php }} ?>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header">&nbsp;</div>
                                        </li>
                                    </ul>
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
