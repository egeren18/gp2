<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Tarea</a>
            <a href="#!" class="breadcrumb ">Tarea</a>
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
                            <span class="breadcrumb  p-l-10">Tarea</span>
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
                            <div class="col s12 l6 ">


            <!-- aqui empieza el azul -->
<div class="card white m-t-10 m-l-5 m-r-5">
    <div class="row   ">
            <!-- aqui mmgvo ciegho -->                       
        <div class="col s12 l12 " >
        <div class="m-t-20 m-b-20 m-l-20 m-r-20">
<!-- aqui esta el formulario enviado por el usuario -->
<form id="form_validation" action="../c/ticket.php?m=createDb" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">

<div class="row">   
<ul class="collection m-t-20">
<li class="collection-item blue-grey lighten-2 white-text">Descripcion</li></ul>
          <div class="m-t-20"></div>
       
                    <div class="col s12 m6 l6 m-t-10 ">
                        <div class="input-field">
                            <input value="<?php echo  $aName  ; ?>" id="titulo" name="titulo" placeholder="" type="text" class="validate" required readonly >
                            <label class="" for="titulo">Asignado A:</label>
                                
                        </div>
                    </div>
                    
                    <div class="col s12 m6 l6 m-t-10 ">
                        <div class="input-field">
                            <input value="<?php echo  $departmentName  ; ?>" id="departmentName" name="departmentName" placeholder="" type="text" class="validate" required readonly >
                            <label class="" for="departmentName">Departamento:</label>
                                
                        </div>
                    </div>
                    
    <div class="col s12 m6 l12 m-t-10 ">
                        <div class="input-field">
                            <input value="<?php echo  $asunto  ; ?>" id="titulo" name="titulo" placeholder="" type="text" class="validate" required readonly >
                            <label class="" for="titulo">Asunto</label>
                                <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
                        </div>
                    </div>   
                    <div class="col s12 m6 l12 m-t--10 ">
                        <div class="input-field">
                            <input value="<?php echo  $st  ; ?>" id="titulo" name="titulo" placeholder="" type="text" class="validate" required readonly >
                            <label class="" for="titulo">Tarea</label>
                                <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
                        </div>
                    </div>   
                    
                    <div class="col s12 m6 l4 m-t--10 ">
                        <div class="input-field">
                            <input value="<?php echo $ptareat;?>"  id="n" name="n" placeholder="" type="text" class="validate" readonly>
                            <label class="" for="n">Prioridad De Tarea</label>
                                
                        </div>
                    </div>

    

                    <div class="col s12 m6 l4 m-t--10 ">
                        <div class="input-field">
                            <input value="<?php echo $date;?>"  id="n" name="n" placeholder="" type="text" class="validate" readonly>
                            <label class="" for="n">Fecha Asignada</label>
                            
                                <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
                        </div>
                    </div>

                <div class="col s12 m6 l4 m-t--10 ">
                        <div class="input-field">
                            <input value="<?php echo  $tiempo; ?> horas" id="grupoId" name="grupoId" placeholder="" type="text" class="validate" readonly >
                            <label class="" for="cat">Tiempo Estimado</label>
                                
                         </div>
                    </div>

                    </div>
 

<div class="row">           
        <div class="col s12 m-t--10 ">    
<ul class="collapsible">
<li>
<div class="collapsible-header "><i class="material-icons blue-text">edit</i>Texto</div>
<div class="collapsible-body">    
<textarea class="ckeditor" name="stareasText" readonly><?php echo $stareasText ; ?>
</textarea></div>
</li>
</ul></div>
</div>
<div class="row">           
        <div class="col s12 m-t-20 ">    
<ul class="collapsible">
<li>
<div class="collapsible-header "><i class="material-icons blue-text">edit</i>Explicaci&oacute;n de la sub Tarea</div>
<div class="collapsible-body">    
<textarea class="ckeditor" name="stareasText" readonly><?php echo $exp ; ?>
</textarea></div>
</li>
</ul></div>
</div>

