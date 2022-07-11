<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Preguntas servicios AC</a>
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
                            <span class="blue-text p-l-10">Preguntas Modelo AC</span>
                            <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar"><i class="material-icons blue-grey-text">cancel</i></a>
                              
                        </div>
                    </div>
                    <div class="card m-t-10 m-l-5 m-r-5">
                        <div class="row">
                            

                          
                                    <div class="m-t-20"></div>

                             <div class="col s12">
                                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                   <table id='example' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td>Modelo</td>
                                                <td>Fecha Creaci&oacute;n</td>
                                                <td>Fecha de Ultima Actualizaci&oacute;n</td>
                                                <td>Versi&oacute;n</td>
                                                <td class="td-block">Usuario Actualizaci&oacute;n</td>
                                                <td>Update</td>
                                               <?php if ($_SESSION["userAdmin"] == 4) { ?>
                                                <td class="center">Consultar</td>
                                                <?php } else { ?>
                                                <td>Acci&oacute;n</td>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($cp = $_cp -> fetch_object()) {
                                            $_service = mysqli_query($master, "
                                                SELECT * FROM modelo
                                                WHERE modeloId = '" . $cp -> serviceId . "'
                                            ");
                                            $service = $_service -> fetch_object();
                                            $name = $service -> modeloName;
                                            
                                             $_tracem = mysqli_query($master, "
                                                SELECT * FROM user
                                                WHERE userId = '" . $cp -> userId . "'
                                            ");
                                            $tracem = $_tracem -> fetch_object();
                                            $userName = $tracem -> userName;
                                            ?>
                                            
                                            <tr><datagrid></datagrid>
                                            <td><?php echo $name; ?></td>
                                            <td><?php echo $cp -> cdate; ?></td> 
                                            <td><?php echo $cp -> date; ?></td>   
                                            <td>Versi&oacute;n <?php echo $cp -> version; ?></td>
                                               <td><?php echo $userName; ?></td>
                                               
                                               <?php 
                                               if( $service-> mupdate == 1) { ?> 
                                               <td><a href="../c/pac.php?m=create2&pid=<?php echo $service -> modeloId;?>"><i class='material-icons blue-text'>add</i></a></td>
                                               <?php }else{?>
                                                   <td><a><i class='material-icons blue-text'>done</i></a></td>
                                               <?php } 
                                               
                                               if ($_SESSION["userAdmin"] == 4) { ?>
                                                        <td class="center">
                                                            <a target="_blank" href='../plugins/pdf/doc/pac.php?id=<?php echo $service -> modeloId; ?>' class='tooltipped' data-position='left' data-tooltip='Ver'><i class='material-icons blue-text'>search</i></a>
                                                        </td>
                                                        <?php } else { ?>
                                                        <td>
                                                            <a href="
                                                                <?php
                                                                $f = $service -> modeloId;
                                                                if ($_SESSION["userAdmin"] == 4) {
                                                                    $allow = 1;

                                                                    echo $link = $allow == 1 ? "../c/{$module}.php?m=list&pid={$service -> modeloId}" : "javascript: void(0)";
                                                                }
                                                                else {
                                                                    echo $link = $allow -> jRead == 1 ? "../c/{$module}.php?m=list&pid={$service -> modeloId}" : "javascript: void(0)";
                                                                }
                                                                ?>" class="tooltipped" data-position="left" data-tooltip="Consultar"><i class="material-icons rotate-90 
                                                                <?php
                                                                if ($_SESSION["userAdmin"] == 4) {
                                                                    $allow = 1;
                                                                    echo $color = $allow == 1 ? "blue-text" : "grey-text";
                                                                }
                                                                else {
                                                                    echo $color = $allow -> jRead == 1 ? "blue-text" : "grey-text";
                                                                }
                                                                ?>">search</i></a>
                                                          
                                                        </td>
                                                        <?php } ?>
                                                    </tr>
                                                    <?php } ?>
                                            </tr>
                                         
                                        </tbody>
                                    </table>
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
