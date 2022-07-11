    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down"><?php echo $tsacName;?></a>
                    <a href="#!" class="breadcrumb ">General</a>
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
                                    <span class="blue-text p-l-10"><?php echo $tsacName;?> - General </span>
                                    <a href="../c/pac.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-text">cancel</i>
                                    </a>
                                   <a href="../c/<?php echo $module?>.php?m=create&tsacId=<?php echo $tsacId;?>" class="tooltipped right modal-trigger" data-position="left" data-tooltip="Agregar Pregunta">
                                        <i class="material-icons blue-text">add_circle</i>
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
                            
                    <div id="main">
                        <div id="screenshot">
                            <div class="card m-t-10 m-l-5 m-r-5">
                                <div class="p-l-20 p-t-20 p-r-20 p-b-20">

        
            
                                    <!-- tabla -->
                                    
                                     <table id='example' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td>id</td>
                                                <td >Categoria</td>
                                                <td class="td-block">Pregunta</td>
                                                <td>Acci&oacute;n</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($tabla = $_tabla -> fetch_object()) {
                                            // Conexion a base de datos

                                            $_country = mysqli_query($tipoc, "
                                                SELECT * FROM cuestionario1_1
                                                WHERE cacId = '" . $tabla -> cacId . "'
                                            ");
                                            
                                            // declarar la llave
                                            
                                            $country = $_country -> fetch_object();
                                            
                                            // con la conexion ya hecha imprimir el valor del campo q quiero usasndo la llave ya declarada
                                            $cacName = $country -> cacName;

                                            ?>
                                            <tr>
                                            <td ><?php echo $tabla -> mId;?></td>
                                            <td><?php echo $cacName;?></td>
                                            <td><?php echo $tabla -> pacName ;?></td>
                                                        <td>
                                                          <!-- botones  -->
                                                          
                                                         
                                                          
                                                            <a href="../c/<?php echo $module?>.php?m=update&tsacId=<?php echo $tsacId;?>&mId=<?php echo $tabla -> mId;?>&g=2" class="tooltipped m-l-10 modal-trigger" data-position="left" data-tooltip="Consultar">
                                                                <i class="material-icons rotate-90   blue-text">search</i></a>
                                                                
                                                                <a href="../c/<?php echo $module?>.php?m=update&tsacId=<?php echo $tsacId;?>&mId=<?php echo $tabla -> mId;?>&g=2"
                                                                class="tooltipped m-l-10 modal-trigger" data-position="left" data-tooltip="Modificar">
                                                                <i class="material-icons blue-text">edit</i></a>
                                                                
                                                            <a href="../c/<?php echo $module?>.php?m=delete&tsacId=<?php echo $tsacId;?>&mId=<?php echo $tabla -> mId;?>&g=2" class="tooltipped m-l-10" data-position="top" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i>
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

    <?php// include '../v/pac/add.php';?>
    <?php// include '../v/pac/read.php';?>
    <?php// include '../v/pac/edit.php';?>
    <?php include '../v/support/modalAdd.php';?>

    <script type="text/javascript" src="../js/shareholder.js"></script>
    <script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-ac|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>