    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="../c/project.php?m=index" class="breadcrumb hide-on-med-and-down">Proyectos</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Ejecuci&oacute;n</a>
                    <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                        <i class="material-icons blue-text">help</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons blue-text">forum</i>
                        </a>
                        
                    <a href="#leyenda" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="leyenda">
                                            <i class="material-icons green-text">local_offer</i>
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
                        <span class="blue-grey-text text-lighten-4 left">PLANIFICACI&Oacute;N</span>
                    </a>
                </div>
                <div class="col s12 m6 l3">
                    <a href="../c/project.php?m=strategy&c=<?php echo $c; ?>" class="waves-effect waves-light btn btn-block blue-grey lighten-1 hoverable">
                        <i class="material-icons blue-grey-text text-darken-2 left">extension</i>
                        <span class="blue-grey-text text-lighten-4 left">ESTRATEGIA</span>
                    </a>
                </div>
                <div class="col s12 m6 l3">
                    <a href="../c/project.php?m=execution&c=<?php echo $c; ?>" class="waves-effect waves-light btn btn-block blue-grey darken-2 hoverable">
                        <i class="material-icons blue-text left">extension</i>
                        <span class="left">EJECUCI&Oacute;N</span>
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
                                    <a href="../c/project.php?m=index" class="tooltipped right " data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-text">cancel</i>
                                    </a>
                                        
<!-- botones para funcion para tomar captura este es el boton -->    
       <a class="right m-r-5 tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
       <a class="right m-r-5 tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen"><i class="material-icons green-text">file_download</i></a>
       <a class="right m-r-5" id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
<!-- botones para funcion para tomar captura -->
<a href="#Leyenda" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Instruciones">
            <i class="material-icons blue-text">local_library</i>
        </a>
        <a href="javascript: history.go(-1);" class="tooltipped right blue-text m-r-5" data-position="left" data-tooltip="Atr&aacute;s">
            <i class="material-icons blue-text">undo</i>
        </a>
                                    <span class="p-l-10">Cliente: <?php echo $project -> clientName; ?></span><br/>
                                </div>
                            </div>
<!-- funcion para tomar captura se utiliza antes del card  -->        
              <div id="main">
                 <div id="screenshot">
<!--  end funcion para tomar captura -->    
                            <div class="m-l-10">
                                <div class="row">
                                    <div class="col s12 m6 l7 m-t--5 m-b--10">
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
                                                    <td><?php echo $nature -> natureName; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Servicio:</td>
                                                    <td><?php echo $service -> serviceName; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Per&iacute;odo del Proyecto:</td>
                                                    <td>
                                                        Desde <span class="p-l-5 p-r-5"><?php echo $project -> projectDateStart; ?></span>
                                                        Hasta <span class="p-l-5"><?php echo $project -> projectDateExpire; ?></span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l5 m-t--5 m-b-10">
                                        <div class="p-t-10 p-b-20">
