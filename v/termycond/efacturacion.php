
<form action="../c/termycond.php?m=createDb2&termycondId=<?php echo $termycondId?>&serviceId=<?php echo $serviceId?>&clientId=<?php echo $clientId?> "method="post">
    <div class="row">
       
            
                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                    <ul class="collection m-t-20">
                        <li class="collection-item blue-grey lighten-2 white-text">Esquema de Facturaci&oacute;n</li>
                    </ul>
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
                                            <textarea id="ckeditor" name="efacturacionText" class="ckeditor m-t-20" readonly>
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