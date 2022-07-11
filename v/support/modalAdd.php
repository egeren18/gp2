<form id="form_validation" action="../c/ticket.php?m=createDb" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">
        <div id="ticket" class="modal">
             <div class="modal-header" style="background-color:#607d8b;">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        <h6><a href="#!" class="breadcrumb white-text">Soporte IT </a>
                        <a href="#!" class="breadcrumb white-text ">Solicitar Soporte</a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        </a></h6>
                    </div>
                </div>
            </div>
            <div class="modal-content">
                
                
<div class="col s12 l8 ">


<!-- aqui empieza el azul -->
<?php $_g = mysqli_query($master, "
    SELECT * FROM department
    WHERE departmentStatus = 1
    ORDER BY departmentName
");
?>

                    
                        <div class="row   ">
<!-- aqui mmgvo ciegho -->                       
                            <div class="col s12 l12 " >
                                <div class=" m-b-20 m-l-20 m-r-20">

<div class="row">   

          <div class="m-t-20"></div>
              <!--    <div class="col s12 m6 l6 m-t-10 ">
                        <div class="input-field">
                            <input value="<?php echo $_SESSION["subscriberName"]; ; ?>" id="titulo" name="titulo" placeholder="" type="text" class="validate" readonly>
                            <label class="" for="titulo">Suscriptor</label>
                                
                        </div>
                    </div>
                    
                    <div class="col s12 m6 l6 m-t-10 ">
                        <div class="input-field">
                            <input value="<?php echo $_SESSION["userFullName"]; ; ?>"  id="n" name="n" placeholder="" type="text" class="validate" readonly>
                            <label class="" for="n">Nombre</label>
                                
                        </div>
                    </div>
 --> 
</div>




<div class="row">   
    <div class="col s12 m6 l6 m-t--30  ">
                        <div class="input-field">
                            <input value="" id="titulo" name="titulo" placeholder="" type="text" class="validate" required  >
                            <label class="font-17" for="titulo">Asunto</label>
                                <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
                        </div>
      </div>
    <div class="col s12 m6 l6 m-t--30  ">
                                                             <div class="input-field">
                                                                <select id="grupoId" name="grupoId" placeholder="" type="text" class="validate">
                                                                    <option value="">&nbsp;</option>
                                                                    <?php while ($g = $_g -> fetch_object()) { ?>
                                                                    <option value="<?php echo $g -> departmentId; ?>"><?php echo $g -> departmentName; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label class="font-13" for="grupoId">Categoria</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
     </div>

</div>



<div class="row">           
        <div class="col s12 m-t--20 ">    
<ul class="collapsible">
<li>
<div class="collapsible-header "><i class="material-icons blue-text">edit</i>Texto</div>
<div class="collapsible-body">    
<textarea class="ckeditor" name="ticketText" >

</textarea></div>
</li>


</ul></div>
</div>



<div class="row">
        <div class="col s12 m-t-10">
            <div class="file-field input-field">
                <div class="btn white ">
                    <i class="material-icons blue-text">attach_file</i>
                    <input class="blue" type="file" accept="image/*"  id="archivo2[]" name="archivo2[]">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Adjuntar im&aacute;gen o capture!">
                </div>
            </div>
        </div>
</div>
                    <div class="row">
                                            <div class="col s12 m-t-10">
                                                <label>
                                                    <input type="checkbox" class="validate filled-in" required="" />
                                                    <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 m-t-10">
                                                <a href="javascript: history.go(-1);" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">close</i>
                                                </a>
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