<!--                                            
                                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                            <script type="text/javascript">
                                            google.charts.load('current', {'packages':['corechart']});
                                            google.charts.setOnLoadCallback(drawChart);
                                            function drawChart() {
                                                var data = google.visualization.arrayToDataTable([
                                                    ['Acci¨®n', 'Cumplimiento'],
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
-->
                                        </div>
                                    </div>
                                </div>
                                <style>
                                .tabs {
                                             display: flex !important
                                    }
                                </style>
                              
                             
                                     
                                
                        <div class="row">
                            
              <div class="col s12 m-t-20">
                    
                     <a href="#" class="waves-effect waves-light btn btn-block blue-grey darken-2 hoverable">
                    
                        <span class="left">Periodo de Revisi&oacute;n </span>
                    </a>
                   <ul class="tabs m-t-10">
                       
                    <?php 
                         if ($fa >= 1 ){ ?>
                        <li class="tab col s2 l4  white" href="../c/project.php?m=execution&c=<?php echo $c; ?>">
                            <a class=" tooltipped" data-position="bottom" data-tooltip="Datos Generales" href="../c/project.php?m=execution&c=<?php echo $c; ?>"><?php echo $dP1; ?>  </a>
                        </li>
                    <?php } ?>
                    
                    <?php 
                         if ($fa >= 2 ){ ?>
                        <li class="tab col s2 l4 white" href="../c/project.php?m=execution&c=<?php echo $c; ?>">
                            <a class="tooltipped" data-position="bottom" data-tooltip="Datos Generales" href="../c/project.php?m=execution&c=<?php echo $c; ?>"> <?php echo $dP2; ?> </a>
                        </li>
                    <?php } ?>
                    <?php 
                         if ($fa >= 3 ){ ?>
                        <li class="tab col s2 l4 white" href="../c/project.php?m=execution&c=<?php echo $c; ?>">
                            <a class=" tooltipped" data-position="bottom" data-tooltip="Datos Generales" href="../c/project.php?m=execution&c=<?php echo $c; ?>"> <?php echo $dP3; ?> </a>
                        </li>
                    <?php } ?>
                    <?php 
                         if ($fa >= 4 ){ ?>
                        <li class="tab col s2 l4 white" href="../c/project.php?m=execution&c=<?php echo $c; ?>">
                            <a class=" tooltipped" data-position="bottom" data-tooltip="Datos Generales" href="../c/project.php?m=execution&c=<?php echo $c; ?>"><?php echo $dP4; ?>  </a>
                        </li>
                    <?php } ?>
                    <?php 
                         if ($fa >= 5 ){ ?>
                        <li class="tab col  s2 l4 white" href="../c/project.php?m=execution&c=<?php echo $c; ?>">
                            <a class=" tooltipped" data-position="bottom" data-tooltip="Datos Generales" href="../c/project.php?m=execution&c=<?php echo $c; ?>"><?php echo $dP5; ?>  </a>
                        </li>
                    <?php } ?>
                    <?php 
                         if ($fa >= 6 ){ ?>
                        <li class="tab col s2 l4 white" href="../c/project.php?m=execution&c=<?php echo $c; ?>">
                            <a class="tooltipped" data-position="bottom" data-tooltip="Datos Generales" href="../c/project.php?m=execution&c=<?php echo $c; ?>"><?php echo $dP6; ?>  </a>
                        </li>
                    <?php } ?>
    
                    <?php 
                         if ($fa >= 7 ){ ?>
                        <li class="tab col s2 l2 white" href="../c/project.php?m=execution&c=<?php echo $c; ?>">
                            <a class=" tooltipped" data-position="bottom" data-tooltip="Datos Generales" href="../c/project.php?m=execution&c=<?php echo $c; ?>"><?php echo $dP7; ?> </a>
                        </li>
                    <?php } ?>
                    <?php 
                         if ($fa >= 8 ){ ?>
                        <li class="tab col s2 l2 white" href="../c/project.php?m=execution&c=<?php echo $c; ?>">
                            <a class=" tooltipped" data-position="bottom" data-tooltip="Datos Generales" href="../c/project.php?m=execution&c=<?php echo $c; ?>"> <?php echo $dP8; ?> </a>
                        </li>
                    <?php } ?>
                    <?php 
                         if ($fa >= 9 ){ ?>
                        <li class="tab col s2 l2 white" href="../c/project.php?m=execution&c=<?php echo $c; ?>">
                            <a class=" tooltipped" data-position="bottom" data-tooltip="Datos Generales" href="../c/project.php?m=execution&c=<?php echo $c; ?>"><?php echo $dP9; ?> </a>
                        </li>
                    <?php } ?>
                    <?php 
                         if ($fa >= 10 ){ ?>
                        <li class="tab col s2 l2 white" href="../c/project.php?m=execution&c=<?php echo $c; ?>">
                            <a class=" tooltipped" data-position="bottom" data-tooltip="Datos Generales" href="../c/project.php?m=execution&c=<?php echo $c; ?>"><?php echo $dP10; ?> </a>
                        </li>
                    <?php } ?>
                    <?php 
                         if ($fa >= 11 ){ ?>
                        <li class="tab col s2 l2 white" href="../c/project.php?m=execution&c=<?php echo $c; ?>">
                            <a class=" tooltipped" data-position="bottom" data-tooltip="Datos Generales" href="../c/project.php?m=execution&c=<?php echo $c; ?>"> <?php echo $dP11; ?> </a>
                        </li>
                    <?php } ?>
                    <?php 
                         if ($fa >= 12 ){ ?>
                        <li class="tab col  s2 l2 white" href="../c/project.php?m=execution&c=<?php echo $c; ?>">
                            <a class=" tooltipped" data-position="bottom" data-tooltip="Datos Generales" href="../c/project.php?m=execution&c=<?php echo $c; ?>"> <?php echo $dP12; ?> </a>
                        </li>
                    <?php } ?>
                    
                   
                                                        </ul>
                                                    </div> </div>
                     
                                <div class="row">
                                    <div class="col s12 m-t-10">
                                        
                                         <a href="#" class="waves-effect waves-light btn btn-block blue-grey darken-2 hoverable">
                    
                                            <span class="left">Estatus de Pruebas   </span>
                                          </a>
                                   
                                                                <div class="m-t-10"> </div>
                       
                                        <?php

                                        $status = mysqli_query(
                                            $connection, "
                                            SELECT * FROM projectexecutionanswer
                                            WHERE projectId = '" . $c . "'
                                        ");
                                            
                                        while ($r_status = $status -> fetch_object()) {

                                            $icon = "<div class='q-items m-t-10'><a href='../c/project.php?m=question&c=" . $c . "&p=e&i=" . $r_status -> projectIId . "'>";

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
                                            <div class="collapsible-header blue-grey lighten-5 blue-grey-text text-darken-2">
                                                <p>Pruebas de Controles</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header blue-grey-text text-darken-2">
                                                <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                Revisi&oacute;n de Controles por Ciclos Transaccionales
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($r_qExecution_1 = mysqli_fetch_array($qExecution_1)) {
                                                    if ($r_qExecution_1["itemArea"] == 1) {
                                                    $itemName = $r_qExecution_1["itemName"];
                                                    $itemId = $r_qExecution_1["itemId"];
                                                ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                                <?php echo $itemName; ?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=e&c=<?php echo $c; ?>&i=<?php echo $r_qExecution_1["itemId"]; ?>">
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
                                            <div class="collapsible-header blue-grey lighten-5 blue-grey-text text-darken-2">
                                                <p>Procedimientos Sustantivos</p>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="collapsible-header blue-grey-text text-darken-2">
                                                <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                Efectivo
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($eje1 = mysqli_fetch_array($_eje1)) {

                                                    $_name = mysqli_query($master, "
                                                        SELECT * FROM srubro
                                                        WHERE srubroId = '" . $eje1["srubroId"]  . "'
                                                    ");
                                                    $name = $_name -> fetch_object();

                                                    if ($eje1["designateId"] > 0) {
                                              
                                                ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                             <?php echo $name -> sRubroName;?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=e&c=<?php echo $c; ?>&i=<?php echo $eje1["srubroId"]; ?>">
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
                                              Cuentas por Cobrar
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($eje2 = mysqli_fetch_array($_eje2)) {

                                                    $_name = mysqli_query($master, "
                                                        SELECT * FROM srubro
                                                        WHERE srubroId = '" . $eje2["srubroId"]  . "'
                                                    ");
                                                    $name = $_name -> fetch_object();

                                                    if ($eje2["designateId"] > 0) {
                                              
                                                ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                             <?php echo $name -> sRubroName;?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=e&c=<?php echo $c; ?>&i=<?php echo $eje2["srubroId"]; ?>">
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
                                            Compa&ntilde;ias Relacionadas
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($eje3 = mysqli_fetch_array($_eje3)) {

                                                    $_name = mysqli_query($master, "
                                                        SELECT * FROM srubro
                                                        WHERE srubroId = '" . $eje3["srubroId"]  . "'
                                                    ");
                                                    $name = $_name -> fetch_object();

                                                    if ($eje3["designateId"] > 0) {
                                              
                                                ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                             <?php echo $name -> sRubroName;?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=e&c=<?php echo $c; ?>&i=<?php echo $eje3["srubroId"]; ?>">
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
                                       Inventarios
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($eje4 = mysqli_fetch_array($_eje4)) {

                                                    $_name = mysqli_query($master, "
                                                        SELECT * FROM srubro
                                                        WHERE srubroId = '" . $eje4["srubroId"]  . "'
                                                    ");
                                                    $name = $_name -> fetch_object();

                                                    if ($eje4["designateId"] > 0) {
                                              
                                                ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                             <?php echo $name -> sRubroName;?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=e&c=<?php echo $c; ?>&i=<?php echo $eje4["srubroId"]; ?>">
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
                                                Propiedades, Plantas y Equipos
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($r_qExecution_6 = mysqli_fetch_array($qExecution_6)) {
                                                    if ($r_qExecution_6["itemArea"] == 6) {
                                                    $itemName = $r_qExecution_6["itemName"];
                                                    $itemId = $r_qExecution_6["itemId"];
                                                ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                                <?php echo $itemName; ?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=e&c=<?php echo $c; ?>&i=<?php echo $r_qExecution_6["itemId"]; ?>">
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
                                                Gastos Pagados por Anticipado
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($r_qExecution_7 = mysqli_fetch_array($qExecution_7)) {
                                                    if ($r_qExecution_7["itemArea"] == 7) {
                                                    $itemName = $r_qExecution_7["itemName"];
                                                    $itemId = $r_qExecution_7["itemId"];
                                                ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                                <?php echo $itemName; ?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=e&c=<?php echo $c; ?>&i=<?php echo $r_qExecution_7["itemId"]; ?>">
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
                                                Inversiones
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($r_qExecution_8 = mysqli_fetch_array($qExecution_8)) {
                                                    if ($r_qExecution_8["itemArea"] == 8) {
                                                    $itemName = $r_qExecution_8["itemName"];
                                                    $itemId = $r_qExecution_8["itemId"];
                                                ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                                <?php echo $itemName; ?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=e&c=<?php echo $c; ?>&i=<?php echo $r_qExecution_8["itemId"]; ?>">
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
                                                Cuentas por Pagar
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($r_qExecution_9 = mysqli_fetch_array($qExecution_9)) {
                                                    if ($r_qExecution_9["itemArea"] == 9) {
                                                    $itemName = $r_qExecution_9["itemName"];
                                                    $itemId = $r_qExecution_9["itemId"];
                                                ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                                <?php echo $itemName; ?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=e&c=<?php echo $c; ?>&i=<?php echo $r_qExecution_9["itemId"]; ?>">
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
                                                Obligaciones Bancarias
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($r_qExecution_10 = mysqli_fetch_array($qExecution_10)) {
                                                    if ($r_qExecution_10["itemArea"] == 10) {
                                                    $itemName = $r_qExecution_10["itemName"];
                                                    $itemId = $r_qExecution_10["itemId"];
                                                ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                                <?php echo $itemName; ?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=e&c=<?php echo $c; ?>&i=<?php echo $r_qExecution_10["itemId"]; ?>">
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
                                                N&oacute;mina
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($r_qExecution_11 = mysqli_fetch_array($qExecution_11)) {
                                                    if ($r_qExecution_11["itemArea"] == 11) {
                                                    $itemName = $r_qExecution_11["itemName"];
                                                    $itemId = $r_qExecution_11["itemId"];
                                                ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                                <?php echo $itemName; ?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=e&c=<?php echo $c; ?>&i=<?php echo $r_qExecution_11["itemId"]; ?>">
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
                                                Gastos Acumulados
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($r_qExecution_12 = mysqli_fetch_array($qExecution_12)) {
                                                    if ($r_qExecution_12["itemArea"] == 12) {
                                                    $itemName = $r_qExecution_12["itemName"];
                                                    $itemId = $r_qExecution_12["itemId"];
                                                ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                                <?php echo $itemName; ?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=e&c=<?php echo $c; ?>&i=<?php echo $r_qExecution_12["itemId"]; ?>">
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
                                                Impuestos
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($r_qExecution_13 = mysqli_fetch_array($qExecution_13)) {
                                                    if ($r_qExecution_13["itemArea"] == 13) {
                                                    $itemName = $r_qExecution_13["itemName"];
                                                    $itemId = $r_qExecution_13["itemId"];
                                                ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                                <?php echo $itemName; ?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=e&c=<?php echo $c; ?>&i=<?php echo $r_qExecution_13["itemId"]; ?>">
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
                                                Patrimonio
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($r_qExecution_14 = mysqli_fetch_array($qExecution_14)) {
                                                    if ($r_qExecution_14["itemArea"] == 14) {
                                                    $itemName = $r_qExecution_14["itemName"];
                                                    $itemId = $r_qExecution_14["itemId"];
                                                ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                                <?php echo $itemName; ?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=e&c=<?php echo $c; ?>&i=<?php echo $r_qExecution_14["itemId"]; ?>">
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
                                                Ganancias y P&eacute;rdidas
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($r_qExecution_15 = mysqli_fetch_array($qExecution_15)) {
                                                    if ($r_qExecution_15["itemArea"] == 15) {
                                                    $itemName = $r_qExecution_15["itemName"];
                                                    $itemId = $r_qExecution_15["itemId"];
                                                ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                                <?php echo $itemName; ?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=e&c=<?php echo $c; ?>&i=<?php echo $r_qExecution_15["itemId"]; ?>">
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
                                                Otros Procedimientos
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php
                                                while ($r_qExecution_16 = mysqli_fetch_array($qExecution_16)) {
                                                    if ($r_qExecution_16["itemArea"] == 16) {
                                                    $itemName = $r_qExecution_16["itemName"];
                                                    $itemId = $r_qExecution_16["itemId"];
                                                ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="blue-grey lighten-2 white-text td-block">
                                                                <?php echo $itemName; ?>
                                                            </td>
                                                            <td class="center blue-grey lighten-3">
                                                                <a href="../c/project.php?m=question&p=e&c=<?php echo $c; ?>&i=<?php echo $r_qExecution_16["itemId"]; ?>">
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
                                    <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&iacute;n: 1.0.0</span>
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
<!-- funcion java para que funcionen los screenshot-->    
<script type="text/javascript" src="../js/shareholder.js"></script>
<script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-proyecto|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>
<!--final de funcion java para que funcionen los screenshot-->

<!-- modal leyenda -->
<?php include '../v/support/leyenda-st.php'; ?>