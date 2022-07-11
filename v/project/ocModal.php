<!-- Oc 1 -->
 <div id="oc" class="modal " style="width:80%;">
            <div class="modal-header" style="background-color:#607d8b;">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        <h6><a href="#!" class="breadcrumb white-text">Agregar </a>
                        <a href="#!" class="breadcrumb white-text ">Punto de Control</a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        </a></h6>
                    </div>
                </div>
            </div>
      
 <div class="modal-content m-t--10 white" >
 <form id="form_validation" action="../c/project.php?m=readDb&c=<?php echo $c;?>&amId=<?php echo $amId;?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>&a=1" method="post">               
<!-- tabla -->
                                    <table id="example"   class='display ' style='width:100%'>
                                        <thead class="blue-grey white-text">
                                            <tr>
                                                   <td id="border-white"  width="10%">Rubro</td>
                                                   <td id="border-white"  width="10%">Titulo</td>
                                                   <td id="border-white"  width="40%">Descripci&oacute;n</td>
                                                   <td id="border-white"  width="35%">Recomentaci&oacute;n del Asunto</td>
                                                   <td id="border-white"  class="right-align" width="5%">Seleccionar</td>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
                                             $_cp = mysqli_query($master, "
                                             SELECT * FROM puntoscontrol
                                            WHERE puntosControlStatus= 1

                                            ");
                                            
                                            while ($cp = $_cp -> fetch_object()) { 
                                            
                                            //indice 1
                                            $_cr = mysqli_query($master, "
                                             SELECT * FROM rubro
                                            WHERE rubroId = '" . $cp -> rubroId . "'
                                            ");
                                            
                                            $cr = $_cr -> fetch_object();
                                            $rubroName= $cr-> rubroName;
                                           
                                            ?>
                                            <tr>
                                               <td><?php echo $rubroName ?></td>
                                               <td><?php echo $cp -> puntosControlName ?></td>
                                               <td><?php echo $cp -> d1;?></td>
                                               <td><?php echo $cp -> d2?></td>
                                          
                                               <td class="right-align">
                                                  <p>
                                                          <label>
                                                            <input name="group1" type="radio"  value="<?php echo $cp -> puntosControlId;?>" required />
                                                            <span></span>
                                                          </label>
                                                        </p>
                                                       
                                               </td>
                                              
                                                      
                                                        <?php } ?>
                                                    </tr>
                                                    
                                            </tr>
                                         
                                        </tbody>
                                    </table>

<!-- end tabla -->             

                                <div class="row">                        
                                                    <div class="col s12 m-t-20">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s3 m-b-10">
                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                            <i class="material-icons">save</i>
                                        </button>
                                    </div>
                                </div>    

</form>

                <p>

                </p>
                <div class="m-t-20"></div>
         
     
        
            </div>

    <div class="modal-footer">
      
     <div class="row">
                                <div class="col s12 m-t--10 ">
                                    <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                </div>
  </div>
    </div>
    <div class="m-t--20"></div>
</div>
<!-- OC1     -->       
<!-- Oc 2 -->
 <div id="oc2" class="modal " style="width:80%;">
            <div class="modal-header" style="background-color:#607d8b;">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        <h6><a href="#!" class="breadcrumb white-text">Agregar </a>
                        <a href="#!" class="breadcrumb white-text ">Punto de Control</a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        </a></h6>
                    </div>
                </div>
            </div>
      
 <div class="modal-content m-t--10 white" >
 <form id="form_validation" action="../c/project.php?m=readDb&c=<?php echo $c;?>&amId=<?php echo $amId;?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>&a=2" method="post">               
<!-- tabla -->
                                    <table id="example"   class='display ' style='width:100%'>
                                        <thead class="blue-grey white-text">
                                            <tr>
                                                   <td id="border-white"  width="10%">Rubro</td>
                                                   <td id="border-white"  width="10%">Titulo</td>
                                                   <td id="border-white"  width="40%">Descripci&oacute;n</td>
                                                   <td id="border-white"  width="35%">Recomentaci&oacute;n del Asunto</td>
                                                   <td id="border-white"  class="right-align" width="5%">Seleccionar</td>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
                                             $_cp = mysqli_query($master, "
                                             SELECT * FROM puntoscontrol
                                            WHERE puntosControlStatus= 1

                                            ");
                                            
                                            while ($cp = $_cp -> fetch_object()) { 
                                            
                                            //indice 1
                                            $_cr = mysqli_query($master, "
                                             SELECT * FROM rubro
                                            WHERE rubroId = '" . $cp -> rubroId . "'
                                            ");
                                            
                                            $cr = $_cr -> fetch_object();
                                            $rubroName= $cr-> rubroName;
                                           
                                            ?>
                                            <tr>
                                               <td><?php echo $rubroName ?></td>
                                               <td><?php echo $cp -> puntosControlName ?></td>
                                               <td><?php echo $cp -> d1;?></td>
                                               <td><?php echo $cp -> d2?></td>
                                          
                                               <td class="right-align">
                                                  <p>
                                                          <label>
                                                            <input name="group1" type="radio"  value="<?php echo $cp -> puntosControlId;?>" required />
                                                            <span></span>
                                                          </label>
                                                        </p>
                                                       
                                               </td>
                                              
                                                      
                                                        <?php } ?>
                                                    </tr>
                                                    
                                            </tr>
                                         
                                        </tbody>
                                    </table>

<!-- end tabla -->             

                                <div class="row">                        
                                                    <div class="col s12 m-t-20">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s3 m-b-10">
                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                            <i class="material-icons">save</i>
                                        </button>
                                    </div>
                                </div>    

</form>

                <p>

                </p>
                <div class="m-t-20"></div>
         
     
        
            </div>

    <div class="modal-footer">
      
     <div class="row">
                                <div class="col s12 m-t--10 ">
                                    <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                </div>
  </div>
    </div>
    <div class="m-t--20"></div>
</div>
<!-- OC2-->       
<!-- Oc 3 -->
 <div id="oc3" class="modal " style="width:80%;">
            <div class="modal-header" style="background-color:#607d8b;">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        <h6><a href="#!" class="breadcrumb white-text">Agregar </a>
                        <a href="#!" class="breadcrumb white-text ">Punto de Control</a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        </a></h6>
                    </div>
                </div>
            </div>
      
 <div class="modal-content m-t--10 white" >
 <form id="form_validation" action="../c/project.php?m=readDb&c=<?php echo $c;?>&amId=<?php echo $amId;?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>&a=3" method="post">               
<!-- tabla -->
                                    <table id="example"   class='display ' style='width:100%'>
                                        <thead class="blue-grey white-text">
                                            <tr>
                                                   <td id="border-white"  width="10%">Rubro</td>
                                                   <td id="border-white"  width="10%">Titulo</td>
                                                   <td id="border-white"  width="40%">Descripci&oacute;n</td>
                                                   <td id="border-white"  width="35%">Recomentaci&oacute;n del Asunto</td>
                                                   <td id="border-white"  class="right-align" width="5%">Seleccionar</td>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
                                             $_cp = mysqli_query($master, "
                                             SELECT * FROM puntoscontrol
                                            WHERE puntosControlStatus= 1

                                            ");
                                            
                                            while ($cp = $_cp -> fetch_object()) { 
                                            
                                            //indice 1
                                            $_cr = mysqli_query($master, "
                                             SELECT * FROM rubro
                                            WHERE rubroId = '" . $cp -> rubroId . "'
                                            ");
                                            
                                            $cr = $_cr -> fetch_object();
                                            $rubroName= $cr-> rubroName;
                                           
                                            ?>
                                            <tr>
                                               <td><?php echo $rubroName ?></td>
                                               <td><?php echo $cp -> puntosControlName ?></td>
                                               <td><?php echo $cp -> d1;?></td>
                                               <td><?php echo $cp -> d2?></td>
                                          
                                               <td class="right-align">
                                                  <p>
                                                          <label>
                                                            <input name="group1" type="radio"  value="<?php echo $cp -> puntosControlId;?>" required />
                                                            <span></span>
                                                          </label>
                                                        </p>
                                                       
                                               </td>
                                              
                                                      
                                                        <?php } ?>
                                                    </tr>
                                                    
                                            </tr>
                                         
                                        </tbody>
                                    </table>

<!-- end tabla -->             

                                <div class="row">                        
                                                    <div class="col s12 m-t-20">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s3 m-b-10">
                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                            <i class="material-icons">save</i>
                                        </button>
                                    </div>
                                </div>    

</form>

                <p>

                </p>
                <div class="m-t-20"></div>
         
     
        
            </div>

    <div class="modal-footer">
      
     <div class="row">
                                <div class="col s12 m-t--10 ">
                                    <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                </div>
  </div>
    </div>
    <div class="m-t--20"></div>
</div>
<!-- OC3-->       
<!-- Oc 4 -->
 <div id="oc4" class="modal " style="width:80%;">
            <div class="modal-header" style="background-color:#607d8b;">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        <h6><a href="#!" class="breadcrumb white-text">Agregar </a>
                        <a href="#!" class="breadcrumb white-text ">Punto de Control</a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        </a></h6>
                    </div>
                </div>
            </div>
      
 <div class="modal-content m-t--10 white" >
 <form id="form_validation" action="../c/project.php?m=readDb&c=<?php echo $c;?>&amId=<?php echo $amId;?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>&a=4" method="post">               
<!-- tabla -->
                                    <div class="row">
                                                                                        <div class="col s12 m2 m-t-15">
                                                                                            <div class="input-field">
                                                                                                <select name="rubroId">
                                                                                            <option value="" disabled selected>Seleccionar</option>
                                                                                                <?php
                                                                                                $_ma = mysqli_query($master, "
                                                                                                    SELECT * FROM rubro
                                                                                                    WHERE rubroStatus = 1
                                                                                                    ");
                                                                                            
                                                                                                while ($ma = $_ma -> fetch_object()) {?>         
                                                                                                  
                                                                                                  <option value="<?php echo $ma -> rubroId;?>"><?php echo $ma -> rubroName;?></option>
                                                                                                  <?php } ?>
                                                                                                </select>
                                                                                                <label>Tipo</label>
                                                                                            </div>
                                                                                        </div>
                                                                                         <div class="col s12 m1">
                                                                                            <div class="input-field">
                                                                                                <small>Link</small>
                                                                                                <input style="text-align: right ;" type="number" name="link" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col s12 m2">
                                                                                            <div class="input-field">
                                                                                                <small>Cod CTA</small>
                                                                                                <input style="text-align: right ;" type="number" name="codCta" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col s12 m2">
                                                                                            <div class="input-field">
                                                                                                <small>Nombre Cta</small>
                                                                                                <input style="text-align: right ;" type="text" name="nCta" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col s12 m1">
                                                                                            <div class="input-field">
                                                                                                <small>Debe</small>
                                                                                                <input style="text-align: right ;" type="number" name="debe" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col s12 m1">
                                                                                            <div class="input-field">
                                                                                                <small>Haber</small>
                                                                                                <input style="text-align: right ;" type="number" name="haber" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col s12 m2">
                                                                                            <div class="input-field">
                                                                                                <small>Descripci&oacute;n</small>
                                                                                                <input style="text-align: right ;" type="text" name="text" class="form-control" required>
                                                                                            </div>
                                                                                        </div>
                                                                                       
                                                                                        
                                                                                    </div>     

<!-- end tabla -->             

                                <div class="row">                        
                                                    <div class="col s12 m-t-20">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s3 m-b-10">
                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                            <i class="material-icons">save</i>
                                        </button>
                                    </div>
                                </div>    

</form>

                <p>

                </p>
                <div class="m-t-20"></div>
         
     
        
            </div>

    <div class="modal-footer">
      
     <div class="row">
                                <div class="col s12 m-t--10 ">
                                    <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                </div>
  </div>
    </div>
    <div class="m-t--20"></div>
</div>
<!-- OC4-->      
<?php include '../v/project/ra.php';?>