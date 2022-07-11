<?php 
if($cStatus == 1){?>

                                                                    <!-- inicio de imagen 1-->
<?php 
//Concexion para obtener el valor que fue agregado durante la carga
$_montousado = mysqli_query($master, "
    SELECT * FROM cartypreprojecto
    WHERE termycondId = '" . $termycondId . "'
");

$montousado = $_montousado -> fetch_object();
$montouse = $montousado -> amount ;
$horasc = $montousado -> horasc ;


//conexion para obtener el ID de la moneda en uso
$_monedaenuso = mysqli_query($master, "
    SELECT * FROM cartypreprojecto
    WHERE termycondId = '" . $termycondId . "'
");

$monedaenuso = $_monedaenuso -> fetch_object();
$monedaactual = $monedaenuso -> currencyId ;
$desicion2  = $monedaenuso -> desicion2 ;

//conexion para obtener el nombre de la tabla de monedas
$_nombreMoneda = mysqli_query($master, "
    SELECT * FROM currency
    WHERE currencyId = '" . $monedaactual . "'
");

$nombreMoneda = $_nombreMoneda -> fetch_object();
$nombrecoin = $nombreMoneda -> currencyName ;




?>
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
                            <div class="row">
                                
                            <div class="col s4">
                                <div class="input-field">
                                    <small>Monto Total de la Propuesta</small>
                                    <input value="<?php echo $montouse; ?>" type="number" name="amount" class="form-control" readonly>
                                </div>
                            </div>
                            
                            <div class="col s4">
                                <div class="input-field">
                                    <small>Horas contempladas</small>
                                    <input value="<?php echo $horasc; ?>" style="text-align: left ;" type="number" name="amount" class="form-control" readonly>
                                </div>
                            </div>
                            
                            
                            <div class="col s4">
                                <div class="input-field">
                                    <small>Moneda asociada</small>
                                        <select name="currencyId" placeholder="" class="form-control" readonly>
                                            <option><?php echo $nombrecoin ?></option>
                                            <?php while ($r_currency = mysqli_fetch_array($currency)) { ?>
                                            <?php $currencyId = $r_currency["currencyId"]; $currencyName = $r_currency["currencyName"]; ?>
                                            <option <?php echo $selected = $dcurrencyId == $currencyId ? 'selected' : ''; ?> value="<?php echo $currencyId; ?>"><?php echo $currencyName; ?></option>
                                            <?php } ?>
                                        </select>
                                        
                                        
                                    </div>
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
                                <div class="col s3 m-t-20">
                                    <span class="blue-grey-text text-darken-2">Los términos del contrato fueron aprobados?</span>
                                </div>

                                    
                                <?php if ($desicion2 == 2){    ?>
                                  <div class="col s3 m-t-20">
                                  <label>
        <input name="group1" type="radio"  checked disabled="disabled"/>
        <span>Aprobado</span>
      </label> 
      <br>
       <label>
        <input name="group1" type="radio" disabled="disabled"/>
        <span>Declinado</span>
      </label>                                 
                                </div>
                                
                                <?php } ?>
                              
                             <?php if ($desicion2 == 1){    ?>
                                  <div class="col s3 m-t-20">
                                  <label>
        <input name="group1" type="radio"  disabled="disabled"/>
        <span>Aprobado</span>
      </label> 
      <br>
       <label>
        <input name="group1" type="radio" checked disabled="disabled"/>
        <span>Declinado</span>
      </label>                                 
                                </div>
                                
                                <?php } ?> 



                                        
                                        <div class="col s12 m12 l12 m-t-20 ">
                                            <ul class="collapsible">
                                                <li>
                                            <div class="collapsible-header grey lighten-4"><i class="material-icons green-text">list</i>Observaciones durante la negociaci&oacute;n</div>
                                                <div class="collapsible-body">
                                                  		<div class= "row">
                                                            <div class="col s12 m12 l12 ">
                                                                <div class="input-field">
                                                                 <textarea id="ckeditor" name="et" class="ckeditor m-t-20" required>
                                                                     
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
                       
                       
                            
                                                                    
                                                                    
<?php 
}else{?>
<form action="../c/termycond.php?m=createDb4&termycondId=<?php echo $termycondId?>&serviceId=<?php echo $serviceId?>&clientId=<?php echo $clientId?> "method="post" enctype="multipart/form-data"  onsubmit="return checkForm(this);" >
<div class="row">
                        <div class="col s12 m6">
                            <ul class="collection m-t-20">
                                <li class="collection-item blue-grey lighten-2 white-text">Carta de Contratación  </li>
                            </ul>

                            <div class="row">
                                <div class="col s12">
                                    <div class="file-field input-field">
                                        <div class="btn white tooltipped" data-position="top" data-tooltip="Adjuntar archivo PDF">
                                            <i class="material-icons blue-text">attach_file</i>
                                            <input type="file" id="archivotyc1[]"  name="archivotyc1[]"  accept="application/pdf"/>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input value="<?php echo $proposal; ?>" name="proposal" class="file-path validate" type="text" placeholder="Adjuntar o cambiar Carta de Contratación (Sólo PDF)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m-t--10 m-b-5">
                                    <?php if (isset($proposal)) { ?>
                                        <a target="_blank" href="../pdf/<?php echo $proposal; ?>">Ver archivo PDF</a>
                                        <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Si desea sustituir el archivo, adjunte uno nuevo haciendo click en el ícono de adjuntar archivos."><i class="material-icons blue-text">info</i></a>
                                    <?php } else {
                                        echo '&nbsp;';
                                    } ?>
                                </div>
                                <div class="col s12">
                                </div>
                            </div>


                            <div class="divider "></div>
                            <div class="row">
                                <div class="col s6 m-t-20">
                                    <span class="blue-grey-text text-darken-2">Los términos del contrato fueron aprobados?</span>
                                </div>



                                <div class="col s6 m-t-20">
                                    <?php while ($r_desicion2 = $desicion2 ->fetch_object()) { ?>
                                        <label class="m-l-20">
                                            <input value="<?php echo $r_desicion2 -> desicionId; ?>"  type="radio" name="desicion2" id="decision2" >
                                            <span><?php echo $r_desicion2 -> desicionName; ?></span>
                                        </label><br>
                                        <?php } ?>
                                </div>



                              
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <ul class="collection m-t-20">
                                <li class="collection-item blue-grey lighten-2 white-text">Presupuesto del Proyecto</li>
                            </ul>
                            <div class="row">
                                <div class="col s12">
                                    <div class="file-field input-field">
                                        <div class="btn white tooltipped" data-position="top" data-tooltip="Adjuntar archivo Excel">
                                            <i class="material-icons blue-text">attach_file</i>
                                            <input type="file" id="archivotyc2[]"  name="archivotyc2[]"  
                                             accept="application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"/>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input value="<?php echo $budget; ?>" name="budget" class="file-path validate" type="text" placeholder="Adjuntar o Cambiar Presupuesto del Proyecto (Sólo Excel)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m-t--10 m-b-5">
                                    <?php if (isset($budget)) { ?>
                                        <a target="_blank" href="../excel/<?php echo $budget; ?>">Ver archivo Excel</a>
                                        <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Si desea sustituir el archivo, adjunte uno nuevo haciendo click en el ícono de adjuntar archivos."><i class="material-icons blue-text">info</i></a>
                                        <?php
                                        }
                                        else {
                                            echo '&nbsp;';
                                        } ?>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col s4">
                                    <div class="input-field">
                                        <small>Horas contempladas</small>
                                        <input value="" style="text-align: right ;" type="number" name="horasc" class="form-control">
                                    </div>
                                </div>
                                                              <div class="col s4">
                                    <div class="input-field">
                                        <small>Monto Total de la Propuesta</small>
                                        <input value="<?php echo $montoV; ?>" style="text-align: right ;" type="number" name="amount" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="col s4">
                                    <div class="input-field">
                                        <small>Moneda asociada</small>
                                        <select name="currencyId" placeholder="" class="form-control">
                                            <option>&nbsp;</option>
                                            <?php while ($r_currency = mysqli_fetch_array($currency)) { ?>
                                            <?php $currencyId = $r_currency["currencyId"]; $currencyName = $r_currency["currencyName"]; ?>
                                            <option <?php echo $selected = $dcurrencyId == $currencyId ? 'selected' : ''; ?> value="<?php echo $currencyId; ?>"><?php echo $currencyName; ?></option>
                                            <?php } ?>
                                        </select>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                                    
                                        <div class="col s12 m12 l12 ">
                                            <ul class="collapsible">
                                                <li>
                                            <div class="collapsible-header grey lighten-4"><i class="material-icons green-text">list</i>Observaciones durante la negociaci&oacute;n</div>
                                                <div class="collapsible-body">
                                                  		<div class= "row">
                                                            <div class="col s12 m12 l12 ">
                                                                <div class="input-field">
                                                                 <textarea id="ckeditor" name="et" class="ckeditor m-t-20" required>
                                                                 </textarea>
                                                                 
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </li>
                                        </ul>
                                        </div>
                                    
                                    

                    
                    <div class="col s12 m-t-20">
                                            <label>
                                                <input name="ok" type="checkbox" required=""/>
                                                <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                            </label>
                     </div>
                    
                        <div class="col s12 m-t-20">
                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
                  
                    
                    
</form>              
<?php }?>