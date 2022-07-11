<?php 
//var tsacId
$tsacId = $_GET["tsacId"];
//CONEXION A BASE DE DATOS 
 $_lm = mysqli_query($tipomc, "
            SELECT * FROM tipo_de_cuestionario_$tsacId
            WHERE cuestionarioStatus = 1
        ");
// hare un wil para generar de manera automatica los modales de edicion 
while($m = $_lm -> fetch_object()){
$tsacId = $m -> tsacId;
$cuestionarioId = $m -> cuestionarioId;
$cuestionarioName = $m -> cuestionarioName;
?>
        <div id="lread<?php echo $cuestionarioId;?>" class="modal" style="width:80%;">
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
    <div class="col s12 m12 l6 m-t--10  ">
                        <div class="input-field">
                            <input value="<?php echo $cuestionarioName;?>" id="tsacName" name="tsacName" placeholder="" type="text" readonly>
                            <label class="font-17" for="tsacName">Modulo</label>
                                
                        </div>
    </div>

</div>
<h6>Servicios </h6>
<?php 
$v = $tsacId.'_'.$cuestionarioId;
 $_tablita = mysqli_query($tipos, "
            SELECT * FROM cuestionario$v
            WHERE access = 1
        ");?>

<?php while($tablita = $_tablita -> fetch_object()){
 $_tservicio = mysqli_query($master, "
            SELECT * FROM service
            WHERE serviceId = '" . $tablita -> serviceId . "'
        ");
        $tservicio = $_tservicio  -> fetch_object();
        $sname = $tservicio -> serviceName;
?>

<p><?php echo $sname;?></p>
<?php } ?>



    </div>
</div>

<!-- aqui esta el lado derecho -->

    </div>
       
</div>
         </div>
    </div>
<?php } ?>