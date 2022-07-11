<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Pregunta Modelo AC</a>
            <a href="#!" class="breadcrumb ">A&ntilde;adir</a>
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

    <form id="form_validation" action="../c/pac.php?m=createDb&d=<?php echo $d; ?>" method="post">
        <div class="row">
            <div class="col s12 m12 l12 m-t-5">
                <div class="card blue-grey lighten-5 hoverable">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <span class="blue-text p-l-10">Pregunta Modelo AC </span>
                                <a href="../c/pac.php?m=list&pid=<?php echo $d; ?>" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                    <i class="material-icons blue-grey-text">cancel</i>
                                </a>
                            </div>
                        </div>


<!-- tabla de informacion del Cuestionario -->
<div class="row">
 <div class="col s12 m6 l5 m-t--5 m-b-10 m-l-10">
                                        <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                                <table class="blue-grey lighten-4 m-l-10">
                                              
                                                    <tr>
                                                        <td>Cuestionario:</td>
                                                        <td><?php echo $modeloName; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Categorias:</td>
                                                        <td><?php echo $sacc; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Preguntas:</td>
                                                        <td><?php echo $sacp; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fecha de Creaci&oacute;n:</td>
                                                        <td><?php echo $cdate; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fecha de Ultima Actualizaci&oacute;n:</td>
                                                        <td><?php echo $cdate; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Version:</td>
                                                        <td><?php echo $version; ?></td>
                                                    </tr>
                                                  
                                                    
                                                </table>
                                        </div>
                                    </div>
<!-- grafico de goolge -->                                    
                     
               <div class="col s12 m6 l5 m-t-15 m-b-30">
                                        <div class="p-t-10 p-b-20">
                                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                            <script type="text/javascript">
                                            google.charts.load('current', {'packages':['corechart']});
                                            google.charts.setOnLoadCallback(drawChart);
                                            function drawChart() {
                                                var data = google.visualization.arrayToDataTable([
                                                    ['Acción', 'Cumplimiento'],
                                                    ['Completado', <?php echo $contador; ?>],                                                    
                                                    ['Sin Editar', <?php echo $acumulador; ?>]
                                                ]);
                                                var options = {
                                                    width:250,
                                                    height:135,
                                                    title: '',
                                                    chartArea: { 'width': '100%', 'height': '100%' },
                                                    colors: ['#4caf50', '#cfd8dc'],
                                                    backgroundColor: 'transparent',
                                                    legend: { position: 'left', textStyle: { color: 'grey', fontSize: 10 }}
                                                };
                                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                                chart.draw(data, options);
                                            }
                                            </script>
                                            <div class="right" id="piechart"></div>
                                        </div>
               </div>       
                                    
<!-- grafico de goolge -->                                    
                                    
                                    
                                    
                                    
</div>
<!-- parte donde se termina el update -->   

<!-- botones marcios con su anumeracion y estatus -->


    <div class="row">
        <div class="col s12" style="margin-left:10px;">
            <?php 
            $num = 0;
            while($botones = $_botones -> fetch_object()){
            $num++;?>
            <div class='q-items b-b-white'>
                <?php if($botones -> status < 1){?> 
               <a href='../c/pac.php?m=create3&pacId=<?php echo $botones -> pacId;?>&serviceId=<?php echo $botones -> serviceId;?>&cacId=<?php echo $botones -> cacId;?>&version=<?php echo $botones -> version;?>'>  
               <i data-tooltip='<?php echo $num;?>' class='material-icons tooltipped green-text' data-position='top'></i><?php echo $num; ?></a>
                <?php } ?>
                <?php if($botones -> status == 1){?> 
               <a href='../c/pac.php?m=create3&pacId=<?php echo $botones -> pacId;?>&serviceId=<?php echo $botones -> serviceId;?>&cacId=<?php echo $botones -> cacId;?>&version=<?php echo $botones -> version;?>'>
                    <i data-tooltip='Listo' class='material-icons tooltipped green-text' data-position='top'>done_all</i></a>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>


    
<!-- lista de categorias y dentro las preguntas -->
       <div class="row">
                                <div class="col s12 m-t-10">
                                    <ul class="collapsible m-l-10 m-r-10">
                                       <?php if ($cacId1 == 1){ ?> <li>  <?php  include 'cac1.php' ?>  </li><?php } ?>
                                       <?php if ($cacId2 == 2){ ?>  <li>  <?php  include 'cac2.php' ?>  </li><?php } ?>
                                       <?php if ($cacId3 == 3){ ?> <li>  <?php  include 'cac3.php' ?>  </li><?php } ?>
                                       <?php if ($cacId4 == 4){ ?> <li>  <?php  include 'cac4.php' ?>  </li><?php } ?>
                                       <?php if ($cacId5 == 5){ ?>  <li>  <?php  include 'cac5.php' ?>  </li><?php } ?>
                                       <?php if ($cacId6 == 6){ ?> <li>  <?php  include 'cac6.php' ?>  </li><?php } ?>
                                       <?php if ($cacId7 == 7){ ?>  <li>  <?php  include 'cac7.php' ?>  </li><?php } ?>
                                       <?php if ($cacId8 == 8){ ?> <li>  <?php  include 'cac8.php' ?>  </li><?php } ?>
                                       <?php if ($cacId9 == 9){ ?>  <li>  <?php  include 'cac9.php' ?>  </li><?php } ?>
                                       <?php if ($cacId10 == 10){ ?> <li>  <?php include 'cac10.php'; ?>  </li> <?php } ?>
                                    
                                    </ul>
                                    <ul class="m-l-25">
                                    </ul>
                                </div>
                            </div>
<!-- lista de categorias y dentro las preguntas -->

<!-- parte donde se termina el update -->
                        <div class="card m-t-10 m-l-5 m-r-5">
                            <div class="card p-t-20 p-b-15 p-l-20 p-r-20">

                                <div class="row">
                                            <div class="col s12   ">
                                       <div class='card-panel white-text blue-grey darken-2' style='line-height : 5px;'>Completar Update</div>
                                                <label>
                                                    <input type="checkbox" class="validate filled-in" required="" />
                                                    <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                </label>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col s12 m-t-20">
                                        <a href="../c/pac.php?m=list&pid=<?php echo $d; ?>" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                            <i class="material-icons">cancel</i>
                                        </a>
                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                            <i class="material-icons">save</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
   <!-- parte donde se termina el update -->                     
                        
                        
                        
                        <div class="row">
                            <div class="col s12 m-t-15">
                                <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

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

<?php include '../v/support/modalAdd.php'; ?>

<script type="text/javascript" src="../js/shareholder.js"></script>