<div class="row">
<div class="col s12 m12">
   <ul class="collection m-t-20">
      <li class="collection-item blue-grey lighten-2 white-text">Documento</li>
                 <li class="p-l-10 p-r-10 p-t-10 p-b-10">
              <div class="row">
                      <div class="col s12">
                   <?php
                            $id = $si;
                             $path2 = "../stareas/" . $id;
                            if (file_exists($path2)) {
                                $directorio2 = opendir($path2);
                                while ($archivo2 = readdir($directorio2)) {
                                    if (!is_dir($archivo2)) {?>      
                               <div class="file-field input-field">
                                   <div class="btn white tooltipped" data-position="top" data-tooltip="Documento">
                                       <i class="material-icons blue-text">attach_file</i>
                                                                       
                                 </div>
                              <div class="file-path-wrapper">
                            <input value="<?php echo $archivo2;?>" type="text" readonly>
                     </div>
                  </div>
              </div>
                                                        </div>
                 <div class="row">
                 <div class="col s12  m-t--10 m-b-5">
                <a class="blue-text" target="_blank" href="<?php echo $path2;?>/<?php echo $archivo2;?>">Ver Documento</a>
         <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Ver el Documento Adjunto"><i class="material-icons blue-text">info</i></a>
                                                                </div>

                                                                                                        
                                                        </div><?php }}}
      else{?>
  <div class="row">


    <div class="col s12 ">
            <div class="file-field input-field">
                <div class="btn white ">
                    <i class="material-icons blue-text">attach_file</i>
                    <input class="blue" type="file" accept="image/*"  id="archivo2[]" name="archivo2[]">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Adjuntar Documento!">
                </div>
            </div>
        </div>




</div>
              <div class="row">
                  <div class="col s12 l6 m-t--10 m-b-5">
                      <a class="grey-text" href="#!">Ver Documento</a>
                          <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Ver el Documento Adjunto"><i class="material-icons grey-text">info</i></a>
                    </div>
                                                                                                       
                </div>

                                                     <?php }?>
         
                                                    </li>
                                                </ul>
                                            </div>

</div>
<!-- img sub tarea -->

<div class="row">
<div class="col s12 m12">
   <ul class="collection m-t-20">
      <li class="collection-item blue-grey lighten-2 white-text">Img Sub Tarea</li>
                 <li class="p-l-10 p-r-10 p-t-10 p-b-10">
              <div class="row">
                      <div class="col s12">
                   <?php
                            $id = $stareasId ;
                             $path2 = "../stareasm/" . $id;
                            if (file_exists($path2)) {
                                $directorio2 = opendir($path2);
                                while ($archivo2 = readdir($directorio2)) {
                                    if (!is_dir($archivo2)) {?>      
                               <div class="file-field input-field">
                                   <div class="btn white tooltipped" data-position="top" data-tooltip="Documento">
                                       <i class="material-icons blue-text">attach_file</i>
                                                                       
                                 </div>
                              <div class="file-path-wrapper">
                            <input value="<?php echo $archivo2;?>" type="text" readonly>
                     </div>
                  </div>
              </div>
                                                        </div>
                 <div class="row">
                 <div class="col s12  m-t--10 m-b-5">
                <a class="blue-text" target="_blank" href="<?php echo $path2;?>/<?php echo $archivo2;?>">Ver Documento</a>
         <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Ver el Documento Adjunto"><i class="material-icons blue-text">info</i></a>
                                                                </div>

                                                                                                        
                                                        </div><?php }}}
      else{?>
  <div class="row">


    <div class="col s12 ">
            <div class="file-field input-field">
                <div class="btn white ">
                    <i class="material-icons blue-text">attach_file</i>
                    <input class="blue" type="file" accept="image/*"  id="archivo2[]" name="archivo2[]">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Adjuntar Documento!">
                </div>
            </div>
        </div>




</div>
              <div class="row">
                  <div class="col s12 l6 m-t--10 m-b-5">
                      <a class="grey-text" href="#!">Ver Documento</a>
                          <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Ver el Documento Adjunto"><i class="material-icons grey-text">info</i></a>
                    </div>
                                                                                                       
                </div>

                                                     <?php }?>
         
                                                    </li>
                                                </ul>
                                            </div>

