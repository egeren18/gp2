<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Clientes en Perspectiva</a>
            <a href="#!" class="breadcrumb ">Lista</a>
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
                            <span class="blue-text p-l-10">Clientes en Perspectiva</span>
                            <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar"><i class="material-icons blue-grey-text">cancel</i></a>
                            <a href="<?php echo $link = $_SESSION["userAdmin"] == 2 ? "../c/clientPrev.php?m=create&mod={$_GET['mod']}" : "javascript: void(0)" ?>" class="tooltipped right" data-position="left" data-tooltip="Nuevo Registro">
                                <i class="material-icons <?php echo $icon = $_SESSION["userAdmin"] == 2 ? "blue-text" : "grey-text"; ?>">add_circle</i>
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
                                <ul class="tabs">
                                    <li class="tab col s3"><a class="active" href="#test1">por procesar</a></li>
                                    <li class="tab col s3"><a  href="#test2">procersado</a></li>
                                
                                </ul>
                            </div>

                            <div id="test1" class="col s12">
                                    <div class="m-t-20"></div>

                             <div class="col s12">
                                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                    <table id='example' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td>Nombre &oacute; Raz&oacute;nSocial</td>
                                                <td>Persona Contacto</td>
                                                <td>Origen </td>
                                                <td>Documento </td>
                                                <td>Tel&eacute;fono</td>
                                                <td class="td-block">Correo Electr&oacute;nico</td>
                                                <td>Acci&oacute;n</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($cp = $_cp -> fetch_object()) { ?>
                                            <tr>
                                                <td><?php echo $cp -> clientName; ?></td>
                                                <td><?php echo $cp -> clientContact; ?></td>
                                             
                                                <td><?php
                                                    if ($cp -> origen == 1 ) { $origen = 'Cotizar'; }
                                                    if ($cp -> origen == 2 ){ $origen = 'Diagnostico'; }
                                                    echo $origen; ?></td>
                                                    
                                                <td>
                                                    
                                                <?php if ($cp -> documento == 1){?>
                                                <i class="material-icons blue-text">done</i> 
                                                <?php }if ($cp -> documento == 2){?>
                                                <i class="material-icons blue-text">cancel</i><?php }
                                                if ($cp -> documento == 3){?>
                                                <i class="material-icons blue-text">done</i><?php } ?>
                                                
                                                </td>
                                                <td><?php echo $cp -> clientPhone1; ?></td>
                                                <td><?php echo $cp -> clientEmail; ?></td>
                                                <td>
                                                    <a href="<?php echo "../c/{$module}.php?m=update&cid={$cp-> clientId}&mod={$_GET['mod']}"; ?>" target="_blank" class="tooltipped m-l-10" data-position="left" data-tooltip="Consultar">
                                                        <i class="material-icons blue-text">description</i>
                                                    </a>
                                                    <a href="
                                                        <?php
                                                        switch ($_SESSION["userAdmin"]) {
                                                            
                                                            case 1:
                                                                echo "javascript: void(0)";
                                                                break;

                                                            case 2:
                                                                echo "../c/{$module}.php?m=update&cid={$cp-> clientId}&mod={$_GET['mod']}";
                                                                break;

                                                            default:
                                                                break;
                                                        }
                                                        ?>
                                                       " class="tooltipped m-l-10" data-position="left" data-tooltip="Modificar">
                                                        <i class="material-icons
                                                        <?php
                                                        switch ($_SESSION["userAdmin"]) {
                                                            
                                                            case 1:
                                                                echo "grey-text";
                                                                break;

                                                            case 2:
                                                                echo "blue-text";
                                                                break;

                                                            default:
                                                                break;
                                                        }
                                                        ?>
                                                        ">edit</i>
                                                    </a>
                                                    <a href="
                                                        <?php
                                                        echo "javascript: void(0)"; ?>" class="tooltipped m-l-10" data-position="top" data-tooltip="Eliminar"><i class="material-icons <?php echo $color = $_SESSION["userAdmin"] == 2 ? "red-text" : "grey-text"; ?>">delete</i></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                 
                             </div>

                             <div id="test2" class="col s12">
        <div class="m-t-20"></div>
        <div class="col s12">
                                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                    <table id='example2' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td>Nombre &oacute; Raz&oacute;nSocial</td>
                                                <td>Persona Contacto</td>
                                                <td>Origen </td>
                                                <td>Documento </td>
                                                <td>Tel&eacute;fono</td>
                                                <td class="td-block">Correo Electr&oacute;nico</td>
                                                <td>Acci&oacute;n</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($cp2 = $_cp2 -> fetch_object()) { ?>
                                            <tr>
                                                <td><?php echo $cp2 -> clientName; ?></td>
                                                <td><?php echo $cp2 -> clientContact; ?></td>
                                                 <td><?php
                                                    if ($cp2 -> origen == 1 ) { $origen = 'Cotizar'; }
                                                    if ($cp2 -> origen == 2 ){ $origen = 'Diagnostico'; }
                                                    echo $origen; ?></td>
                                                     <td>
                                                    
                                                <?php if ($cp2 -> documento == 1){?>
                                                <i class="material-icons blue-text">done</i> 
                                                <?php }if ($cp2 -> documento == 2){?>
                                                <i class="material-icons blue-text">cancel</i><?php }
                                                if ($cp2 -> documento == 3){?>
                                                <i class="material-icons blue-text">done</i><?php } ?>
                                                
                                                </td>
                                                <td><?php echo $cp2 -> clientPhone1; ?></td>
                                                <td><?php echo $cp2 -> clientEmail; ?></td>
                                                <td>
                                                    <a href="<?php echo "../c/{$module}.php?m=update&cid={$cp2-> clientId}&mod={$_GET['mod']}"; ?>" target="_blank" class="tooltipped m-l-10" data-position="left" data-tooltip="Consultar">
                                                        <i class="material-icons blue-text">description</i>
                                                    </a>
                                                    <a href="
                                                        <?php
                                                        switch ($_SESSION["userAdmin"]) {
                                                            
                                                            case 1:
                                                                echo "javascript: void(0)";
                                                                break;

                                                            case 2:
                                                                echo "../c/{$module}.php?m=update&cid={$cp2 -> clientId}&mod={$_GET['mod']}";
                                                                break;

                                                            default:
                                                                break;
                                                        }
                                                        ?>
                                                       " class="tooltipped m-l-10" data-position="left" data-tooltip="Modificar">
                                                        <i class="material-icons
                                                        <?php
                                                        switch ($_SESSION["userAdmin"]) {
                                                            
                                                            case 1:
                                                                echo "grey-text";
                                                                break;

                                                            case 2:
                                                                echo "blue-text";
                                                                break;

                                                            default:
                                                                break;
                                                        }
                                                        ?>
                                                        ">edit</i>
                                                    </a>
                                                    <a href="
                                                        <?php
                                                        echo  "javascript: void(0)"; ?>" class="tooltipped m-l-10" data-position="top" data-tooltip="Eliminar"><i class="material-icons <?php echo $color = $_SESSION["userAdmin"] == 2 ? "red-text" : "grey-text"; ?>">delete</i></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
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
WHERE moduleId = 87
");
$modal = $_modal24 -> fetch_object();
?>

<div id="help" class="modal ">
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
            <?php echo $modal -> moduleTest1; ?>
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
    <script type="text/javascript" src="../js/shareholder.js"></script>
    <script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-cliente-Perspectiva|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>