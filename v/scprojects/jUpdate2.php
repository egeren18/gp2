<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Modelo</a>
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
                            <span class="breadcrumb p-l-10">Crear</span>
                            <a href="#!" class="breadcrumb">Modelo</a>
                            <a href="#!" class="breadcrumb"><?php echo $serviceName; ?></a>
                            
                             <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
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
                    <form id="form_validation" action="../c/scproject.php?m=updateDb&cid=<?php echo $cid; ?>&projectId=<?php echo $projectId ;?>"  method="post"
                    enctype="multipart/form-data" onsubmit="return checkForm(this);">
                <div id="main">
                    <div id="screenshot">     
                        <div class="card m-t-10 m-l-5 m-r-5">
                            <div class="row">
                                <div class="col s12">
                                    <div class="m-t-20 m-b-20 m-l-20 m-r-20">



 <!-- datos vigentes -->
                                                    <div class="row">
                                                        <div class="col s12 ">
                                                            <div class='card-panel white-text blue-grey darken-2' style='line-height : 5px;'><?php echo $serviceName; ?></div>
                                                        </div>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="modeloName" value="<?php echo $projectName;?>" name="modeloName" placeholder="" type="text" readonly>
                                                                <label for="modeloName">Master Data</label>
                                                            </div>
                                                        </div>
                                                       
                                                        <?php if($version == 1){?>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="sacp" value="<?php echo $date;?>" name="sacp" placeholder="" type="text" class="validate" readonly>
                                                                <label for="sacp">Fecha de Creaci&oacute;n</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                        
                                                        
                                                        <?php if($version > 1){?>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="sacp" value="<?php echo $date;?>" name="sacp" placeholder="" type="text" class="validate" readonly>
                                                                <label for="sacp">Ultima Actualizaci&oacute;n</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        
                                                         <?php if($version == 1){?>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="sacp" value="<?php echo $_SESSION["userFullName"];?>"
                                                               name="sacp" placeholder="" type="text" class="validate" readonly>
                                                                <label for="sacp">Usuario Creador</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        
                                                         <?php if($version > 1){?>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                               <input id="sacp" value="<?php echo $_SESSION["userFullName"];?>"
                                                               name="sacp" placeholder="" type="text" class="validate" readonly>
                                                                <label for="sacp">Usuario Actualizaci&oacute;n</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        
                                                         <?php } ?>
                                                         
                                                        
                                                        
                                                        
                                                    </div>
                                                
                                                    
                                            <!-- datos vigentes -->  
                                            
                                            <!-- datos nuevos -->
                                                    <div class="row">
                                                        <div class="col s12  m-t--20">
                                                            <div class='card-panel white-text blue-grey darken-2' style='line-height : 5px;'>ERROR</div>
                                                        </div>
                                                        <div class="col s12 m6 l6">
                                                            <p>
                                                            Las sieguientes Actividades no tiene Ningun Modelo Asignado, Por lo cual no podra crear esta master data hasta correguir el error
                                                            </p>
                                                            <br>
                                                            <table>
                                                                <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                                                    <th id="border-white">Categoria</th>
                                                                    <th id="border-white">Nro</th>
                                                                    <th id="border-white">Actividad</th>
                                                                    <th id="border-white">Modelo</th>
                                                                </tr>
                                                                <tr>
                                                                    <td id="border-grey"><?php echo $cacName;?></td>
                                                                    <td id="border-grey"><?php echo $actividadId;?></td>
                                                                    <td id="border-grey"><?php echo $actividadName;?></td>
                                                                    <td id="border-grey"><i class="material-icons red-text">warning</i></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    
                                                        
                                                    </div>
                                            <!-- datos vigentes -->
                                            
                                            



                                            
                                            
                                            <!-- end ul con las categorrias y preguntas  -->
                                 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                    </form>
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

<script type="text/javascript" src="../js/shareholder.js"></script>
<script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-ac|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>
