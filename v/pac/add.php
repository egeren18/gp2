<!-- Modal de a単adir de List -->
<?php
$a = $_GET["tsacId"];
$b = $_GET["cuestionarioId"];
$c =$a.'_'.$b;
$cac = mysqli_query($tipoc, "
 SELECT * FROM cuestionario$c
 WHERE cacStatus = 1
");
?>
<form id="form_validation" action="../c/pac.php?m=createDb&tsacId=<?php echo $a;?>&cuestionarioId=<?php echo $b;?>" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">
    
        <div id="ladd" class="modal" style="width:80%;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        Crear Pregunta del Modulo <?php echo $tsacName  ?>
                    </div>
                </div>
            </div>
<div class="modal-content">
                
                
<div class="col s12 l12 ">
                    
    <div class="row   ">
        
         <div class="col s12" >
            <div class="  ">


<div class="row">   
    <div class="col s12 m12 l3 m-t--10  ">
                        <div class="input-field">
                            <input value="<?php echo $tsacName  ?>" id="tsacName" name="tsacName" placeholder="" type="text" readonly>
                            <label class="font-17" for="tsacName">Modulo</label>
                        </div>
    </div>
        
    <div class="col s12 m12 l3 m-t--10">
                        <div class="input-field">
                            <input value="<?php echo $cuestionarioName;?>" id="cuestionarioName" name="cuestionarioName" placeholder="" type="text" readonly>
                            <label class="font-17" for="cuestionarioName">Cuestionario</label>
                        </div>
    </div>
    
       <div class="col s12 m6 l6 m-t--10">
            <div class="input-field">
                <select id="cacId" name="cacId" placeholder="" type="text" class="validate" required>
                    <option value="">&nbsp;</option>
                    <?php
                    while ($r_cac = mysqli_fetch_array($cac)) {
                    $cacId = $r_cac["cacId"];
                    $cacName = $r_cac["cacName"];
                    ?>
                    <option value="<?php echo $cacId; ?>"><?php echo $cacName; ?></option>
                    <?php } ?>
            </select>
            <label class="font-13" for="cacId">Categoria</label>
            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
            </div>
        </div>
    
    <div class="col s12 m12 l12 m-t--10">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons blue-text">list</i>Pregunta Abreviada</div>
              <div class="collapsible-body">  
                  <div class="input-field">
                    <textarea class="ckeditor" name="pacName"  >
                   
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
                    <textarea class="ckeditor" name="pacText"  >
                   
                    </textarea>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>
    
</div>



<div class="row">
    <div class="col s12 m-t-20 ">
            <label>
            <input type="checkbox" class="validate filled-in" required="" />
            <span class="font-15">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
        </label>
    </div>
</div>

<div class="row">
    <div class="col s12 m-t-20">
        
        
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





