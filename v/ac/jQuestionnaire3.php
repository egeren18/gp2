<main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="../c/ac.php?m=index" class="breadcrumb hide-on-med-and-down">Aceptaci&oacute;n y Continuidad</a>
                
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
                                    <span class="blue-text p-l-10">Cliente: <?php echo $client -> clientName; ?>  </span>
                                    
                                    <a href="../c/ac.php?m=index" class="tooltipped right modal-trigger m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                    <a href="#ticket1" class="tooltipped right modal-trigger m-l-5" data-position="left" data-tooltip="Ticket">
                                        <i class="material-icons blue-text">local_offer</i>
                                    </a>
                                     <a href="#Leyenda" class="tooltipped right modal-trigger m-l-5" data-position="left" data-tooltip="Leyenda">
                                        <i class="material-icons blue-text">local_library</i>
                                    </a>
                               
                                </div>
                            </div>
                            <div class="m-l-10 m-r-10">
                                <div class='row'>
                                    <div class="col s12 m6 l7 m-t--5 m-b-10">
                                        <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                                <table class="blue-grey lighten-4">
                                                    <?php
                                                    while ($leader = $_leader -> fetch_object()) {
                                                        
                                                        /*
                                                         * Realiza una consulta a la base de datos.
                                                         */

                                                        $_thisRole = mysqli_query($master, "SELECT * FROM designated WHERE designatedId = '" . $leader -> designatedId . "'");
                                                        $thisRole = $_thisRole -> fetch_object();

                                                        echo "<tr>";
                                                        echo "<td>" . $thisRole -> designatedName . ":</td>";


                                                        /*
                                                         * Realiza una consulta a la base de datos.
                                                         */

                                                        $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $leader -> userId . "'");
                                                        $user = $_user -> fetch_object();
                                                        echo "<td>" . $user -> userName . " " . $user -> userSurname . "</td>";
                                                        echo "</tr>";
                                                    }
                                                    while ($consultant = $_consultant -> fetch_object()) {
                                                        
                                                        /*
                                                         * Realiza una consulta a la base de datos.
                                                         */

                                                        $_thisRole = mysqli_query($master, "SELECT * FROM designated WHERE designatedId = '" . $consultant -> designatedId . "'");
                                                        $thisRole = $_thisRole -> fetch_object();

                                                        echo "<tr>";
                                                        echo "<td>" . $thisRole -> designatedName . ":</td>";


                                                        /*
                                                         * Realiza una consulta a la base de datos.
                                                         */

                                                        $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $consultant -> userId . "'");
                                                        $user = $_user -> fetch_object();
                                                        echo "<td>" . $user -> userName . " " . $user -> userSurname . "</td>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td>Naturaleza del Servicio:</td>
                                                        <td><?php echo $service -> natureName; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Servicio:</td>
                                                        <td><?php echo $service -> serviceName; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Período de la AC:</td>
                                                        <td>
                                                            Desde <span class="p-l-5 p-r-5"><?php echo $ac -> acDateStart; ?></span>
                                                            Hasta <span class="p-l-5"><?php echo $ac -> acDateExpire; ?></span>
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
                                                    width:250,
                                                    height:135,
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
                                        if ($role -> designatedId  && $_SESSION["userAdmin"] != 3) {
                                            
                                            /*
                                             * Variables.
                                             */
                                            
                                            $r = $role -> designatedId;
                                            
                                        }
                                        else {
                                            
                                            /*
                                             * Variables.
                                             */
                                            
                                            $r = '';
                                            
                                            /*
                                             * Mensaje.
                                             */
                                            
                                            if ($_SESSION["userAdmin"] != 3) {
                                                
                                                echo "<i class='material-icons red-text left m-r-10'>warning</i>Usted no pertenece a &eacute;ste Equipo de Trabajo, por favor comun&iacute;quese con el Administrador!";
                                                
                                            }
                                            
                                        }

                                        /*
                                         * Realiza una consulta a la base de datos.
                                         */

                                        $_item = mysqli_query($master, "SELECT * FROM qm1 WHERE itemStatus = 1");

                                        while ($item = $_item -> fetch_object()) {
                                            
                                            $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $item -> itemId . "'");
                                            $status = $_status -> fetch_object();
                                            
                                            $status = $status -> statusId ;

                                            $_important = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $item -> itemId . "' AND important = 1");
                                            $important = $_important -> fetch_object();

                                            switch ($status) {

                                                // En proceso
                                                case 1:
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped orange-text' data-position='top'>done</i></a></div>" : "<div class='q-items'><a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped orange-text' data-position='top'>done</i></a></div>"; break;
                                                        case 3:
                                                        case 2:
                                                        case 4:
                                                        case 5:
                                                        default: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='javascript: void();'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped orange-text' data-position='top'>done</i></a></div>" : "<div class='q-items'><a href='javascript: void();'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped orange-text' data-position='top'>done</i></a></div>"; break;
                                                    
                                                    }
                                                    break;
                                                    
                                                // Completado
                                                case 2:
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>" :  "<div class='q-items'><a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>"; break;
                                                        case 2:
                                                        case 4: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>" : "<div class='q-items'><a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>"; break;
                                                        case 3:
                                                        case 5:
                                                        default: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='javascript: void();'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>" : "<div class='q-items'><a href='javascript: void();'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>"; break;
                                                    
                                                    }
                                                    break;
                                                    
                                                // Por corregir
                                                case 3:
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo $icon = $important  == 1 ? "<div class='q-items b-b-blue'><a href='javascript: void();'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped red-text' data-position='top'>warning</i></a></div>" : "<div class='q-items'><a href='javascript: void();'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped red-text' data-position='top'>warning</i></a></div>"; break;
                                                        case 2:
                                                        case 3:
                                                        case 4:
                                                        case 5:
                                                        default: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped red-text' data-position='top'>warning</i></a></div>" : "<div class='q-items'><a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped red-text' data-position='top'>warning</i></a></div>"; break;
                                                    }
                                                    break;
                                                 case 33:    
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo $icon = $important  == 1 ? "<div class='q-items b-b-blue'><a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped orange-text' data-position='top'>warning</i></a></div>" : "<div class='q-items'><a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped orange-text' data-position='top'>warning</i></a></div>"; break;
                                                        case 2:
                                                        case 3:
                                                        case 4:
                                                        case 5:
                                                        default: echo $icon = $important  == 1 ? "<div class='q-items b-b-blue'><a href='javascript: void();'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped orange-text' data-position='top'>warning</i></a></div>" : "<div class='q-items'><a href='javascript: void();'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped orange-text' data-position='top'>warning</i></a></div>"; break;
                                                    }
                                                    break;
                                                // Revisado
                                                case 4:

                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1:
                                                        case 2:
                                                        case 3:
                                                        case 4:
                                                        case 5: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i></a></div>" : "<div class='q-items'><a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i></a></div>"; break;
                                                        default:
                                                            if ($important  == 1) {
                                                                if ($_SESSION["userAdmin"] == 3) {
                                                                    echo "<div class='q-items b-b-red'><a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i></a></div>";
                                                                }
                                                                else {
                                                                    echo "";
                                                                }
                                                            }
                                                            else {
                                                                echo "<div class='q-items'><a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i></a></div>";
                                                            }
                                                        break;
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
                                                        case 5:
                                                        default: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped black-text' data-position='top'>lock</i></a></div>" : "<div class='q-items'><a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$item -> itemId}'><i data-tooltip='{$item -> itemId}' class='material-icons tooltipped black-text' data-position='top'>lock</i></a></div>"; break;
                                                    
                                                    }
                                                    break;

                                                default:
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo "<div class='q-items'><a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$item -> itemId}'>{$item -> itemId}</a></div>"; break;
                                                        case 2:
                                                        case 3:
                                                        case 4:
                                                        case 5:
                                                        default: echo "<div class='q-items'><a href='javascript: void();'>{$item -> itemId}</a></div>"; break;
                                                    
                                                    }
                                                    break;
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <?php

                                        /*
                                         * Variables.
                                         */

                                        $q = $ac -> acQuestionnaireId;
                                        if ($role -> designatedId  && $_SESSION["userAdmin"] != 3) {
                                            
                                            /*
                                             * Variables.
                                             */
                                            
                                            $r = $role -> designatedId;
                                            
                                        }
                                        else {
                                            
                                            /*
                                             * Variables.
                                             */
                                            
                                            $r = '';
                                            
                                            /*
                                             * Mensaje.
                                             */
                                            
                                            if ($_SESSION["userAdmin"] != 3) {
                                                
                                                echo "<i class='material-icons red-text left m-r-10'>warning</i>Usted no pertenece a &eacute;ste Equipo de Trabajo, por favor comun&iacute;quese con el Administrador!";
                                                
                                            }
                                            
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php if (!$role && $_SESSION["userAdmin"] != 3) { ?>
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

                                                                $status = $status -> statusId ;

                                                                $_important = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_0 -> itemId . "' AND important = 1");
                                                                $important = $_important -> fetch_object();

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default:
                                                                                if ($important  == 1) {
                                                                                    if ($_SESSION["userAdmin"] == 3) {
                                                                                        echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>";
                                                                                    } else {
                                                                                        echo "";
                                                                                    }
                                                                                } else {
                                                                                    echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>";
                                                                                }
                                                                                break;
                                                                            
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
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons black-text b-b-red'>lock</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_0 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            
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

                                                                $status = $status -> statusId ;

                                                                $_important = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_1 -> itemId . "' AND important = 1");
                                                                $important = $_important -> fetch_object();

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default:
                                                                                if ($important  == 1) {
                                                                                    if ($_SESSION["userAdmin"] == 3) {
                                                                                        echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>";
                                                                                    } else {
                                                                                        echo "";
                                                                                    }
                                                                                } else {
                                                                                    echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>";
                                                                                }
                                                                                break;
                                                                            
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
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons black-text b-b-red'>lock</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_1 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            
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

                                                                $status = $status -> statusId ;

                                                                $_important = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_2 -> itemId . "' AND important = 1");
                                                                $important = $_important -> fetch_object();

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default:
                                                                                if ($important  == 1) {
                                                                                    if ($_SESSION["userAdmin"] == 3) {
                                                                                        echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>";
                                                                                    } else {
                                                                                        echo "";
                                                                                    }
                                                                                } else {
                                                                                    echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>";
                                                                                }
                                                                                break;
                                                                            
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
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons black-text b-b-red'>lock</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_2 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            
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

                                                                $status = $status -> statusId ;

                                                                $_important = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_3 -> itemId . "' AND important = 1");
                                                                $important = $_important -> fetch_object();

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default:
                                                                                if ($important  == 1) {
                                                                                    if ($_SESSION["userAdmin"] == 3) {
                                                                                        echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>";
                                                                                    } else {
                                                                                        echo "";
                                                                                    }
                                                                                } else {
                                                                                    echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>";
                                                                                }
                                                                                break;
                                                                            
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
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons black-text b-b-red'>lock</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            
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

                                                                $status = $status -> statusId ;

                                                                $_important = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_4 -> itemId . "' AND important = 1");
                                                                $important = $_important -> fetch_object();

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default:
                                                                                if ($important  == 1) {
                                                                                    if ($_SESSION["userAdmin"] == 3) {
                                                                                        echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>";
                                                                                    } else {
                                                                                        echo "";
                                                                                    }
                                                                                } else {
                                                                                    echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>";
                                                                                }
                                                                                break;
                                                                            
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
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons black-text b-b-red'>lock</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_4 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            
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

                                                                $status = $status -> statusId ;

                                                                $_important = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_5 -> itemId . "' AND important = 1");
                                                                $important = $_important -> fetch_object();

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default:
                                                                                if ($important  == 1) {
                                                                                    if ($_SESSION["userAdmin"] == 3) {
                                                                                        echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>";
                                                                                    } else {
                                                                                        echo "";
                                                                                    }
                                                                                } else {
                                                                                    echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>";
                                                                                }
                                                                                break;
                                                                            
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
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons black-text b-b-red'>lock</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_5 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            
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

                                                                $status = $status -> statusId ;

                                                                $_important = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_6 -> itemId . "' AND important = 1");
                                                                $important = $_important -> fetch_object();

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default:
                                                                                if ($important  == 1) {
                                                                                    if ($_SESSION["userAdmin"] == 3) {
                                                                                        echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>";
                                                                                    } else {
                                                                                        echo "";
                                                                                    }
                                                                                } else {
                                                                                    echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>";
                                                                                }
                                                                                break;
                                                                            
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
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons black-text b-b-red'>lock</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_6 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            
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

                                                                $status = $status -> statusId ;

                                                                $_important = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_7 -> itemId . "' AND important = 1");
                                                                $important = $_important -> fetch_object();

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default:
                                                                                if ($important  == 1) {
                                                                                    if ($_SESSION["userAdmin"] == 3) {
                                                                                        echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>";
                                                                                    } else {
                                                                                        echo "";
                                                                                    }
                                                                                } else {
                                                                                    echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>";
                                                                                }
                                                                                break;
                                                                            
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
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons black-text b-b-red'>lock</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_7 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            
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
                                       
                                    </ul>
                                    <ul class="m-l-25">
                                    </ul>
                                </div>
                            </div>
                            <?php } ?>
                      
