<!-- Modal de a単adir de List -->
<form id="form_validation" action="../c/cac.php?m=createDb&tsacId=<?php echo $tsacId;?>&cuestionarioId=<?php echo $cuestionarioId?>" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">
    
        <div id="ladd" class="modal" style="width:28em;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        Crear Categoria del Modulo <?php echo $tsacName  ?>
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
                            <input value="<?php echo $tsacName  ?>" id="tsacName" name="tsacName" placeholder="" type="text" readonly>
                            <label class="font-17" for="tsacName">Modulo</label>
                        </div>
    </div>
        
    <div class="col s12 m12 l12 m-t--10">
                        <div class="input-field">
                            <input value="<?php echo $cuestionarioName;?>" id="cuestionarioName" name="cuestionarioName" placeholder="" type="text" readonly>
                            <label class="font-17" for="cuestionarioName">Cuestionario</label>
                        </div>
    </div>
    
    <div class="col s12 m12 l12 ">
                        <div class="input-field">
                            <input value="" id="categoriaName" name="categoriaName" placeholder="" type="text" required>
                            <label class="font-17" for="categoriaName">Categoria</label>
                        </div>
    </div>
    
</div>



<div class="row">
    <div class="col s12 ">
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





