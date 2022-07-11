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
            <a href="#leyenda" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="leyenda">
                <i class="material-icons green-text">local_offer</i>
            </a>
            <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                <?php echo $_SESSION["userFullName"];?>
            </span>
        </div>
    </div>

    <form id="form_validation" action="../c/stareas.php?m=createDbR&d=<?php echo $stareasId; ?>" method="post">
        <div class="row">
            <div class="col s12 m12 l12 m-t-5">
                <div class="card blue-grey lighten-5 hoverable">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <span class="blue-text p-l-10">Tarea</span>
                                <a href="../c/stareas.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                    <i class="material-icons blue-grey-text">cancel</i>
                                </a>
                                <a href="javascript: history.go(-1);" class="tooltipped right m-l-5" data-position="left" data-tooltip="Atr&aacute;s">
                                <i class="material-icons blue-grey-text">undo</i>
                            </a>
                            </div>
                        </div>


<!-- tabla de informacion del Cuestionario -->
<div class="row">
 <div class="col s12 m6 l5 m-t--5 m-b-10 m-l-10">
                                        <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                                <table class="blue-grey lighten-4 m-l-10">
                                              
                                                    <tr>
                                                        <td>Tarea:</td>
                                                        <td><?php echo $stareasName; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tiempo Estimado:</td>
                                                        <td><?php echo $acumulador; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Departamento:</td>
                                                        <td><?php echo $departmentName; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Texto:</td>
                                                        <td><?php echo $stareasText; ?></td>
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
                                                    ['Accion', 'Cumplimiento'],
                                                    ['Revisado', <?php echo $contador4; ?>],
                                                    ['Corregir', <?php echo $contador3; ?>],
                                                    ['completado', <?php echo $contador2; ?>],
                                                    ['Sin Editar', <?php echo $contador1; ?>]
                                                ]);
                                                var options = {
                                                    width:250,
                                                    height:135,
                                                    title: '',
                                                    chartArea: { 'width': '100%', 'height': '100%' },
                                                    colors: ['#2196f3','#f44336', '#4caf50','#cfd8dc'],
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
            <?php if($botones -> important == 1){
                                               
                if($botones -> stareasStatus == 1){?> 
               <a href='#'>  
               <i data-tooltip='<?php echo $num;?>' class='material-icons tooltipped green-text' data-position='top'></i><?php echo $num; ?></a>
                <?php } 
               
                if($botones -> stareasStatus == 2){?> 
               <a href='../c/stareas.php?m=update&id=<?php echo $botones -> stareasId;?>&sm=<?php echo $botones -> stareasmId; ?>&end=1'>
                    <i data-tooltip='Listo' class='material-icons tooltipped green-text' data-position='top'>error_outline</i></a>
                <?php }
                if($botones -> stareasStatus == 3){?> 
               <a href='#'>
                    <i data-tooltip='Listo' class='material-icons tooltipped red-text' data-position='top'>error_outline</i></a>
                <?php } 
                
                if($botones -> stareasStatus == 4){?> 
               <a href='../c/stareas.php?m=read&id=<?php echo $botones -> stareasId;?>&sm=<?php echo $botones -> stareasmId; ?>&end=1'>
                    <i data-tooltip='Listo' class='material-icons tooltipped blue-text' data-position='top'>error_outline</i></a>
                <?php }}
                else{
                  if($botones -> stareasStatus == 1){?> 
                
               <a href='#'>  
               <i data-tooltip='<?php echo $num;?>' class='material-icons tooltipped green-text' data-position='top'></i><?php echo $num; ?></a>
                <?php } ?>
                
                <?php if($botones -> stareasStatus == 3){?> 
               <a href='#'>
                    <i data-tooltip='Listo' class='material-icons tooltipped red-text' data-position='top'>warning</i></a>
                <?php } ?>
                <?php if($botones -> stareasStatus == 4){?> 
               <a href='../c/stareas.php?m=read&id=<?php echo $botones -> stareasId;?>&sm=<?php echo $botones -> stareasmId; ?>&end=1'>
                    <i data-tooltip='Listo' class='material-icons tooltipped blue-text' data-position='top'>done_all</i></a>
                <?php } ?>
                
                <?php if($botones -> stareasStatus == 2){?> 
               <a href='../c/stareas.php?m=update&id=<?php echo $botones -> stareasId;?>&sm=<?php echo $botones -> stareasmId; ?>&end=1'>
                    <i data-tooltip='Listo' class='material-icons tooltipped green-text' data-position='top'>done</i></a>
                <?php }
                    
                    
                    }?>

            
                
            </div>
            <?php } ?>
        </div>
    </div>


    
<!-- lista de categorias y dentro las preguntas -->
       <div class="row">
                                <div class="col s12 m-t-10">
                                    <ul class="collapsible m-l-10 m-r-10">
                                        <li><?php include 'a1.php';?>  </li>
                                    </ul>
                                    <ul class="m-l-25">
                                    </ul>
                                </div>
                            </div>
<!-- lista de categorias y dentro las preguntas -->
<?php if($ssid ==1){ ?>
<!-- parte donde se termina el update -->
                        <div class="card m-t-10 m-l-5 m-r-5">
                            <div class="card p-t-20 p-b-15 p-l-20 p-r-20">

                                <div class="row">
                                            <div class="col s12   ">
                                       <div class='card-panel white-text blue-grey darken-2' style='line-height : 5px;'>Completar Tarea</div>
                                                <label>
                                                    <input type="checkbox" class="validate filled-in" required="" />
                                                    <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                </label>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col s12 m-t-20">
                                        <a href="../c/stareas.php?m=list&pid=<?php echo $d; ?>" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
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
           <?php } ?>             
                        
                        
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

<!-- modal de ayuda-->
<div id="help" class="modal" style="width:80%;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        Manual 
                    </div>
                </div>
            </div>
<div class="modal-content">
                
                
<div class="col s12 l12 ">
                    
    <div class="row   ">
        
         <div class="col s12" >
            <div class="  ">


<div class="row">   
    <div class="col s12 m12 l12 m-t--10">
        <div class="input-field">
            <input value="Sistema de Tareas" id="cuestionarioName" name="cuestionarioName" placeholder="" type="text" readonly>
            <label class="font-17" for="cacName">Manual</label>
        </div>
    </div>
</div>    
<div class="row">

    <div class="col s12 m12 l12 ">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons green-text">contacts</i>Sistema de tareas </div>
              <div class="collapsible-body">  
                  <div class="input-field">
                  <p> El sistema de tareas esta dise&ntilde;ado para cordinar el cumplimiento de trabajos en equipo 
                  </p>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>
    
</div>



    </div>
</div>



    </div>
       
</div>
         </div>
    </div>
<!-- end modal de ayuda -->
<?php include '../v/support/leyenda-st.php'; ?>
<?php include '../v/support/modalAdd.php'; ?>

<script type="text/javascript" src="../js/shareholder.js"></script>
