<main>

<div class="container">
    
    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Terminos y Condiciones</a>
            <a href="#!" class="breadcrumb ">Editar</a>
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
                            <span  class="breadcrumb p-l-10 blue-text" >Cliente</span>
                            <a href="#!" class="breadcrumb blue-text" ><?php echo $clientName ?> </a>
                            <a href="../c/termycond.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
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
                    
                    <div class="m-l-10 m-r-10">
                                
                                <div class='row'>
                                    <div class="col s12 m6 l7 m-t--5 m-b-10">
                                        <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                                <table class="blue-grey lighten-4">
                                                
                                                <tr>
                                                            <td>Socio lider </td> <td><?php echo $liderName ?></td>
                                                          </tr>  
                                                         <tr>
                                                            <td>Gerente </td> <td> <?php echo $gerenteName; ?> </td>
                                                         </tr>    
                                                             
                                                         <tr>
                                                              <td>Fecha</td>
                                                            <td>21/06/2021</td>
                                                         </tr>    
                                                           <tr>
                                                            <td >Naturaleza del servicio:</td> <td><?php echo $naturalezaNombre ?> </td>
                                                         </tr>  
                                                         <tr>
                                                            <td>Servicio</td> <td><?php echo $serviceName ?></td>
                                                         </tr>   


                                                </table>
                                        </div>
                                    </div>
                                   
                                </div>
                     </div>
                    <div class="m-l-10 m-r-10">
                   <div class="row">
                       <div class="col s12 ">
                                            <div class="card-panel white-text blue-grey darken-2" style="line-height : 20px;"><p>Carta de Contrataci&oacute;n</p></div>
                    </div>
                   </div>
                   
                  </div> 

<!-- carta -->
    <div class="card-content">
        <div class="card m-t--10 p-l-10 p-r-10">
<!-- contenido de roles de proyecto -->
    
         
                <!--  tabla -->    
<!-- si esta lleno -->
                
    <form action="../c/termycond.php?m=editDb4&termycondId=<?php echo $termycondId?>&iid=1&clientId=<?php echo $clientId;?>&serviceId=<?php echo $serviceId;?>" method="post" enctype="multipart/form-data"  onsubmit="return checkForm(this);" >
<div class="row">
<div class="col s12 m6">
   <ul class="collection m-t-20">
      <li class="collection-item blue-grey lighten-2 white-text">Documento PDF</li>
                 <li class="p-l-10 p-r-10 p-t-10 p-b-10">
                <div class="row">
                        <div class="col s12">
                   <?php
                            $id = $termycondId ;
                             $path2 = "../termycond/" . $id;
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
                 </div>
                            <div class="row m-l-10 m-r-5">
                                
                            <div class="col s4">
                                <div class="input-field">
                                    <small>Monto Total de la Propuesta</small>
                                    <input value="<?php echo $montouse; ?>" type="number" name="a" class="form-control" >
                                </div>
                            </div>
                            
                            <div class="col s4">
                                <div class="input-field">
                                    <small>Horas contempladas</small>
                                    <input value="<?php echo $horasc; ?>" style="text-align: left ;" type="number" name="b" class="form-control" >
                                </div>
                            </div>
                            
                            
                            <div class="col s4">
                                <div class="input-field">
                                    <small>Moneda asociada</small>
                                        <select name="c" placeholder="" class="form-control" readonly >
                                            <option value="<?php echo $monedaactual?>"><?php echo $nombrecoin ?></option>
                                            <?php while ($r_currency = mysqli_fetch_array($currency)) { ?>
                                            <?php $currencyId = $r_currency["currencyId"]; $currencyName = $r_currency["currencyName"]; ?>
                                            <option <?php echo $selected = $dcurrencyId == $currencyId ? 'selected' : ''; ?> value="<?php echo $currencyId; ?>"><?php echo $currencyName; ?></option>
                                            <?php } ?>
                                        </select>
                                        
                                        
                                    </div>
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



                                                                    <!-- fin de imagen 1 -->
                                                                    
                                                                    
                                                                    
                                                                    <!-- inicio de imagen 2 -->


