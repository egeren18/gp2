<main>

<div class="container">

    
    
    
<div class="row">
            <div class="col s12 m12 l12 m-t-5">
                <div class="card blue-grey lighten-5 hoverable">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <span class="breadcrumb  p-l-10">Editar</span>
                                <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar"><i class="material-icons blue-text">cancel</i></a>
                                <a class="right m-r-5 tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                                
                                    <a class="right m-r-5 tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen">
                                        <i class="material-icons green-text">file_download</i></a>
                                        
                                 <a class="right m-r-5" id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                                 
                                  <a href="#Leyenda" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Instruciones">
                                        <i class="material-icons blue-text">local_library</i>
                                    </a>
                                  <a href="javascript: history.go(-1);" class="tooltipped right blue-text m-r-5" data-position="left" data-tooltip="Atr&aacute;s">
                                        <i class="material-icons blue-text">undo</i>
                                    </a>
                            </div>
                        </div>
                        <div class="card m-t-10 m-l-5 m-r-5">
                            <div class="row">
                                <div class="col s12">
                                    <div class="m-t-20 m-b-20 m-l-20 m-r-20">
                                        
                                        
                                        
                            <div class="row">
                                <div class="col s6 m3">
                                
                                       
                                          
                                                  <table class="blue-grey lighten-4" >
                                                     
                                                        <tr>
                                                            <td>Cuestionario:</td>
                                                          </tr>  
                                                         <tr>
                                                            <td>Cuestionario de Riesgo</td>
                                                         </tr>    
                                                            
                                                   </table>
                                                  
                                                
                                                
                                                
                                    </div>
                                        <div class="col s6 m3">
                                
                               
                                          
                                                <table class="blue-grey lighten-4" >
                                                         <tr>
                                                            <td>Pregunta:</td>
                                                         </tr>  
                                                         <tr>
                                                            <td>
                                                       
                                                    <?php echo $_GET["cid"]; ?>
                                            
                                                            </td>
                                                         </tr>    
                                                </table>      
                                                    
                                                 
                                                
                                    </div>
                                     <div class="col s6 m3">
                                
                                       
                                          
                                                    
                                                <table class="blue-grey lighten-4" >
                                                         <tr>
                                                            <td >Fecha de ultima Modificaci&oacute;n:</td>
                                                         </tr>  
                                                         <tr>
                                                            <td><?php echo $dateTime ?></td>
                                                         </tr>    
                                                </table>      
                                                
                                                
                                    </div>
                                    
                                
<form id="form_validation" action="../c/bdatos.php?m=updateDb&cid=<?php echo $_GET["cid"]; ?>" method="post">
                                          
                                    <div class="col s6 m3">           
                                                 <table class="blue-grey lighten-4">
                                                      <tr>
                                                        <td >Modificado Por:</td>
                                                        </tr>
                                                        <tr>
                                                          
                                                            <td> <?php echo $_SESSION["userFullName"];?></td>
                                                        </tr>
                                                     
                                                    </table>
                                                
                                    </div>
                                    
                            </div> 
                                                
                                                <div class="row"> 
                                                    <div class="col s12 m-t-10" >
                                                        <div class='card-panel white-text blue-grey darken-2' style='line-height : 5px;'>Texto Vigente Resumido</div>
                                                    </div>
                                                        <div class="col s12 m-t--5" >
                                                        <div class='card-panel black-text blue-grey lighten-4' style='line-height : 20px;'><?php echo $client -> bdatosName; ?></div>
                                                       </div>
                                                  </div> 
                                                  
                                    <div class="row"> 
                                        <div class="col s12 m-t--10">
                                            <div class='card-panel white-text blue-grey darken-2' style='line-height : 5px;'>Texto Vigente</div>
                                        </div>
                                            <div class="col s12 m-t--10">
                                                    <div class='card-panel black-text blue-grey lighten-4' style='line-height : 20px;'><?php echo $client -> bdatosText; ?></div>
                                            </div>
                                    </div>
                                                
                                                <div class="row"> 
                                                    <div class="col s12 m-t--10">
                                                        <div class='card-panel white-text blue-grey darken-2' style='line-height : 5px;'>Texto a actualizar</div>
                                                    </div>
                                                        
                                                 </div> 
                                    
                                    <div class="row">
                                        
                                        <div class="col s12 m12 l6 ">
                                                <div class="input-field">
                                                      <textarea id="ckeditor" name="d" class="ckeditor m-t-20" readonly>
                                                    <?php echo $client -> bdatosText; ?>
                                                     </textarea readonly>
                                                     <label  for="textarea1">Texto resumido de la pregunta de riesgo</label>
                                                </div>
                                                 
                                        </div>
                                                 
                                        <div class="col s12 m12 l6 ">
                                            <div class="input-field">
                                                      <textarea id="ckeditor" name="bdatosText" class="ckeditor m-t-20" readonly>
                                                    <?php echo $client -> bdatosText; ?>
                                                     </textarea readonly>
                                                     <label  for="textarea1">texto completo de la pregunta de riesgo</label>
                                            </div>
                                                 
                                        </div>
                                                 
                                                
                                    
                                    </div>
                                    
                                    <!--imagen -->
                                         
                                         
<div class="row">                                       
    <div class="col s12 m12">
        <ul class="collection m-t-20">
            <li class="collection-item blue-grey lighten-2 white-text">Imagen</li>
                 <li class="p-l-10 p-r-10 p-t-10 p-b-10">
             <div class="row">
                      <div class="col s12 l4">
                   <?php
                            $id =  $_GET["cid"];
                             $path2 = "../bdatos/" . $id;
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
        <div class="col s12 l2 ">
            <a class="blue-text" target="_blank" href="<?php echo $path2;?>/<?php echo $archivo2;?>">Descargar documento</a>
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

                                         
                                         
                                         <!--imagen end -->
                                    
                                   
                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col s12 m-t-10">
                            <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                            <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
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

<script type="text/javascript" src="../js/shareholder.js"></script>
