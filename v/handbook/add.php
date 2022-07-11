
<!-- Modal de a単adir de List -->
<?php 
//CONEXION A BASE DE DATOS 
 $_tic = mysqli_query($master, "
            SELECT * FROM tsac
            WHERE tsacId = 1
        ");
// hare un wil para generar de manera automatica los modales de edicion 
$tic = $_tic -> fetch_object();
$tsacId = $tic -> tsacId;
$tsacName = $tic -> tsacName;
?>
<form id="form_validation" action="../c/handbook.php?m=createDb&tsacId=<?php echo $tsacId;?>" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">
    
        <div id="ladd" class="modal" style="width:80%;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        Crear Cuestionario de el Modulo <?php echo $tsacName  ?>
                    </div>
                </div>
            </div>
<div class="modal-content">
                
                
<div class="col s12 l12 ">
                    
    <div class="row   ">
        
         <div class="col s12" >
            <div class="  ">


<div class="row">   
    <div class="col s12 m12 l6 m-t--10  ">
                        <div class="input-field">
                            <input value="<?php echo $tsacName  ?>" id="tsacName" name="tsacName" placeholder="" type="text" readonly>
                            <label class="font-17" for="tsacName">Modulo</label>
                        </div>
    </div>
        <div class="col s12 m12 l6 m-t--10">
                        <div class="input-field">
                            <input value="" id="cuestionarioName" name="cuestionarioName" placeholder="" type="text" required>
                            <label class="font-17" for="cuestionarioName">Cuestionario</label>
        </div>
    </div>
</div>
<?php 
//CONEXION A BASE DE DATOS 
 $_service = mysqli_query($master, "
            SELECT * FROM service
            WHERE serviceStatus = 1
        ");
?>
<!-- seleccionar servicios en los cuales el cuestionario funcionara -->
               <div class="row invisible">
                                <div class="col s12 m12 l12 m-t-10">
                                          <ul class="collapsible  ">         
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2">Servicios</span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <?php while ($cp = $_service -> fetch_object()) {?>
                                                                <div class="col l12">
                                                                    <table class="white">
                                                                        <tr class="left-align">
                                                                            <td >
                                                                                <div>
                                                                                    <label>
                                                                    <input value="<?php echo $cp -> serviceId; ?>" type="hidden" name="serviceC[]" />
                                                                    <input class="filled-in" type="checkbox" name="pc[<?php echo $cp -> serviceId; ?>]"/>
                                                                    <span class="blue-grey-text text-darken-2"><?php echo $cp -> serviceName; ?></span>
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

<div class="row">
    <div class="col s12 m-t-40">
            <label>
            <input type="checkbox" class="validate filled-in" required="" />
            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
        </label>
    </div>
</div>

<div class="row">
    <div class="col s12 m-t-40">
        
        
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

<!-- termina modal de a単adir -->