<div class="col s12 m6">
   <ul class="collection m-t-20">
      <li class="collection-item blue-grey lighten-2 white-text">Documento Excel</li>
                 <li class="p-l-10 p-r-10 p-t-10 p-b-10">
                <div class="row">
                        <div class="col s12">
                   <?php
                            $id = $termycondId ;
                             $path2 = "../termycond2/" . $id;
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


                                                                    <!-- ifin de imagen 2 -->
                                                                    
                            <div class="divider "></div>
                                       <div class="row">
                            <div class="col s12 m3">
                                <div class="input-field">
                                <small>Fecha Solicitud de la Carta  :</small>
                                <input style="text-align: center;" type="text" name="f1" class="datepicker" value="<?php echo $f1;?>" required="">
                                </div>
                            </div>
                            <div class="col s12 m3">
                                <div class="input-field">
                                <small>Recibida:</small>
                                <input style="text-align: center;" type="text" name="f2" class="datepicker" value="<?php echo $f2;?>" required="">
                                </div>
                            </div>
                            
                        </div>
                               
                            
                            <div class="row">
                                <div class="col s3 m-t-20">
                                    <span class="blue-grey-text text-darken-2">Los términos del contrato fueron aprobados?</span>
                                </div>

                                    
                                <?php if ($desicion2 == 2){    ?>
                                  <div class="col s3 m-t-20">
                                  <label>
        <input name="group1" type="radio" value="1" checked />
        <span>Aprobado</span>
      </label> 
      <br>
       <label>
        <input name="group1" type="radio" value="2" />
        <span>Declinado</span>
      </label>                                 
                                </div>
                                
                                <?php } ?>
                              
                             <?php if ($desicion2 == 1){    ?>
                                  <div class="col s3 m-t-20">
                                  <label>
        <input name="group1" type="radio"  value="1" />
        <span>Aprobado</span>
      </label> 
      <br>
       <label>
        <input name="group1" type="radio" value="2" checked />
        <span>Declinado</span>
      </label>                                 
                                </div>
                                
                                <?php } ?> 



                                        
                                        <div class="col s12 m12 l12 m-t-20 m-b-20 ">
                                            <ul class="collapsible">
                                                <li>
                                            <div class="collapsible-header grey lighten-4"><i class="material-icons green-text">list</i>Observaciones durante la negociaci&oacute;n</div>
                                                <div class="collapsible-body">
                                                  		<div class= "row">
                                                            <div class="col s12 m12 l12 ">
                                                                <div class="input-field">
                                                                 <textarea id="ckeditor" name="et" class="ckeditor m-t-20" >
                                                                     
                                                                     <?php 
                                            
                                                                    $_efacturacionText = mysqli_query($master, "
                                                                    SELECT * FROM termycond
                                                                    WHERE termycondId = '" . $termycondId . "'
                                                                    ");
                                    
                                                                    $efacturacionText = $_efacturacionText -> fetch_object();
                                                                    $textofacturacion = $efacturacionText -> efacturacionText ;
                                            
                                                                    echo $textofacturacion; ?>
                                                                 </textarea>
                                                                 
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </li>
                                            </ul>
                                        </div>
                                        
                              
                            </div>
                       
                       
                            <div class="row">
                                            <div class="col s12 m-t-20">
                                                <label>
                                                    <input type="checkbox" name="important"/>
                                                    <span class="blue-grey-text text-darken-2">Haga click en el recuadro si considera haber hallado una "Situaci&oacute;n Importante"!</span>
                                                </label>
                                            </div>
                                            <div class="col s12 m-t-20">
                                                <label>
                                                    <input name="ok" type="checkbox" required=""/>
                                                    <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                </label>
                                            </div>
                                            <div class="col s12">
                                                <label>
                                                    <input type="checkbox" name="completed"/>
                                                    <span class="blue-grey-text text-darken-2"><u>Completado</u>, listo para ser revisado!</span>
                                                </label>
                                            </div>

                                            <div class="col s12 m-t-20 m-b-10">
                                                <a href="javascript: history.go(-1)" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
                                                </a>
                                                <button type="submit" class="btn blue waves-effect tooltipped m-l-5" data-position="top" data-tooltip="Guardar"><i class="material-icons">save</i></button>
                                            </div>

         
                         </div>               
                                                                    
 </form>                                                                   



    <!-- end si esta vacio-->



<!-- si esta lleno -->

                <!--  tabla -->
          <!-- terminar 
             <div class="row">
                                                    
                                                </div>
                                      
                                      
                                        <div class="row">
                                            <div class="col s12 m-t-20 m-b-20">
                                                <a href="../c/sac.php?m=index" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
                                                </a>
                                                <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                                    <i class="material-icons">save</i>
                                                </button>
                                            </div>
                                        </div>
          
           terminar -->
                
                
                
        
  

<!--  end contenido de roles de proyecto -->
        
    </div>
</div>   


    
              <ul class="collapsible m-l-10 m-r-10">
    <li>
        <div class="collapsible-header blue-grey-text text-darken-2">
            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                Traza de Terminos y Condiciones 
        </div>

        <div class="collapsible-body">
                             
                                      
        </div>
    </li>
 </ul>        
                 
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

<script type="text/javascript" src="../js/shareholder.js"></script>
