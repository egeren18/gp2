    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="../c/ac.php?m=index" class="breadcrumb hide-on-med-and-down">Aceptaci&oacute;n y Continuidad</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Cuestionario 1</a>
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
                <div class="col s12 m12 l12 m-t-5">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="blue-text p-l-10">Cliente: <?php echo $ac -> clientName; ?></span>
                                    <a href="../c/ac.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                </div>
                            </div>
                            <div class="m-l-10 m-r-10">
                                <div class='row'>
                                    <div class="col s12 m6 l7 m-t--5 m-b-10">
                                        <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                            <table class="blue-grey lighten-4">
                                                <tr>
                                                    <td>Supervisado por:</td>
                                                    <td>
                                                        <?php
                                                        while ($leader = $_leader -> fetch_object()) {
                                                            
                                                            /*
                                                             * Realiza una consulta a la base de datos.
                                                             */

                                                            $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $leader -> userId . "'");
                                                            $user = $_user -> fetch_object();
                                                            echo "<span style='line-height : 20px;'>" . $user -> userName . " " . $user -> userSurname . "<br/></span>";
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Realizado por:</td>
                                                    <td>
                                                        <?php
                                                        while ($consultant = $_consultant -> fetch_object()) {
                                                            
                                                            /*
                                                             * Realiza una consulta a la base de datos.
                                                             */

                                                            $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $consultant -> userId . "'");
                                                            $user = $_user -> fetch_object();
                                                            echo "<span style='line-height : 20px;'>" . $user -> userName . " " . $user -> userSurname . "<br/></span>";
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Naturaleza del Servicio:</td>
                                                    <td><?php echo "<span style='line-height : 20px;'>" . $service -> natureName . "</span>"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Servicio:</td>
                                                    <td><?php echo "<span style='line-height : 20px;'>" . $service -> serviceName . "</span>"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Período de la AC:</td>
                                                    <td>
                                                        <span style='line-height : 20px;'>
                                                            Desde <span class="p-l-5 p-r-5"><?php echo $ac -> acDateStart; ?></span>
                                                            Hasta <span class="p-l-5"><?php echo $ac -> acDateExpire; ?></span>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l5 m-t-15 m-b-30">
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
                                                    width:350,
                                                    height:150,
                                                    title: '',
                                                    chartArea: { 'width': '100%', 'height': '100%' },
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

                                        /*
                                         * Variables.
                                         */

                                        $q = $ac -> acQuestionnaireId;
                                        if ($role -> designatedId ?? '') {
                                            $r = $role -> designatedId;
                                        }
                                        else {
                                            echo "<i class='material-icons red-text left m-r-10'>warning</i>Usted no pertenece a &eacute;ste Equipo de Trabajo, por favor comun&iacute;quese con el Administrador!";
                                        }

                                        /*
                                         * Realiza una consulta a la base de datos.
                                         */

                                        $_item = mysqli_query($master, "SELECT * FROM qm1 WHERE itemStatus = 1");

                                        while ($item = $_item -> fetch_object()) {
                                            
                                            $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $item -> itemId . "'");
                                            $status = $_status -> fetch_object();
                                            
                                            $status = $status -> statusId ?? '';

                                            switch ($status) {

                                                // En proceso
                                                case 1:
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo "<div class='q-items'><a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped orange-text' data-position='top'>done</i></a></div>"; break;
                                                        case 3:
                                                        case 2:
                                                        case 4:
                                                        case 5: echo "<div class='q-items'><a href='javascript: void();'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped orange-text' data-position='top'>done</i></a></div>"; break;
                                                        default: break;
                                                    
                                                    }
                                                    break;
                                                    
                                                // Completado
                                                case 2:
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo "<div class='q-items'><a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>"; break;
                                                        case 2:
                                                        case 4: echo "<div class='q-items'><a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>"; break;
                                                        case 3:
                                                        case 5: echo "<div class='q-items'><a href='javascript: void();'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>"; break;
                                                        default: break;
                                                    
                                                    }
                                                    break;
                                                    
                                                // Por corregir
                                                case 3:
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo "<div class='q-items'><a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped red-text' data-position='top'>warning</i></a></div>"; break;
                                                        case 2:
                                                        case 3:
                                                        case 4:
                                                        case 5: echo "<div class='q-items'><a href='javascript: void();'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped red-text' data-position='top'>warning</i></a></div>"; break;
                                                        default: break;
                                                    
                                                    }
                                                    break;

                                                // Revisado
                                                case 4:

                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1:
                                                        case 2:
                                                        case 3:
                                                        case 4: echo "<div class='q-items'><a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i></a></div>"; break;
                                                        case 5: echo "<div class='q-items'><a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i></a></div>"; break;
                                                        default: break;
                                                    
                                                    }
                                                    break;

                                                // Cerrado
                                                case 5:
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1:
                                                        case 3:
                                                        case 2:
                                                        case 4:
                                                        case 5: echo "<div class='q-items'><a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped black-text' data-position='top'>lock</i></a></div>"; break;
                                                        default: break;
                                                    
                                                    }
                                                    break;

                                                default:
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo "<div class='q-items'><a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$item -> itemId}'>{$item -> itemId}</a></div>"; break;
                                                        case 2:
                                                        case 3:
                                                        case 4:
                                                        case 5: echo "<div class='q-items'><a href='javascript: void();'>{$item -> itemId}</a></div>"; break; 
                                                        default: break;
                                                    
                                                    }
                                                    break;
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php if (!$role) { ?>
                            <div class="row">
                                <div class="col m-t-10">
                                </div>
                            </div>
                            <?php } else { ?>
                            <div class="row">
                                <div class="col s12 m-t-10">
                                    <ul class="collapsible m-l-10 m-r-10">
                                        <li>
                                            <div class="collapsible-header blue-grey-text text-darken-2">
                                                <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                Informaci&oacute;n General
                                            </div>
                                            <div class="collapsible-body">
                                                <?php while ($qM1_0 = $_qM1_0 -> fetch_object()) { $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_0 -> itemId . "'"); $status = $_status -> fetch_object(); if ($qM1_0 -> itemArea == 0) { ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="center blue-grey lighten-3">
                                                                <span class="white-text"><?php echo $qM1_0 -> itemId; ?></span>
                                                            </td>
                                                            <td class="blue-grey lighten-2 white-text td-block" style="line-height : 20px;">
                                                                <?php echo $qM1_0 -> itemName; ?>
                                                            </td>
                                                            <td class="center grey lighten-2">
                                                                <?php

                                                                $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_0 -> itemId . "'");
                                                                $status = $_status -> fetch_object();

                                                                $status = $status -> statusId ?? '';

                                        if ($role -> designatedId ?? '') {
                                            $r = $role -> designatedId;
                                        }
                                        else {
                                            echo "<i class='material-icons red-text left m-r-10'>warning</i>Usted no pertenece a &eacute;ste Equipo de Trabajo, por favor comun&iacute;quese con el Administrador!";
                                        }

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            default: break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            case 5: echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Cerrado

                                                                    case 5:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;
                                                                    
                                                                }
                                                                ?>
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
                                                Car&aacute;cter e Integridad del Cliente
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php while ($qM1_1 = $_qM1_1 -> fetch_object()) { $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_1 -> itemId . "'"); $status = $_status -> fetch_object(); if ($qM1_1 -> itemArea == 1) { ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="center blue-grey lighten-3">
                                                                <span class="white-text"><?php echo $qM1_1 -> itemId; ?></span>
                                                            </td>
                                                            <td class="blue-grey lighten-2 white-text td-block" style="line-height : 20px;">
                                                                <?php echo $qM1_1 -> itemName; ?>
                                                            </td>
                                                            <td class="center grey lighten-2">
                                                                <?php

                                                                $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_1 -> itemId . "'");
                                                                $status = $_status -> fetch_object();

                                                                $status = $status -> statusId ?? '';

                                        if ($role -> designatedId ?? '') {
                                            $r = $role -> designatedId;
                                        }
                                        else {
                                            echo "<i class='material-icons red-text left m-r-10'>warning</i>Usted no pertenece a &eacute;ste Equipo de Trabajo, por favor comun&iacute;quese con el Administrador!";
                                        }
                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            default: break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            case 5: echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Cerrado

                                                                    case 5:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;
                                                                    
                                                                }
                                                                ?>
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
                                                Auditor/Profesional de la Contabilidad Predecesor
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php while ($qM1_2 = $_qM1_2 -> fetch_object()) { $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_2 -> itemId . "'"); $status = $_status -> fetch_object(); if ($qM1_2 -> itemArea == 2) { ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="center blue-grey lighten-3">
                                                                <span class="white-text"><?php echo $qM1_2 -> itemId; ?></span>
                                                            </td>
                                                            <td class="blue-grey lighten-2 white-text td-block" style="line-height : 20px;">
                                                                <?php echo $qM1_2 -> itemName; ?>
                                                            </td>
                                                            <td class="center grey lighten-2">
                                                                <?php

                                                                $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_2 -> itemId . "'");
                                                                $status = $_status -> fetch_object();

                                                                $status = $status -> statusId ?? '';

                                        if ($role -> designatedId ?? '') {
                                            $r = $role -> designatedId;
                                        }
                                        else {
                                            echo "<i class='material-icons red-text left m-r-10'>warning</i>Usted no pertenece a &eacute;ste Equipo de Trabajo, por favor comun&iacute;quese con el Administrador!";
                                        }
                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            default: break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            case 5: echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Cerrado

                                                                    case 5:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;
                                                                    
                                                                }
                                                                ?>
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
                                                Conocimiento Experto
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php while ($qM1_3 = $_qM1_3 -> fetch_object()) { $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_3 -> itemId . "'"); $status = $_status -> fetch_object(); if ($qM1_3 -> itemArea == 3) { ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="center blue-grey lighten-3">
                                                                <span class="white-text"><?php echo $qM1_3 -> itemId; ?></span>
                                                            </td>
                                                            <td class="blue-grey lighten-2 white-text td-block" style="line-height : 20px;">
                                                                <?php echo $qM1_3 -> itemName; ?>
                                                            </td>
                                                            <td class="center grey lighten-2">
                                                                <?php

                                                                $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_3 -> itemId . "'");
                                                                $status = $_status -> fetch_object();

                                                                $status = $status -> statusId ?? '';

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            default: break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            case 5: echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Cerrado

                                                                    case 5:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;
                                                                    
                                                                }
                                                                ?>
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
                                                Evaluaci&oacute;n de la Independencia
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php while ($qM1_4 = $_qM1_4 -> fetch_object()) { $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_4 -> itemId . "'"); $status = $_status -> fetch_object(); if ($qM1_4 -> itemArea == 4) { ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="center blue-grey lighten-3">
                                                                <span class="white-text"><?php echo $qM1_4 -> itemId; ?></span>
                                                            </td>
                                                            <td class="blue-grey lighten-2 white-text td-block" style="line-height : 20px;">
                                                                <?php echo $qM1_4 -> itemName; ?>
                                                            </td>
                                                            <td class="center grey lighten-2">
                                                                <?php

                                                                $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_4 -> itemId . "'");
                                                                $status = $_status -> fetch_object();

                                                                $status = $status -> statusId ?? '';

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            default: break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            case 5: echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Cerrado

                                                                    case 5:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;
                                                                    
                                                                }
                                                                ?>
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
                                                Limitaciones en el Alcance
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php while ($qM1_5 = $_qM1_5 -> fetch_object()) { $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_5 -> itemId . "'"); $status = $_status -> fetch_object(); if ($qM1_5 -> itemArea == 5) { ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="center blue-grey lighten-3">
                                                                <span class="white-text"><?php echo $qM1_5 -> itemId; ?></span>
                                                            </td>
                                                            <td class="blue-grey lighten-2 white-text td-block" style="line-height : 20px;">
                                                                <?php echo $qM1_5 -> itemName; ?>
                                                            </td>
                                                            <td class="center grey lighten-2">
                                                                <?php

                                                                $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_5 -> itemId . "'");
                                                                $status = $_status -> fetch_object();

                                                                $status = $status -> statusId ?? '';

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            default: break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            case 5: echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Cerrado

                                                                    case 5:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;
                                                                    
                                                                }
                                                                ?>
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
                                                Evaluaci&oacute;n del Riesgo del Encargo
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php while ($qM1_6 = $_qM1_6 -> fetch_object()) { $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_6 -> itemId . "'"); $status = $_status -> fetch_object(); if ($qM1_6 -> itemArea == 6) { ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="center blue-grey lighten-3">
                                                                <span class="white-text"><?php echo $qM1_6 -> itemId; ?></span>
                                                            </td>
                                                            <td class="blue-grey lighten-2 white-text td-block" style="line-height : 20px;">
                                                                <?php echo $qM1_6 -> itemName; ?>
                                                            </td>
                                                            <td class="center grey lighten-2">
                                                                <?php

                                                                $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_6 -> itemId . "'");
                                                                $status = $_status -> fetch_object();

                                                                $status = $status -> statusId ?? '';

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            default: break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            case 5: echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Cerrado

                                                                    case 5:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;
                                                                    
                                                                }
                                                                ?>
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
                                                Otras Consideraciones
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php while ($qM1_7 = $_qM1_7 -> fetch_object()) { $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_7 -> itemId . "'"); $status = $_status -> fetch_object(); if ($qM1_7 -> itemArea == 7) { ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="center blue-grey lighten-3">
                                                                <span class="white-text"><?php echo $qM1_7 -> itemId; ?></span>
                                                            </td>
                                                            <td class="blue-grey lighten-2 white-text td-block" style="line-height : 20px;">
                                                                <?php echo $qM1_7 -> itemName; ?>
                                                            </td>
                                                            <td class="center grey lighten-2">
                                                                <?php

                                                                $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_7 -> itemId . "'");
                                                                $status = $_status -> fetch_object();

                                                                $status = $status -> statusId ?? '';

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            default: break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            case 5: echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Cerrado

                                                                    case 5:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5: echo "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            default: break;
                                                                            
                                                                        }
                                                                        break;
                                                                    
                                                                }
                                                                ?>
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
                            <?php } ?>
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
