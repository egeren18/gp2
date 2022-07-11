<?php
// select
$_revisionA1 = mysqli_query($master, "
    SELECT * FROM revisionA1
    WHERE projectId = '" . $c . "' AND 
    revisionN = 1
");


$revisionA1 = $_revisionA1 -> fetch_object();

$projectId = $revisionA1 -> projectId;
$reA1 = $revisionA1 -> revisionN;
$revisionA1date1 = $revisionA1 -> dateFa1;
$revisionA1date2 = $revisionA1 -> dateFa2;

?>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                    Desarrolle expectativas sobre las posibles relaciones que razonablemente se podría esperar que existan entre los diversos tipos de información. Cuando sea posible, busque usar fuentes de información independientes.
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        <textarea name="a1" class="ckeditor"></textarea>
    </div>
</li>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                    Compare las expectativas con las cantidades registradas o ratios desarrolladas a partir de las cantidades registradas.
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        <textarea name="a2" class="ckeditor"></textarea>
    </div>
</li>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                    Evalúe los resultados.<br /><br />
                    Los resultados de esos procedimientos analíticos se deben considerar junto con la otra información obtenida, para:<br /><br />
                    - Identificar los riesgos de declaración equivocada material relacionados con las aserciones inmersas en los elementos significantes de los estados financieros; y<br />
                    - Ayudar a diseñar la naturaleza, oportunidad y extensión de los otros procedimientos de auditoría.
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        <textarea name="a3" class="ckeditor"></textarea>
    </div>
</li>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                  Fechas Revis&iacute;on Anal&iacute;tica
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        
        
      <?php  if ($reA1 == 1 and $projectId == $c  ){ ?>
        
        
    <div class="row">
     <form id="form_validation" action="project.php?m=revisionA1Db&c=<?php echo $c; ?>&i=<?php echo $i; ?>&a=11" method="post">
        <div class="col s12 m6 l2">
            <div class="input-field">
             <input  id="dateFa1" name="dateFa1" placeholder="<?php echo $revisionA1date1;  ?>" value="<?php echo $revisionA1date1; ?>" type="text" class="datepicker validate">
                <label for="dateFa1">Fecha de revisi&oacute;n Anal&iacute;tica</label>
                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
            </div>
        </div>

    <div class="col s12 m6 l2">
            <div class="input-field">
             <input id="dateFa2" name="dateFa2" placeholder="<?php echo $revisionA1date2  ?>" value="<?php echo $revisionA1date2; ?>" type="text" class="datepicker validate">
                <label for="dateFa2">Fecha de revisi&oacute;n Anal&iacute;tica</label>
                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
            </div>
        </div>
         <div class="col s1 m-t-15">
                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
      </form>
    </div>
<?php }else {?>    

<div class="row">
     <form id="form_validation" action="project.php?m=revisionA1Db&c=<?php echo $c; ?>&i=<?php echo $i; ?>&a=1" method="post">
        <div class="col s12 m6 l2">
            <div class="input-field">
             <input id="dateFa1" name="dateFa1" placeholder="" type="text" class="datepicker validate">
                <label for="dateFa1">Fecha de revisi&oacute;n Anal&iacute;tica</label>
                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
            </div>
        </div>

    <div class="col s12 m6 l2">
            <div class="input-field">
             <input id="dateFa2" name="dateFa2" placeholder=""  type="text" class="datepicker validate">
                <label for="dateFa2">Fecha de revisi&oacute;n Anal&iacute;tica</label>
                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
            </div>
        </div>
         <div class="col s1 m-t-15">
                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
      </form>
    </div>
<?php }?>    

    </div>
</li>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                  Revis&iacute;on Anal&iacute;tica
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
    


  <!-- Modalales para activo pasivo y patrimonio -->
  <div class="row">
        <div class="col s12 m1">
             <a class="waves-effect waves-light btn blue-grey modal-trigger" href="#activo">Activo</a>
        </div>
        <div class="col s12 m1">
             <a class="waves-effect waves-light btn blue-grey modal-trigger" href="#pasivo">Pasivo</a>
        </div>
        <div class="col s12 m1">
             <a class="waves-effect waves-light btn blue-grey modal-trigger" href="#patrimonio">Patrimonio</a>
        </div>
  </div>
  <!-- aqui termina Modalales para activo pasivo y patrimonio -->


  <!-- Modal Activo -->
  <div id="activo" class="modal">
    <div class="modal-content">
      <h4>Activo</h4>
     <!-- Aqui empieza activo  -->             
     <div class="row">
        <form id="form_validation" action="project.php?m=revisionA1Db&c=<?php echo $c; ?>&i=<?php echo $i; ?>&b=1" method="post">
            <!-- select de rubro en refencia a Activo    -->                       
            <div class="col s12 m5">
                <div class="input-field">
                    <small>Rubro</small>
                    <select name="rubroId" placeholder="" class="form-control">
                        <option value="1">Efectivo</option>
                        <option value="2"> Cuentas por Cobrar</option>
                        <option value="3">Compañias Relacionadas</option>
                        <option value="4"> Inventarios</option>
                        <option value="5">Propiedades, Plantas y Equipos</option>
                        <option value="6">Gastos Pagados por Anticipado</option>
                        <option value="7">Inversiones</option>
                    </select>
                </div>
            </div>
            <!-- Monto referente a las Fechas y observaciones     -->                   
            <div class="col s12 m2">
                <div class="input-field">
                    <small>Monto <?php echo $revisionA1date1;  ?></small>
                    <input style="text-align: right;" type="text" name="monto1" class="form-control" required="">
                </div>
            </div>
            <div class="col s12 m2">
                <div class="input-field">
                    <small>Monto <?php echo $revisionA1date2;  ?></small>
                    <input style="text-align: right ;" type="text" name="monto2" class="form-control" required="">
                </div>
            </div>
            <div class="col s12 m3">
                <div class="input-field">
                    <small>Observaci&oacute;n </small>
                    <input style="text-align: right ;" type="text" name="observacion" class="form-control" required="">
                </div>
            </div>
                   
    </div>     
    <!-- Aqui termina activo     -->                 
    </div>
    <div class="modal-footer">
            <div class="col s2 m-t-30">
                <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                    <i class="material-icons">save</i>
                </button>
            </div>         
        </form>  
    </div>
  </div>




 <!-- Modal Pasivo -->
 <div id="pasivo" class="modal">
    <div class="modal-content">
      <h4>Pasivo</h4>
    <!-- Aqui empieza pasivo -->             
    <div class="row">
        <form id="form_validation" action="project.php?m=revisionA1Db&c=<?php echo $c; ?>&i=<?php echo $i; ?>&b=2" method="post">
            <!-- input de pasivo   -->
       
            <!-- select de rubro en refencia a pasivo   -->                       
            <div class="col s12 m5">
                <div class="input-field">
                    <small>Rubro</small>
                    <select name="rubroId" placeholder="" class="form-control">
                    <option value="8">Cuentas por Pagar</option>
                    <option value="9">Obligaciones Bancarias</option>
                    <option value="10"> Nómina</option>
                    <option value="11">Gastos Acumulados</option>
                    <option value="12"> Impuestos</option>
                                       
                    </select>
                </div>
            </div>
            <!-- Monto referente a las Fechas y observaciones     -->                   
            <div class="col s12 m2">
                <div class="input-field">
                    <small>Monto <?php echo $revisionA1date1;  ?></small>
                    <input style="text-align: right;" type="text" name="monto1" class="form-control" required="">
                </div>
            </div>
            <div class="col s12 m2">
                <div class="input-field">
                    <small>Monto <?php echo $revisionA1date2;  ?></small>
                    <input style="text-align: right ;" type="text" name="monto2" class="form-control" required="">
                </div>
            </div>
            <div class="col s12 m3">
                <div class="input-field">
                    <small>Observaci&oacute;n </small>
                    <input style="text-align: right ;" type="text" name="observacion" class="form-control" required="">
                </div>
            </div>
                    
                 
    </div>     
    <!-- Aqui termina Pasivo     -->    
    </div>
    <div class="modal-footer">
    <div class="col s1 m-t-30">
                <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                    <i class="material-icons">save</i>
                </button>
            </div> 
         </form> 
    </div>
  </div>



 <!-- Modal Patrimonio-->
 <div id="patrimonio" class="modal">
    <div class="modal-content">
      <h4>Patrrimonio</h4>
    <!-- Aqui empieza patrimonio     -->             
    <div class="row">
        <form id="form_validation" action="project.php?m=revisionA1Db&c=<?php echo $c; ?>&i=<?php echo $i; ?>&b=3" method="post">
            <!-- input de patrimonio   -->
           
            <!-- select de rubro en refencia a patrimonio    -->                       
            <div class="col s12 m5">
                <div class="input-field">
                    <small>Rubro</small>
                    <select name="rubroId" placeholder="" class="form-control">
                    <option value="13">Patrimonio</option>
                    <option value="14"> Ganancias y Pérdidas</option>
                    <option value="15">Otros Procedimientos</option>                     
                    <option value="16">General</option>        
                    </select>
                </div>
            </div>
            <!-- Monto referente a las Fechas y observaciones     -->                   
            <div class="col s12 m2">
                <div class="input-field">
                    <small>Monto <?php echo $revisionA1date1;  ?></small>
                    <input style="text-align: right;" type="text" name="monto1" class="form-control" required="">
                </div>
            </div>
            <div class="col s12 m2">
                <div class="input-field">
                    <small>Monto <?php echo $revisionA1date2;  ?></small>
                    <input style="text-align: right ;" type="text" name="monto2" class="form-control" required="">
                </div>
            </div>
            <div class="col s12 m3">
                <div class="input-field">
                    <small>Observaci&oacute;n </small>
                    <input style="text-align: right ;" type="text" name="observacion" class="form-control" required="">
                </div>
            </div>
               
                 
    </div>     
    <!-- Aqui termina patrimonio    -->    

    </div>
    <div class="modal-footer">
    <div class="col s1 m-t-30">
                <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                    <i class="material-icons">save</i>
                </button>
            </div> 
        </form> 
    </div>
  </div>


  <div class="m-t-10"></div>


        
    
    <table class="white" id="planning">
                                <thead>
                                    <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                        <td id="border-white"  width="15%">Rubro</td>
                                        <td id="border-white"  width="20%">Tipo</td>
                                        <td id="border-white"  width="10%"><?php echo $dP2;  ?></td>
                                        <td id="border-white"  width="10%"><?php echo $dP3;  ?></td>
                                        <td id="border-white"  width="10%">Var en Bs </td>
                                        <td id="border-white"  width="10%">Var en %  </td>
                                        
                                        <td id="border-white"  width="25%">Observaciones   </td>

                                    </tr>
                                </thead>
                                <tbody>
    


        <tbody>

        <?php


            while ($ra = $_ra -> fetch_object()) {
            
            if($ra -> tipoId == 1){
                    $name2 ="Activo";
                } 
            if($ra -> tipoId == 2){
                    $name2 ="pasivo";
                } 
            
            if($ra -> tipoId == 3){
                    $name2 ="Patrimonio";
                } 
            
            if($ra -> rubroId == 1){
                $name ="Efectivo";
            } 
            if($ra -> rubroId == 2){
                $name ="Cuentas por Cobrar";
            } 
            if($ra -> rubroId == 3){
                $name ="Compaas Relacionadas
                ";
            } 
            if($ra -> rubroId == 4){
                $name ="Inventarios";
            } 
            if($ra -> rubroId == 5){
                $name ="Propiedades, Plantas y Equipos
                ";
            } 
            if($ra -> rubroId == 6){
                $name ="Gastos Pagados por Anticipado
                ";
            } 
            if($ra -> rubroId == 7){
                $name ="	
                Inversiones";
            } 
            if($ra -> rubroId == 8){
                $name ="Cuentas por Pagar";
            } 
            if($ra -> rubroId == 9){
                $name ="Obligaciones Bancarias";
            } 
            if($ra -> rubroId == 10){
                $name ="N&oacute;mina";
            } 
            if($ra -> rubroId == 11){
                $name ="Gastos Acumulados";
            } 
            if($ra -> rubroId == 12){
                $name ="Impuestos";
            } 
            if($ra -> rubroId == 13){
                $name ="Patrimonio";
            } 
            if($ra -> rubroId == 14){
                $name ="Ganancias y Perdidas";
            } 
            if($ra -> rubroId == 15){
                $name ="Otros Procedimientos";
            } 
            if($ra -> rubroId == 16){
                $name ="General";
            } 


                $m1 = $ra -> monto1;
                $m2 = $ra -> monto2; 
                $m3 = $m1 - $m2;?>  
          <tr>
            <td id="border-grey"><?php echo $name2; ?></td>
            <td id="border-grey"><?php echo $name ; ?></td>
            <td id="border-grey"><?php echo $m1 ?></td>
            <td id="border-grey"><?php echo $m2; ?></td>
            <td id="border-grey"><?php echo $m3 ?>  </td>
            <td id="border-grey"></td>
            <td id="border-grey"><?php echo $ra -> observacion; ?></td>
            
            <td id="border-grey" class="center">
               
            </td>   
          </tr>
          <?php
            } ?>
        </tbody>
      </table>
            
    </div>
</li>



