<?php 
//CONEXION A BASE DE DATOS 

//CONEXION A BASE DE DATOS 
 $_lm = mysqli_query($manuales, "
            SELECT * FROM comanual
            WHERE comanualStatus = 1
        ");        
        
// hare un wil para generar de manera automatica los modales de edicion 
while($m = $_lm -> fetch_object()){
$comanualName = $m -> comanualName;
$comanualText = $m -> comanualText;
$comanualCo = $m -> comanualCo;
$comanualId = $m -> comanualId;
?>
    
<form id="form_validation" action="../c/comanual.php?m=updateDb&comanualId=<?php echo $comanualId;?>" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">
    
        <div id="edit<?php echo $comanualId;?>" class="modal" style="width:80%;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                       Editar - <?php echo $comanualName;?>
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
            <input value="<?php echo $comanualName;?>" id="comanualName" name="comanualName" placeholder="" type="text" >
            <label class="font-17" for="comanualName">Manual</label>
        </div>
    </div>
    
</div>    
<div class="row">
    <div class="col s12 m12 l12 m-t--10">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons blue-text">list</i>C&oacute;digo</div>
              <div class="collapsible-body">  
                  <div class="input-field">
                    <textarea class="ckeditor" name="comanualCo" >
                   <?php echo $comanualCo ;?>
                    </textarea>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>
    <div class="col s12 m12 l12 m-t-20">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons green-text">contacts</i>Explicaci&oacute;n del c&oacute;digo</div>
              <div class="collapsible-body">  
                  <div class="input-field">
                    <textarea class="ckeditor" name="comanualText" >
                   <?php echo $comanualText ;?>
                    </textarea>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>
    
    
    
</div>


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




    </div>
       
</div>
         </div>
    </div>
</form>
    
    
    
<?php } ?>