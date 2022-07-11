<main>

<div class="container">
    
    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
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
                                            <div class="card-panel white-text blue-grey darken-2" style="line-height : 20px;"><p>Esquema de Facturaci&oacute;n</p></div>
                    </div>
                   </div>
                   
                  </div> 

<!-- carta -->
    <div class="card-content">
        <div class="card m-t--10 p-l-10 p-r-10">
<!-- contenido de roles de proyecto -->
    <!-- contenido c4-->
    <form action="../c/termycond.php?m=createDb2&termycondId=<?php echo $termycondId?>&serviceId=<?php echo $serviceId?>&clientId=<?php echo $clientId?> "method="post">
    <div class="row">
       
            
                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                   
                    <div class="row">
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Fecha Factura (Estimada):</small>
                                <input style="text-align: center;" type="text" name="invoiceDate" class="datepicker" required="">
                            </div>
                        </div>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Cantidad de Facturas:</small>
                                <input style="text-align: center;" type="text" name="quantity" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Monto Factura:</small>
                                <input style="text-align: right ;" type="number" name="samount" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Moneda:</small>
                                <select name="scurrencyId" placeholder="" class="validate" required="">
                                    <?php 
                                    $_monedausada = mysqli_query($master, "
                                            SELECT * FROM termycond
                                            WHERE termycondId = '" . $termycondId . "'
                                            ");
                                    
                                            $monedausada = $_monedausada -> fetch_object();
                                            $monedausada = $monedausada -> currencyId ;
                                            
                                    $_moneyName = mysqli_query($master, "
                                            SELECT * FROM currency
                                            WHERE currencyId = '" . $monedausada . "'
                                            ");
                                    
                                            $moneyName = $_moneyName -> fetch_object();
                                            $moneyName = $moneyName -> currencyName ;        
                                    
                                    ?>
                                    <option value="<?php echo $monedausada ?>"><?php echo $moneyName?></option>
                                  
                                </select>
                            </div>
                        </div>
                        <div class="col s1 m-t-30">
                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m-b-10">
                            <table class="white" id="planning">
                                <thead>
                                    <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                        <td id="border-white" class="center" width="20%">Fecha Factura (Estimada)</td>
                                        <td id="border-white" class="center" width="20%">Cantidad de Facturas:</td>
                                        <td id="border-white" class="center" width="20%">Monto Factura</td>
                                        <td id="border-white" class="center" width="20%">Moneda</td>
                                        <td id="border-white" class="center" width="20%">Totales</td>
                                        <td id="border-white" class="center" width="20%"></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($r_scheme = mysqli_fetch_array($scheme)) { ?>
                                    <?php $tracingSchemeId = $r_scheme["tracingSchemeId"];
                                    $invoiceDate = $r_scheme["invoiceDate"];
                                    $quantity = $r_scheme["quantity"];
                                    $amount = $r_scheme["samount"];
                                    $currencyId = $r_scheme["scurrencyId"];
                                    
                                    $_moneda = mysqli_query($master, "
                                    SELECT * FROM currency
                                    WHERE currencyId = '" . $currencyId . "' AND '" . $termycondId . "'
                                    "); 
                                     
                                     
                                    //esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
                                    $moneda = $_moneda -> fetch_object();
                                                                
                                    //esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
                                    $currencyName = $moneda -> currencyName ;
                                    
                                    $_tcntador = mysqli_query($master, "
                                    SELECT * FROM efacturacion
                                    WHERE termycondId = '" . $termycondId . "'
                                    ");

                                    //iniciar variable contador
                                    
                                    $contador2=0;

                                    //while para hacer el recorrido en la tabla seleccionada
                                    while ($tcntador = $_tcntador -> fetch_object()){
                                    
                                    //almacenar los valores en el contador
                                    
                                    $contador2 = $contador2+$tcntador-> samount;
                                    
                                    }
                                    
                                    $_comparardorM = mysqli_query($master, "
                                    SELECT * FROM cartypreprojecto
                                    WHERE termycondId = '" . $termycondId . "'
                                    "); 
                                    $comparardorM = $_comparardorM -> fetch_object(); 
                                    $comparado = $comparardorM -> amount ;
                                    
                                    
                                    ?>
                                        <tr>
                                            <td id="border-grey" class="center"><?php echo $invoiceDate; ?></td>
                                            <td id="border-grey" class="center"><?php echo $quantity; ?></td>
                                            <td id="border-grey" class="center"><?php echo $amount; ?></td>
                                            <td id="border-grey" class="center"><?php echo $currencyName; ?></td>
                                            
                                            <td id="border-grey" class="center">
                                                
                                                
                                                <a href="../c/tracing.php?m=updateScheme&c=<?php //echo $c; ?>&i=<?php //echo $tracingSchemeId; ?>" class="tooltipped m-r-5" data-position="left" data-tooltip="Editar">
                                                    <i class="material-icons blue-text">edit</i>
                                                </a>
                                                <a href="../c/tracing.php?m=deleteSchemeDb&c=<?php //echo $c; ?>&i=<?php //echo $tracingSchemeId; ?>" class="tooltipped m-r-5" data-position="left" data-tooltip="Eliminar">
                                                    <i class="material-icons red-text">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    
                                    
                   
                                <tr>
                                        <td id="border-white" class="center" >Total facturas</td>
                                        <td id="border-white" class="center" ></td>
                                        <td id="border-white" class="center" ><?php if ($contador2==$comparado) { echo $contador2;} ?>
                                                                                
                                                                              <?php if ($contador2!=$comparado) {?> <div class="red-text"> <b> <?php echo $contador2 ?> </b> </div> <?php } ?>
                                                                              
                                                                              
                                                                            </td> 
                                        
                                        <td id="border-white" class="center" ><?php echo $moneyName?></td>
                                        <td id="border-white" class="center" ></td>
                                       
                                            
                                        
                                </tr>
                      
                                    
                                </tbody>
                            </table>

                                    <div class="row">
                                        <div class="col s12 m12 l12 m-t-20 ">
                                            <ul class="collapsible">
                                                <li>
                                            <div class="collapsible-header grey lighten-4"><i class="material-icons green-text">list</i>Observaciones durante la negociaci&oacute;n</div>
                                                <div class="collapsible-body">
                                <div class="row">                  
                                <div class="col s12 m6 l12 m-t-10 ">
                                    <div class="input-field">
                                            <textarea id="ckeditor" name="efacturacionText" class="ckeditor m-t-20">
                                            <?php 
                                            
                                            $_efacturacionText = mysqli_query($master, "
                                            SELECT * FROM termycond
                                            WHERE termycondId = '" . $termycondId . "'
                                            ");
                                    
                                            $efacturacionText = $_efacturacionText -> fetch_object();
                                            $textofacturacion = $efacturacionText -> efacturacionText ;
                                            
                                            echo $textofacturacion; ?>
                                            
                                            </textarea>
                                        

                                                </div>
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                    </div>        
                                            
                                            
                                </div>
                            </div>
                        </div>
                  
          
            
           </form> 
 

    <!--  contenido c4 -->
          <!-- terminar -->
          <form action="../c/termycond.php?m=createDb22&termycondId=<?php echo $termycondId?>&serviceId=<?php echo $serviceId?>&clientId=<?php echo $clientId?> "method="post">
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