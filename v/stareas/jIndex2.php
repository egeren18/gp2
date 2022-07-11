<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Sistema De Tareas</a>
            <a href="#!" class="breadcrumb ">Lista</a>
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

    <div class="row">
        <div class="col s12 m12 l12 m-t-5">
            <div class="card blue-grey lighten-5 hoverable">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <span class="blue-text p-l-10">Sistema De Tareas</span>
                            <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar"><i class="material-icons blue-grey-text">cancel</i></a>
                            <a href="#" class="tooltipped right" data-position="left" data-tooltip="Nuevo Registro">
                                <i class="material-icons grey-text">add_circle</i>
                            </a>
                        </div>
                    </div>
                    <div class="card m-t-10 m-l-5 m-r-5">
                        <div class="row">
                            <div class="col s12">
                                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                <div class="col s12 m-t-20">
                                                        <ul class="tabs">
 <li class="tab col l2 blue-grey lighten-5"><a class="active tooltipped" data-position="bottom" data-tooltip="Datos Generales" href="#P1">En Proceso</a></li>
  <li class="tab col l2 blue-grey lighten-5"><a class="tooltipped" data-position="bottom" data-tooltip="Persona Contacto" href="#P2">Terminado</a></li>
                                                            
                                                        </ul>
                                                    </div>

                                                    
                                                    <div id="P1" class="col s12 ">
                                                        <div class="m-t-30"></div>
                                                        <div class="row">
                                                        <table id='example2' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td >Nro</td>
                                                <td>Asunto</td>
                                                <td>Tarea</td>
                                                <td >Fecha solicitud</td>
                                                <td >Asignado A</td>
                                                <td class="td-block">Tiempo Estimado</td>
                                                <td>Estatus</td> 
                                                <td>Acci&oacute;n</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($stareas = $_stareas1 -> fetch_object()) {
                                            
                                            $_user = mysqli_query($master, "
                                                SELECT * FROM user
                                                WHERE userId = '" . $stareas -> userId . "'
                                                
                                            ");
                                            $user = mysqli_fetch_array($_user);
                                            // set fields
                                            $name = $user["userName"];
                                            ?>
                                            <tr>
                                                <td ><?php echo $stareas -> stareasId; ?></td>
                                                <td>
                                                    <?php echo $stareas -> stareasName; ?>
                                                </td>
                                                <td>
                                                    <?php echo $stareas -> st; ?>
                                                </td>
                                                <td>
                                                    <?php echo $stareas -> date; ?>
                                                </td>
                                                <td><?php echo $name ?></td>
                                                <td>
                                                    <?php echo $stareas -> testimado; ?> Horas
                                                </td>
                                                <td>
                                          <?php 
                                           if($stareas -> important == 1){
                                           if($stareas -> stareasStatus ==3){?><i class="material-icons m-l-10 red-text ">error_outline</i><?php }
                                           if($stareas -> stareasStatus ==2){?><i class="material-icons m-l-10 green-text">error_outline</i><?php }
                                            if($stareas -> stareasStatus ==1){?><i class="material-icons m-l-10 orange-text">error_outline</i><?php }?>
                                           <?php }else{
                                           if($stareas -> stareasStatus ==3){?><i class="material-icons m-l-10 red-text ">warning</i><?php }
                                           if($stareas -> stareasStatus ==2){?><i class="material-icons m-l-10 green-text">done</i><?php }
                                            if($stareas -> stareasStatus ==1){?><i class="material-icons m-l-10 orange-text">done</i><?php }}?>
                                            
                                                </td>
                                                <td>
<a href="../c/stareas.php?m=read&id=<?php  echo $stareas -> stareasId;?>&sm=<?php  echo $stareas -> stareasmId;?>" class="tooltipped m-l-10" data-position="top" data-tooltip="Consultar"><i class="material-icons blue-text">search</i></a>     

<?php if($stareas -> stareasStatus == 1 OR $stareas -> stareasStatus == 3 ){?>
<a href="../c/stareas.php?m=update&id=<?php  echo $stareas -> stareasId ?>&sm=<?php  echo $stareas -> stareasmId;?>" class="tooltipped m-l-10" data-position="left" data-tooltip="Modificar">
<i class="material-icons  blue-text">edit</i></a>
<?php }else
{?>
<a href="#" class="tooltipped m-l-10" data-position="left" data-tooltip="Modificar">
<i class="material-icons  grey-text">edit</i></a>

<?php }?>



<a href="#" class="tooltipped m-l-10" data-position="top" data-tooltip="Eliminar"><i class="material-icons grey-text">delete</i></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                                      

                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="P2" class="col s12">
                                                        <div class="m-t-30"></div>
                                                        
                                                        
                                                        
                                                        <div class="row">
                                                    
                                                   <table id='example' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td>Nro</td>
                                                
                                                <td>Tarea</td>
                                                <td class="td-block" >Fecha</td>
                                                <td>Estatus</td> 
                                                <td>Acci&oacute;n</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($stareas = $_stareasA1 -> fetch_object()) { ?>
                                            <tr>
                                                <td ><?php echo $stareas -> stareasId; ?></td>
                                                
                                                <td>
                                                    <?php echo $stareas -> st; ?>
                                                </td>
                                                <td style="width:70%;">
                                                    <?php echo $stareas -> date; ?>
                                                </td>
                                                <td>
                                          <?php
                                           if($stareas -> important == 1){
                                           if($stareas -> stareasStatus ==3){?><i class="material-icons m-l-10 red-text ">error_outline</i><?php }
                                           if($stareas -> stareasStatus ==2){?><i class="material-icons m-l-10 green-text">error_outline</i><?php }
                                           if($stareas -> stareasStatus ==1){?><i class="material-icons m-l-10 orange-text">error_outline</i><?php }
                                           if($stareas -> stareasStatus ==4){?><i class="material-icons m-l-10 blue-text ">error_outline</i><?php }?>
                                           <?php }else{
                                           if($stareas -> stareasStatus ==3){?><i class="material-icons m-l-10 red-text ">warning</i><?php }
                                           if($stareas -> stareasStatus ==2){?><i class="material-icons m-l-10 green-text">done</i><?php }
                                           if($stareas -> stareasStatus ==1){?><i class="material-icons m-l-10 orange-text">done</i><?php }
                                           if($stareas -> stareasStatus ==4){?><i class="material-icons m-l-10 blue-text ">done_all</i><?php }}?>
                                           
                                            
                                                </td>
                                                <td>


<a href="../c/stareas.php?m=read&id=<?php  echo $stareas -> stareasId ?>&sm=<?php  echo $stareas -> stareasmId;?>" class="tooltipped m-l-10" data-position="top" data-tooltip="Consultar"><i class="material-icons blue-text">search</i></a>     
     
     

<?php if($stareas -> stareasStatus == 3 ){?>
<a href="#" class="tooltipped m-l-10" data-position="left" data-tooltip="Modificar">
<i class="material-icons  grey-text">edit</i></a>
<?php }else
{?>
<a href="#" class="tooltipped m-l-10" data-position="left" data-tooltip="Modificar">
<i class="material-icons  grey-text">edit</i></a>

<?php }?>



<a href="#" class="tooltipped m-l-10" data-position="top" data-tooltip="Eliminar"><i class="material-icons grey-text">delete</i></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                                      


                                                        </div>

                                                        <div class="row">
                                                            <div class="col s12">
                                                               
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