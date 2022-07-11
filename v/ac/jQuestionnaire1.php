<style>  .modal { width: 75% !important ; }</style>
<main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="../c/ac.php?m=index" class="breadcrumb hide-on-med-and-down">Aceptaci&oacute;n y Continuidad</a>
                
                    <a href="#help" class="tooltipped right m-r-10 modal-trigger" data-position="left" data-tooltip="Manual de Usuario">
                        <i class="material-icons blue-text">help</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons blue-text">forum</i>
                    </a>
                    <!-- boton leyenda -->
                    <a href="#help22" class="tooltipped right modal-trigger" data-position="left" data-tooltip="leyenda">
                        <i class="material-icons blue-text">local_offer</i>
                    </a>
                    <!-- fin boton leyenda -->

                    
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
                                    
                                    <a href="../c/ac.php?m=index" class="tooltipped right modal-trigger" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-text">cancel</i>
                                    </a>
                                    <a href="#ticket1" class="tooltipped right modal-trigger" data-position="left" data-tooltip="Ticket">
                                        <i class="material-icons blue-text">local_offer</i>
                                    </a>
                                     <a href="#help22" class="tooltipped right modal-trigger" data-position="left" data-tooltip="Leyenda">
                                        <i class="material-icons blue-text">local_library</i>
                                    </a>
                                     <a class="right tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                                    <a class="right tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen"><i class="material-icons green-text">file_download</i></a>
                                    <a class="right" id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                                    <!-- boton atras -->        
                                    <a href="javascript: history.go(-1);" class="tooltipped right blue-text" data-position="left" data-tooltip="Atr&aacute;s">
                                        <i class="material-icons blue-text">undo</i>
                                    </a>
                                    <!-- fin de boton atras -->                               
                               
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
                                                        <td><?php echo $service2 -> natureName; ?></td>
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

                                        $_item = mysqli_query($acq, "SELECT * FROM acq$acId ");

                                        while ($item = $_item -> fetch_object()) {
                                            
                                            $_status = mysqli_query($acq, "SELECT * FROM acr$acId WHERE acId = '" . $acId . "' AND acIId = '" . $item -> mId . "'");
                                            $status = $_status -> fetch_object();
                                            
                                            $status = $status -> statusId ;
                                            $risk = $item ->  risk;
                                            $_important = mysqli_query($acq, "SELECT * FROM acr$acId WHERE acId = '" . $acId . "' AND acIId = '" . $item -> mId . "' AND important = 1");
                                            $important = $_important -> fetch_object();

                                            switch ($status) {

                                                // En proceso
                                                case 1:
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped orange-text' data-position='top'>done</i></a></div>" : "<div class='q-items'><a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped orange-text' data-position='top'>done</i></a></div>"; break;
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
                                                        case 1: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>" :  "<div class='q-items'><a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>"; break;
                                                        case 2:
                                                        case 4: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>" : "<div class='q-items'><a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped green-text' data-position='top'>done</i></a></div>"; break;
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
                                                        default: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped red-text' data-position='top'>warning</i></a></div>" : "<div class='q-items'><a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped red-text' data-position='top'>warning</i></a></div>"; break;
                                                    }
                                                    break;
                                                 case 33:    
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo $icon = $important  == 1 ? "<div class='q-items b-b-blue'><a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped orange-text' data-position='top'>warning</i></a></div>" : "<div class='q-items'><a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped orange-text' data-position='top'>warning</i></a></div>"; break;
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
                                                        case 5: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i></a></div>" : "<div class='q-items'><a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i></a></div>"; break;
                                                        default:
                                                            if ($important  == 1) {
                                                                if ($_SESSION["userAdmin"] == 3) {
                                                                    echo "<div class='q-items b-b-red'><a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i></a></div>";
                                                                }
                                                                else {
                                                                    echo "";
                                                                }
                                                            }
                                                            else {
                                                                echo "<div class='q-items'><a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i></a></div>";
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
                                                        default: echo $icon = $important  == 1 ? "<div class='q-items b-b-red'><a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped black-text' data-position='top'>lock</i></a></div>" : "<div class='q-items'><a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'><i data-tooltip='{$item -> mId}' class='material-icons tooltipped black-text' data-position='top'>lock</i></a></div>"; break;
                                                    
                                                    }
                                                    break;

                                                default:
                                                    
                                                    switch ($r) {

                                                        // Segun el rol
                                                        case 1: echo "<div class='q-items'><a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$item -> mId}&risk={$risk}'>{$item -> mId}</a></div>"; break;
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
                                         <?php  include 'cac1.php' ?>  
                                        <li>  <?php // include 'cac2.php' ?>  </li>
                                        <li>  <?php // include 'cac3.php' ?>  </li>
                                        <li>  <?php // include 'cac4.php' ?>  </li>
                                        <li>  <?php // include 'cac5.php' ?>  </li>
                                        <li>  <?php // include 'cac6.php' ?>  </li>
                                        <li>  <?php // include 'cac7.php' ?>  </li>
                                        <li>  <?php // include 'cac8.php' ?>  </li>
                                        <li>  <?php // include 'cac9.php' ?>  </li>
                                        <li>  <?php // include 'cac10.php' ?>  </li>
                                    
                                    </ul>
                                    <ul class="m-l-25">
                                    </ul>
                                </div>
                            </div>
                            <?php } ?>
       
                            

<!-- inicio   -->  
<?php include '../v/ac/close.php'?>
<!-- emd -->
                      
                            
                            
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
<?php

// connection
include '../connection.php';

$_modal27 = mysqli_query($master, "
SELECT * FROM acmodal
WHERE acmodalId = 4
");
$modal = $_modal27 -> fetch_object();
?>

<div id="help" class="modal " >
            <div class="modal-header" style="background-color:#607d8b;">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        <h6><a href="#!" class="breadcrumb white-text">Guia </a>
                        <a href="#!" class="breadcrumb white-text ">Descripci&oacute;n del Cuestionario 1 de AC</a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        </a></h6>
                    </div>
                </div>
            </div>
      
            <div class="modal-content m-t--10">
                
                

                <p>
                <?php echo $modal -> acmodaltext1; ?>
                </p>
                <div class="m-t-20"></div>
         
            <a href="#!" class="modal-close btn blue waves-light tooltipped " style="margin-right:5px;" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">play_arrow</i>
         </a>
         <a href="#!" class="modal-close btn red waves-light tooltipped " data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
         </a>
        
            </div>

    <div class="modal-footer">
      
     <div class="row">
                                <div class="col s12 m-t--10 ">
                                    <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                </div>
  </div>
    </div>
    <div class="m-t--20"></div>
        </div>
    <?php include '../v/support/modalAdd.php'; ?>
     <?php include '../v/support/leyenda.php'; ?>
      <?php include '../v/support/ticket.php'; ?>
       <script type="text/javascript" src="../js/shareholder.js"></script>
    <script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-ac|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>
 