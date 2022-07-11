<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Modal</a>
            <a href="#!" class="breadcrumb ">Lista</a>
            <a href="#help" class="tooltipped right cmodal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                <i class="material-icons blue-text">help</i>
            </a>
            <a href="#ticket" class="tooltipped right cmodal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
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
                            <span class="blue-text p-l-10">Modal</span>
                            <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar"><i class="material-icons blue-grey-text">cancel</i></a>
                            <a href="#" class="tooltipped right" data-position="left" data-tooltip="Nuevo Registro">
                                <i class="material-icons grey-text">add_circle</i>
                            </a>
                        </div>
                    </div>
                
                        
                    <!-- separacion por sagrago y sagra suscriptores  -->
                        
 <div class="card m-t-10 m-l-5 m-r-5">
                        <div class="row">
                            <div class="col s12">
                                <ul class="tabs">
                                    <li class="tab col s3"><a class="active" href="#test1">SAGRAGP</a></li>
                                    <li class="tab col s3"><a  href="#test2">SUSCRIPTORES </a></li>
                                
                                </ul>
                            </div>

                            <div id="test1" class="col s12">
                                    <div class="m-t-20"></div>

                             <div class="col s12">
                                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                  <table id='example' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td class="td-block">M&oacute;dulo</td>
                                              <!--  <td class="td-block">Tipos de Modal</td>-->
                                                <td>Acci&oacute;n</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($cmodal = $_cmodal -> fetch_object()) { 
                                                $_tmodal = mysqli_query($master, "
                                                    SELECT * FROM tmodal
                                                    WHERE cmodaltype = '" . $cmodal -> cmodalType . "'
                                                ");
                                                
                                                $tmodal = $_tmodal -> fetch_object();
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $cmodal -> moduleName; ?>
                                                </td>
                                              <!--  <td>
                                                    <?php echo $tmodal -> tmodalName; ?>
                                                </td> -->
                                                <td>
                                                   
                                                    <a href="
                                                        <?php
                                                        if ($_SESSION["userAdmin"] == 4) {
                                                            $allow = 1;
                                                            echo $link = $allow == 1 ? "../c/{$module}.php?m=list&id={$cmodal -> moduleId}&t=1" : "javascript: void(0)";
                                                        }
                                                        else {
                                                            echo $link = $allow -> jUpdate == 1 ? "../c/{$module}.php?m=list&id={$cmodal -> moduleId}&t=1" : "javascript: void(0)";
                                                        }
                                                        ?>" class="tooltipped m-l-10" data-position="left" data-tooltip="Modificar"><i class="material-icons 
                                                        <?php
                                                        if ($_SESSION["userAdmin"] == 4) {
                                                            $allow = 1;
                                                            echo $color = $allow == 1 ? "blue-text" : "grey-text";
                                                        }
                                                        else {
                                                            echo $color = $allow -> jUpdate == 1 ? "blue-text" : "grey-text";
                                                        }
                                                        ?>">search</i></a>
                                    
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
                                                <td class="td-block">M&oacute;dulo</td>
                                                <!--<td>Tipos de Modal</td>-->
                                                <td>Acci&oacute;n</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($cmodal = $_cmodal2 -> fetch_object()) {
                                                 $_tmodal2 = mysqli_query($master, "
                                                    SELECT * FROM tmodal
                                                    WHERE cmodaltype = '" . $cmodal -> cmodalType . "'
                                                ");
                                                
                                                $tmodal = $_tmodal2 -> fetch_object();
                                         ?>
                                            <tr>
                                                <td style="width:95%;">
                                                    <?php echo $cmodal -> moduleName; ?>
                                                </td>
                                             <!--    <td style="width:85%;">
                                                    <?php echo $tmodal -> tmodalName; ?>
                                                </td>-->
                                                <td>
                                                   
                                                    <a href="
                                                        <?php
                                                        if ($_SESSION["userAdmin"] == 4) {
                                                            $allow = 1;
                                                            echo $link = $allow == 1 ? "../c/{$module}.php?m=list&id={$cmodal -> moduleId}&t=2" : "javascript: void(0)";
                                                        }
                                                        else {
                                                            echo $link = $allow -> jUpdate == 1 ? "../c/{$module}.php?m=list&id={$cmodal -> moduleId}&t=2" : "javascript: void(0)";
                                                        }
                                                        ?>" class="tooltipped m-l-10" data-position="left" data-tooltip="Modificar"><i class="material-icons 
                                                        <?php
                                                        if ($_SESSION["userAdmin"] == 4) {
                                                            $allow = 1;
                                                            echo $color = $allow == 1 ? "blue-text" : "grey-text";
                                                        }
                                                        else {
                                                            echo $color = $allow -> jUpdate == 1 ? "blue-text" : "grey-text";
                                                        }
                                                        ?>">search</i></a>
                                                    </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                
                             
                            </div>


                </div>
       
                        </div>
               
                    <!-- separacion por sagrago y sagra suscriptores  --> 
                        
                        
                        
                        <div class="row">
                            <div class="col s12">
                                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                   
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

<div id="help" class="modal center">
<div class="cmodal-content">
    <p class="left">Aceptaci&oacute;n y Continuidad</p>
</div>
<div class="modal-footer m-t--20 m-b-10">
    <button class="modal-close waves-effect waves-light btn blue">Cerrar</button>
</div>
</div>

<?php include '../v/support/modalAdd.php'; ?>
