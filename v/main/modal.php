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
                        <a href="#!" class="breadcrumb "><b><?php echo $modal -> moduleTest1; ?></b></a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        
                        </a>
                    </div>
                </div>
                <div class="divider"></div>
                
 <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test11">A&ntilde;adir</a></li>
        <li class="tab col s3"><a  href="#test22">Consultar</a></li>
        <li class="tab col s3"><a href="#test33">Editar</a></li>
        <li class="tab col s3"><a href="#test44">Eliminar </a></li>
      </ul>
    </div>
    <div id="test11" class="col s12">
         <div class="m-t-20"></div>
         <?php echo $modal -> moduleTest3 ; ?>
            <div class="m-t-20"></div>
            
    </div>
    
    <div id="test22" class="col s12">
        <div class="m-t-20"></div>
        <?php echo $modal -> moduleTest4; ?>
      <div class="m-t-20"></div>
                 

                </div>
    
    <div id="test33" class="col s12">
        <div class="m-t-20"></div>
        <?php echo $modal -> moduleTest5; ?>
      <div class="m-t-20"></div>
              <div class="m-t-20"></div>
    </div>
    
    <div id="test44" class="col s12">
        <div class="m-t-20"></div>
        <?php echo $modal -> moduleTest6; ?>
      <div class="m-t-20"></div>
    </div>
  </div>
           
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
