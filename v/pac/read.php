<?php 
//var tsacId
$v =$tsacId.'_'. $cuestionarioId;
//CONEXION A BASE DE DATOS 
 $_lm = mysqli_query($tipod, "
            SELECT * FROM cuestionario$v
            WHERE pacStatus = 1
        ");
// hare un wil para generar de manera automatica los modales de edicion 
while($m = $_lm -> fetch_object()){
$pacName = $m -> pacName;
$pap = $m -> pap;
$mId = $m -> mId;
$date = $m -> date;
$cacId = $m -> cacId;

$_country = mysqli_query($tipoc, "
    SELECT * FROM cuestionario$v
    WHERE cacId = '" . $cacId . "'
    ");
// declarar la llave
$country = $_country -> fetch_object();
// con la conexion ya hecha imprimir el valor del campo q quiero usasndo la llave ya declarada
$cacName = $country -> cacName;
?>
        <div id="read<?php echo $mId;?>" class="modal" style="width:80%;">
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


<div class="row  m-t--10">   
    <div class="col s12 m12 l4  ">
        <div class="input-field">
            <input value="<?php echo $cuestionarioName;?>" id="cuestionarioName" name="cuestionarioName" placeholder="" type="text" readonly>
            <label class="font-17" for="cacName">Cuestionario</label>
        </div>
    </div>
    <div class="col s12 m12 l4">
        <div class="input-field">
            <input value="<?php echo $cacName;?>" id="cacName" name="cacName" placeholder="" type="text" readonly>
            <label class="font-17" for="cacName">Categoria</label>
        </div>
    </div>
    
    <div class="col s12 m12 l4 ">
        <div class="input-field">
            <input value="<?php echo $date;?>" id="date" name="date" placeholder="" type="text" readonly>
            <label class="font-17" for="date">Fecha</label>
        </div>
    </div>    
    
    
</div>
<!-- despegables con el texto de la pregunta -->
<div class="row">
    
        <div class="col s12 m12 l12 m-t--10">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons blue-text">list</i>Pregunta Abreviada</div>
              <div class="collapsible-body">  
                  <div class="input-field">
                    <textarea class="ckeditor" name="pacName" readonly>
               <?php echo $pacName;?>
                    </textarea>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>
    <div class="col s12 m12 l12 m-t-20 ">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons green-text">list</i>Pregunta</div>
              <div class="collapsible-body">  
                  <div class="input-field">
                    <textarea class="ckeditor" name="pacText" readonly >
                   <?php echo $pap ;?>
                    </textarea>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>
    
</div>
<!-- end despegables con texto de preguntas -->


    </div>
</div>

<!-- aqui esta el lado derecho -->

    </div>
       
</div>
         </div>
    </div>
<?php } ?>