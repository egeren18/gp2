<?php 
//CONEXION A BASE DE DATOS 

//CONEXION A BASE DE DATOS 
 $_lm = mysqli_query($tipomc, "
            SELECT * FROM tipo_de_cuestionario_$tsacId
            WHERE cuestionarioStatus = 1
        ");        
        
      
// hare un wil para generar de manera automatica los modales de edicion 
while($m = $_lm -> fetch_object()){
$cuestionarioId = $m -> cuestionarioId;
$cuestionarioName = $m -> cuestionarioName;
?>
    
<form id="form_validation" action="../c/tsac.php?m=updateDb2&tsacId=<?php echo $tsacId;?>&cuestionarioId=<?php echo $cuestionarioId;?>" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">
    
        <div id="ledit<?php echo $cuestionarioId ;?>" class="modal" style="width:80%;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        Modificar Modulo <?php echo $tsacName;?>
                    </div>
                </div>
            </div>
<div class="modal-content">
                
<div class="col s12 l12 ">
                    
    <div class="row   ">
        
         <div class="col s12" >
            <div class="  ">

<div class="row">   
    <div class="col s12 m12 l12 m-t--10  ">
                        <div class="input-field">
                            <input value="<?php echo $cuestionarioName;?>" id="cuestionarioName" name="cuestionarioName" placeholder="" type="text" class="validate"  required  >
                            <label class="font-17" for="cuestionarioName">Cuestionario</label>
                                <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
                        </div>
    </div>
</div>

<!--aqui va el mmgvo despegable -->

  <?php 
    $vv = $tsacId.'_'.$cuestionarioId;  
    $_audit = mysqli_query($tipos, "
            SELECT * FROM cuestionario$vv
    ");?>
<!-- seleccionar servicios en los cuales el cuestionario funcionara -->
               <div class="row invisible">
                                <div class="col s12 m12 l12 m-t--20 ">
                                          <ul class="collapsible  ">         
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2">Servicios</span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($audit = $_audit -> fetch_object()) {
                                                                $_ca = mysqli_query($master, "
                                                                    SELECT * FROM service
                                                                    WHERE serviceId = '" . $audit -> serviceId . "'
                                                                ");
                                                            $ca = $_ca -> fetch_object();
                                                            $can = $ca -> serviceName ;?>
                                                                <div class="col l12">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $audit -> serviceId; ?>" type="hidden" name="serviceC[]" />
                                                                    <input class="filled-in" <?php echo $checked = ($audit -> access== 1 ) ? 'checked' : ''; ?> 
                                                                    type="checkbox" name="pc[<?php echo $audit -> serviceId; ?>]"/>
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $can; ?></span>
                                                                                                                    </label>
                                                                                </div> </td>
                                                                            
                                                                        </tr>
                                                                    </table>
                                                                </div>            
                                                         <?php } ?>
                                                         
                                                        </div>
                                                    </div>
                                               </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                                    
<!-- termina el seleccionador -->




<!-- aqui termina el despegable -->


<div class="row">
    <div class="col s12 m-t-20">
            <label>
            <input type="checkbox" class="validate filled-in" required="" />
            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
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