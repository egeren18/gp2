<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down"><?php echo $tsacName;?> </a>
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
                            <span class="blue-text p-l-10"><?php echo $tsacName;?></span>
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
                    <div class="card m-t-10 m-l-5 m-r-5">
                        <div class="row">
                            

                          
                                    <div class="m-t-20"></div>

                             <div class="col s12">
                                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                    <table id='example' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td><?php echo $tsacName;?></td>
                                                <td>Versi&oacute;n</td>
                                               <!-- <td>Fecha Ultima modificaci&oacute;n</td>-->
                                                <td class="td-block">Estatus</td>
                                               <?php if ($_SESSION["userAdmin"] == 4) { ?>
                                                <td class="center">Consultar</td>
                                                <?php } else { ?>
                                                <td>Acci&oacute;n</td>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php while ($cp = $_cp -> fetch_object()) { ?>
                                                
                                            <tr>
                                               <td><?php echo $cp -> cuestionarioName; ?></td>
                                               
                                               <td><?php $dd = $cp -> version - 1;
                                               echo $dd;?></td>
                                               <!--<td><?php echo $date ?></td>-->
                                               <td><?php if($cp -> version == 1){ echo 'Sin Crear';}else {echo 'Creado';} ;?></td>
                                               <?php if ($_SESSION["userAdmin"] == 4) { ?>
                                                        
                                                        <td class="center">
                                                            <a target="_blank" href='../plugins/pdf/doc/sac.php?id=<?php echo $cp -> cuestionarioId; ?>' 
                                                            class='tooltipped' data-position='left' data-tooltip='Ver'><i class='material-icons blue-text'>search</i></a>
                                                        </td>
                                                        <?php } else { ?>
                                                        <td>
                                                            
                                                            
                                                            <?php if($cp -> version > 1) { ?>
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
                                                                    echo $link = $allow == 1 ? "../c/{$module}.php?m=update&tsacId={$tsacId}&cuestionarioId={$cp -> cuestionarioId}" : "javascript: void(0)";
                                                                }
                                                                else {
                                                                    
                                                                    echo $link = $allow -> jUpdate == 1 ? "../c/{$module}.php?m=update&tsacId={$tsacId}&cuestionarioId={$cp -> cuestionarioId}" : "javascript: void(0)";
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
