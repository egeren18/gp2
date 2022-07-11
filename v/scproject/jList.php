<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down"><?php echo $serviceName;?> </a>
            <a href="#!" class="breadcrumb ">Lista</a>
            <a href="#help" class="tooltipped right modal-trigger " data-position="left" data-tooltip="ccontratacion de Usuario">
                <i class="material-icons blue-text">help</i>
            </a>
            <a href="#ticket" class="tooltipped right modal-trigger " data-position="left" data-tooltip="Solicitar Ayuda">
                <i class="material-icons blue-text">forum</i>
            </a>
            <!-- boton leyenda -->
            <a href="#help22" class="tooltipped right modal-trigger " data-position="left" data-tooltip="leyenda">
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
                            <span class="blue-text p-l-10"><?php echo $serviceName;?></span>
                                <a href="../c/main.php?m=menu" class="tooltipped right" data-position="left" data-tooltip="Cerrar"><i class="material-icons blue-text">cancel</i></a>
                                
                                
                            <!-- boton de agregar -->    
                            <a href="<?php if ($_SESSION["userAdmin"] == 4) { echo "javascript: void(0)"; } else { echo $link = $allow -> jCreate == 1 ? "../c/{$module}.php?m=create&cid={$cid}" : "javascript: void(0)"; } ?>" class="tooltipped right" data-position="left" data-tooltip="Nuevo Registro">
                                        <i class="material-icons <?php if ($_SESSION["userAdmin"] == 4) { echo "grey-text"; } else { echo $color = $allow -> jCreate == 1 ? "blue-text" : "grey-text"; } ?>">add_circle</i>
                                    </a>
                            <!-- botones para funcion para tomar captura este es el boton -->    
                            <a class="right  tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                            <a class="right  tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen"><i class="material-icons green-text">file_download</i></a>
                            <a class="right " id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                            <!-- botones para funcion para tomar captura -->     
                            
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
                    <!-- funcion para tomar captura se utiliza antes del card  -->       
                    <div id="main">
                         <div id="screenshot">
                    <!--  end funcion para tomar captura -->                    
                    <div class="card m-t-10 m-l-5 m-r-5">
                        <div class="row">
                            

                          
                                    <div class="m-t-20"></div>

                             <div class="col s12">
                                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                    <table id='example' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td>Master Data</td>
                                                <td>Creado Por:</td>
                                                <td>Versi&oacute;n</td>
                                                <td>Fecha Creaci&oacute;n</td>
                                                <td>Fecha Actualizaci&oacute;n</td>
                                                <td class="td-block">Estatus</td>
                                                <td>Acci&oacute;n</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php while ($cp = $_cp -> fetch_object()) { ?>
                                                
                                            <tr>
                                               <?php if($cp -> version >= 1) {?><td>
                                                    <a href="../c/<?php echo $module;?>.php?m=matrix&cid=<?php echo $cid;?>&projectId=<?php echo $cp -> projectId;?>"><?php echo $cp -> projectName; ?> </a>
                                                    </td><?php }?>
                                               <?php if($cp -> version < 1) {?><td><?php echo $cp -> projectName; ?></td><?php }?>
                                               <td><?php echo $_SESSION["userFullName"];?></td>
                                               <td><?php echo $cp -> version;?></td>
                                               <td><?php echo $cp -> date ?></td>
                                               <td><?php echo $cp -> date2 ?></td>
                                               <td><?php if($cp -> version == 0){ echo 'Sin actualizar';}else {echo 'Actualizado';} ;?></td>
                                             
                                                        <td>
                                                <?php if($cp -> version >= 1) { ?>
                                                            <a href="
                                                                <?php
                                                                if ($_SESSION["userAdmin"] == 4) {
                                                                    $allow = 1;
                                                                    echo $link = $allow == 1 ? "#" : "javascript: void(0)";
                                                                }
                                                                else {
                                                                    
                                                                    echo $link = $allow -> jUpdate == 1 ? "#" : "javascript: void(0)";
                                                                }
                                                                ?>" class="tooltipped m-l-10" data-position="left" data-tooltip="Actualizar en el Modulo de Update"><i class="material-icons 
                                                                <?php
                                                                if ($_SESSION["userAdmin"] == 4) {
                                                                    $allow = 1;
                                                                    echo $color = $allow == 1 ? "blue-text" : "grey-text";
                                                                }
                                                                else {
                                                                    echo $color = $allow -> jUpdate == 1 ? "blue-text" : "grey-text";
                                                                }
                                                                ?>">done_all</i></a>
                                                            <?php }else { ?>
                                                            
                                                           <a href="
                                                                <?php
                                                                if ($_SESSION["userAdmin"] == 4) {
                                                                    $allow = 1;
                                                                    echo $link = $allow == 1 ? "../c/{$module}.php?m=update&cid={$cid}&projectId={$cp -> projectId}" : "javascript: void(0)";
                                                                }
                                                                else {
                                                                    
                                                                    echo $link = $allow -> jUpdate == 1 ? "../c/{$module}.php?m=update&cid={$cid}&projectId={$cp -> projectId}" : "javascript: void(0)";
                                                                }
                                                                ?>" class="tooltipped m-l-10" data-position="left" data-tooltip="Crear"><i class="material-icons 
                                                                <?php
                                                                if ($_SESSION["userAdmin"] == 4) {
                                                                    $allow = 1;
                                                                    echo $color = $allow == 1 ? "blue-text" : "grey-text";
                                                                }
                                                                else {
                                                                    echo $color = $allow -> jUpdate == 1 ? "blue-text" : "grey-text";
                                                                }
                                                                ?>">add</i></a>
                                                       <?php } ?>
                                                       </td>
                                                    </tr>
                                                    
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                      
                        </div>
                    </div>
                    <!-- funcion para tomar captura se usa despues de cerrar el card -->        
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

</main>

<div id="help" class="modal">
<div class="modal-content">
 <?php
 $_m = mysqli_query($master, "
            SELECT * FROM modal
            WHERE moduleController = '" . $module . "'
        ");
while ($m = $_m -> fetch_object()) { ?>
    <h5><p class=""> <?php echo $m -> modalName ;?></p></h5>
    <p class=""><?php  echo $m -> modalText ;?></p>
    
  <?php  }?>
</div>
<div class="modal-footer">
    <button class="modal-close waves-effect waves-light btn blue btn-small">Continuar</button>
</div>
</div>

<?php include '../v/support/modalAdd.php'; ?>
<!-- funcion java para que funcionen los screenshot se usa al final de todo el codigo-->    
<script type="text/javascript" src="../js/shareholder.js"></script>
<script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-proyecto|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>
<!--final de funcion java para que funcionen los screenshot-->
