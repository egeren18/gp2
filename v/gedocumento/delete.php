<?php 
//CONEXION A BASE DE DATOS 

//CONEXION A BASE DE DATOS 
 $_lmd = mysqli_query($manuales, "
            SELECT * FROM gedocumento
            WHERE gedocumentoStatus = 1
        ");        
        
// hare un wil para generar de manera automatica los modales de edicion 
while($m = $_lmd -> fetch_object()){
$gedocumentoName = $m -> gedocumentoName;
$gedocumentoText = $m -> gedocumentoText;
$gedocumentoId = $m -> gedocumentoId;
?>
    
<form id="form_validation" action="../c/gedocumento.php?m=deleteDb&gedocumentoId=<?php echo $gedocumentoId;?>" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">
    
        <div id="delete<?php echo $gedocumentoId;?>" class="modal" style="width:28em;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                     Eliminar- <?php echo $gedocumentoName;?>
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
            <input value="<?php echo $gedocumentoName;?>" id="gedocumentoName" name="gedocumentoName" placeholder="" type="text" readonly>
            <label class="font-17" for="gedocumentoName">Manual</label>
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
        
        
        <button id="vDivision" type="submit" class="btn red waves-effect tooltipped" data-position="right" data-tooltip="Eliminar">
            <i class="material-icons">delete</i>
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