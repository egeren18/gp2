<?php 
//CONEXION A BASE DE DATOS 

//CONEXION A BASE DE DATOS 
 $_lm = mysqli_query($master, "
            SELECT * FROM stareasm
            WHERE stareasStatus >= 1
        ");        
        
      
// hare un wil para generar de manera automatica los modales de edicion 
while($m = $_lm -> fetch_object()){
$stareasName = $m -> stareasName;
$stareasText = $m -> stareastext;
$ptareaId = $m -> ptareaId;
$testimado =  $m -> testimado;
$date = $m -> date;
$userId = $m -> userId;
$stareasmId= $m -> stareasmId;
$stareasId= $m -> stareasId;
$st = $m -> st;
$exp = $m -> exp;


$_ptarea = mysqli_query($master, "
    SELECT * FROM ptarea
    WHERE ptareaId = '" .  $ptareaId . "'
");
$ptarea = $_ptarea -> fetch_object();
$ptareaName = $ptarea -> ptareaName;

$_pt = mysqli_query($master, "
    SELECT * FROM ptarea
    WHERE ptareaStatus = 1
");
$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userId = '" . $userId . "'
    
");
$user = $_user -> fetch_object();
$userName = $user -> userName;

$_user2 = mysqli_query($master, "
    SELECT * FROM user
    WHERE userStatus = 1 AND
    subscriberId = 1
");
?>
    
<form id="form_validation" action="../c/stareas.php?m=aupdateDb&stareasmId=<?php echo $stareasmId;?>&stareasId=<?php echo $stareasId;?>" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">
    
        <div id="edit<?php echo $stareasmId;?>" class="modal" style="width:80%;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        Modificar <?php echo $stareasName;?>
                    </div>
                </div>
            </div>
<div class="modal-content">
                
<div class="col s12 l12 ">
                    
    <div class="row   ">
        
         <div class="col s12" >
            <div class="  ">

<div class="row">   
    <div class="col s12 m12 l4  ">
        <div class="input-field">
            <input value="<?php echo $st ?>" id="st" name="st" placeholder="" type="text" >
            <label class="font-17" for="st">Sub Tarea</label>
        </div>
    </div>
    <div class="col s12 m12 l2  ">
        <div class="input-field">
            <input value="<?php echo $testimado ?>" id="testimado" name="testimado" placeholder="" type="text" >
            <label class="font-17" for="testimado">Tiempo estimado</label>
        </div>
    </div>
        <div class="col s12 m5 l2 ">
        <div class="input-field">
            <select id="tip" name="tip" placeholder="" type="text" class="validate">
                <option value="<?php echo $ptareaId?>"><?php echo $ptareaName ?></option>
                <?php while ($g = $_pt -> fetch_object()) { ?>
                <option value="<?php echo $g -> ptareaId; ?>"><?php echo $g -> ptareaName; ?></option>
                <?php } ?>
            </select>
            <label class="font-13" for="tip">Prioridad</label>
            <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
        </div>
    </div>
    <div class="col s12 m4 l3 ">
        <div class="input-field">
            <select id="userId" name="userId" placeholder="" type="text" class="validate">
                <option value="<?php echo $userId ?>"><?php echo $userName ?></option>
                <?php while ($g = $_user2 -> fetch_object()) { ?>
                <option value="<?php echo $g -> userId; ?>"><?php echo $g -> userName; ?> <?php echo $g -> userSurname;?></option>
                <?php } ?>
            </select>
            <label class="font-13" for="userId">Asignar</label>
            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
        </div>
    </div>
            <div class="col s12 m12 l12 m-t--20 ">
                                                <ul class="collapsible">
                                                    <li>
                                                      <div class="collapsible-header grey lighten-4"><i class="material-icons green-text">assignment</i>Explicaci&oacute;n</div>
                                                      <div class="collapsible-body">  
                                                          <div class="input-field">
                                                            <textarea class="ckeditor" name="exp"  >
                                                           <?php echo $exp ?>
                                                            </textarea>
                                                         </div>
                                                       </div>
                                                    </li>
                                            
                                                </ul>
            </div>
    

    
</div>

<!-- img -->
<div class="row">
<div class="col s12 m12 m-t--20">
   <ul class="">
      <li class=""></li>
                 <li class="p-l-10 p-r-10 p-t-10 p-b-10">
              <div class="row">
                      <div class="col s12">
                   <?php
                            $id = $stareasmId;
                             $path2 = "../stareasm/" . $id;
                            if (file_exists($path2)) {
                                $directorio2 = opendir($path2);
                                while ($archivo2 = readdir($directorio2)) {
                                    if (!is_dir($archivo2)) {?>      
                               <div class="file-field input-field">
                                   <div class="btn white tooltipped" data-position="top" data-tooltip="Documento">
                                       <i class="material-icons blue-text">attach_file</i>
                                                                       
                                 </div>
                              <div class="file-path-wrapper">
                            <input value="<?php echo $archivo2;?>" type="text" readonly>
                     </div>
                  </div>
              </div>
                                                        </div>
                 <div class="row">
                 <div class="col s12  m-t--10 m-b-5">
                <a class="blue-text" target="_blank" href="<?php echo $path2;?>/<?php echo $archivo2;?>">Ver Imagen</a>
         <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Ver el Documento Adjunto"><i class="material-icons blue-text">info</i></a>
                                                                </div>

                                                                                                        
                                                        </div><?php }}}
      else{?>
  <div class="row">


    <div class="col s12 ">
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
                  <div class="col s12 l6 m-t--10 m-b-5">
                      <a class="grey-text" href="#!">Ver Documento</a>
                          <a href="#!" class="tooltipped left m-r-10" data-position="right" data-tooltip="Ver el Documento Adjunto"><i class="material-icons grey-text">info</i></a>
                    </div>
                                                                                                       
                </div>

                                                     <?php }?>
         
                                                    </li>
                                                </ul>
                                            </div>

</div>
<!-- termina la img -->

<div class="row">
    <div class="col s12 m-t-10">
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