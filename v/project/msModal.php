<!-- Oc 1 -->
<div id="riesgo" class="modal " style="width:80%;">
            <div class="modal-header" style="background-color:#607d8b;">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        <h6><a href="#!" class="breadcrumb white-text">Agregar </a>
                        <a href="#!" class="breadcrumb white-text ">Riesgo</a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        </a></h6>
                    </div>
                </div>
            </div>
      
 <div class="modal-content m-t--10 white" >
 <form id="form_validation" action="../c/project.php?m=msDb&c=<?php echo $c;?>&amId=<?php echo $amId;?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>&a=1" method="post">               
<!-- FORMULARIO -->
    <div class="row">
          
                        <div class="col s12 m3">
                            <div class="input-field">
                                <small>Origen del riesgo</small>
                              <input style="text-align: right ;" type="text" name="orName" class="form-control" >
                            </div>
                        </div>
          
                        <div class="col s12 m3">
                            <div class="input-field">
                                <small>Objetivos del negocio</small>
                              <input style="text-align: right ;" type="text" name="onName" class="form-control" >
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="input-field">
                                <small>Riesgo del negocio</small>
                                <input style="text-align: right ;" type="number" name="rN" class="form-control" >
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="input-field">
                                <small>Riesgo clave</small>
                                <input style="text-align: right ;" type="number" name="rC" class="form-control" >
                            </div>
                        </div>
       </div>                 
                        
                        
                   <div class="row">
                        <div class="col s12 m3">
                            <div class="input-field">
                                <small>Respuesta controles de la gerencia </small>
                                <input style="text-align: right ;" type="number" name="cG" class="form-control" >
                            </div>
                        </div>
                         <div class="col s12 m3">
                            <div class="input-field">
                                <small>Area y asercion de la informacion financiera </small>
                                <input style="text-align: right ;" type="number" name="aiF" class="form-control">
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="input-field">
                                <small>Enfoque de aduditor&iacute;a  </small>
                                <input style="text-align: right ;" type="number" name="eA" class="form-control" >
                            </div>
                        </div>
                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Emision de informe al cliente</small>
                                <input style="text-align: right ;" type="text" name="iC" class="form-control" >
                            </div>
                        </div>
                        
                        
                    </div>

<!-- END FORMULARIO -->
                                <div class="row">                        
                                                    <div class="col s12 m-t-10">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s3 m-b-10 m-t-10">
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