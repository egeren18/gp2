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


$_country = mysqli_query($master, "
    SELECT * FROM country
    WHERE countryStatus = 1
    ORDER BY countryName
");

// select

$_subscription = mysqli_query($master, "
    SELECT * FROM subscription
    WHERE subscriptionStatus = 1
    ORDER BY subscriptionName
");

// select

$_module = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleType = 3
    AND moduleController IS NOT NULL
    ORDER BY moduleName ASC
");

// select

$_moduleNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 3
");

// select

$_audit = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleType = 4
    AND moduleController IS NOT NULL
    ORDER BY moduleName ASC
");

// select

$_auditNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 4
");

// select

$_administration = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleType = 5
    AND moduleController IS NOT NULL
    ORDER BY moduleName ASC
");

// select

$_administrationNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 5
");

// select

$_rrhh = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleType = 6
    AND moduleController IS NOT NULL
    ORDER BY moduleName ASC
");

// select

$_rrhhNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 6
");

// select

$_support = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleType = 7
    AND moduleController IS NOT NULL
    ORDER BY moduleName ASC
");

// select

$_supportNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 7
");

// select

$_net = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleType = 8
    AND moduleController IS NOT NULL
    ORDER BY moduleName ASC
");

// select

$_netNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 8
");


?>






<main>

<div class="container">

<div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down"> Formulario Suscriptores</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">A&ntilde;adir</a>
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

    <form id="form_validation" action="create.php" enctype="multipart/form-data" onsubmit="return checkForm(this);" method="post">
        <div class="row">
            <div class="col s12 m12 l12 m-t-5">
                <div class="card blue-grey lighten-5 hoverable">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                            <span class="breadcrumb  p-l-10">Formulario Suscriptores</span>
                            <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Men&uacute de Inicio">
                                <i class="material-icons blue-grey-text">cancel</i>
                            </a>
                            <a href="javascript: history.go(-1);" class="tooltipped right m-l-5" data-position="left" data-tooltip="Atr&aacute;s">
                                <i class="material-icons blue-grey-text">undo</i>
                            </a>
                            </div>
                        </div>

                        <div class="card m-t-10 m-l-5 m-r-5">
                            <div class="card p-t-20 p-b-15 p-l-20 p-r-20">
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Datos Generales</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="p-t-20"></div>

                                            <div class="row">
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="subscriberName" name="subscriberName" placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberName">Nombre &oacute; Raz&oacute;n Social</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="subscriberRif" name="subscriberRif" placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberRif">R.I.F</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="subscriberPhone1" name="subscriberPhone1" placeholder="" type="number" class="validate" required>
                                                            <label for="subscriberPhone1">Tel&eacute;fono 1</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="subscriberPhone2" name="subscriberPhone2" placeholder="" type="number" class="validate" required>
                                                            <label for="subscriberPhone2">Tel&eacute;fono 2</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                </div>


                                        </div>


                                    </li>
                                    <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Persona Contacto</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="p-t-15"></div>
                                         
                                            <div class="row">
                                                    <div class="col s12 m6 l4">
                                                        <div class="input-field">
                                                            <input id="subscriberContactName" name="subscriberContactName" placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberContactName">Nombres</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l4">
                                                        <div class="input-field">
                                                            <input id="subscriberContactSurname" name="subscriberContactSurname" placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberContactSurname">Apellidos</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l4">
                                                        <div class="input-field">
                                                            <input id="subscriberContactEmail" name="subscriberContactEmail" placeholder="" type="email" class="validate" required>
                                                            <label for="subscriberContactEmail">Correo Electr&oacute;nico</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Ubicaci&oacute;n</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="field_wrapper m-t-20">
                                            <div class="row">
                                                    <div class="col s12">
                                                        <div class="input-field">
                                                            <input id="subscriberAddress" name="subscriberAddress" placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberAddress">Direcci&oacute;n Fiscal</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                            <input id="subscriberCity" name="subscriberCity" placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberCity">Ciudad</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                            <input id="subscriberState" name="subscriberState" placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberState">Estado</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                      <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                            <select id="countryId" name="countryId" placeholder="" type="text" class="validate" required>
                                                                <option value="">&nbsp;</option>
                                                                <?php while ($country = $_country -> fetch_object()) { ?>
                                                                <option value="<?php echo $country -> countryId; ?>"><?php echo $country -> countryName; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <label class="font-13" for="countryId">Pa&iacute;s</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                            <input id="subscriberZipCode" name="subscriberZipCode" placeholder="" type="number" class="validate" required>
                                                            <label for="subscriberZipCode">Zona Postal</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="col s12 m6 l4">
                                                        <div class="input-field">
                                                            <input id="subscriberWebPage" name="subscriberWebPage" placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberWebPage">P&aacute;gina Web</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                       </div>



                                    </li>
                                    <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Suscripci&oacute;n</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="field_wrapper m-t-20">

                                                 <div class="row">
                                                        
                                                    <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                               <select id="subscriberUsers" name="subscriberUsers" placeholder="" type="text" class="validate" required>
                                                                  <option value="3">3</option>
                                                                  <option value="4">4</option>
                                                                  <option value="5">5</option>
                                                                  <option value="3">6</option>
                                                                  <option value="4">7</option>
                                                                  <option value="5">8</option>
                                                                  <option value="4">9</option>
                                                                  <option value="5">10</option>
                                                              </select>
                                                            <label class="font-13" for="subscriberUsers">No. de Usuarios</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                 
                                                    <div class="col s12 m6 l4">
                                                        <div class="input-field"> 
                                                            <select id="subscriptionId" name="subscriptionId" placeholder="" type="text" class="validate" required>
                                                                <option value="">&nbsp;</option>
                                                                <?php while ($subscription = $_subscription -> fetch_object()) { ?>
                                                                <option value="<?php echo $subscription -> subscriptionId; ?>"><?php echo $subscription -> subscriptionName; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <label class="font-13" for="subscriptionId">Tiempo de Suscripci&oacute;n</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div> 
                                                    <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                               <select id="subscriberUsers" name="subscriberUsers" placeholder="" type="text" class="validate" required>
                                                                  <option value="3">3</option>
                                                                  <option value="4">4</option>
                                                                  <option value="5">5</option>
                                                                  <option value="3">6</option>
                                                                  <option value="4">7</option>
                                                                  <option value="5">8</option>
                                                                  <option value="4">9</option>
                                                                  <option value="5">10</option>
                                                              </select>
                                                            <label class="font-13" for="subscriberUsers">Tipo de Suscripcion</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                     <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                            <input id="subscriberWebPage" name="subscriberWebPage" value="100" placeholder="" type="text" class="validate" required>
                                                            <label for="subscriberWebPage">Costo</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                                                                        
                                                 </div>
                                            </div>

                                       </div>



                                    </li>
    <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Usuario Principal </span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="field_wrapper m-t-20">
                                                 <div class="row">
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srName" name="srupName" placeholder="" type="text" class="validate" required>
                                                                    <label for="srName">Nombres</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srLastName" name="srLastName" placeholder="" type="text" class="validate" required>
                                                                    <label for="srLastName">Apellidos</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srMail" name="srMail" placeholder="" type="email" class="validate" required>
                                                                    <label for="srMail">Correo Electr&oacute;nico</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srclave" name="srclave" placeholder=""  type="password" class="validate" required> 
                                                                    <label for="srclave">clave</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srclave2" name="srclave2" placeholder=""  type="password" class="validate" required>
                                                                    <label for="srclave2">Confirmar clave</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srcolor" name="srcolor" placeholder="" type="text" class="validate" required>
                                                                    <label for="srcolor"> Color Favorito</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                    
                                                    
                                                    
                                                 </div>
                                            </div>
                                       </div>



                                    </li>
                                    <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Socio Riesgo </span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="field_wrapper m-t-20">
                                                 <div class="row">
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srName" name="srupName" placeholder="" type="text" class="validate" required>
                                                                    <label for="srName">Nombres</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srLastName" name="srLastName" placeholder="" type="text" class="validate" required>
                                                                    <label for="srLastName">Apellidos</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srMail" name="srMail" placeholder="" type="email" class="validate" required>
                                                                    <label for="srMail">Correo Electr&oacute;nico</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srclave" name="srclave" placeholder=""  type="password" class="validate" required> 
                                                                    <label for="srclave">clave</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srclave2" name="srclave2" placeholder=""  type="password" class="validate" required>
                                                                    <label for="srclave2">Confirmar clave</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srcolor" name="srcolor" placeholder="" type="text" class="validate" required>
                                                                    <label for="srcolor"> Color Favorito</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                    
                                                    
                                                    
                                                 </div>
                                            </div>
                                       </div>



                                    </li>
                                    <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Usuarios Estandar</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="field_wrapper m-t-20">
                                                 <div class="row">
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srName" name="srupName" placeholder="" type="text" class="validate" required>
                                                                    <label for="srName">Nombres</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srLastName" name="srLastName" placeholder="" type="text" class="validate" required>
                                                                    <label for="srLastName">Apellidos</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srMail" name="srMail" placeholder="" type="email" class="validate" required>
                                                                    <label for="srMail">Correo Electr&oacute;nico</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srclave" name="srclave" placeholder=""  type="password" class="validate" required> 
                                                                    <label for="srclave">clave</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srclave2" name="srclave2" placeholder=""  type="password" class="validate" required>
                                                                    <label for="srclave2">Confirmar clave</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srcolor" name="srcolor" placeholder="" type="text" class="validate" required>
                                                                    <label for="srcolor"> Color Favorito</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                    
                                                    
                                                    
                                                 </div>
                                            </div>
                                       </div>



                                    </li>
                                    <li>
                                        <div class="collapsible-header">
                                            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                            <span class="blue-grey-text text-darken-2">Pago</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="field_wrapper m-t-20">
                                            <div class="row">
                                                 <div class="col s12 m6 l3">
                                                        <div class="input-field">
                                                               <select id="subscriberUsers" name="subscriberUsers" placeholder="" type="text" class="validate" required>
                                                                  <option value="3">Deposito/Tranferencia VEF</option>
                                                                  <option value="4">Paypal</option>
                                                                  <option value="5">Paypal & Tarjeta de Cr&eacute;dito/debito </option>
                                                                  <option value="3">Zelle</option>
                                                                  <option value="4">Efectivo USD ($)</option>
                                                                  <option value="5">Reserve</option>
                                                                  <option value="4">Deposito Transferencia Bancaria Panama ($)</option>
                                                                  
                                                              </select>
                                                            <label class="font-13" for="subscriberUsers">Cuenta</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                            <input id="pagoName" name="pagoName" placeholder="" type="text" class="validate" required>
                                                            <label for="pagoName">Referencia de Pago</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                            <input id="refPago" name="refPago" placeholder="" type="text" class="validate" required>
                                                            <label for="refPago">Monto</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m4 l2">
                                                                <div class="input-field">
                                                                    <input id="dateP4" name="dateP4" placeholder="<?php echo $dP4 ; ?>" value="<?php echo $dP4 ; ?>" type="text" class="datepicker validate">
                                                                    <label for="dateP4">Fecha </label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div></div>
                                                   
                                                   <div class="col s12 m6 l3">
                                                        <div class="file-field input-field">
                                                            <div class="btn white ">
                                                                <i class="material-icons blue-text">attach_file</i>
                                                                <input class="blue" type="file" accept="image/*"  id="archivo2[]" name="archivo2[]">
                                                            </div>
                                                            <div class="file-path-wrapper">
                                                                <input class="file-path validate" type="text" placeholder="Adjuntar im&aacute;gen o capture!">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                       </div>



                                    </li>

                                </ul>
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
                                        <a href="../c/client.php?m=index" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                            <i class="material-icons">cancel</i>
                                        </a>
                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                            <i class="material-icons">save</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m-t-15">
                                <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

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



<script type="text/javascript" src="../js/shareholder.js"></script>














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
