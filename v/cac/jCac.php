    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down"><?php echo $tsacName;?></a>
                    <a href="#!" class="breadcrumb "><?php echo $cuestionarioName;?></a>
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
                                    <span class="blue-text p-l-10"><?php echo $tsacName;?> - <?php echo $cuestionarioName;;?> </span>
                                <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                    <i class="material-icons blue-text">cancel</i>
                                </a>
                                   <a href="../c/<?php echo $module;?>.php?m=create&tsacId=<?php echo $tsacId;?>&cacId=<?php echo $tabla -> cacId; ?>&cuestionarioId=<?php echo $cuestionarioId ?>" class="tooltipped right modal-trigger" data-position="left" data-tooltip="Agregar Categoria">
                                        <i class="material-icons blue-text">add_circle</i>
                                    </a>
                                    <a class="right m-r-5 tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                                    <a class="right m-r-5 tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen"><i class="material-icons green-text">file_download</i></a>
                                    <a class="right m-r-5" id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                                    <a href="#Leyenda" class="tooltipped right modal-trigger m-r-10" data-position="left" data-tooltip="Instruciones">
                                        <i class="material-icons blue-text">local_library</i>
                                    </a>
                                     <a href="javascript: history.go(-1);" class="tooltipped right blue-text m-r-10" data-position="left" data-tooltip="Atr&aacute;s">
                                        <i class="material-icons blue-text">undo</i>
                                    </a>
                                </div>
                            </div>
                            
                            <div id="main">
                        <div id="screenshot">
                            <div class="card m-t-10 m-l-5 m-r-5">
                                <div class="p-l-20 p-t-20 p-r-20 p-b-20">

        
            
                                    <!-- tabla -->
                                    
                                     <table id='example' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td class="hide">id</td>
                                                <td class="td-block">Categoria</td>
                                                <td>Acci&oacute;n</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($tabla = $_tabla -> fetch_object()) {?>
                                            <tr>
                                                <td class="hide">i</td>
                                            <td><?php echo $tabla -> cacName ;?></td>
                                                        <td>
                                                          <!-- botones  -->
                                                          
                                                         
                                                          
                                                            <a href="../c/<?php echo $module;?>.php?m=update&tsacId=<?php echo $tsacId;?>&cacId=<?php echo $tabla -> cacId; ?>&cuestionarioId=<?php echo $cuestionarioId ?>&g=2" class="tooltipped m-l-10 modal-trigger" data-position="left" data-tooltip="Consultar">
                                                                <i class="material-icons rotate-90   blue-text">search</i></a>
                                                                
                                                                <a href="../c/<?php echo $module;?>.php?m=update&tsacId=<?php echo $tsacId;?>&cacId=<?php echo $tabla -> cacId; ?>&cuestionarioId=<?php echo $cuestionarioId ?>&g=2" class="tooltipped m-l-10 modal-trigger" data-position="left" data-tooltip="Modificar">
                                                                <i class="material-icons blue-text">edit</i></a>
                                                                
                                                                
                                                                
                                                            <a href="javascript: void(0)" class="tooltipped m-l-10" data-position="top" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i>
                                                                </a>
                                                            
                                                            
                                                             <!-- botones  -->
                                                            
                                                            
                                                            
                                                        </td>
                                                        
                                                    </tr>
                                                    <?php } ?>
                                            </tr>
                                         
                                        </tbody>
                                    </table>
                                    
                                    
                                    <!-- tabla -->
                                    
                                    
                                    <div class="row">
                                        <div class="col s12 m12 m-t-20 m-b-10">
                                          
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
            </div>
        </div>
    </main>


<!-- Modal de añadir -->
<form id="form_validation" action="../c/cac.php?m=createDb&tsacId=<?php echo $_GET['tsacId']; ?>&cuestionarioId=<?php echo $_GET['cuestionarioId']; ?>" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">
        <div id="add" class="modal">
             <div class="modal-header" style="background-color:#607d8b;">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        <h6><a href="#!" class="breadcrumb white-text"><?php echo $tsacName;?> </a>
                        <a href="#!" class="breadcrumb white-text "><?php echo $cuestionarioName;;?></a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        </a></h6>
                    </div>
                </div>
            </div>
<div class="modal-content">
                
                
<div class="col s12 l8 ">
                    
    <div class="row   ">
        
         <div class="col s12 l12 " >
            <div class=" m-b-20 m-l-20 m-r-20">


<div class="row">   
    <div class="col s12 m6 l6   ">
                        <div class="input-field">
                            <input value="" id="categoriaName" name="categoriaName" placeholder="" type="text" class="validate" required  >
                            <label class="font-17" for="categoriaName">Categoria</label>
                                <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
                        </div>
    </div>
</div>



<div class="row">
    <div class="col s12 m-t--20">
            <label>
            <input type="checkbox" class="validate filled-in" required="" />
            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
        </label>
    </div>
</div>

<div class="row">
    <div class="col s12 m-t-10">
        <a href="#!" class=" modal-close btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
            <i class="material-icons">close</i>
        </a>
        
        <button id="vDivision" type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
            <i class="material-icons">save</i>
        </button>
    </div>
</div>

    </div>
</div>



<!-- aqui esta el lado derecho -->

    </div>
       
</div>
         </div>
    </div>
</form>
<!-- termina modal de añadir -->


    <?php include '../v/cac/add.php';?>
    <?php include '../v/cac/read.php';?>
    <?php include '../v/cac/edit.php';?>
    <?php include '../v/support/modalAdd.php';?>

    <script type="text/javascript" src="../js/shareholder.js"></script>
    <script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-ac|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>