<?php 
//var tsacId

//CONEXION A BASE DE DATOS 
 $_lm = mysqli_query($manuales, "
            SELECT * FROM mvisual
            WHERE cacId = '". $_GET["cacId"] ."'
        ");
// hare un wil para generar de manera automatica los modales de edicion 
while($m = $_lm -> fetch_object()){
$mvisualName = $m -> mvisualName;
$mvisualText = $m -> mvisualText;
$mvisualText2 = $m -> mvisualText2;
$mvisualText3 = $m -> mvisualText3;
$mvisualId = $m -> mvisualId;
?>
<form id="form_validation" action="../c/mvisual.php?m=updateDb2&cacId=<?php echo $_GET["cacId"];?>&mvisualId=<?php echo $mvisualId;?>" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">
        <div id="edit<?php echo $mvisualId;?>" class="modal" style="width:80%;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        Consultar - <?php echo $mvisualName;?> 
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
            <input value="<?php echo $mvisualName;?>" id="mvisualName" name="mvisualName" placeholder="" type="text" >
            <label class="font-17" for="mvisualName">Nombre de la Visual</label>
        </div>
    </div>
</div>    
<div class="row">

    <div class="col s12 m12 l12 ">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons green-text">contacts</i>Texto Explicativo de la Vista</div>
              <div class="collapsible-body">  
                  <div class="input-field">
                    <textarea class="ckeditor" name="mvisualText" >
                   <?php echo $mvisualText ;?>
                    </textarea>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>
    <div class="col s12 m12 l12 m-t-20 ">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons blue-text">list</i>Codigo Funcion de la Vista</div>
              <div class="collapsible-body">  
                  <div class="input-field">
                    <textarea class="ckeditor" name="mvisualText2">
                   <?php echo $mvisualText2 ;?>
                    </textarea>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>
    <div class="col s12 m12 l12 m-t-20 ">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons blue-text">list</i>Codigo visual de la Vista</div>
              <div class="collapsible-body">  
                  <div class="input-field">
                    <textarea class="ckeditor" name="mvisualText3" >
                   <?php echo $mvisualText3 ;?>
                    </textarea>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>
    
</div>

<!-- Empieza imagen  -->
<div class="row">
<div class="col s12 m12 m-t-10">
              <div class="row">
                      <div class="col s12">
                   <?php
                            $id = $mvisualId;
                             $path2 = "../mvisual/" . $id;
                            if (file_exists($path2)) {
                                $directorio2 = opendir($path2);
                                while ($archivo2 = readdir($directorio2)) {
                                    if (!is_dir($archivo2)) {?>      
                               <div class="file-field input-field">
                                   <div class="btn grey lighten-4 tooltipped" data-position="top" data-tooltip="Documento">
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
                <a class="blue-text" target="_blank" href="<?php echo $path2;?>/<?php echo $archivo2;?>">Descargar Documento</a>
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
         
                                            </div>

</div>
<!-- aqui termina la imagen  -->

<div class="row">
    <div class="col s12 m-t-20">
            <label>
            <input type="checkbox" class="validate filled-in" required="" />
            <span class="font-15">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
        </label>
    </div>
</div>

<div class="row">
    <div class="col s12 m-t-10">
        
        
        <button id="vDivision" type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
            <i class="material-icons">save</i>
        </button>
    </div>
</div>
    </div>
</div>

<!-- aqui esta el lado derecho -->

    </div>
       
</div>
         </div>
    </div>
    
    
    </form>
<?php } ?>