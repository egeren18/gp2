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


<!-- revision analitica -->
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
    
<!-- inicio del cuerpo-->
<div class="collapsible-body">
<!-- inicio del cuerpo-->


  <!-- Modalales para activo pasivo y patrimonio -->
  <div class="row">
        <div class="col s12 m1">
             <a class="waves-effect waves-light btn blue-grey modal-trigger" href="#activo">Activo</a>
        </div>
        <div class="col s12 m1">
             <a class="waves-effect waves-light btn blue-grey modal-trigger" href="#p">Pasivo</a>
        </div>
        <div class="col s12 m1">
             <a class="waves-effect waves-light btn blue-grey modal-trigger" href="#pp">Patrimonio</a>
        </div>
  </div>
  <!-- aqui termina Modalales para activo pasivo y patrimonio -->






  <div class="m-t-10"></div>


        
<!--table -->  
<table class="white" id="planning">
    <thead>
        <tr class="grey lighten-3 blue-grey-text text-darken-1">
            <td id="border-white"  width="15%">Rubro</td>
            <td id="border-white"  width="20%">Tipo</td>
            <td id="border-white" class="right-align"  width="10%">Monto 1</td>
            <td id="border-white" class="right-align" width="10%">Monto 2</td>
            <td id="border-white" class="right-align" width="10%">Var en Bs </td>
            <td id="border-white" class="right-align" width="10%">Var en %  </td>
            <td id="border-white" class="right-align" width="25%">Observaciones   </td>
        </tr>
    </thead>
                        
    <tbody>

        <?php
      
        $_ra = mysqli_query($connection, "
            SELECT * FROM ractivo
            WHERE projectId = '" . $c . "' and amId = '" . $amId . "' and tipoId = 1
        ");    

            while ($ra = $_ra -> fetch_object()) {

             $_service = mysqli_query($master, "
                SELECT * FROM rubro
                WHERE rubroId = '". $ra -> rubroId ."'
            ");
            
            //esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
            $service = $_service -> fetch_object();
            
            //esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
            $name = $service -> rubroName ;
                
            
            if($ra -> tipoId == 1){
                    $name2 ="Activo";
                } 
            if($ra -> tipoId == 2){
                    $name2 ="pasivo";
                } 
            
            if($ra -> tipoId == 3){
                    $name2 ="Patrimonio";
                } 
            


                $m1 = $ra -> monto1;
                $m2 = $ra -> monto2; 
                $m3 = $m1 - $m2;?>  
        <tr>
            <td id="border-grey"><?php echo $name2; ?></td>
            <td id="border-grey"><?php echo $name ; ?></td>
            <td id="border-grey" class="right-align"><?php echo number_format($m1); ?></td>
            <td id="border-grey" class="right-align"><?php echo number_format($m2); ?></td>
            <td id="border-grey" class="right-align"><?php echo number_format($m3) ?>  </td>
            <td id="border-grey" class="right-align"> </td>
            <td id="border-grey" class="right-align"><?php echo $ra -> obs; ?></td>
            <td id="border-grey" class="center"> 
            </td>   
        </tr>
        
        
        
        
        
        <?php 
        if($ra -> tipoId == 1){$aar1 = $aar1 + $ra -> monto1; $abr1 = $abr1 + $ra -> monto2;}
        
        
        } ?>
        <tr>
            <td id="border-grey" colspan="2">Total Activo</td>
            
            <td id="border-grey" class="right-align"><?php echo  number_format($aar1);?></td>
            <td id="border-grey" class="right-align"><?php echo number_format($abr1); ?></td>
            <td id="border-grey" >  </td>
            <td id="border-grey"></td>
            <td id="border-grey"></td>
            <td id="border-grey" class="center"> 
            </td>   
        </tr>
    </tbody>
</table>


<table class="white" id="planning">
    <thead>
        <tr class="grey lighten-3 blue-grey-text text-darken-1">
            <td id="border-white"  width="15%">Rubro</td>
            <td id="border-white"  width="20%">Tipo</td>
            <td id="border-white" class="right-align"  width="10%">Monto 1</td>
            <td id="border-white" class="right-align" width="10%">Monto 2</td>
            <td id="border-white" class="right-align" width="10%">Var en Bs </td>
            <td id="border-white" class="right-align" width="10%">Var en %  </td>
            <td id="border-white" class="right-align" width="25%">Observaciones   </td>
        </tr>
    </thead>
                        
    <tbody>

        <?php
      
        $_ra = mysqli_query($connection, "
            SELECT * FROM ractivo
            WHERE projectId = '" . $c . "' and amId = '" . $amId . "' and tipoId = 2
        ");    

            while ($ra = $_ra -> fetch_object()) {

             $_service = mysqli_query($master, "
                SELECT * FROM rubro
                WHERE rubroId = '". $ra -> rubroId ."'
            ");
            
            //esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
            $service = $_service -> fetch_object();
            
            //esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
            $name = $service -> rubroName ;
                
            
            if($ra -> tipoId == 1){
                    $name2 ="Activo";
                } 
            if($ra -> tipoId == 2){
                    $name2 ="pasivo";
                } 
            
            if($ra -> tipoId == 3){
                    $name2 ="Patrimonio";
                } 
            


                $m1 = $ra -> monto1;
                $m2 = $ra -> monto2; 
                $m3 = $m1 - $m2;?>  
        <tr>
            <td id="border-grey"><?php echo $name2; ?></td>
            <td id="border-grey"><?php echo $name ; ?></td>
            <td id="border-grey" class="right-align"><?php echo number_format($m1); ?></td>
            <td id="border-grey" class="right-align"><?php echo number_format($m2); ?></td>
            <td id="border-grey" class="right-align"><?php echo number_format($m3) ?>  </td>
            <td id="border-grey" class="right-align"> </td>
            <td id="border-grey" class="right-align"><?php echo $ra -> obs; ?></td>
            <td id="border-grey" class="center"> 
            </td>   
        </tr>
        
        
        
        
        
        <?php 
        if($ra -> tipoId == 2){$aar2 = $aar2 + $ra -> monto1; $abr2 = $abr2 + $ra -> monto2;}
        
        
        } ?>
        <tr>
            <td id="border-grey" colspan="2">Total Pasivo</td>
            
            <td id="border-grey" class="right-align"><?php echo  number_format($aar2);?></td>
            <td id="border-grey" class="right-align"><?php echo number_format($abr2); ?></td>
            <td id="border-grey" >  </td>
            <td id="border-grey"></td>
            <td id="border-grey"></td>
            <td id="border-grey" class="center"> 
            </td>   
        </tr>
    </tbody>
</table>

    <table class="white" id="planning">
    <thead>
        <tr class="grey lighten-3 blue-grey-text text-darken-1">
            <td id="border-white"  width="15%">Rubro</td>
            <td id="border-white"  width="20%">Tipo</td>
            <td id="border-white" class="right-align"  width="10%">Monto 1</td>
            <td id="border-white" class="right-align" width="10%">Monto 2</td>
            <td id="border-white" class="right-align" width="10%">Var en Bs </td>
            <td id="border-white" class="right-align" width="10%">Var en %  </td>
            <td id="border-white" class="right-align" width="25%">Observaciones   </td>
        </tr>
    </thead>
                        
    <tbody>

        <?php
      
        $_ra = mysqli_query($connection, "
            SELECT * FROM ractivo
            WHERE projectId = '" . $c . "' and amId = '" . $amId . "' and tipoId = 3
        ");    

            while ($ra = $_ra -> fetch_object()) {

             $_service = mysqli_query($master, "
                SELECT * FROM rubro
                WHERE rubroId = '". $ra -> rubroId ."'
            ");
            
            //esta es la llave y debe tener la variable donde hago la conexion. si la conexion es $_g la llave es $g = $_g -> fetch_object();
            $service = $_service -> fetch_object();
            
            //esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
            $name = $service -> rubroName ;
                
            
            if($ra -> tipoId == 1){
                    $name2 ="Activo";
                } 
            if($ra -> tipoId == 2){
                    $name2 ="pasivo";
                } 
            
            if($ra -> tipoId == 3){
                    $name2 ="Patrimonio";
                } 
            


                $m1 = $ra -> monto1;
                $m2 = $ra -> monto2; 
                $m3 = $m1 - $m2;?>  
        <tr>
            <td id="border-grey"><?php echo $name2; ?></td>
            <td id="border-grey"><?php echo $name ; ?></td>
            <td id="border-grey" class="right-align"><?php echo number_format($m1); ?></td>
            <td id="border-grey" class="right-align"><?php echo number_format($m2); ?></td>
            <td id="border-grey" class="right-align"><?php echo number_format($m3) ?>  </td>
            <td id="border-grey" class="right-align"> </td>
            <td id="border-grey" class="right-align"><?php echo $ra -> obs; ?></td>
            <td id="border-grey" class="center"> 
            </td>   
        </tr>
        
        
        
        
        
        <?php 
        if($ra -> tipoId == 3){$aar3 = $aar3 + $ra -> monto1; $abr3 = $abr3 + $ra -> monto2;}
        
        
        } ?>
        <tr>
            <td id="border-grey" colspan="2">Total PaTrimonio</td>
            
            <td id="border-grey" class="right-align"><?php echo  number_format($aar3);?></td>
            <td id="border-grey" class="right-align"><?php echo number_format($abr3); ?></td>
            <td id="border-grey" >  </td>
            <td id="border-grey"></td>
            <td id="border-grey"></td>
            <td id="border-grey" class="center"> 
            </td>   
        </tr>
    </tbody>
</table>  


<?php 
$ppa = $aar2 + $aar3;
?>
<div class="m-t-20"></div>
<p class="m-t-10 red-text"><b>Variaci&oacute;n (<?php echo $aar1 - $ppa ?>)</b></p>



 <!-- termina el cuerpo -->           
    </div>
 <!-- termina el cuerpo -->               
 
</li>
<!-- end revision analitica -->




