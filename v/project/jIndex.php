    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Proyectos</a>
                    <a href="#!" class="breadcrumb ">Lista</a>
                    <a href="#help3" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Modal de informaci&oacute;n">
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
                <div class="col s12 m12 l12">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="blue-text p-l-10">Proyectos</span>
                                    <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                    <a href="../c/project.php?m=add" class="tooltipped right" data-position="left" data-tooltip="Nuevo Registro">
                                        <i class="material-icons blue-text">add_circle</i>
                                    </a>
                                    <!-- botones para funcion para tomar captura -->    
                                     <a class="right m-r-5 tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                                    <a class="right m-r-5 tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen"><i class="material-icons green-text">file_download</i></a>
                                    <a class="right m-r-5" id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                                    <!-- botones para funcion para tomar captura -->    
                                </div>
                            </div>
                            
                <!-- funcion para tomar captura -->        
                    <div id="main">
                        <div id="screenshot">
                <!--  end funcion para tomar captura -->        
                            
                            <div class="card m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                            <table id="example" class="display nowrap" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <td>Cliente</td>
                                                        <td>Proyecto</td>
                                                        <td  >Equipo de Trabajo</td>
                                                        <td class="td-block ">Asignacion de trabajo</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($project = $_project -> fetch_object()) {
                                                       /* $_items = mysqli_query($connection, "SELECT count(*) AS no FROM acanswer WHERE acId = '" . $project -> acId . "'");
                                                        $items = $_items -> fetch_object();
                                                        $_answer = mysqli_query($connection, "SELECT count(*) AS answer FROM acanswer WHERE acId = '" . $project -> acId . "'");
                                                        $answer = $_answer -> fetch_object();*/
                                                        $_service = mysqli_query($master, "SELECT * FROM service WHERE serviceId = '" . $project -> serviceId . "'");
                                                        $service = $_service -> fetch_object();
                                                        $_client = mysqli_query($master, "SELECT * FROM client WHERE clientId = '" . $project -> clientId . "'");
                                                        $client = $_client -> fetch_object();
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $client -> clientName; ?></td>
                                                        <td><a href="../c/project.php?m=planning&c=<?php echo $project -> projectId; ?>&serviceId=<?php echo $service -> serviceId;?>&md=<?php echo $project -> md; ?>">Auditor&iacute;a Anual de Estados Financieros</a></td>
                                                        <td><a href="../c/project.php?m=projectTeam&p=<?php echo $project -> projectId; ?>">Integrantes</a></td>
                                                        <td><a href="../c/project.php?m=asignar&p=<?php echo $project -> projectId; ?>&c=<?php echo $project -> projectId; ?>">Asignar</a></td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                 <!-- funcion para tomar captura -->        
                        </div>
                    </div>
                <!--  end funcion para tomar captura -->       
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
    </mprojectn>
        <div id="help" class="modal ">
        <div class="modal-content">
            <?php 
            $module ="project";
         $_m = mysqli_query($master, "
                    SELECT * FROM modal
                    WHERE moduleController = '" . $module . "'
                ");
        while ($m = $_m -> fetch_object()) { ?>
            <h5><p class=""> <?php echo $m -> modalName ;?></p></h5>
            <p class=""><?php  echo $m -> modalText ;?></p>
            
          <?php  }?>
        </div>
        <div class="modal-footer m-t--20 m-b-10">
            <button class="modal-close waves-effect waves-light btn blue">Cerrar</button>
        </div>
    </div>
    <?php include '../v/support/modalAdd.php'; ?>
    <?php include '../v/main/modalS.php'; ?>
<script type="text/javascript" src="../js/shareholder.js"></script>
<script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-proyecto|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>