<?php if ( $valor  == 4  or  $_SESSION["userAdmin"]  == 3 ){ ?>           
                                <div class="row">
        <div class="col s12 m-t-20">
            <div class="card m-l-10 m-r-10">
                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                    <ul class="collection">
                        <li class="collection-item blue-grey lighten-2 white-text">En base a mi conocimiento preliminar del posible Cliente/Proyecto y de los indicadores presentes, decido:</li>
                    </ul>





 <?php if ($tracingOpinionAc == $acId and $_SESSION["userAdmin"]  == 3 ){
                    // AQUI VAN LAS CASILLAS CUANDO ESTA LLENADO 
                      ?>
 <form action="../c/ac.php?m=updateTracingDb3&cod=<?php echo $c; ?>&q=<?php echo $q; ?>&a=<?php echo  $acId; ?>" method="post" enctype="multipart/form-data">                     
<div class="row">


   <div class="col s12 m6 l3 m-t-20">
       <div class="input-field">
     <small class="blue-grey-text text-darken-2">Riesgo sugerido por el sistema</small>
           <input value="<?php echo $average; ?> " disabled="">
       </div>
   </div>

   <div class="col s12 m6 l3 m-t-20">
       <div class="input-field">
                <small class="blue-grey-text text-darken-2">Calificación Socio Lider</small>
           <input value="<?php echo $riskAc2  ; ?> " disabled="">
       </div>
   </div>

   <div class="col s12 m6 l3 m-t-20">


       <div class="input-field">
           <small class="blue-grey-text text-darken-2">Decisi&oacute;n Socio lider </small>
           <input value="<?php echo  $desiAc; ?> " disabled="">
       </div>
   </div>
   <div class="col s12 m6 l3 m-t-20">
                            <div class="input-field">
                                <small>Decisi&oacute;n Socio de Riesgo</small>

                                <?php if ( $dsr == 0 ){
                                        // AQUI VAN LAS CASILLAS CUANDO ESTA LLENADO 
                                    ?>

                                    <select name="dsr" placeholder="" class="validate" required="">
                                    <option value="">&nbsp;</option>
                                    <?php while ($r_d = mysqli_fetch_array($desicion3)) { ?>
                                    <?php $desicionId = $r_d["desicionId"]; $desicionName = $r_d["desicionName"]; ?>
                                    <option  value="<?php echo $desicionId; ?>"><?php echo $desicionName; ?></option>
                                    <?php } ?>
                                </select>

                                <?php }else {
                                    // AQUI VA SI NO SE HA LLENADO 
                                 ?>
                                  <input value="<?php echo  $dsrn; ?> " disabled="">
                                  <?php }
                                 ?>
                            </div>
     </div>

     <?php if ( $dsr == 0 ){  ?>
        <div class="col s12 m-t-20">
                                            <label>
                                                <input name="ok" type="checkbox" required=""/>
                                                <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                            </label>
        </div>
        <div class="col s12 m-t-20">
                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
        <?php }  ?>     
                       
</div>
</form>

                        <?php }else {
                        // AQUI VA SI NO SE HA LLENADO 
                        ?>
                        

                        <form action="../c/ac.php?m=updateTracingDb&cod=<?php echo $c; ?>&q=<?php echo $q; ?>&a=<?php echo  $acId; ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col s12 m6 l4">
                            <div class="input-field">
                                <small class="blue-grey-text text-darken-2">Riesgo sugerido por el sistema</small>
                                 <input value="<?php echo $average; ?> " disabled="">
                            </div>
                        </div>
                        
                   
                        
                        <?php 
                      
                        
                        $_acr = mysqli_query($connection, "
                            SELECT * FROM acanswer
                            WHERE acId = '" . $acId . "'
                            AND statusId = 5
                            
                            ");
                    
                        while  ($acr = $_acr -> fetch_object()) {
                            $contador = $contador + 1;
                        }
                        
                        
                        
                        
                        if ($contador == 30){ ?>
                              
                              <div class="col s12 m6 l4">
                            <div class="input-field">
                                <small class="blue-grey-text text-darken-2">Calificación Socio Lider</small>
                                <select id="riskScId" name="riskScId" placeholder="" type="text" class="validate" >
                                    <?php while ($r_selectRisk2 = $selectRisk2->fetch_object()) { ?>
                                        <option <?php echo $selected = $r_selectRisk1->riskId == $r_selectRisk2->riskId ? 'selected' : ''; ?> value="<?php echo $r_selectRisk2->riskId; ?>"><?php echo $r_selectRisk2->riskName; ?></option>
                                    <?php } ?>
                                </select>
                            </div>                                                
                        </div>
                        
                        <div class="col m5 offset-m1 l4 m-t-10">
                        <?php while ($r_desicion = $desicion ->fetch_object()) { ?>
                            <label class="m-l-20">
                                <input value="<?php echo $r_desicion -> desicionId; ?>"  type="radio" name="desicion" id="decision" required >
                                <span><?php echo $r_desicion -> desicionName; ?></span>
                            </label><br>
                             <?php } ?>
                        </div>        
                        
                        
                        
                     <?php   } ?>
                        
                        
                        
                        
                        
                        
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

                    </form>
                        <?php }
                        ?>

                  
                </div>
            </div>
        </div>
    </div>
 
                            <?php } ?>


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

                    <?php } ?>



                    
                </div>
            </div>
        </div>
    </div>
</form>
<?php } ?>

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
     <?php include '../v/support/leyenda.php'; ?>
      <?php include '../v/support/ticket.php'; ?>
