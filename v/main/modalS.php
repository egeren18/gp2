<?php

// connection
include '../connection.php';

$_modal = mysqli_query($master, "
SELECT * FROM cmodal
WHERE moduleId = '" .  $_GET['mod'] . "'
");
$modal = $_modal -> fetch_object();
?>

<div id="help3" class="modal ">
            
            <div class="modal-content">
                <div class="row">
                    <div class="col s12 m-b-5">
                        <a href="#!" class="breadcrumb"><b>Guia </b></a>
                        <a href="#!" class="breadcrumb "><b>Descripci&oacute;n del M&oacute;dulo <?php echo $modal -> moduleName; ?></b></a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        
                        </a>
                    </div>
                </div>
                <div class="divider"></div>
                <p>
                <?php echo $modal -> moduleTest2; ?>
                </p>

           
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
        <?php



$_modal2 = mysqli_query($master, "
SELECT * FROM cmodal
WHERE moduleId = '" .  $_GET['mod'] . "'
");
$modal = $_modal2 -> fetch_object();
?>

<div id="help" class="modal ">
            
            <div class="modal-content">
                <div class="row">
                    <div class="col s12 m-b-5">
                        <a href="#!" class="breadcrumb"><b>Guia </b></a>
                        <a href="#!" class="breadcrumb "><b>Descripci&oacute;n del M&oacute;dulo <?php echo $modal -> moduleName; ?></b></a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        
                        </a>
                    </div>
                </div>
                <div class="divider"></div>
                <p>
                <?php echo $modal -> moduleTest2; ?>
                </p>

           
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
