    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Aceptación y Continuidad</a>
                    <a href="#!" class="breadcrumb ">Añadir</a>
                    <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                        <i class="material-icons blue-text">help</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons blue-text">forum</i>
                    </a>
                    <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                        <?php echo $_SESSION["userFullName"]; ?>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12 m-t-5">
                    
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="blue-text p-l-10">Equipo de Trabajo</span>
                                    <a href="../c/ac.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
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
                                <div class="p-l-20 p-t-20 p-r-20 p-b-20">
                                    <div class="row">
                                        <div class="col s12 m6 m-b-10">
                                            <table class="blue-grey lighten-5">
                                                <tr>
                                                    <td>Cliente:</td>
                                                    <td><?php echo $ac -> clientName; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Proyecto:</td>
                                                    <td><?php echo $service -> serviceName; ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m-t-20">
                                            <ul class="collection">
                                                <li class="collection-item blue-grey lighten-5">
                                                    <p>A continuación, seleccione los integrantes del Equipo de Trabajo para &eacute;sta AC.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <form id="form_validation" action="../c/ac.php?m=teamCreate&aid=<?php echo $acId; ?>" method="post">
                                        <div class="row">
                                            <div class="col s12 m6 m-t-20">
                                                <div class="input-field">
                                                    <label class="active" for="userId">Integrante</label>
                                                    <select id="userId" name="userId" type="text" class="validate" required="">
                                                        <option value="">&nbsp;</option>
                                                        <?php
                                                        
                                                        while ($user = $_user -> fetch_object()) {
                                                            
                                                            /*
                                                             * Incluye y evalúa el archivo especificado.
                                                             */

                                                            include '../connection.php';
                                                            
                                                            /*
                                                             * Realiza una consulta a la base de datos.
                                                             */

                                                            $_verify = mysqli_query($connection, "SELECT * FROM acteam WHERE userId = '" . $user -> userId . "' AND acId = '" . $_GET["aid"] . "'");
                                                            $verify = $_verify -> fetch_object();

                                                            if (!$verify) {
                                                                
                                                        ?>
                                                        <option value="<?php echo $user -> userId; ?>"><?php echo $user -> userName . " " . $user -> userSurname ; ?></option>
                                                        <?php }} ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12 m5 m-t-20">
                                                <div class="input-field">
                                                    <label class="active" for="designatedId">Rol en la A&C</label>
                                                    <select id="designatedId" name="designatedId" type="text" >
                                                        <option value="">&nbsp;</option>
                                                        <?php while ($designated = $_designated -> fetch_object()) { ?>
                                                        <option value="<?php echo $designated -> designatedId; ?>"><?php echo $designated -> designatedName; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12 m1 m-t-30">
                                                <button type="submit" class="btn blue waves-effect tooltipped" data-position="left" data-tooltip="Guardar" <?php echo $permission = $_SESSION["userAdmin"] == 2 ? "" : "disabled"; ?>>
                                                    <i class="material-icons">save</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col s12 m-t-20 m-b-10">
                                            <table class="white">
                                                <thead>
                                                    <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                                        <td id="border-white" class="center">Integrantes</td>
                                                        <td id="border-white" class="center">Rol en A&C</td>
                                                        <td id="border-white" width="10%"></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    while ($team = $_team -> fetch_object()) {
                                                        
                                                        /*
                                                         * Incluye y evalúa el archivo especificado.
                                                         */

                                                        include '../connection.php';
                                                        
                                                        /*
                                                         * Realiza una consulta a la base de datos.
                                                         */

                                                        $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $team -> userId . "'");
                                                        $user = $_user -> fetch_object();
                                                        
                                                        /*
                                                         * Realiza una consulta a la base de datos.
                                                         */

                                                        $_designated = mysqli_query($master, "SELECT * FROM designated WHERE designatedId = '" . $team -> designatedId . "'");
                                                        $designated = $_designated -> fetch_object();
                                                        
                                                    ?>
                                                    <tr>
                                                        <td id="border-grey"><?php echo $user -> userName . " " . $user -> userSurname; ?></td>
                                                        <td id="border-grey"><?php echo $designated -> designatedName; ?></td>
                                                        <td id="border-grey" class="center">
                                                            <?php echo $permission = $_SESSION["userAdmin"] == 2 ? "<a href='../c/ac.php?m=teamDelete&aid={$team -> acId}&u={$team -> acTeamId}' class='tooltipped m-r-5' data-position='left' data-tooltip='Eliminar'><i class='material-icons red-text'>delete</i></a>" : "<i class='material-icons grey-text'>delete</i>"; ?>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
                    
                </div>
            </div>
        </div>
    </main>

    <?php include '../v/support/modalAdd.php';
    // connection
include '../connection.php';

$_modal = mysqli_query($master, "
SELECT * FROM acmodal
WHERE acmodalId = 9
");
$modal = $_modal -> fetch_object();
?>
<style>.modal { width: 75% !important ; }</style>
<div id="help" class="modal ">
       <div class="modal-header" style="background-color:#607d8b;">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        <h6><a href="#!" class="breadcrumb white-text">Guia </a>
                        <a href="#!" class="breadcrumb white-text ">AC Equipo de Trabajo</a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        </a></h6>
                    </div>
                </div>
            </div>
            
            <div class="modal-content">
             
 <div class="row">
    <div class="col s12 m-t--10">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test11">Cliente</a></li>
        <li class="tab col s3"><a  href="#test22">Proyecto</a></li>
        <li class="tab col s3"><a  href="#test33">Intengrante</a></li>
        <li class="tab col s3"><a href="#test44">Rol en la AC</a></li>
      </ul>
    </div>
    <div id="test11" class="col s12">
         <div class="m-t-20"></div>
    <?php echo $modal -> acmodaltext1 ; ?>
            <div class="m-t-20"></div>
            <a href="#!" class="modal-close btn blue waves-light tooltipped " style="margin-right:5px;" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">play_arrow</i>
         </a>
                   <a href="#!" class="modal-close btn red waves-light tooltipped " data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
         </a>
         <div class="m-t-20"></div>
    </div>
    
    <div id="test22" class="col s12">
        <div class="m-t-20"></div>
<?php echo $modal -> acmodaltext2 ; ?>
      <div class="m-t-20"></div>
       <a href="#!" class="modal-close btn blue waves-light tooltipped " style="margin-right:5px;" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">play_arrow</i>
         </a>
             <a href="#!" class="modal-close btn red waves-light tooltipped " data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
         </a><div class="m-t-20"></div>

                </div>
    
    <div id="test33" class="col s12">
        <div class="m-t-20"></div>
<?php echo $modal -> acmodaltext3 ; ?>
      <div class="m-t-20"></div>
      
       <a href="#!" class="modal-close btn blue waves-light tooltipped " style="margin-right:5px;" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">play_arrow</i>
         </a>
              <a href="#!" class="modal-close btn red waves-light tooltipped " data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
         </a><div class="m-t-20"></div>
    </div>
    
    <div id="test44" class="col s12">
        <div class="m-t-20"></div>
<?php echo $modal -> acmodaltext4; ?>
      <div class="m-t-20"></div>
       <a href="#!" class="modal-close btn blue waves-light tooltipped " style="margin-right:5px;" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">play_arrow</i>
         </a>
     <a href="#!" class="modal-close btn red waves-light tooltipped " data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
         </a><div class="m-t-20"></div>

    </div>
  </div>
           
            </div>
    <div class="modal-footer">
      
     <div class="row">
                                <div class="col s12 m-t--10 m-b-20 ">
                                    <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                </div>
  </div>
    </div>
    <div class="m-t--20"></div>
        </div>
    <script type="text/javascript" src="../js/shareholder.js"></script>
    <script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-ac|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>