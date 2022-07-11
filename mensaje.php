<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>SAGRA GP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <!-- CSS -->
    <link type="text/css" href="css/materialize.css" rel="stylesheet" media="screen,projection"/>
    <link href="css/https:_cdn.datatables.net_1.10.19_css_jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/https:_cdn.datatables.net_buttons_1.5.6_css_buttons.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/https:_cdn.datatables.net_responsive_2.2.3_css_responsive.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link type="text/css" href="css/jansen.css" rel="stylesheet"/>
    <link type="text/css" href="css/datatables.css" rel="stylesheet"/>
    
    <!-- JS -->
    <script src="js/https:_cdnjs.cloudflare.com_ajax_libs_jquery_3.4.1_jquery.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/html2canvas.js"></script>
    <script src="js/https:_cdnjs.cloudflare.com_ajax_libs_jquery_3.4.1_jquery.js" type="text/javascript"></script>
    <script src="js/https:_cdnjs.cloudflare.com_ajax_libs_jszip_2.5.0_jszip.min.js" type="text/javascript"></script>
    <script src="js/https:_cdnjs.cloudflare.com_ajax_libs_pdfmake_0.1.36_pdfmake.min.js" type="text/javascript"></script>
    <script src="js/https:_cdnjs.cloudflare.com_ajax_libs_pdfmake_0.1.36_vfs_fonts.js" type="text/javascript"></script>
    <script src="js/https:_cdn.datatables.net_1.10.18_js_jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="js/https:_cdn.datatables.net_buttons_1.5.6_js_dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="js/https:_cdn.datatables.net_buttons_1.5.6_js_buttons.colVis.min.js" type="text/javascript"></script>
    <script src="js/https:_cdn.datatables.net_buttons_1.5.6_js_buttons.flash.min.js" type="text/javascript"></script>
    <script src="js/https:_cdn.datatables.net_buttons_1.5.6_js_buttons.html5.min.js" type="text/javascript"></script>
    <script src="js/https:_cdn.datatables.net_buttons_1.5.6_js_buttons.print.min.js" type="text/javascript"></script>
    <script src="js/https:_cdn.datatables.net_responsive_2.2.2_js_dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="plugins/ckeditor/ckeditor.js"></script>
    <!-- JS
    -->

</head>





<body class="ubuntu blue-grey lighten-4 font-13">

    <header>

        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper blue-grey darken-1">
                    <div class="row">
                        <div class="col s12">
                            <a href="#" data-target="sidenav-1" class="left sidenav-trigger hide-on-medium-and-up"><i class="material-icons">menu</i></a>
                            <a href="#" data-target="sidenav-2" class="right sidenav-trigger show-on-medium-and-up"><i class="material-icons">menu</i></a>
                            <div class="brand-logo">
                                <img class="responsive-img" src="images/logoG.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div id="sidenav-1" class="sidenav sidenav-fixed blue-grey darken-1">
            <div class="center">
                <div class="p-t-30">  
                    <a href="../c/main.php?m=menu">
                        <i class="material-icons">home</i>
                        <p>Inicio</p>
                    </a>
                </div>
                <div class="p-t-15">
                    <a href="javascript: void(0)">
                        <i class="material-icons">build</i>
                        <p>Soporte IT</p>
                    </a>
                </div>
               
            </div>
        </div>

        <ul id="sidenav-2" class="sidenav sidenav-2 blue-grey darken-1">
            <div class="p-l-20 p-t-10 p-r-20 p-b-20">
                <a href="../logOut.php" class="waves-effect waves-light btn btn-block blue-grey btn-small">
                    <i class="material-icons left">close</i>
                    Cerrar Sesi&oacute;n
                </a>
                <a href="javascript: void(0)" class="waves-effect waves-light btn btn-block blue-grey btn-small m-b-5">
                    <i class="material-icons left">people</i>
                    Mi perfil
                </a>
                <div class="divider"></div>
         
                <div class="white-text font-15 m-t-10 p-b-10">
                    <div class="m-t-10 ">
                        <span class="blue-grey-text text-lighten-2">Suscriptor:</span><br />
                        <span>
               
                        </span>
                    </div>
                    <div class="m-t-10">
                        <span class="blue-grey-text text-lighten-2">Tipo de Suscripci&oacute;n:</span><br />
                        
                    </div>
                    <div class="m-t-10">
                        <span class="blue-grey-text text-lighten-2">Fecha de Inicio:</span><br />
                    
                    </div>
                    <div class="m-t-10">
                        <span class="blue-grey-text text-lighten-2">Fecha de Vencimiento:</span><br />
                 
                    </div>
                    <div class="m-t-10">
                        <span class="blue-grey-text text-lighten-2">D&iacute;as Disponibles:</span><br />
                     
                       
                    </div>
                </div>
                <div class="divider"></div>
                <div class="white-text font-15 m-t-10 p-b-10">
                    <div class="m-t-10">
                        <span>SagraGP</span><br />
                        <span>Edificio Arquitect&oacute;nico Torre H, Piso 1, Oficina 1-4</span><br />
                        <span>Valencia, Estado Carabobo</span><br />
                        <span>Venezuela</span><br />
                        <span>Tel&eacute;fonos:</span><br />
                        <span>+ 58 241 824-4631</span>
                    </div>
                </div>
      
            </div>
        </ul>

        <div id="appContainer">
            <div class="progress">
                <div class="blue darken-2 indeterminate"></div>
            </div>
        </div>

    </header>

<?php


$sM = "localhost";
$uM = "sagracom";
$pM = "Sagra2019";
$dM = 'sagracom_alberto';

$master = new mysqli($sM, $uM, $pM, $dM);



$_planes= mysqli_query($master, "
    SELECT * FROM plan
    WHERE planStatus > 0
");
$_plan = mysqli_query($master, "
    SELECT * FROM plan
    WHERE planStatus > 0
");

?>









    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Mensaje</a>
                    <a href="#!" class="breadcrumb ">Lista</a>
                    <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                        <i class="material-icons blue-text">help</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons blue-text">forum</i>
                    </a>
                    <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                      
                    </span>
                </div>
            </div>

            <div class="row">
                
                <div class="col s12 m12 l12 m-t-5">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="blue-text p-l-10">Mensaje</span>
                                    <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar"><i class="material-icons blue-grey-text">cancel</i></a>
                         
                                </div>
                            </div>
                            <div class="card m-t-10 m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                        <p>        
                                        Saludos Cordiales.<br>
                                        Su Solicitud ha sido recibida y su numero de Id es el <?php echo $_GET["id"] ?> Nos comunicaremos lo mas pronto posible al correo que nos suministro 
                                        </p>
                      
                                          
                                          
                                          
                                        </div>
                                    </div>
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
                </div>
            </div>

        </div>

    </main>

    <div id="help" class="modal center">
        <div class="modal-content">
            <p class="left">Aceptaci贸n y Continuidad</p>
        </div>
        <div class="modal-footer m-t--20 m-b-10">
            <button class="modal-close waves-effect waves-light btn blue">Cerrar</button>
        </div>
    </div>





















    <footer>

        <!-- Materialize -->
        <script type="text/javascript" src="js/materialize.js"></script>

        <!-- Custom -->
        <script type="text/javascript" src="js/jansen.js"></script>
        <script type="text/javascript" src="js/datatables.js"></script>

    </footer>

    <!-- 2020 - copyright - sagragp - dev: juanjansen01@gmail.com -->

</body>
</html>