</div>

<!-- img sub tarea -->



                
                                        <div class="row">
                                            <div class="col s12 m-t-30">
                                                <a href="javascript: history.go(-1);" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">close</i>
                                                </a>
                                               
                                            </div>
                                        </div>
                                    </form>
<!-- aqui termina el formulario en viado por el usuario -->
        </div>
    </div>
    </div>
    </div>
</div>
<!-- aqui termina el primer card -->

<!-- aqui empieza el segundo car con condicional-->

<!--aqui es cuando el estatus es 1  -->


<div class=" col s12 l6">

<div class="card white m-t-10 m-l-5 m-r-5">
    <div class="row   ">
            <!-- aqui mmgvo ciegho -->                       
        <div class="col s12 l12 " >
        <div class="m-t-20 m-b-20 m-l-20 m-r-20">
<!-- aqui esta el formulario enviado por el usuario -->
<form id="form_validation" action="../c/stareas.php?m=updateDb&id=<?php echo $_GET["sm"]; ?>&cid=<?php echo $si ;?>" method="post"
 enctype="multipart/form-data" onsubmit="return checkForm(this);">

<div class="row">   
<ul class="collection m-t-20">
<li class="collection-item blue-grey lighten-2 white-text">Formulario</li></ul>
          <div class="m-t-20"></div>
       
</div>
<div class="row">   
    
</div>
<div class="row">
    
    <!-- area de respuesta del sistema -->
    

               
<div class="col s12 ">    
<ul class="collapsible">
<li>
<div class="collapsible-header "><i class="material-icons blue-text">edit</i>Comentarios</div>
<div class="collapsible-body">    

<textarea class="ckeditor" name="comentarios" ><?php echo $comentarios ;?>
</textarea>

</div>
</li>
</ul>
</div>
<?php if($_GET['end'] == 1){?>
<div class="col s12 m-t-10">    
<ul class="collapsible">
<li>
<div class="collapsible-header "><i class="material-icons blue-text">edit</i>Comentarios Revisi&oacute;n</div>
<div class="collapsible-body">    

<textarea class="ckeditor" name="comentarios2" ><?php echo $comentarios2 ;?>
</textarea>

</div>
</li>
</ul>
</div>
<?php }?>
<?php if($estado == 3 or $estado == 4 ){?>
<div class="col s12 m-t-10">    
<ul class="collapsible">
<li>
<div class="collapsible-header "><i class="material-icons blue-text">edit</i>Comentarios Revisi&oacute;n</div>
<div class="collapsible-body">    

<textarea class="ckeditor" name="comentarios2" readonly><?php echo $comentarios2 ;?>
</textarea>

</div>
</li>
</ul>
</div>
<?php }?>

</div>


