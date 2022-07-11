<?php 
$contadorr = 1;
while($contadorr <= $npregunta){
?>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                    <?php
                    if ($contadorr >= 1){ echo $mmodelo -> texto1;}
                    if ($contadorr >= 2){ echo $mmodelo -> texto2;}
                    if ($contadorr >= 3){ echo $mmodelo -> texto3;}
                    if ($contadorr >= 4){ echo $mmodelo -> texto4;}
                    if ($contadorr >= 5){ echo $mmodelo -> texto5;}
                    if ($contadorr >= 6){ echo $mmodelo -> texto6;}
                    if ($contadorr >= 7){ echo $mmodelo -> texto7;}
                    if ($contadorr >= 8){ echo $mmodelo -> texto8;}
                    if ($contadorr >= 9){ echo $mmodelo -> texto9;}
                    if ($contadorr >= 10){ echo $mmodelo -> texto10;}
                    if ($contadorr >= 11){ echo $mmodelo -> texto11;}
                    if ($contadorr >= 12){ echo $mmodelo -> texto12;}
                    if ($contadorr >= 13){ echo $mmodelo -> texto13;}
                    if ($contadorr >= 14){ echo $mmodelo -> texto14;}
                    if ($contadorr >= 15){ echo $mmodelo -> texto15;}
                    if ($contadorr >= 16){ echo $mmodelo -> texto16;}
                    if ($contadorr >= 17){ echo $mmodelo -> texto17;}
                    if ($contadorr >= 18){ echo $mmodelo -> texto18;}
                    if ($contadorr >= 19){ echo $mmodelo -> texto19;}
                    if ($contadorr >= 20){ echo $mmodelo -> texto20;}?>
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        <textarea name="a<?php $contadorr;?>" class="ckeditor"></textarea>
    </div>
</li>
<?php 
$contadorr++;
} ?>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                 Matr&iacute;z de riesgo 
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
<?php 
                $_mp = mysqli_query($pquest, "
                    SELECT * FROM repuesta$vv
                    WHERE amId = '" . $amId . "'
                    ");
                $mp = $_mp -> fetch_object();
            if($name = $mp -> statusId < 2){?>
            
            <div class="row">
                <div class="col s3 m-b-10">
                    <a class="waves-effect waves-light btn blue-grey modal-trigger" href="#riesgo">Riesgo</a>
                </div>
                                                                                        
            </div>                                                    
<?php }?>

    <table class="white" id="planning">
                                <thead>
                                    <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                        <td id="border-white"  width="11%">Origen del riesgo</td>
                                        <td id="border-white"  width="11%">Objetivos del negocio</td>
                                        <td id="border-white"  width="11%">Riesgo del negocio</td>
                                        <td id="border-white"  width="11%">Riesgo clave</td>
                                        <td id="border-white"  width="11%">Respuesta controles de la gerencia</td>
                                        <td id="border-white"  width="11%">Area y asercion de la informacion financiera </td>
                                        
                                        
                                        <td id="border-white"  width="11%">Enfoque de aduditor&iacute;a </td>
                                        <td id="border-white"  width="11%">Emision de informe al cliente   </td>
                                       
                                    </tr>
                                </thead>
                                <tbody>
    


        <tbody>
    <?php 
                $_mp = mysqli_query($connection, "
                    SELECT * FROM riesgo
                    WHERE amId = '" . $amId . "'
                    ");
                $mp = $_mp -> fetch_object();
            if($name = $mp -> statusId < 2){?>
          <tr>
            <td id="border-grey"> a</td>
            <td id="border-grey">b</td>
            <td id="border-grey">v</td>
            <td id="border-grey">d</td>
            <td id="border-grey">e</td>
            <td id="border-grey">f</td>
            <td id="border-grey">g</td>
            <td id="border-grey">h</td>
            
        
            
          </tr>
<?php }?>
        </tbody>
      </table>
      
          
      
      
      
      <table class="white" id="planning">
                                <thead>
                                    <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                        <td id="border-white"  width="15%">Rubro </td> 
                                        <td id="border-white"  width="20%">Tipo</td>
                                        <td id="border-white"  width="10%"><?php echo $dP2;  ?></td>
                                        <td id="border-white"  width="10%"><?php echo $dP3;  ?></td>
                                        <td id="border-white"  width="10%">Var en Bs </td>
                                        <td id="border-white"  width="10%">Var en %  </td>
                                        
                                        <td id="border-white"  width="15%">Observaciones   </td>
                                         <td id="border-white" width="10%">Ejecuci&oacute;n</td>
                                    </tr>
                                </thead>
                                <tbody>
    


        <tbody>

        <?php
            $_raa = mysqli_query($master, "
            SELECT * FROM ractivo
            WHERE projectId = 1
            ORDER BY rubroId
        ");

            while ($ra = $_raa -> fetch_object()) {
            
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
                <?php 
                if ( $ra -> edit == 1  ){?>  
                <a href="../c/project.php?m=revision&p=p&c=<?php echo $c; ?>&i=<?php echo $i; ?>&f=2&r=<?php echo  $ra -> rubroId; ?>" class="tooltipped m-r-5" data-position="left" data-tooltip="Asignar asrciones y tareas por frecuencia">
                 <i class="material-icons blue-text">edit</i> 
                  <?php }
                  else { ?>
                  <a href="../c/project.php?m=revision&p=p&c=<?php echo $c;?>&i=<?php echo $i; ?>&f=1&r=<?php echo  $ra -> rubroId; ?>" class="tooltipped m-r-5" data-position="left" data-tooltip="Asignar asrciones y tareas por frecuencia">
                 <i class="material-icons blue-text">edit</i>
                  </a>         
                  <?php }?>
            </td>   
          </tr>
          <?php
            } ?>
        </tbody>
      </table>         
    </div>
</li>
