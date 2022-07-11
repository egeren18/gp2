
<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Diagn&oacute;stico</a>
            <a href="#!" class="breadcrumb ">Editar</a>
            <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                <i class="material-icons blue-text">help</i>
            </a>
            <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                <i class="material-icons blue-text">forum</i>
            </a>
            <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                <?php echo $_SESSION["userFullName"];?>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 m-t-5">
            <div class="card blue-grey lighten-5 hoverable">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <span class="breadcrumb p-l-10">Modificar</span>
                            <a href="#!" class="breadcrumb">Diagn&oacute;stico</a>
                            <a href="#!" class="breadcrumb"><?php echo $client -> c1Name; ?></a>
                            <a href="../c/dformulario.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                <i class="material-icons blue-grey-text">cancel</i>
                            </a>
                        </div>
                    </div>
                    <form id="form_validation" action="../c/dformulario.php?m=updateDb2&cid=<?php echo $_GET["cid"]; ?>" method="post"
                     enctype="multipart/form-data" onsubmit="return checkForm(this);">
                        <div class="card m-t-10 m-l-5 m-r-5">
                            <div class="row">
                                <div class="col s12">
                                    <div class="m-t-20 m-b-20 m-l-20 m-r-20">
                                        <ul class="collapsible">
                                            <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2">Datos Genereales</span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="p-t-20"></div>
                                                    <div class="row">
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> c1Name; ?>" id="apellido" name="apellido" placeholder="" type="text" readonly>
                                                                <label for="apellido">Persona Contacto</label>
                                                            </div>
                                                        </div>
                                                         <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> c1Apellido; ?>" id="apellido" name="apellido" placeholder="" type="text" readonly>
                                                                <label for="apellido">Apellido</label>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> c1Empresa; ?>" id="nombreE" name="nombreE" placeholder="" type="text" readonly>
                                                                <label for="">Empresa </label>
                                                            
                                                            </div>
                                                        </div>
                                                         <div class="col s12 m6 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> c1Cargo; ?>" id="Cargo" name="Cargo" placeholder="" type="text" readonly>
                                                                <label for="">Cargo</label>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> c1Tlf; ?>" id="telefono" name="telefono" placeholder="" type="text"  readonly>
                                                                <label for="telefono">Tel&eacute;fono</label>      
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> c1Correo ?>" id="correo" name="correo" placeholder="" type="text"  readonly>
                                                                <label for="fecha">Correo</label>      
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m3 l3">
                                                            <div class="input-field">
                                                                <input value="<?php echo $client -> c1Fecha ?>" id="fecha" name="fecha" placeholder="" type="text"  readonly>
                                                                <label for="fecha">Fecha</label>      
                                                            </div>
                                                        </div>
                                                        
                                                       
                                                    </div>   
                                                  
                                                   
                                                </div>
                                            </li>
                                            <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2">Cuestionario</span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="p-t-20"></div>
                                                    
                                                    <div class="row">
                                                    <div class="col s12 m12 l12">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th>Pregunta</th>
                                                            <th>Respuesta</th>
                                                          
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        <?php while ($c = $_c -> fetch_object()) {
                                                           $_pname = mysqli_query($master, "
                                                           SELECT * FROM pregunta
                                                           WHERE preguntaId = '" . $c -> preguntaId . "'
                                                       ");
                                                       
                                                       $pname = $_pname -> fetch_object();
                                                       $name = $pname -> preguntaName;  ?>    
                                                        <tr>
                                                            <td style="width:80%;"><?php echo $name; ?></td>
                                                            <td style="width:20%;">
                                                            <?php if($c -> r  == 1 ) {?>Muy en Desacuerdo<?php }?>
                                                            <?php if($c -> r  == 2 ) {?>Desacuerdo<?php }?>
                                                            <?php if($c -> r  == 3 ) {?>Neutral<?php }?>
                                                            <?php if($c -> r  == 4 ) {?>Deacuerdo<?php }?>
                                                            <?php if($c -> r  == 5 ) {?>Muy Deacuerdo<?php }?>

                                                            </td>
                                                                                                   
                                                        </tr>
                                                        <?php } ?> 
                                                        </tbody>
                                                    </table>
                                                    </div>
                                                        </div>
                                            
                                
                                                </div>
                                            </li>
                                            
                                          
                                            
                                            <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2">Resultados</span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <?php include '../v/dformulario/categorias.php';?>
                                                </div>
                                            </li>
                                            

                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2">Reporte</span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="p-t-20"></div>
                                                    
                                                    <div class="row">
                                                    <div class="col s12 m12 l12">
                                                   <a class="blue-text" href="https://sagra.com.ve/diagnostico/resultado.php?id=<?php echo $_GET["cid"];?>&d=<?php echo $_GET["d"];?>" target="_blank">
                                                       Link del Reporte
                                                   </a>
                                                    </div>
                                                        </div>
                                            
                                
                                                </div>
                                            </li>
                                                  <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2">Observaciones</span>
                                                </div>
                                                <div class="collapsible-body">
                                                 
                                                     <ul class="collapsible">
                                                     <?php
                                                     $i = 0;
                                                     while ($categoriasd = $_categoriasd -> fetch_object()){ 
                                                     $i++;
                                                     $a = 'a'.$i;
                                                     $_observacion = mysqli_query($master, "
                                                        SELECT * FROM c1
                                                        WHERE c1Id = '" . $_GET["cid"] . "'
                                                    ");
                                                    $observacion = $_observacion -> fetch_object()
                                                     ?>
                                                       <li>
                                                            <div class="collapsible-header">
                                                                <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                                <span class="blue-grey-text text-darken-2"><?php echo $categoriasd -> categoriasName ;?></span>
                                                            </div>
                                                            
                                                            <div class="collapsible-body">
                                                               <div class="row">
                                                                      <div class="col s12 m12 l12">
                                                                         <?php if( $procesado == null){ ;?>
                                                                        <textarea name="a<?php echo $i;?>" class="ckeditor" ><?php echo $observacion -> $a ;?></textarea>
                                                                        <?php }
                                                                        else{ ?>
                                                                        <textarea name="a<?php echo $i;?>" class="ckeditor" readonly><?php echo $observacion -> $a ;?></textarea>
                                                                        <?php }?>
                                                                      </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </li>
                                                     <?php } ?>
                                                     </ul>
                                                    
                                                    
                                                    
                                                    
                                            
                                
                                                </div>
                                            </li>
                                                
                                                    
                        
                                        </ul>
                                    <div class="m-t-20"></div>
                             
                                        <div class="row">
                                            <div class="col s12 m-t-10 ">
                                                <label>
                                                    <input type="checkbox" class="validate filled-in" required="" />
                                                    <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                </label>
                                            </div>
                                            <?php if ($procesado == null){?>
                                            <div class="col s12 m-t-10">
                                                <label>
                                                 <input type="checkbox" class="validate filled-in" name="approved" value="1"/>
                                                   <span class="blue-grey-text text-darken-2"><span class="blue-text">Aprobar</span>, Revisado y Corregido!</span>
                                                </label>
                                            </div>
                                            <?php } ?>
                                        
                                        </div>
                                        <div class="row">
                                            <div class="col s12 m-t-10 ">
                                                <a href="../c/dformulario.php?m=index" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
                                                </a>
                                                <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                                    <i class="material-icons">save</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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

</main>

<div id="help" class="modal">
<div class="modal-content">
    <p class="">Manual de Usuario</p>
    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="modal-footer">
    <button class="modal-close waves-effect waves-light btn blue btn-small">Continuar</button>
</div>
</div>

<?php include '../v/support/modalAdd.php'; ?>
<script type="text/javascript">
    $(document).ready(function(){
	$('.tooltipped').tooltip();
	$('.collapsible').collapsible();
});
</script>
<script type="text/javascript" src="../js/shareholder.js"></script>
