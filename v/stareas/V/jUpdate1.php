<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">ticket</a>
            <a href="#!" class="breadcrumb ">Ticket</a>
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
                            <span class="breadcrumb  p-l-10">Ticketd</span>
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
<li class="collection-item blue-grey lighten-2 white-text">Formulario</li></ul>
          <div class="m-t-20"></div>
       
                    <div class="col s12 m6 l3 m-t-10 ">
                        <div class="input-field">
                            <input value="<?php echo $sName; ?>" id="titulo" name="titulo" placeholder="" type="text" class="validate" readonly>
                            <label class="" for="titulo">Suscriptor</label>
                                
                        </div>
                    </div>
                    
                    <div class="col s12 m6 l3 m-t-10 ">
                        <div class="input-field">
                            <input value="<?php echo $name;?>"  id="n" name="n" placeholder="" type="text" class="validate" readonly>
                            <label class="" for="n">Nombre</label>
                                
                        </div>
                    </div>

    <div class="col s12 m6 l3 m-t-10 ">
                        <div class="input-field">
                            <input value="<?php echo  $titulo  ; ?>" id="titulo" name="titulo" placeholder="" type="text" class="validate" required readonly >
                            <label class="" for="titulo">Asunto</label>
                                <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
                        </div>
                    </div>

                    <div class="col s12 m6 l3 m-t-10 ">
                        <div class="input-field">
                            <input value="<?php echo  $grupo; ?>" id="grupoId" name="grupoId" placeholder="" type="text" class="validate" readonly >
                            <label class="" for="cat">Categoria</label>
                                <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
                        </div>
                    </div>

                    </div>
 

<div class="row">           
        <div class="col s12 ">    
<ul class="collapsible">
<li>
<div class="collapsible-header "><i class="material-icons blue-text">edit</i>Texto</div>
<div class="collapsible-body">    
<textarea class="ckeditor" name="ticketText" readonly><?php echo $ticketText ; ?>
</textarea></div>
</li>
</ul></div>
</div>


<div class="row">
<div class="col s12 m12">
   <ul class="collection m-t-20">
      <li class="collection-item blue-grey lighten-2 white-text">Imagen</li>
                 <li class="p-l-10 p-r-10 p-t-10 p-b-10">
              <div class="row">
                      <div class="col s12">
                   <?php
                            $id = $ticketId;
                             $path2 = "../ticket/" . $id;
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
                <a class="blue-text" target="_blank" href="<?php echo $path2;?>/<?php echo $archivo2;?>">Ver Imagen</a>
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
                    <input class="file-path validate" type="text" placeholder="Adjuntar im&aacute;gen o capture!">
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
<form id="form_validation" action="../c/ticket.php?m=updateDb&id=<?php echo $_GET["id"]; ?>" method="post"
 enctype="multipart/form-data" onsubmit="return checkForm(this);">

<div class="row">   
<ul class="collection m-t-20">
<li class="collection-item blue-grey lighten-2 white-text">Formulario</li></ul>
          <div class="m-t-20"></div>
       
</div>
<div class="row">   
    
</div>
<div class="row">           
        <div class="col s12 ">    
<ul class="collapsible">
<li>
<div class="collapsible-header "><i class="material-icons blue-text">edit</i>Respuesta SAGRAGP</div>
<div class="collapsible-body">    
<textarea class="ckeditor" name="ticketTextA" ><?php echo $ticketTextA ; ?>
</textarea></div>
</li>
</ul></div>
</div>


<div class="row">
<div class="col s12 m12">
   <ul class="collection m-t-20">
      <li class="collection-item blue-grey lighten-2 white-text">Imagen</li>
                 <li class="p-l-10 p-r-10 p-t-10 p-b-10">
              <div class="row">
                      <div class="col s12">
                   <?php
                            $id = $ticketId;
                             $path2 = "../ticketA/" . $id;
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
                <a class="blue-text" target="_blank" href="<?php echo $path2;?>/<?php echo $archivo2;?>">Ver Imagen</a>
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
                    <input class="file-path validate" type="text" placeholder="Adjuntar im&aacute;gen o capture!">
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

<script src="../plugins/jansen.js" type="text/javascript"></script>
