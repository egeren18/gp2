    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Usuarios</a>
                    <a href="#!" class="breadcrumb ">Modificar</a>
                    <a href="#helpx" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
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
                                    <span class="breadcrumb  p-l-10">Modificar</span>
                                    <a href="javascript: history.go(-1)" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                       <a class="right m-r-5 tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                                        <a class="right m-r-5 tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen"><i class="material-icons green-text">file_download</i></a>
                                        <a class="right m-r-5" id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                                </div>
                            </div>
                    <div id="main">
                        <div id="screenshot">
                            <div class="card m-t-10 m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="m-t-20 m-b-20 m-l-20 m-r-20">
                                            <form id="form_validation" action="../c/myUser.php?m=updateDb&id=<?php echo $_GET["id"]; ?>" method="post">
                                                <div class="row">
                                                    <div class="col s12">
                                                        <div class="row">
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input value="<?php echo $user -> userName . " " . $user -> userSurname; ?>" id="userName" type="text" disabled="">
                                                                    <label for="userName">Nombres</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l4">
                                                                <div class="input-field">
                                                                    <input value="<?php echo $user -> userEmail; ?>" id="userEmail" type="email" disabled="">
                                                                    <label for="userEmail">Correo Electr&oacute;nico</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php if ($user -> userAdmin == 3) { ?>
                                                        <div class="row">
                                                            <div class="col s12 m-t--20">
                                                                <div class="card-content blue-grey lighten-5">
                                                                    <span class="valign-wrapper">
                                                                        <i class="material-icons blue-text">info</i>
                                                                        <span class="m-l-10 blue-grey-text text-darken-2">Los datos del Socio de Riesgo no son editables desde &eacute;sta vista!</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <?php if ($user -> userAdmin <= 2) { ?>
                                                <div class="row">
                                                    <div class="col s12 m-t--20 m-b-30">
                                                        <p class="font-14 grey-text">Tipo de Usuario</p>
                                                        <div class="m-t-20">
                                                            <p>
                                                                <label>
                                                                    <input <?php echo $checked = $user -> userAdmin == 1 ? 'checked' : ''; ?> name="userAdmin" type="radio" value="1" required=""/>
                                                                    <span>Est&aacute;ndar</span>
                                                                </label>
                                                            </p>
                                                            <p>
                                                                <label>
                                                                    <input <?php echo $checked = $user -> userAdmin == 2 ? 'checked' : ''; ?> name="userAdmin" type="radio" value="2" required=""/>
                                                                    <span>Admin</span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12 m-t--10">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12 m-t-30">
                                                        <a href="javascript: history.go(-1)" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                            <i class="material-icons">close</i>
                                                        </a>
                                                        <button id="vUser" type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar Cambios">
                                                            <i class="material-icons">save</i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </form>
                                        </div>
                                    </div>
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
<?php

// connection
include '../connection.php';

$_modal24 = mysqli_query($master, "
SELECT * FROM cmodal
WHERE moduleId = 24
");
$modal = $_modal24 -> fetch_object();
?>

<div id="helpx" class="modal ">
            <div class="modal-header" style="background-color:#607d8b;">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        <h6><a href="#!" class="breadcrumb white-text">Guia </a>
                        <a href="#!" class="breadcrumb white-text ">Descripci&oacute;n del M&oacute;dulo de <?php echo $modal -> moduleName; ?></a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        </a></h6>
                    </div>
                </div>
            </div>
      
            <div class="modal-content m-t--10">
                
                

                <p>
            <?php echo $modal -> moduleTest2; ?>
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

    <?php include '../v/main/modalS.php'; ?>
    <?php include '../v/support/modalAdd.php'; ?>

    <script src="../plugins/jansen.js" type="text/javascript"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-usuario-suscriptor|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>