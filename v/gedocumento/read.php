<?php 
//var tsacId

//CONEXION A BASE DE DATOS 
 $_lm = mysqli_query($manuales, "
            SELECT * FROM gedocumento
            WHERE gedocumentoStatus = 1
        ");
// hare un wil para generar de manera automatica los modales de edicion 
while($m = $_lm -> fetch_object()){
$gedocumentoName = $m -> gedocumentoName;
$gedocumentoText = $m -> gedocumentoText;
$gedocumentoId = $m -> gedocumentoId;
?>
        <div id="read<?php echo $gedocumentoId;?>" class="modal" style="width:80%;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        Consultar - <?php echo $gedocumentoName;?> 
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
            <input value="<?php echo $gedocumentoName;?>" id="cuestionarioName" name="cuestionarioName" placeholder="" type="text" readonly>
            <label class="font-17" for="cacName">Documento</label>
        </div>
    </div>
</div>    
<div class="row">

    <div class="col s12 m12 l12 ">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons green-text">contacts</i>Explicaci&oacute;n del Documento</div>
              <div class="collapsible-body">  
                  <div class="input-field">
                    <textarea class="ckeditor" name="gedocumentoText" readonly>
                   <?php echo $gedocumentoText ;?>
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
                            $id = $gedocumentoId;
                             $path2 = "../gedocumento/" . $id;
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


    </div>
</div>

<!-- aqui esta el lado derecho -->

    </div>
       
</div>
         </div>
    </div>
<?php } ?>