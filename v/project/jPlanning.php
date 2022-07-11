<main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="../c/project.php?m=index" class="breadcrumb hide-on-med-and-down">Proyectos</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Planificaci&oacute;n</a>
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
                    <a href="../c/project.php?m=planning&c=<?php echo $c; ?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>" class="waves-effect waves-light btn btn-block blue-grey darken-2 hoverable">
                        <i class="material-icons blue-text left">extension</i>
                        <span class="left">PLANIFICACI&Oacute;N</span>
                    </a>
                </div>
                <div class="col s12 m6 l3">
                    <a href="../c/project.php?m=strategy&c=<?php echo $c; ?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>" class="waves-effect waves-light btn btn-block blue-grey lighten-1 hoverable">
                        <i class="material-icons blue-grey-text text-darken-2 left">extension</i>
                        <span class="blue-grey-text text-lighten-4 left">ESTRATEGIA</span>
                    </a>
                </div>
                <div class="col s12 m6 l3">
                    <a href="../c/project.php?m=execution&c=<?php echo $c; ?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>" class="waves-effect waves-light btn btn-block blue-grey lighten-1 hoverable">
                        <i class="material-icons blue-grey-text text-darken-2 left">extension</i>
                        <span class="blue-grey-text text-lighten-4 left">EJECUCI&Oacute;N</span>
                    </a>
                </div>
                <div class="col s12 m6 l3">
                    <a href="../c/project.php?m=conclusion&c=<?php echo $c; ?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>" class="waves-effect waves-light btn btn-block blue-grey lighten-1 hoverable">
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

                                    <span class="p-l-10">Cliente: <?php echo $client -> clientName; ?></span><br/>
                                </div>
                            </div>
<!-- funcion para tomar captura se utiliza antes del card  -->        
              <div id="main">
                 <div id="screenshot">
<!--  end funcion para tomar captura -->                                
                            
                            <div class="m-l-10">
                                <div class="row">
                                    <div class="col s12 m6 l6 m-t--5 m-b-10">
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
                                    <div class="col s12 m6 l6 m-t--5 m-b-10">
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
                                        $rcontador = 1;
                                        $status = mysqli_query($pquest, "SELECT * FROM permisos$vv WHERE userId = '" . $_SESSION["userId"] . "' and role != 0  and etapaId = 1");

                                        while ($r_status = $status -> fetch_object()) {
                                            
                                        if($r_status -> role == 1){
                                            $icon = "<div class='q-items' style='background-color:#a5d6a7;'>";
                                            
                                            $_re = mysqli_query($pquest, "SELECT * FROM repuesta$vv WHERE amId = '" . $r_status -> amId. "'");
                                            $re = $_re -> fetch_object();
                                            
                                         if ($re -> statusId == NULL) {
                                                $icon.="<a href='../c/project.php?m=ccreate&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'>".$rcontador++;
                                            }
                                            elseif ($re -> statusId == 1) {
                                                $icon.= "<a href='../c/project.php?m=edit&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> amId}' class='material-icons tooltipped orange-text' data-position='top'>done</i>";
                                                $rcontador++;
                                                
                                            }
                                            elseif ($re -> statusId == 2) {
                                                $icon.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> amId}' class='material-icons tooltipped green-text' data-position='top'>done</i>";
                                                $rcontador++;
                                                
                                            }
                                            elseif ($re -> statusId == 3) {
                                                $icon.= "<a href='../c/project.php?m=edit&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> amId}' class='material-icons tooltipped red-text' data-position='top'>warning</i>";
                                                $rcontador++;
                                            }
                                            elseif ($re -> statusId == 4) {
                                                $icon.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i>";
                                                $rcontador++;
                                                
                                            }
                                            elseif ($re -> statusId == 5) {
                                                $icon.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped black-text' data-position='top'>lock</i>";
                                                $rcontador++;
                                                
                                            }
                                        
                                         $icon.= "</a></div>";
                                        echo $icon;
                                        
                                            }
                                            
                                            
                                        if($r_status -> role == 2){
                                            $icon2 = "<div class='q-items' style='background-color:#b2ebf2 ;'>";
                                              
                                            $_re = mysqli_query($pquest, "SELECT * FROM repuesta$vv WHERE amId = '" . $r_status -> amId. "'");
                                            $re = $_re -> fetch_object();
                                            
                                         if ($re -> statusId == NULL) {
                                                $icon2.="<a href='javascript:void(0)'>".$rcontador++;
                                            }
                                            elseif ($re -> statusId == 1) {
                                                $icon2.= "<a href='javascript:void(0)' class='material-icons tooltipped orange-text' data-position='top'>done</i>";
                                                $rcontador++;
                                            }
                                            elseif ($re -> statusId == 2) {
                                                $icon2.= "<a href='../c/project.php?m=redit&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> amId}' class='material-icons tooltipped green-text' data-position='top'>done</i>";
                                                $rcontador++;
                                            }
                                            elseif ($re -> statusId == 3) {
                                                $icon2.= "<a href='javascript:void(0)'><i data-tooltip='{$r_status -> amId}' class='material-icons tooltipped red-text' data-position='top'>warning</i>";
                                                $rcontador++;
                                                
                                            }
                                            elseif ($re -> statusId == 4) {
                                                $icon2.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i>";
                                                $rcontador++;
                                            }
                                            elseif ($re -> statusId == 5) {
                                                $icon2.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped black-text' data-position='top'>lock</i>";
                                                $rcontador++;
                                                
                                            }
                                        
                                         $icon2.= "</a></div>";
                                        echo $icon2;
                                            
                                      
                                            
                                            }
                                            
                                        if($r_status -> role == 3){
                                            $icon3 = "<div class='q-items'>";
                                            
                                            $_re = mysqli_query($pquest, "SELECT * FROM repuesta$vv WHERE amId = '" . $r_status -> amId. "'");
                                            $re = $_re -> fetch_object();
                                            
                                         if ($re -> statusId == NULL) {
                                                $icon3.="<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'>".$rcontador++;
                                                $rcontador++;
                                             
                                         }
                                            elseif ($re -> statusId == 1) {
                                                $icon3.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> amId}' class='material-icons tooltipped orange-text' data-position='top'>done</i>";
                                                $rcontador++;
                                                
                                            }
                                            elseif ($re -> statusId == 2) {
                                                $icon3.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> amId}' class='material-icons tooltipped green-text' data-position='top'>done</i>";
                                            $rcontador++;
                                                
                                            }
                                            elseif ($re -> statusId == 3) {
                                                $icon3.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> amId}' class='material-icons tooltipped red-text' data-position='top'>warning</i>";
                                            $rcontador++;
                                                
                                            }
                                            elseif ($re -> statusId == 4) {
                                                $icon3.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i>";
                                            $rcontador++;
                                                
                                            }
                                            elseif ($re -> statusId == 5) {
                                                $icon3.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped black-text' data-position='top'>lock</i>";
                                            $rcontador++;
                                                
                                            }
                                        
                                         $icon3.= "</a></div>";
                                        echo $icon3;
                                            
                                            
                                            
                                            }
                                            
                                           
                                            
                                            
                                           
                                            
                                            
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col s12 m-t-10">
                                    <ul class="collapsible m-l-10 m-r-10">
                                        
                                        
                                        
                                        
                                        
                                        
                                    <?php include '../v/project/pq.php'?>    
                                        
                                        
                                        
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m-t-10">
                                    <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- funcion para tomar captura se usa donde cierra el card -->        
                </div>
            </div>
<!--  end funcion para tomar captura -->
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
<?php include '../v/support/leyenda-st.php'; ?>