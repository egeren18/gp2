<!-- Modal de a単adir de List -->
<form id="form_validation" action="../c/mvisual.php?m=createDb2&cacId=<?php echo $_GET["cacId"]?>" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">
    
        <div id="ladd" class="modal" style="width:80%;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                  Manual de Vistas
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
                            <input value="" id="mvisualName" name="mvisualName" placeholder="" type="text" required>
                            <label class="font-17" for="mvisualName">Nombre de la Vista</label>
                        </div>
    </div>
</div>        
<div class="row">

    <div class="col s12 m12 l12 m-t--10 ">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons green-text">assistant</i>Texto Explicativo de la Vista</div>
              <div class="collapsible-body">  
                  <div class="input-field">
                    <textarea class="ckeditor" name="mvisualText"  >
                   
                    </textarea>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>
    <div class="col s12 m12 l12 m-t-20">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons blue-text">list</i>Codigo Funcion de la Vista</div>
              <div class="collapsible-body">  
                  <div class="input-field">
                    <textarea class="ckeditor" name="mvisualText2"  >
                   
                    </textarea>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>
    <div class="col s12 m12 l12 m-t-20 ">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons blue-text">list</i>Codigo visual de la Vista</div>
              <div class="collapsible-body">  
                  <div class="input-field">
                    <textarea class="ckeditor" name="mvisualText3"  >
                   
                    </textarea>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>

    
    
</div>
 <!-- img 1-->
  
                <div class="col s12 m-t-10">
                    <div class="file-field input-field">
                        <div class="btn grey lighten-4 ">
                            <i class="material-icons blue-text">attach_file</i>
                            <input class="blue" type="file" accept="image/*"  id="archivo2[]" name="archivo2[]">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Adjuntar Visual!">
                        </div>
                    </div>
                </div>
 
    
<!-- img 1-->



<div class="row">
    <div class="col s12 m-t-20">
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