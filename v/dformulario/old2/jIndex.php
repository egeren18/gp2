<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Diagn&oacute;stico</a>
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
                            <span class="blue-text p-l-10">Diagn&oacute;stico</span>
                            <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar"><i class="material-icons blue-grey-text">cancel</i></a>
                            <a href="<?php echo $link = $_SESSION["userAdmin"] == 2 ? "../c/sp.php?m=create" : "javascript: void(0)" ?>" class="tooltipped right" data-position="left" data-tooltip="Nuevo Registro">
                             
                            </a>
                        </div>
                    </div>
                    <div class="card m-t-10 m-l-5 m-r-5">
                        <div class="row">
                            <div class="col s12">
                                <ul class="tabs">
                                    <li class="tab col s3"><a class="active" href="#test1">Por Procesar</a></li>
                                    <li class="tab col s3"><a  href="#test2">Procesado</a></li>
                                
                                </ul>
                            </div>

                            <div id="test1" class="col s12">
                                    <div class="m-t-20"></div>

                             <div class="col s12">
                                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                    <table id='example' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td>Diagnostico</td>
                                                <td>Empresa</td>    
                                                <td>Contacto</td>
                                                <td>Correo</td>
                                                <td class="td-block">Tel&eacute;fono </td>
                                                
                                                <td>Acci&oacute;n</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($cp = $_cp -> fetch_object()) {
                                            $_n = mysqli_query($master, "
                                                SELECT * FROM diagnostico
                                                WHERE diagnosticoId = '" . $cp -> diagnosticoId . "'
                                            ");
                                            $n = $_n -> fetch_object();
                                            $diagnostico = $n -> diagnosticoName;
                                            ?>
                                            
                                            <tr>
                                                <td><?php echo $diagnostico;?></td>
                                                <td><?php echo $cp -> c1Empresa; ?></td>
                                                <td><?php echo $cp -> c1Name; ?></td>
                                                <td><?php echo $cp -> c1Correo; ?></td>
                                                <td><?php echo $cp -> c1Tlf; ?></td>
                                                <td>
                                             
                                                    <a href="
                                                        <?php
                                                        switch ($_SESSION["userAdmin"]) {
                                                            
                                                            case 1:
                                                                echo "../c/{$module}.php?m=update&cid={$cp-> c1Id}&d={$cp -> diagnosticoId}";
                                                                break;

                                                            case 2:
                                                                echo "../c/{$module}.php?m=update&cid={$cp-> c1Id}&d={$cp -> diagnosticoId}";
                                                                break;

                                                            default:
                                                                break;
                                                        }
                                                        ?>
                                                       " class="tooltipped m-l-10" data-position="left" data-tooltip="Procesar">
                                                        <i class="material-icons
                                                        <?php
                                                        switch ($_SESSION["userAdmin"]) {
                                                            
                                                            case 1:
                                                                echo "blue-text";
                                                                break;

                                                            case 2:
                                                                echo "blue-text";
                                                                break;

                                                            default:
                                                                break;
                                                        }
                                                        ?>
                                                        ">description</i>
                                                    </a>
                                                   <a href="
                                                        <?php
                                                        switch ($_SESSION["userAdmin"]) {
                                                            
                                                            case 1:
                                                                echo "../c/{$module}.php?m=update2&cid={$cp-> c1Id}&d={$cp -> diagnosticoId}";
                                                                break;

                                                            case 2:
                                                                echo "../c/{$module}.php?m=update2&cid={$cp-> c1Id}&d={$cp -> diagnosticoId}";
                                                                break;

                                                            default:
                                                                break;
                                                        }
                                                        ?>
                                                       " class="tooltipped m-l-10" data-position="left" data-tooltip="editar">
                                                        <i class="material-icons
                                                        <?php
                                                        switch ($_SESSION["userAdmin"]) {
                                                            
                                                            case 1:
                                                                echo "blue-text";
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
                                                        echo $link = $_SESSION["userAdmin"] == 2 ? "../c/{$module}.php?m=delete&cid={$cp-> c1Id}&d={$cp -> diagnosticoId}" : "../c/{$module}.php?m=delete&cid={$cp-> c1Id}&d={$cp -> diagnosticoId}"; ?>" 
                                                        class="tooltipped m-l-10" data-position="top" data-tooltip="Eliminar">
                                                        <i class="material-icons <?php echo $color = $_SESSION["userAdmin"] == 2 ? "red-text" : "red-text"; ?>">delete</i></a>
                                              
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
                                <div class="p-t-20 p-b-20 p-l-20 p-r-20 hide-on-med-and-down">
                                   <table id='examplezz' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td>Empresa</td>    
                                                <td>Contacto</td>
                                                <td>Correo</td>
                                                <td class="td-block">Tel&eacute;fono </td>
                                                
                                                <td>Acci&oacute;n</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($cp = $_cp2-> fetch_object()) { ?>
                                            <tr>
                                                <td style="width:10%;"><?php echo $cp -> c1Empresa; ?></td>
                                                <td style="width:6%;"><?php echo $cp -> c1Name; ?></td>
                                                <td style="width:10%;"><?php echo $cp -> c1Correo; ?></td>
                                                <td style="width:68%;"><?php echo $cp -> c1Tlf; ?></td>
                                                <td style="width:6%;">
                                             
                                                    <a href="
                                                        <?php
                                                        switch ($_SESSION["userAdmin"]) {
                                                            
                                                            case 1:
                                                                echo "../c/{$module}.php?m=update&cid={$cp-> c1Id}";
                                                                break;

                                                            case 2:
                                                                echo "../c/{$module}.php?m=update&cid={$cp-> c1Id}";
                                                                break;

                                                            default:
                                                                break;
                                                        }
                                                        ?>
                                                       " class="tooltipped m-l-10" data-position="left" data-tooltip="Procesar">
                                                        <i class="material-icons
                                                        <?php
                                                        switch ($_SESSION["userAdmin"]) {
                                                            
                                                            case 1:
                                                                echo "blue-text";
                                                                break;

                                                            case 2:
                                                                echo "blue-text";
                                                                break;

                                                            default:
                                                                break;
                                                        }
                                                        ?>
                                                        ">description</i>
                                                    </a>
                                                   <a href="
                                                        <?php
                                                        switch ($_SESSION["userAdmin"]) {
                                                            
                                                            case 1:
                                                                echo "../c/{$module}.php?m=update2&cid={$cp-> c1Id}";
                                                                break;

                                                            case 2:
                                                                echo "../c/{$module}.php?m=update2&cid={$cp-> c1Id}";
                                                                break;

                                                            default:
                                                                break;
                                                        }
                                                        ?>
                                                       " class="tooltipped m-l-10" data-position="left" data-tooltip="editar">
                                                        <i class="material-icons
                                                        <?php
                                                        switch ($_SESSION["userAdmin"]) {
                                                            
                                                            case 1:
                                                                echo "blue-text";
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
                                                        echo $link = $_SESSION["userAdmin"] == 2 ? "../c/{$module}.php?m=delete&cid={$cp2-> c1Id}" : "../c/{$module}.php?m=delete&cid={$cp-> c1Id}"; ?>" 
                                                        class="tooltipped m-l-10" data-position="top" data-tooltip="Eliminar">
                                                        <i class="material-icons <?php echo $color = $_SESSION["userAdmin"] == 2 ? "red-text" : "red-text"; ?>">delete</i></a>
                                              
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="p-t-20 p-b-20 p-l-20 p-r-20 hide-on-large-only">
                                   <table id='example2' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td>Empresa</td>    
                                                <td>Contacto</td>
                                                <td>Correo</td>
                                                <td class="td-block">Tel&eacute;fono </td>
                                                
                                                <td>Acci&oacute;n</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($cp = $_cp3-> fetch_object()) { ?>
                                            <tr>
                                                <td><?php echo $cp -> c1Empresa; ?></td>
                                                <td><?php echo $cp -> c1Name; ?></td>
                                                <td><?php echo $cp -> c1Correo; ?></td>
                                                <td><?php echo $cp -> c1Tlf; ?></td>
                                                <td>
                                             
                                                    <a href="
                                                        <?php
                                                        switch ($_SESSION["userAdmin"]) {
                                                            
                                                            case 1:
                                                                echo "../c/{$module}.php?m=update&cid={$cp-> c1Id}";
                                                                break;

                                                            case 2:
                                                                echo "../c/{$module}.php?m=update&cid={$cp-> c1Id}";
                                                                break;

                                                            default:
                                                                break;
                                                        }
                                                        ?>
                                                       " class="tooltipped m-l-10" data-position="left" data-tooltip="Procesar">
                                                        <i class="material-icons
                                                        <?php
                                                        switch ($_SESSION["userAdmin"]) {
                                                            
                                                            case 1:
                                                                echo "blue-text";
                                                                break;

                                                            case 2:
                                                                echo "blue-text";
                                                                break;

                                                            default:
                                                                break;
                                                        }
                                                        ?>
                                                        ">description</i>
                                                    </a>
                                                   <a href="
                                                        <?php
                                                        switch ($_SESSION["userAdmin"]) {
                                                            
                                                            case 1:
                                                                echo "../c/{$module}.php?m=update2&cid={$cp-> c1Id}";
                                                                break;

                                                            case 2:
                                                                echo "../c/{$module}.php?m=update2&cid={$cp-> c1Id}";
                                                                break;

                                                            default:
                                                                break;
                                                        }
                                                        ?>
                                                       " class="tooltipped m-l-10" data-position="left" data-tooltip="editar">
                                                        <i class="material-icons
                                                        <?php
                                                        switch ($_SESSION["userAdmin"]) {
                                                            
                                                            case 1:
                                                                echo "blue-text";
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
                                                        echo $link = $_SESSION["userAdmin"] == 2 ? "../c/{$module}.php?m=delete&cid={$cp2-> c1Id}" : "../c/{$module}.php?m=delete&cid={$cp-> c1Id}"; ?>" 
                                                        class="tooltipped m-l-10" data-position="top" data-tooltip="Eliminar">
                                                        <i class="material-icons <?php echo $color = $_SESSION["userAdmin"] == 2 ? "red-text" : "red-text"; ?>">delete</i></a>
                                              
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
