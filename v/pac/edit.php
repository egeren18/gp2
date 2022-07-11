<?php 
//CONEXION A BASE DE DATOS 
$v =$tsacId.'_'.$cuestionarioId;
//CONEXION A BASE DE DATOS 
 $_lma = mysqli_query($tipod, "
            SELECT * FROM cuestionario$v
            WHERE pacStatus = 1
        ");        
// hare un wil para generar de manera automatica los modales de edicion 
while($m = $_lma -> fetch_object()){
$pacName = $m -> pacName;
$pap = $m -> pap;
$mId = $m -> mId;
$date = $m -> date;
$cacId = $m -> cacId;

$_country2 = mysqli_query($tipoc, "
    SELECT * FROM cuestionario$v
    WHERE cacId = '" . $cacId . "'
    ");
// declarar la llave
$country = $_country2 -> fetch_object();
// con la conexion ya hecha imprimir el valor del campo q quiero usasndo la llave ya declarada
$cacName = $country -> cacName;
?>
    
<form id="form_validation" action="../c/pac.php?m=updateDb&tsacId=<?php echo $tsacId;?>&cuestionarioId=<?php echo $cuestionarioId;?>&cacId=<?php echo $cacId;?>&mId=<?php echo $mId ?>" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">
    
        <div id="edit<?php echo $mId  ;?>" class="modal" style="width:80%;">
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

<!-- info general -->
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
<!-- end info general -->
<!-- despegables con el texto de la pregunta -->
<div class="row">
    
        <div class="col s12 m12 l12 m-t--10">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons blue-text">list</i>Pregunta Abreviada</div>
              <div class="collapsible-body">  
                  <div class="input-field">
                    <textarea class="ckeditor" name="pacName">
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
                    <textarea class="ckeditor" name="p">
                   <?php echo $pap ;?>
                    </textarea>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>
    
</div>
<!-- end despegables con texto de preguntas -->


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