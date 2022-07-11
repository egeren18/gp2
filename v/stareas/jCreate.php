<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Sistema De Tareas</a>
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

    <div class="row">
        <div class="col s12 m12 l12 m-t-5">
            <div class="card blue-grey lighten-5 hoverable">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <span class="breadcrumb  p-l-10">A&ntilde;adir</span>
                            <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Men&uacute de Inicio">
                                <i class="material-icons blue-grey-text">cancel</i>
                            </a>
                            <a href="javascript: history.go(-1);" class="tooltipped right m-l-5" data-position="left" data-tooltip="Atr&aacute;s">
                                <i class="material-icons blue-grey-text">undo</i>
                            </a>
                        </div>
                    </div>
                

                    <div class=" blue-grey lighten-5 m-t-10 m-l-5 m-r-5">
                    
                    <div class="row">
                            <div class="col s12 l4 ">


            <!-- aqui empieza el azul -->
<div class="card white m-t-10 m-l-5 m-r-5">
    <div class="row   ">
            <!-- aqui mmgvo ciegho -->                       
        <div class="col s12 l12 " >
        <div class="m-t-20 m-b-20 m-l-20 m-r-20">

        <ul class="collection m-t-20">
          <li class="collection-item blue-grey lighten-2 white-text">Tareas Recientes</li></ul>
          <div class="m-t-30"></div>
        <table id='example' class='display nowrap' style='width:100%'>
                                                <thead>
                                                    <tr>
                                                      
                                                        <td>Nro</td>
                                                        <td>Titulo</td>
                                                        <td class="td-block">Fecha</td>
                                                        <td>Acci&oacute;n</td>
                                                        <td>Estatus</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php while ($stareas = $_stareas -> fetch_object()) { ?>
                                                    <tr>
                                                    <td><?php echo $stareas -> stareasId; ?>
                                                
                                                </td>
                                                <td>
                                                    <?php echo $stareas -> stareasName; ?>
                                                </td>
                                                <td><?php echo $stareas -> stareasTime; ?></td>
                                                </td>
                    
                    <td>
                    <a href="../c/stareas.php?m=read&id=<?php  echo $stareas -> stareasId ?>" class="tooltipped m-l-10" data-position="top" data-tooltip="Consultar"><i class="material-icons blue-text">search</i></a>
                    
                    <td>
                    
                                    <a href="" class="tooltipped m-l-10" data-position="top" data-tooltip="Estado">
                                    <?php if($stareas -> stareasStatus ==2){?><i class="material-icons green-text">done_all</i><?php }?>
                                    <?php if($stareas -> stareasStatus ==1){?><i class="material-icons ">done</i><?php }?>
                                    </a>
                   </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
        </div>
    </div>
    </div>
    </div>
    <div class="card white m-t-10 m-l-5 m-r-5">
    <div class="row   ">
<!-- aqui esta el lado derecho -->
    <div class="col s12 l12   " >
        <div class="m-t-20 m-b-20 m-l-20 m-r-20">
        <ul class="collection m-t-20">
          <li class="collection-item blue-grey lighten-2 white-text">Casos Comunes</li></ul>
          <div class="m-t-30"></div>




        </div>
    </div>
    </div>
</div>
</div>

<!-- aqui termina azul -->


<div class="col s12 l8 ">


<!-- aqui empieza el azul -->
                    <div class="card white m-t-10 m-l-5 m-r-5">
                        <div class="row   ">
<!-- aqui mmgvo ciegho -->                       
                            <div class="col s12 l12 " >
                                <div class="m-t-20 m-b-20 m-l-20 m-r-20">



<form id="form_validation" action="../c/stareas.php?m=createDb" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">

<div class="row">   
<ul class="collection m-t-20">
<li class="collection-item blue-grey lighten-2 white-text">Sistema De Tareas</li></ul>
          <div class="m-t-20"></div>
                    
                    
                    
</div>




<div class="row">   
    <div class="col s12 m5 l5 m-t-10 ">
                        <div class="input-field">
                            <input value="" id="stareasName" name="stareasName" placeholder="" type="text" class="validate" required  >
                            <label class="" for="stareasName">Tarea</label>
                                <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
                        </div>
      </div>
    <div class="col s12 m4 l4 m-t-10 ">
                                                             <div class="input-field">
                                                                <select id="ptareaId" name="ptareaId" placeholder="" type="text" class="validate">
                                                                    <option value="">&nbsp;</option>
                                                                    <?php while ($g = $_g -> fetch_object()) { ?>
                                                                    <option value="<?php echo $g -> ptareaId; ?>"><?php echo $g -> ptareaName; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label class="font-13" for="grupoId">Prioridad de Tareas</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
     </div>
     <div class="col s12 m3 l3 m-t-10 ">
                        <div class="input-field">
                            <input value="" id="testimado" name="testimado" placeholder="" type="number" class="validate" required  >
                            <label class="" for="testimado">Tiempo Estimado(horas)</label>
                                <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
                        </div>
      </div>
          
          <div class="col s12 m4 l4 m-t-10 ">
                                                             <div class="input-field">
                                                                <select id="userId" name="departmentId" placeholder="" type="text" class="validate">
                                                                    <option value="">&nbsp;</option>
                                                                    <?php while ($g = $_department -> fetch_object()) { ?>
                                                                    <option value="<?php echo $g -> departmentId; ?>"><?php echo $g -> departmentName; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label class="font-13" for="userId">Departamento:</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
     </div>

          
          
          <div class="col s12 m4 l3 m-t-10 ">
                                                             <div class="input-field">
                                                                <select id="userId" name="userId" placeholder="" type="text" class="validate">
                                                                    <option value="">&nbsp;</option>
                                                                    <?php while ($g = $_user -> fetch_object()) { ?>
                                                                    <option value="<?php echo $g -> userId; ?>"><?php echo $g -> userName; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label class="font-13" for="userId">Lider Asignado:</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
     </div>

</div>


<div class="row">           
        <div class="col s12 ">    
<ul class="collapsible">
<li>
<div class="collapsible-header "><i class="material-icons blue-text">edit</i>Texto</div>
<div class="collapsible-body">    
<textarea class="ckeditor" name="stareasText" >

</textarea></div>
</li>


</ul></div>
</div>



<div class="row">
        <div class="col s12 m-t-10">
            <div class="file-field input-field">
                <div class="btn white ">
                    <i class="material-icons blue-text">attach_file</i>
                    <input class="blue" type="file" accept="*"  id="archivo2[]" name="archivo2[]">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Adjuntar Documento!">
                </div>
            </div>
        </div>
</div>


                    <div class="row">
                                            <div class="col s12 m-t-10">
                                                <label>
                                                    <input name ="asignar" type="checkbox" class="validate filled-in" />
                                                    <span>Asignar subtarea!</span>
                                                </label>
                                            </div>
                                            <div class="col s12 m-t-10">
                                                <label>
                                                    <input type="checkbox" class="validate filled-in" required="" />
                                                    <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 m-t-30">
                                                <a href="javascript: history.go(-1);" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">close</i>
                                                </a>
                                                <button id="vDivision" type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                                    <i class="material-icons">save</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>




<!-- aqui esta el lado derecho -->


                </div>
        </div>
</div>

<!-- aqui termina azul -->




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


<?php include '../v/support/modalAdd.php'; ?>

<script src="../plugins/jansen.js" type="text/javascript"></script>
  <main>

   