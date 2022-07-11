<main>

<div class="container">
    
    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Terminos y Condiciones</a>
            <a href="#!" class="breadcrumb ">Editar</a>
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
                            <span  class="breadcrumb p-l-10 blue-text" >Cliente</span>
                            <a href="#!" class="breadcrumb blue-text" ><?php echo $clientName ?> </a>
                            <a href="../c/termycond.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                    <i class="material-icons blue-text">cancel</i>
                                </a>
                                <a class="right m-r-5 tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                                
                                    <a class="right m-r-5 tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen">
                                        <i class="material-icons green-text">file_download</i></a>
                                        
                                 <a class="right m-r-5" id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                                 
                                  <a href="#Leyenda" class="tooltipped right modal-trigger m-r-10" data-position="left" data-tooltip="Instruciones">
                                        <i class="material-icons blue-text">local_library</i>
                                    </a>
                                  <a href="javascript: history.go(-1);" class="tooltipped right blue-text m-r-10" data-position="left" data-tooltip="Atr&aacute;s">
                                        <i class="material-icons blue-text">undo</i>
                                    </a>
                        </div>
                    </div>
                    
                    <div class="m-l-10 m-r-10">
                                
                                <div class='row'>
                                    <div class="col s12 m6 l7 m-t--5 m-b-10">
                                        <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                                <table class="blue-grey lighten-4">
                                                
                                                <tr>
                                                            <td>Socio lider </td> <td><?php echo $liderName ?></td>
                                                          </tr>  
                                                         <tr>
                                                            <td>Gerente </td> <td> <?php echo $gerenteName ?> </td>
                                                         </tr>    
                                                            
                                                         <tr>
                                                            <td>Fecha: </td>
                                                            <td>21/06/2022</td>
                                                         </tr>    
                        <tr>
                                                            <td >Naturaleza del servicio:</td> <td><?php echo $naturalezaNombre ?> </td>
                                                         </tr>  
                                                         <tr>
                                                            <td>Servicio</td> <td><?php echo $serviceName ?></td>
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
                                                    ['Acci贸n', 'Cumplimiento'],
                                                    ['En Proceso', <?php echo $a1c; ?>],
                                                    ['Completado', <?php echo $a2c; ?>],
                                                    ['Por Corregir', <?php echo $a3c; ?>],
                                                    ['Revisado', <?php echo $a4c; ?>],
                                                    ['Cerrado', <?php echo $a6c; ?>],
                                                    ['Sin Editar', <?php echo $a5c; ?>]
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
                                </div></div>
                    
                    <div class="row">
                                                          <div class="col s12">
                                        <?php

                                        /*
                                         * Variables.
                                         */



                                        $_role = mysqli_query($connection, "SELECT * FROM tteam WHERE termycondId = '" . $termycondId . "' AND userId = '" . $_SESSION["userId"] . "'");
                                        $role = $_role -> fetch_object();

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

                                        $_item = mysqli_query($connection, "SELECT * FROM termycond  WHERE termycondId = '" . $termycondId . "' ");

                                        while ($item = $_item -> fetch_object()) {
                                            
                                            $_status = mysqli_query($connection, "SELECT * FROM termycond WHERE termycondId = '" . $termycondId . "' AND mId = '" . $item -> mId . "' ");
                                            $status = $_status -> fetch_object();
                                            
                                            $status = $status -> statusId ;
                                            $risk = $item ->  risk;

                                            $_important = mysqli_query($connection, "SELECT * FROM termycond WHERE termycondId = '" . $termycondId . "' AND mId = '" . $item -> mId . "' AND important = 1");
                                            $important = $_important -> fetch_object();

                                            $clienId = $_GET["clientId"];
                                            $serviceId = $_GET["serviceId"];
                                            

                                            switch ($status) {

                                                // En proceso
                                                case 1:
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/termycond.php?m=edit&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped orange-text' data-position='top'>done</i></a></div>" : "<div class='q-items'><a href='../c/termycond.php?m=edit&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped orange-text' data-position='top'>done</i></a></div>"; break;
                                                        case 3:
                                                        case 2:
                                                        case 4:
                                                        case 5:
                                                        default: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='javascript: void();'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped orange-text' data-position='top'>done</i></a></div>" : "<div class='q-items'><a href='javascript: void();'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped orange-text' data-position='top'>done</i></a></div>"; break;
                                                    
                                                    }
                                                    break;
                                                    
                                                // Completado
                                                case 2:
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/termycond.php?m=read&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>" :  "<div class='q-items'><a href='../c/termycond.php?m=read&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>"; break;
                                                        case 2:
                                                        case 4: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/termycond.php?m=update&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>" : "<div class='q-items'><a href='../c/termycond.php?m=update&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>"; break;
                                                        case 3:
                                                        case 5:
                                                        default: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='javascript: void();'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>" : "<div class='q-items'><a href='javascript: void();'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>"; break;
                                                    
                                                    }
                                                    break;
                                                    
                                                // Por corregir
                                                case 3:
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo $icon = $important  == 1 ? "<div class='q-items b-b-blue'><a href='javascript: void();'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped red-text' data-position='top'>warning</i></a></div>" : "<div class='q-items'><a href='javascript: void();'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped red-text' data-position='top'>warning</i></a></div>"; break;
                                                        case 2:
                                                        case 3:
                                                        case 4:
                                                        case 5:
                                                        default: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/termycond.php?m=update&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped red-text' data-position='top'>warning</i></a></div>" : "<div class='q-items'><a href='../c/termycond.php?m=update&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped red-text' data-position='top'>warning</i></a></div>"; break;
                                                    }
                                                    break;
                                                 case 33:    
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo $icon = $important  == 1 ? "<div class='q-items b-b-blue'><a href='../c/termycond.php?m=edit&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped orange-text' data-position='top'>warning</i></a></div>" : "<div class='q-items'><a href='../c/termycond.php?m=edit&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped orange-text' data-position='top'>warning</i></a></div>"; break;
                                                        case 2:
                                                        case 3:
                                                        case 4:
                                                        case 5:
                                                        default: echo $icon = $important  == 1 ? "<div class='q-items b-b-blue'><a href='javascript: void();'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped orange-text' data-position='top'>warning</i></a></div>" : "<div class='q-items'><a href='javascript: void();'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped orange-text' data-position='top'>warning</i></a></div>"; break;
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
                                                        case 5: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/termycond.php?m=read&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i></a></div>" : "<div class='q-items'><a href='../c/termycond.php?m=read&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i></a></div>"; break;
                                                        default:
                                                            if ($important  == 1) {
                                                                if ($_SESSION["userAdmin"] == 3) {
                                                                    echo "<div class='q-items b-b-red'><a href='../c/termycond.php?m=riskPartnerEdit&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i></a></div>";
                                                                }
                                                                else {
                                                                    echo "";
                                                                }
                                                            }
                                                            else {
                                                                echo "<div class='q-items'><a href='../c/termycond.php?m=riskPartnerEdit&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i></a></div>";
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
                                                        default: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/termycond.php?m=read&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped black-text' data-position='top'>lock</i></a></div>" : "<div class='q-items'><a href='../c/termycond.php?m=read&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped black-text' data-position='top'>lock</i></a></div>"; break;
                                                    
                                                    }
                                                    break;

                                                default:
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo "<div class='q-items'><a href='../c/termycond.php?m=create2&termycondId={$termycondId}&iid={$item -> mId}&clientId={$clientId}&serviceId={$serviceId}'>{$item -> mId}</a></div>"; break;
                                                        case 2:
                                                        case 3:
                                                        case 4:
                                                        case 5:
                                                        default: echo "<div class='q-items'><a href='javascript: void();'>{$item -> mId}</a></div>"; break;
                                                    
                                                    }
                                                    break;
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                        
    <div class="row">
        <div class="col s12 m-t-10">
            <div class="m-l-10 m-r-10">              
                   
            
                
                
                
                
                   
                   <?php 
                                                  $_qM1_0 = mysqli_query($connection, "SELECT * FROM termycond WHERE termycondId = '" . $termycondId . "'  ");
                                                while ($qM1_0 = $_qM1_0 -> fetch_object()) {
                                              
                                                ?>
                                                
                                              
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="center blue-grey lighten-3">
                                                                <span class="white-text"><?php echo $qM1_0 -> mId; ?></span>
                                                            </td>
                                                            <td class="blue-grey lighten-2 white-text td-block" style="line-height : 20px;">
                                                                <?php echo $qM1_0 -> name; ?>
                                                            </td>
                                                         
                                                            <td class="center grey lighten-2">
                                                                <?php

                                                                $_status = mysqli_query($connection, "SELECT * FROM termycond WHERE termycondId = '" . $termycondId . "' AND mId = '" . $qM1_0 -> mId . "'");
                                                                $status = $_status -> fetch_object();
                                                                $status = $status -> statusId ;

                                                                $_important = mysqli_query($connection, "SELECT * FROM termycond WHERE termycondId = '" . $termycondId . "' AND mId = '" . $qM1_0 -> mId . "' AND important = 1");
                                                                $important = $_important -> fetch_object();

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/termycond.php?m=edit&termycondId={$termycondId}&iid={$qM1_0 -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='../c/termycond.php?m=edit&termycondId={$termycondId}&iid={$qM1_0 -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i class='material-icons orange-text'>done</i></a>"; break;
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
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/termycond.php?m=read&termycondId={$termycondId}&iid={$qM1_0 -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/termycond.php?m=read&termycondId={$termycondId}&iid={$qM1_0 -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo $icon = $important  == 1 ? "<a href='../c/termycond.php?m=update&termycondId={$termycondId}&iid={$qM1_0 -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/termycond.php?m=update&termycondId={$termycondId}&iid={$qM1_0 -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/termycond.php?m=edit&termycondId={$termycondId}&iid={$qM1_0 -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='../c/termycond.php?m=edit&termycondId={$termycondId}&iid={$qM1_0 -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i class='material-icons red-text'>warning</i></a>"; break;
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
                                                                            case 5: echo $icon = $important  == 1 ? "<a href='../c/termycond.php?m=read&termycondId={$termycondId}&iid={$qM1_0 -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>" : "<a href='../c/termycond.php?m=read&termycondId={$termycondId}&iid={$qM1_0 -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default:
                                                                                if ($important  == 1) {
                                                                                    if ($_SESSION["userAdmin"] == 3) {
                                                                                        echo "<a href='../c/termycond.php?m=riskPartnerEdit&termycondId={$termycondId}&iid={$qM1_0 -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>";
                                                                                    } else {
                                                                                        echo "";
                                                                                    }
                                                                                } else {
                                                                                    echo "<a href='../c/termycond.php?m=riskPartnerEdit&termycondId={$termycondId}&iid={$qM1_0 -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i class='material-icons blue-text'>done_all</i></a>";
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
                                                                            default: echo $icon = $important  == 1 ? "<a href='../c/termycond.php?m=read&termycondId={$termycondId}&iid={$qM1_0 -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i class='material-icons black-text b-b-red'>lock</i></a>" : "<a href='../c/termycond.php?m=read&termycondId={$termycondId}&iid={$qM1_0 -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/termycond.php?m=create2&termycondId={$termycondId}&iid={$qM1_0 -> mId}&clientId={$clientId}&serviceId={$serviceId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
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
                                                <?php } ?>
                  
                    
                
            </div>
            
         </div>
    </div>
    
<?php include '../v/termycond/close.php' ?>
    
                      
                 
                    <div class="row">
                        <div class="col s12 m-t-10">
                            <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                            <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
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

<script type="text/javascript" src="../js/shareholder.js"></script