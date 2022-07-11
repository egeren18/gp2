    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Asignar</a>
                    <a href="#!" class="breadcrumb ">A&ntilde;adir</a>
                    <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                        <i class="material-icons blue-text">help</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons blue-text">forum</i>
                    </a>
                    <a href="#leyenda" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="leyenda">
                      <i class="material-icons green-text">local_offer</i>
                     </a>    
                    <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                        <?php echo $_SESSION["userFullName"]; ?>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12 m-t-5">
                    
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="blue-text p-l-10">Equipo de Trabajo</span>
                                    <a href="../c/stareas.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                    <a class="right m-r-5 tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                                    <a class="right m-r-5 tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen"><i class="material-icons green-text">file_download</i></a>
                                    <a class="right m-r-5" id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                                    <a href="javascript: history.go(-1);" class="tooltipped right m-r-5" data-position="left" data-tooltip="Atr&aacute;s">
                                <i class="material-icons blue-grey-text">undo</i>
                            </a>
                                </div>
                            </div>
                            
                            <div id="main">
                        <div id="screenshot">
                            <div class="card m-t-10 m-l-5 m-r-5">
                                <div class="p-l-20 p-t-20 p-r-20 p-b-20">
                                    <div class="row">
                                        <div class="col s12 m6 m-b-10">
                                            <table class="blue-grey lighten-5">
                                                <tr>
                                                    <td>Tarea</td>
                                                    <td><?php echo $stareasName;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tiempo Estimado:</td>
                                                    <td>
                                                    <?php
                                                        $contador2 = 0;
                                                        while($tabla = $_tabla2 -> fetch_object())
                                                        {
                                                        $contador2 = $contador2 + $tabla -> testimado;
                                                        }
                                                    
                                                    
                                                    echo $contador2; ?> horas</td>
                                                </tr>
                                                <tr>
                                                    <td>Departamento:</td>
                                                    <td><?php echo $departmentName; ?> </td>
                                                </tr>
                                                <tr>
                                                    <td>Texto:</td>
                                                    <td><?php echo $stareastext; ?> </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m-t-20">
                                            <ul class="collection">
                                                <li class="collection-item blue-grey lighten-5">
                                                    <p>A continuaci&oacute;n, seleccione los integrantes del Equipo de Trabajo para &eacute;sta Tarea.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <form id="form_validation" action="../c/stareas.php?m=asignarDb&cid=<?php echo $_GET['cid']; ?>" method="post"
                                    enctype="multipart/form-data" onsubmit="return checkForm(this);">
                                        <div class="row">
                                            
                                            <div class="col s12 m5 l4 m-t-10 ">
                                                <div class="input-field">
                                                    <input value="" id="st" name="st" placeholder="" type="text" class="validate" required  >
                                                    <label class="" for="st">Subtarea</label>
                                                    <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
                                                </div>
                                            </div>
                                             <div class="col s12 m5 l2 m-t-10 ">
                                                <div class="input-field">
                                                    <input value="" id="tm" name="tm" placeholder="" type="text" class="validate" required  >
                                                    <label class="" for="tm">Tiempo</label>
                                                    <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
                                                </div>
                                            </div>
                                            <div class="col s12 m5 l2 m-t-10 ">
                                                <div class="input-field">
                                                               <select id="tip" name="tip" placeholder="" type="text" class="validate">
                                                                    <option value="">&nbsp;</option>
                                                                    <?php while ($g = $_pt -> fetch_object()) { ?>
                                                                    <option value="<?php echo $g -> ptareaId; ?>"><?php echo $g -> ptareaName; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                    <label class="font-13" for="tip">Prioridad</label>
                                                    <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
                                                </div>
                                            </div>
                                            <div class="col s12 m4 l4 m-t-10 ">
                                                             <div class="input-field">
                                                                <select id="userId" name="userId" placeholder="" type="text" class="validate">
                                                                    <option value="">&nbsp;</option>
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
                                                           
                                                            </textarea>
                                                         </div>
                                                       </div>
                                                    </li>
                                            
                                                </ul>
                                            </div>
                                            
 <!-- img 1-->
  
                <div class="col s11 m-t-10">
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
                                            
                                          
                                            <div class="col s12 m1 m-t-30">
                                                <button type="submit" class="btn blue waves-effect tooltipped" data-position="left" data-tooltip="Guardar" >
                                                    <i class="material-icons">save</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col s12 m12 m-t-20 m-b-10">
                                            <table class="white">
                                                <thead>
                                                    <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                                        <td>Id</td>
                                                        <td id="border-white" >Tarea</td>
                                                        <td id="border-white" >Tiempo</td>
                                                        <td id="border-white" >Prioridad</td>
                                                        <td id="border-white" >Integrante</td>
                                                        <td>Img</td>
                                                        <td id="border-white" width="10%"></td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <?php
                                                        $contador = 0;
                                                        while ($tabla = $_tabla -> fetch_object()){
                                                        $un = $tabla -> userId;
                                                        $tun = $tabla -> ptareaId;
                                                        $_user = mysqli_query($master, "
                                                            SELECT * FROM user
                                                            WHERE userId = '" . $un . "'
                                                            
                                                        ");
                                                        $user = $_user -> fetch_object();
                                                        $userName = $user -> userName;
                                                        $userSurname = $user -> userSurname;
                                                        
                                                        $_tip = mysqli_query($master, "
                                                            SELECT * FROM ptarea
                                                            WHERE ptareaId = '" . $tun . "'
                                                            
                                                        ");
                                                        $tip = $_tip -> fetch_object();
                                                        $tipName = $tip -> ptareaName;
                                                        $contador++;
                                                        ?>
                                                        <td><?php echo $contador;?></td>
                                                        <td>
                                                        <a href="#edit<?php echo $tabla -> stareasmId; ?>" class="m-l-10 modal-trigger" data-position="left"><?php echo $tabla -> st; ?></a>    
                                                        </td>
                                                        <td><?php echo $tabla -> testimado;?></td>
                                                        <td><?php echo $tipName;?> </td>
                                                        <td><?php echo $userName;?> <?php echo $userSurname;?> </td>
                                                       <td>
                                                           
                                                           <?php
                                                                $id = $tabla -> stareasmId;
                                                                 $path2 = "../stareasm/" . $id;
                                                                if (file_exists($path2)) {
                                                                    $directorio2 = opendir($path2);
                                                                    while ($archivo2 = readdir($directorio2)) {
                                                                        if (!is_dir($archivo2)) {?> 
                                                                                               
                                                           <a  class="blue-text" target="_blank" href="<?php echo $path2;?>/<?php echo $archivo2;?>">   
                                                           <i class="material-icons blue-text">attach_file</i>
                                                           </a>
                                                           <?php }}}?>
                                                       </td>
                                                        
                                                        <td></td>
                                                        </tr>
                                                        <?php }?>
                                                    
                                                </thead>
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m-t-10">
                                    <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>    
                    
                </div>
            </div>
        </div>
    </main>
<!-- modal de ayuda-->
<div id="help" class="modal" style="width:80%;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        Manual 
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
            <input value="Sistema de Tareas" id="cuestionarioName" name="cuestionarioName" placeholder="" type="text" readonly>
            <label class="font-17" for="cacName">Manual</label>
        </div>
    </div>
</div>    
<div class="row">

    <div class="col s12 m12 l12 ">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons green-text">contacts</i>Sistema de tareas </div>
              <div class="collapsible-body">  
                  <div class="input-field">
                  <p> El sistema de tareas esta dise&ntilde;ado para cordinar el cumplimiento de trabajos en equipo 
                  </p>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>
    
</div>



    </div>
</div>



    </div>
       
</div>
         </div>
    </div>
<!-- end modal de ayuda -->
<?php include '../v/stareas/edit.php'; ?>
<?php include '../v/support/leyenda-st.php'; ?>
    <?php include '../v/support/modalAdd.php';?>

    <script type="text/javascript" src="../js/shareholder.js"></script>
    <script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-ac|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>