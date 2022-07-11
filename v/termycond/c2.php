<?php 


$sS = "localhost";
$uS = "sagracom";
$pS = "Sagra2507.";
$dS = "sagracom_2" ;
$connection = new mysqli($sS, $uS, $pS, $dS);

$_ff = mysqli_query($connection, "
    SELECT * FROM frecuencia
    WHERE termycondId = '" . $termycondId . "'
");

$ff = $_ff -> fetch_object();
$frecuencia = $ff -> frecuencia ;
$f1 = $ff -> f1;
$f2 = $ff -> f2;
$f3 = $ff -> f3;
$f4 = $ff -> f4;
$f5 = $ff -> f5;
$f6 = $ff -> f6;
$f7 = $ff -> f7;
$f8 = $ff -> f8;
$f9 = $ff -> f9;
$f10 = $ff -> f10;
$f11 = $ff -> f11;
$f12 = $ff -> f12;
?>
<main>

<div class="container">
    
    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal<?php echo $_SESSION["subscriberId"] ?></a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Terminos y Condiciones</a>
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
                            <span  class="breadcrumb p-l-10 blue-text" >Cliente</span>
                            <a href="#!" class="breadcrumb blue-text" ><?php echo $clientName ?> </a>
                            <a href="../c/termycond.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                    <i class="material-icons blue-text">cancel</i>
                                </a>
                                <a class="right m-r-5 tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                                
                                    <a class="right m-r-5 tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen">
                                        <i class="material-icons green-text">file_download</i></a>
                                        
                                 <a class="right m-r-5" id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                                 
                                  <a href="#Leyenda" class="tooltipped right modal-trigger m-r-10" data-position="left" data-tooltip="Instruciones">
                                        <i class="material-icons blue-text">local_library</i>
                                    </a>
                                  <a href="javascript: history.go(-1);" class="tooltipped right blue-text m-r-10" data-position="left" data-tooltip="Atr&aacute;s">
                                        <i class="material-icons blue-text">undo</i>
                                    </a>
                        </div>
                    </div>
                    
                    <div class="m-l-10 m-r-10">
                                
                                <div class='row'>
                                    <div class="col s12 m6 l7 m-t--5 m-b-10">
                                        <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                                <table class="blue-grey lighten-4">
                                                
                                                <tr>
                                                            <td>Socio lider </td> <td><?php echo $liderName ?></td>
                                                          </tr>  
                                                         <tr>
                                                            <td>Gerente </td> <td> <?php echo $gerenteName; ?> </td>
                                                         </tr>    
                                                             
                                                         <tr>
                                                            <td>Fecha</td>
                                                            <td>21/06/2021</td>
                                                         </tr>    
                                                           <tr>
                                                            <td >Naturaleza del servicio:</td> <td><?php echo $naturalezaNombre ?> </td>
                                                         </tr>  
                                                         <tr>
                                                            <td>Servicio</td> <td><?php echo $serviceName ?></td>
                                                         </tr>   


                                                </table>
                                        </div>
                                    </div>
                                   
                                </div>
                     </div>
                    <div class="m-l-10 m-r-10">
                   <div class="row">
                       <div class="col s12 ">
                                            <div class="card-panel white-text blue-grey darken-2" style="line-height : 20px;"><p>Frecuencia de Revisi&oacute;n</p></div>
                    </div>
                   </div>
                   
                  </div> 

<!-- carta -->
    <div class="card-content">
        <div class="card m-t--10 p-l-10 p-r-10">
<!-- contenido de roles de proyecto -->
    
         
 <form action="../c/termycond.php?m=createDb1&termycondId=<?php echo $termycondId?>&iid=<?php echo $iid ;?>"method="post">            
                    <div class="row">
                        <div class="col s12 m3 m-t-20">
                            <div class="input-field col s12">
                                <select name="frecuencia">
                                        <option value="<?php echo $frecuencia?>" disabled selected><?php echo $frecuencia?></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4"> 4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                </select>
                                 <label>Frecuencia de Revisi&oacute;n</label>
                             </div>
                        </div>
                                            <div class="col s3  " style="margin-top: 2.5em;">
                                                <button type="submit" class="btn blue waves-effect tooltipped m-l-5" data-position="top" data-tooltip="Guardar"><i class="material-icons">save</i></button>
                                            </div>
                    </div>
</form>


                <!--  tabla -->    
<form action="../c/termycond.php?m=createDb11&termycondId=<?php echo $termycondId?>&iid=<?php echo $iid ;?>" method="post">                 
                    <div class="row">

                        <?php if ($frecuencia >= 1){?>
                         <div class="col s12 m2">
                            <div class="input-field">
                                <small>Frecuencia de Revisi&oacute;n 1:</small>
                                <input style="text-align: center;" type="text" name="fecha1" class="datepicker" value="<?php echo $f1;?>" required="">
                            </div>
                        </div>
                        <?php } ?>

                        <?php if ($frecuencia >= 2){?>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Frecuencia de Revisi&oacute;n 2:</small>
                                <input style="text-align: center;" type="text" name="fecha2" class="datepicker" value="<?php echo $f2;?>" required="">
                            </div>
                        </div>
                        <?php } ?>

                        <?php if ($frecuencia >= 3){?>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Frecuencia de Revisi&oacute;n 3:</small>
                                <input style="text-align: center;" type="text" name="fecha3" class="datepicker" value="<?php echo $f3;?>" required="">
                            </div>
                        </div>
                        <?php } ?>

                        <?php if ($frecuencia >= 4){?>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Frecuencia de Revisi&oacute;n 4:</small>
                                <input style="text-align: center;" type="text" name="fecha4" class="datepicker" value="<?php echo $f4;?>" required="">
                            </div>
                        </div>
                        <?php }?>

                        <?php if ($frecuencia >= 5){?>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Frecuencia de Revisi&oacute;n 5:</small>
                                <input style="text-align: center;" type="text" name="fecha5" class="datepicker" value="<?php echo $f5;?>" required="">
                            </div>
                        </div>
                        <?php }?>

                        <?php if ($frecuencia >= 6){?>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Frecuencia de Revisi&oacute;n 6:</small>
                                <input style="text-align: center;" type="text" name="fecha6" class="datepicker" value="<?php echo $f6;?>" required="">
                            </div>
                        </div>
                        <?php }?>

                        <?php if ($frecuencia >= 7){?>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Frecuencia de Revisi&oacute;n 7:</small>
                                <input style="text-align: center;" type="text" name="fecha7" class="datepicker" value="<?php echo $f7;?>" required="">
                            </div>
                        </div>
                        <?php } ?>
                        
                        <?php if ($frecuencia >= 8){?>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Frecuencia de Revisi&oacute;n 8:</small>
                                <input style="text-align: center;" type="text" name="fecha8" class="datepicker" value="<?php echo $f8;?>" required="">
                            </div>
                        </div>
                        <?php }?>

                        <?php if ($frecuencia >= 9){?>   
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Frecuencia de Revisi&oacute;n 9:</small>
                                <input style="text-align: center;" type="text" name="fecha9" class="datepicker" value="<?php echo $f9;?>" required="">
                            </div>
                        </div>
                        <?php }?>

                        <?php if ($frecuencia >= 10){?>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Frecuencia de Revisi&oacute;n 10:</small>
                                <input style="text-align: center;" type="text" name="fecha10" class="datepicker"  value="<?php echo $f10;?>" required="">
                            </div>
                        </div>
                        <?php }?>
                        <?php if ($frecuencia >= 11){?>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Frecuencia de Revisi&oacute;n 11:</small>
                                <input style="text-align: center;" type="text" name="fecha11" class="datepicker" value="<?php echo $f11;?>" required="">
                            </div>
                        </div>
                        <?php }?>
                        <?php if ($frecuencia >= 12){?>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Frecuencia de Revisi&oacute;n 12:</small>
                                <input style="text-align: center;" type="text" name="fecha12" class="datepicker" value="<?php echo $f12;?>" required="">
                            </div>
                        </div>
                        <?php }?>
                        
                        <?php if ($frecuencia >= 1){?>
                            <div class="col s12 m-t-20 m-b-10">
                                <button type="submit" class="btn blue waves-effect tooltipped m-l-5" data-position="top" data-tooltip="Guardar"><i class="material-icons">save</i></button>
                            </div>
                        <?php }?>


                    </div>
</form>    
                <!--  tabla -->
             
   <!-- terminar -->
 <form action="../c/termycond.php?m=createDb111&termycondId=<?php echo $termycondId?>&iid=<?php echo $iid ;?>&clientId=<?php echo $clientId?>&serviceId=<?php echo $serviceId?>" method="post">  
         <div class="row">
                                            <div class="col s12 m-t-20">
                                                <label>
                                                    <input type="checkbox" name="important"/>
                                                    <span class="blue-grey-text text-darken-2">Haga click en el recuadro si considera haber hallado una "Situaci&oacute;n Importante"!</span>
                                                </label>
                                            </div>
                                            <div class="col s12 m-t-20">
                                                <label>
                                                    <input name="ok" type="checkbox" required=""/>
                                                    <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                </label>
                                            </div>
                                            <div class="col s12">
                                                <label>
                                                    <input type="checkbox" name="completed"/>
                                                    <span class="blue-grey-text text-darken-2"><u>Completado</u>, listo para ser revisado!</span>
                                                </label>
                                            </div>

                                            <div class="col s12 m-t-20 m-b-10">
                                                <a href="javascript: history.go(-1)" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
                                                </a>
                                                <button type="submit" class="btn blue waves-effect tooltipped m-l-5" data-position="top" data-tooltip="Guardar"><i class="material-icons">save</i></button>
                                            </div>

         
        </div>
  </form>                   
          <!-- terminar -->
                
                
                
        
  

<!--  end contenido de roles de proyecto -->
        
    </div>
</div>   


    
              <ul class="collapsible m-l-10 m-r-10">
    <li>
        <div class="collapsible-header blue-grey-text text-darken-2">
            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                Traza de Terminos y Condiciones 
        </div>

        <div class="collapsible-body">
                             
                                      
        </div>
    </li>
 </ul>        
                 
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

<script type="text/javascript" src="../js/shareholder.js"></script>