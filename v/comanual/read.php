<?php 
//var tsacId

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
        <div id="read<?php echo $comanualId;?>" class="modal" style="width:80%;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        Consultar  <?php echo $comanualName;?> 
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
            <input value="<?php echo $comanualName;?>" id="cuestionarioName" name="cuestionarioName" placeholder="" type="text" readonly>
            <label class="font-17" for="cacName">Manual</label>
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
                    <textarea class="ckeditor" name="comanualCo" readonly>
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
                    <textarea class="ckeditor" name="comanualText" readonly>
                   <?php echo $comanualText ;?>
                    </textarea>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>
    
</div>





    </div>
</div>

<!-- aqui esta el lado derecho -->

    </div>
       
</div>
         </div>
    </div>
<?php } ?>