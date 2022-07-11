<?php 
//CONEXION A BASE DE DATOS 
$v =$tsacId.'_'.$cuestionarioId;
//CONEXION A BASE DE DATOS 
 $_lm = mysqli_query($tipoc, "
            SELECT * FROM cuestionario$v
            WHERE cacStatus = 1
        ");        
        
      
// hare un wil para generar de manera automatica los modales de edicion 
while($m = $_lm -> fetch_object()){
$cacName = $m -> cacName;
$cacId = $m -> cacId;
?>
    
<form id="form_validation" action="../c/cac.php?m=updateDb&tsacId=<?php echo $tsacId;?>&cuestionarioId=<?php echo $cuestionarioId;?>&cacId=<?php echo $cacId?>" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">
    
        <div id="edit<?php echo $cacId ;?>" class="modal" style="width:30em;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        Modificar <?php echo $tsacName;?>
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
            <input value="<?php echo $tsacName;?>" id="cuestionarioName" name="cuestionarioName" placeholder="" type="text" readonly>
            <label class="font-17" for="cuestionarioName">Modulo</label>
        </div>
    </div>
    <div class="col s12 m12 l12  ">
        <div class="input-field">
            <input value="<?php echo $cuestionarioName;?>" id="cuestionarioName" name="cuestionarioName" placeholder="" type="text" readonly>
            <label class="font-17" for="cuestionarioName">Cuestionario</label>
        </div>
    </div>
    <div class="col s12 m12 l12 ">
        <div class="input-field">
            <input value="<?php echo $cacName;?>" id="cacName" name="cacName" placeholder="" type="text" class="validate" required>
            <label class="font-17" for="cacName">Categorias</label>
            <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
        </div>
    </div>
</div>


<div class="row">
    <div class="col s12 m-t--10">
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




    </div>
       
</div>
         </div>
    </div>
</form>
    
    
    
<?php } ?>