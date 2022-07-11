<?php 
//var tsacId
$v =$tsacId.'_'. $cuestionarioId;
//CONEXION A BASE DE DATOS 
 $_lm = mysqli_query($tipoc, "
            SELECT * FROM cuestionario$v
            WHERE cacStatus = 1
        ");
// hare un wil para generar de manera automatica los modales de edicion 
while($m = $_lm -> fetch_object()){
$cacName = $m -> cacName;
$date = $m -> date;
$cacId = $m -> cacId;
?>
        <div id="read<?php echo $cacId;?>" class="modal" style="width:28em;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        Consultar  <?php echo $tsacName;?> 
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
            <input value="<?php echo $cuestionarioName;?>" id="cuestionarioName" name="cuestionarioName" placeholder="" type="text" readonly>
            <label class="font-17" for="cacName">Cuestionario</label>
        </div>
    </div>
    <div class="col s12 m12 l12">
        <div class="input-field">
            <input value="<?php echo $cacName;?>" id="cacName" name="cacName" placeholder="" type="text" readonly>
            <label class="font-17" for="cacName">Categoria</label>
        </div>
    </div>
    
    <div class="col s12 m12 l12 ">
        <div class="input-field">
            <input value="<?php echo $date;?>" id="date" name="date" placeholder="" type="text" readonly>
            <label class="font-17" for="date">Fecha</label>
        </div>
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