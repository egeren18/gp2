    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="../c/ac.php?m=index" class="breadcrumb hide-on-med-and-down">Aceptaci&oacute;n y Continuidad</a>
                    <a href="#!" class="breadcrumb ">A&ntilde;adir</a>
                    <a href="#help" class="tooltipped right m-r-10 modal-trigger" data-position="left" data-tooltip="Manual de Usuario">
                        <i class="material-icons blue-text">help</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons blue-text">forum</i>
                    </a>
                    <!-- boton leyenda -->
                    <a href="#leyenda" class="tooltipped right modal-trigger " data-position="left" data-tooltip="leyenda">
                        <i class="material-icons blue-text">local_offer</i>
                    </a>
                    <!-- fin boton leyenda -->
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
                                    <span class="breadcrumb  p-l-10">Aceptaci&oacute;n y Continuidad</span>
                                    <a href="../c/ac.php?m=index" class="tooltipped right" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-text">cancel</i>
                                    </a>
                                    <a class="right tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                                    <a class="right tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen"><i class="material-icons green-text">file_download</i></a>
                                    <a class="right" id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                                    <!-- boton instrucciones -->
                                    <a href="#help22" class="tooltipped right modal-trigger " data-position="left" data-tooltip="Instruciones">
                                        <i class="material-icons blue-text">local_library</i>
                                    </a>
                                    <!-- final boton instrucciones -->
                                    <!-- boton atras -->        
                                    <a href="javascript: history.go(-1);" class="tooltipped right blue-text " data-position="left" data-tooltip="Atr&aacute;s">
                                        <i class="material-icons blue-text">undo</i>
                                    </a>
                                    <!-- fin de boton atras -->
                                </div>
                            </div>
                            
                    <div id="main">
                        <div id="screenshot">
                            <div class="card m-t-10 m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="m-t-20 m-b-20 m-l-20 m-r-20">
                                            <form id="form_validation" action="../c/ac.php?m=model" method="post">
                                                <div class="row">
                                                    <div class="col s12 m6 m-t-20">
                                                        <div class="input-field">
                                                            <select id="clientId" name="clientId" placeholder="" type="text" class="validate" required="">
                                                                <option value="">&nbsp;</option>
                                                                <?php while ($client = $_client -> fetch_object()) { ?>
                                                                <option value="<?php echo $client -> clientId; ?>"><?php echo $client = strlen($client -> clientName) > 80 ? substr($client -> clientName, 0, 80) . '...' : $client -> clientName; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <label class="font-13" for="clientId">Cliente</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 m-t-20">
                                                        <div class="input-field">
                                                            <select id="serviceId" name="serviceId" placeholder="" type="text" class="validate" required="">
                                                                <option value="">&nbsp;</option>
                                                                <?php while ($service = $_service -> fetch_object()) { ?>
                                                                <option value="<?php echo $service -> serviceId; ?>"><?php echo $service = strlen($service -> serviceName) > 80 ? substr($service -> serviceName, 0, 80) . '...' : $service -> serviceName; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <label class="font-13" for="clientId">Servicio solicitado</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6">
                                                        <div class="input-field">
                                                            <select id="serviceId" name="leaderId" placeholder="" type="text" class="validate" required="">
                                                                <option value="">&nbsp;</option>
                                                                <?php while ($leader = $_leader -> fetch_object()) { ?>
                                                                <option value="<?php echo $leader -> userId; ?>"><?php echo $leader -> userName . " " . $leader -> userSurname; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <label class="font-13" for="leaderId">L&iacute;der del Proyecto</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                     <div class="col s12 m6">
                                                        <div class="input-field">
                                                            <select id="gerenteId" name="gerenteId" placeholder="" type="text" class="validate" required="">
                                                                <option value="">&nbsp;</option>
                                                                <?php while ($leader = $_gerente -> fetch_object()) { ?>
                                                                <option value="<?php echo $leader -> userId; ?>"><?php echo $leader -> userName . " " . $leader -> userSurname; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <label class="font-13" for="leaderId">Gerente de A&C</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12 m-t-30">
                                                        <a href="../c/ac.php?m=index" class="btn red waves-light">
                                                            <i class="material-icons">cancel</i>
                                                        </a>
                                                        <button type="submit" class="btn blue waves-effect">
                                                            <i class="material-icons">save</i>
                                                        </button>
                                                    </div>
                                                </div>
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

    <?php include '../v/support/modalAdd.php'; 
// connection
include '../connection.php';

$_modal = mysqli_query($master, "
SELECT * FROM acmodal
WHERE acmodalId = 3
");
$modal = $_modal -> fetch_object();
?>
<style>.modal { width: 75% !important ; }</style>
<div id="help" class="modal ">
       <div class="modal-header" style="background-color:#607d8b;">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        <h6><a href="#!" class="breadcrumb white-text">Guia </a>
                        <a href="#!" class="breadcrumb white-text ">AC A&ntilde;adir</a>
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
        <li class="tab col s3"><a  href="#test22">Servicio solicitado</a></li>
        <li class="tab col s3"><a  href="#test33">L&iacute;der del Proyecto</a></li>
        <li class="tab col s3"><a href="#test44">Gerente de A&C</a></li>
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
   
    <?php include '../v/support/modalAdd.php'; ?>
     <script type="text/javascript" src="../js/shareholder.js"></script>
    <script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-ac|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>