<div class="row">
<div class="col s12 m12">
   <ul class="collection m-t-20">
      <li class="collection-item blue-grey lighten-2 white-text">Documento</li>
                 <li class="p-l-10 p-r-10 p-t-10 p-b-10">
              <div class="row">
                      <div class="col s12">
                   <?php
                            $id = $stareasId;
                             $path2 = "../stareasA/" . $id;
                            if (file_exists($path2)) {
                                $directorio2 = opendir($path2);
                                while ($archivo2 = readdir($directorio2)) {
                                    if (!is_dir($archivo2)) {?>      
                               <div class="file-field input-field">
                                   <div class="btn white tooltipped" data-position="top" data-tooltip="Documento">
                                       <i class="material-icons blue-text">attach_file</i>
                                                                       
                                 </div>
                              <div class="file-path-wrapper">
                            <input value="<?php echo $archivo2;?>" type="text" readonly>
                     </div>
                  </div>
              </div>
                                                        </div>
                 <div class="row">
                 <div class="col s12  m-t--10 m-b-5">
                <a class="blue-text" target="_blank" href="<?php echo $path2;?>/<?php echo $archivo2;?>">Ver Documento</a>
         <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Ver el Documento Adjunto"><i class="material-icons blue-text">info</i></a>
                                                                </div>

                                                                                                        
                                                        </div><?php }}}
      else{?>
  <div class="row">


    <div class="col s12 ">
            <div class="file-field input-field">
                <div class="btn white ">
                    <i class="material-icons blue-text">attach_file</i>
                    <input class="blue" type="file" accept="image/*"  id="archivo2[]" name="archivo2[]">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Adjuntar Documento!">
                </div>
            </div>
        </div>




</div>
              <div class="row">
                  <div class="col s12 l6 m-t--10 m-b-5">
                      <a class="grey-text" href="#!">Ver Documento</a>
                          <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Ver el Documento Adjunto"><i class="material-icons grey-text">info</i></a>
                    </div>
                                                                                                       
                                                                                                                
                </div>

                                                     <?php }?>
         
                                                    </li>
                                                </ul>
                                            </div>

</div>

<div class="row">
    
                                        <div class="col s12 m6 l4 m-t-10 ">
                        <div class="input-field">
                            <input value="<?php echo  $treal; ?> " id="treal" name="treal" placeholder="" type="text" class="validate" >
                            <label class="" for="treal">Tiempo Real</label>
                            
                                                </div>
                                        </div>
                                        
                                        
                                        <?php if($_GET['end'] == 1){?>
                                        
                                        
                                        <div class="col s12">
                                            <label>
                                                <input type="radio" name="approved" value="3" required/>
                                                <span class="blue-grey-text text-darken-2"><span class="red-text">Devolver</span>, para revisi&oacute;n y/o correcci&oacute;n!</span>";
                                            </label>
                                        </div>
                                        <div class="col s12">
                                            <label>
                                                <input type="radio" name="approved" value="4"/>
                                                <span class="blue-grey-text text-darken-2"><span class="blue-text">Aprobar</span>, Revisado y Corregido!</span>
                                            </label>
                                        </div>
                                        <div class="col s12 m-t-20">
                                                <label>
                                                    <input type="checkbox" <?php if ($important == 1){?> checked="checked" <?php }else {?> <?php }?> name="important"/>
                                                    <span class="blue-grey-text text-darken-2">Haga click en el recuadro si considera haber hallado una "Situaci&oacute;n Importante"!</span>
                                                </label>
                                            </div>
                                                <div class="col s12 m-t-10">
                                                    <label>
                                                        <input type="checkbox" class="validate filled-in" required />
                                                        <span class="blue-grey-text text-darken-2">Estoy de acuerdo con las informaci&oacute;n suministrada!</span>
                                                    </label>
                                                </div>
                                        <?php }else { ?>
                                            <div class="col s12 m-t-10">
                                                    <label>
                                                        <input name="checkterminado" type="checkbox"  />
                                                        <span>Completado</span>
                                                    </label>
                                            </div>
                                            
                                                <div class="col s12 m-t-10">
                                                    <label>
                                                        <input type="checkbox" class="validate filled-in" required />
                                                        <span>Estoy de acuerdo con las informaci&oacute;n suministrada!</span>
                                                    </label>
                                                </div>
                                                
                                                <?php } ?>
                                                
                                            </div>


                
                                        <div class="row">
                                            <div class="col s12 m-t-30">
                                                <a href="javascript: history.go(-1);" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">close</i>
                                                </a>
                                                <button id="vSubscriber" type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                                                    <i class="material-icons">save</i>
                                                                </button>
                                            </div>
                                        </div>
                                        
                                    </form>
<!-- aqui termina el formulario en viado por el usuario -->
        </div>
    </div>
    </div>
    </div>




</div>


<!-- termina aqui es cuando el estatus es 1  -->


<!-- aqui termina azul -->


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
