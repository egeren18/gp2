

<?php 
//CONEXION A BASE DE DATOS 
 $_m = mysqli_query($master, "
            SELECT * FROM tsac
            WHERE tsacStatus = 1
        ");
// hare un wil para generar de manera automatica los modales de edicion 
while($m = $_m -> fetch_object()){
$tsacId = $m -> tsacId;
$tsacName = $m -> tsacName;
$date = $m -> date;
?>
    
<form id="form_validation" action="../c/tsac.php?m=updateDb&tsacId=<?php echo $tsacId;?>" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">
    
        <div id="read<?php echo $tsacId;?>" class="modal" style="width:28em;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        Consultar Modulo
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
                            <input value="<?php echo $tsacName;?>" id="tsacName" name="tsacName" placeholder="" type="text" readonly>
                            <label class="font-17" for="tsacName">Modulo</label>
                                
                        </div>
    </div>
    <div class="col s12 m12 l12  ">
                        <div class="input-field">
                            <input value="<?php echo $date;?>" id="tsacName" name="tsacName" placeholder="" type="text" readonly>
                            <label class="font-17" for="tsacName">Fecha</label>
                                
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
</form>
    
    
    
<?php } ?>





