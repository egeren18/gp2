 <li>
 <div class="collapsible-header">
                                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                                        Otras consideraciones:
                                                                    </div>
                                                                    <div class="collapsible-body">
                                                                        <ul class="collapsible blue-grey-text text-darken-2">
                                                                            <li>
                                                                                <div class="collapsible-header blue lighten-5">
                                                                                    <i class="material-icons blue-text">edit</i>
                                                                                    Debilidades de Control Interno
                                                                                </div>
                                                                                <div class="collapsible-body">
                                                                                    
                                                                                <!-- aqui carga las cosas -->
                                                                            <?php 
                                                                            $_mp = mysqli_query($pquest, "
                                                                                    SELECT * FROM repuesta$vv
                                                                                    WHERE amId = '" . $amId . "'
                                                                                ");
                                                                                $mp = $_mp -> fetch_object();
                                                                            if($name = $mp -> statusId < 2){?>
                                                                                
                                                                                    <div class="row">
                                                                                    
                                                                                        <div class="col s3 m-b-10">
                                                                                            <a class="waves-effect waves-light btn blue-grey modal-trigger" href="#oc">Punto de control</a>
                                                                                            
                                                                                        </div>
                                                                                        
                                                                                    </div>                                                    
                                                                                    <?php }?>
                                                                                <!-- end cargar cosas -->
                                                                                
                                                                                <!--tabla-->
                                                                                    <table class="white" id="planning">
                                                                                        <thead>
                                                                                            <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                                                                                <td id="border-white"  width="10%">Rubro</td>
                                                                                                <td id="border-white"  width="20%">Titulo</td>
                                                                                                <td id="border-white"  width="30%">Descripci&oacute;n</td>
                                                                                                <td id="border-white"  width="30%">Recomentaci&oacute;n del Asunto</td>
                                                                                                <td id="border-white" width="10%">Acci&oacute;n</td>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                              <?php
                                                                                              $_cp = mysqli_query($connection, "
                                                                                                 SELECT * FROM oc where amId = '" . $amId ."'and a = 1
                                                                                                ");
                                                                                                
                                                                                                 while ($cp = $_cp -> fetch_object()) {     //indice 1
                                                                                                    $_cr = mysqli_query($master, "
                                                                                                     SELECT * FROM rubro
                                                                                                    WHERE rubroId = '" . $cp -> rubroId . "'
                                                                                                    ");
                                                                                                    
                                                                                                    $cr = $_cr -> fetch_object();
                                                                                                    $rubroName= $cr-> rubroName;
                                                                                                   
                                                                                                    ?>
                                                                                                    <tr>
                                                                                                       <td><?php echo $rubroName ?></td>
                                                                                                       <td><?php echo $cp -> titulo; ?></td>
                                                                                                       <td><?php echo $cp -> d1;?></td>
                                                                                                       <td><?php echo $cp -> d2?></td>
                                                                                                       <td><i class="material-icons blue-text">edit</i>
                                                                                                       <i class="material-icons red-text">delete</i></td>
                                                                                                    </tr>
                                                                                          <?php } ?>
                                                                                        </tbody>
                                                                                      </table>
                                                                                                                                                        
                                                                                <!-- end tabla -->
                                                                                    
                                                                                    
                                                                                </div>
</li>
<!-- carta Gerencia-->
<li>
                                                                                <div class="collapsible-header blue lighten-5">
                                                                                    <i class="material-icons blue-text">edit</i>
                                                                                    Carta de Gerencia
                                                                                </div>
                                                                                <div class="collapsible-body">
                                                                                    
                                                                                <!-- aqui carga las cosas -->
                                                                                  <?php 
                                                                                        $_mp = mysqli_query($pquest, "
                                                                                                SELECT * FROM repuesta$vv
                                                                                                WHERE amId = '" . $amId . "'
                                                                                            ");
                                                                                            $mp = $_mp -> fetch_object();
                                                                                        if($name = $mp -> statusId < 2){?>
                                                                                            
                                                                                                <div class="row">
                                                                                                
                                                                                                    <div class="col s3 m-b-10">
                                                                                                        <a class="waves-effect waves-light btn blue-grey modal-trigger" href="#oc2">Punto de control</a>
                                                                                                        
                                                                                                    </div>
                                                                                                    
                                                                                                </div>                                                    
                                                                                    <?php }?>
                                                                                                                                  
                                                                                <!-- end cargar cosas -->
                                                                                
                                                                                <!--tabla-->
                                                                                  <table class="white" id="planning">
                                                                                        <thead>
                                                                                            <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                                                                                <td id="border-white"  width="10%">Rubro</td>
                                                                                                <td id="border-white"  width="20%">Titulo</td>
                                                                                                <td id="border-white"  width="30%">Descripci&oacute;n</td>
                                                                                                <td id="border-white"  width="30%">Recomentaci&oacute;n del Asunto</td>
                                                                                                <td id="border-white" width="10%">Acci&oacute;n</td>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                              <?php
                                                                                              $_cp = mysqli_query($connection, "
                                                                                                 SELECT * FROM oc where amId = '" . $amId ."' and a = 2
                                                                                                ");
                                                                                                
                                                                                                 while ($cp = $_cp -> fetch_object()) {     //indice 1
                                                                                                    $_cr = mysqli_query($master, "
                                                                                                     SELECT * FROM rubro
                                                                                                    WHERE rubroId = '" . $cp -> rubroId . "'
                                                                                                    ");
                                                                                                    
                                                                                                    $cr = $_cr -> fetch_object();
                                                                                                    $rubroName= $cr-> rubroName;
                                                                                                   
                                                                                                    ?>
                                                                                                    <tr>
                                                                                                       <td><?php echo $rubroName ?></td>
                                                                                                       <td><?php echo $cp -> titulo; ?></td>
                                                                                                       <td><?php echo $cp -> d1;?></td>
                                                                                                       <td><?php echo $cp -> d2?></td>
                                                                                                       <td><i class="material-icons blue-text">edit</i>
                                                                                                       <i class="material-icons red-text">delete</i></td>
                                                                                                    </tr>
                                                                                          <?php } ?>
                                                                                        </tbody>
                                                                                      </table>
                                                                                                                                                        
                                                                                <!-- end tabla -->
                                                                                    
                                                                                </div>
</li>
<!-- carta gerencia -->
<!-- Situaciones Cr铆ticas-->
<li>
                                                                                <div class="collapsible-header blue lighten-5">
                                                                                    <i class="material-icons blue-text">edit</i>
                                                                                    Situaciones Cr&iacute;ticas
                                                                                </div>
                                                                                <div class="collapsible-body">
                                                                                    
                                                                                <!-- aqui carga las cosas -->
                                                                                  <?php 
                                                                                        $_mp = mysqli_query($pquest, "
                                                                                                SELECT * FROM repuesta$vv
                                                                                                WHERE amId = '" . $amId . "'
                                                                                            ");
                                                                                            $mp = $_mp -> fetch_object();
                                                                                        if($name = $mp -> statusId < 2){?>
                                                                                            
                                                                                                <div class="row">
                                                                                                
                                                                                                    <div class="col s3 m-b-10">
                                                                                                        <a class="waves-effect waves-light btn blue-grey modal-trigger" href="#oc3">Punto de control</a>
                                                                                                        
                                                                                                    </div>
                                                                                                    
                                                                                                </div>                                                    
                                                                                    <?php }?>
                                                                                                                                  
                                                                                <!-- end cargar cosas -->
                                                                                
                                                                                <!--tabla-->
                                                                                  <table class="white" id="planning">
                                                                                        <thead>
                                                                                            <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                                                                                <td id="border-white"  width="10%">Rubro</td>
                                                                                                <td id="border-white"  width="20%">Titulo</td>
                                                                                                <td id="border-white"  width="30%">Descripci&oacute;n</td>
                                                                                                <td id="border-white"  width="30%">Recomentaci&oacute;n del Asunto</td>
                                                                                                <td id="border-white" width="10%">Acci&oacute;n</td>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                              <?php
                                                                                              $_cp = mysqli_query($connection, "
                                                                                                 SELECT * FROM oc where amId = '" . $amId ."' and a = 3
                                                                                                ");
                                                                                                
                                                                                                 while ($cp = $_cp -> fetch_object()) {     //indice 1
                                                                                                    $_cr = mysqli_query($master, "
                                                                                                     SELECT * FROM rubro
                                                                                                    WHERE rubroId = '" . $cp -> rubroId . "'
                                                                                                    ");
                                                                                                    
                                                                                                    $cr = $_cr -> fetch_object();
                                                                                                    $rubroName= $cr-> rubroName;
                                                                                                   
                                                                                                    ?>
                                                                                                    <tr>
                                                                                                       <td><?php echo $rubroName ?></td>
                                                                                                       <td><?php echo $cp -> titulo; ?></td>
                                                                                                       <td><?php echo $cp -> d1;?></td>
                                                                                                       <td><?php echo $cp -> d2?></td>
                                                                                                       <td><i class="material-icons blue-text">edit</i>
                                                                                                       <i class="material-icons red-text">delete</i></td>
                                                                                                    </tr>
                                                                                          <?php } ?>
                                                                                        </tbody>
                                                                                      </table>
                                                                                                                                                        
                                                                                <!-- end tabla -->
                                                                                    
                                                                                </div>
</li>
<!-- Situaciones Cr铆ticas -->
         
<!-- asientos -->         

                                                                            <li>
                                                                                <div class="collapsible-header blue lighten-5">
                                                                                    <i class="material-icons blue-text">edit</i>
                                                                                    Asientos de Ajustes
                                                                                </div>
                                                                                <div class="collapsible-body">
                                                                
                                                                         <!-- aqui carga las cosas -->
                                                                                <?php 
                                                                                        $_mp = mysqli_query($pquest, "
                                                                                                SELECT * FROM repuesta$vv
                                                                                                WHERE amId = '" . $amId . "'
                                                                                            ");
                                                                                            $mp = $_mp -> fetch_object();
                                                                                        if($name = $mp -> statusId < 2){?>
                                                                                            
                                                                                                <div class="row">
                                                                                                
                                                                                                    <div class="col s3 m-b-10">
                                                                                                        <a class="waves-effect waves-light btn blue-grey modal-trigger" href="#oc4">AA</a>
                                                                                                        
                                                                                                    </div>
                                                                                                    
                                                                                                </div>                                                    
                                                                                    <?php }?>
                                                                                                 
                                                                                <!-- end cargar cosas -->
                                                                                
                                                                                <!--tabla-->
                                                                                    <table class="white" id="planning">
                                                                                        <thead>
                                                                                            <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                                                                                <td id="border-white"  width="10%">Tipo</td>
                                                                                                <td id="border-white"  width="10%">Link</td>
                                                                                                <td id="border-white"  width="15%">Cod CTA</td>
                                                                                                <td id="border-white"  width="15%">Nombre Cta</td>
                                                                                                <td id="border-white"  width="10%">Debe</td>
                                                                                                <td id="border-white"  width="10%">Haber</td>
                                                                                                <td id="border-white"  width="20%">Descripci&oacute;n</td>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                             <?php
                                                                                               $_cp = mysqli_query($connection, "
                                                                                                 SELECT * FROM oc where amId = '" . $amId ."' and a = 4
                                                                                                ");
                                                                                                 
                                                                                                    while ($cp = $_cp -> fetch_object()) { 
                                                                                                    $_cr = mysqli_query($master, "
                                                                                                     SELECT * FROM rubro
                                                                                                    WHERE rubroId = '" . $cp -> rubroId . "'
                                                                                                    ");
                                                                                                    $cr = $_cr -> fetch_object();
                                                                                                    $rubroName = $cr-> rubroName;?>
                                                                                          <tr>
                                                                                              <td id="border-white"><?php echo $rubroName;?></td>
                                                                                                <td id="border-white"><?php echo $cp -> link;?></td>
                                                                                                <td id="border-white"><?php echo $cp -> codCta;?></td>
                                                                                                <td id="border-white"><?php echo $cp -> nCta;?></td>
                                                                                                <td id="border-white"><?php echo $cp -> debe;?></td></td>
                                                                                                <td id="border-white"><?php echo $cp -> haber;?></td>
                                                                                                <td id="border-white"><?php echo $cp -> text;?></td>
                                                                                          </tr>
                                                                                          <?php } ?>
                                                                                        </tbody>
                                                                                      </table>
                                                                                                                                                        
                                                                                <!-- end tabla -->
                                                                
                                                                
                                                                
                                                                
                                                                                </div>
                                                                    </div>   
                                                                
                                                                </li>             
                                                                    

<!-- end asientos -->
         
                                                                    