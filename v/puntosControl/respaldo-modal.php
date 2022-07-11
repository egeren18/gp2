<?php
</form>

<!--   <style>
.tabs .tab a:focus, .tabs .tab a:focus.active {
    background-color: #fafafa;
    outline: none;
}
</style>
<div class="row">
<div class="col s12 m-t-50">
<ul class="tabs tab-demo grey lighten-5 ">
<?php $contador = 1;
while($r_p = mysqli_fetch_array($rubro2)) {  ?>
     <li class="tab "><a href="#test<?php echo $contador;?>"><?php echo $r_p["rubroName"];?><?php echo $contador;?></a></li>
     
    <?php $contador++;
 }?> <br>
      <li class="indicator m-b-20 " style="left: 65px; right: 324px; top:200px;"></li></ul>
 
      </ul>
    </div>
    <div id="test1" class="col s12 m-t-20">
<table class="m-t-5 responsive-table white  lighten-5  highlight"  " style="width:100%;">
               <thead>
                <tr class=" blue-grey lighten-4 blue-grey-text text-darken-2">
                    <td></td>
                    <td>Punto de Control</td>
                    <td><a href="#help" class="tooltipped modal-trigger m-r-5" data-position="left" data-tooltip="informaci&oacuten de los puntos de control">
                        <i class="material-icons blue-grey-text">help</i>
                    </a></td>
                    
                  
                </tr>
            </thead>
            <tbody>
                <?php while ($r_g = mysqli_fetch_array($puntosControl)) {

                    if ($r_g["rubroId"] == 1) { ?>
                        <tr><td></td>

                            
                            <td class="blue-grey-text text-darken-2"><?php echo $r_g["puntosControlName"]; ?></td>
 <td><a target="_blank" href="../c/puntosControl.php?m=update&c=<?php echo $r_g["puntosControlId"];  ?>" > <i style="margin: 0;" class="material-icons green-text">assignment</i></a></td>
                            
                        </tr>
    <?php }
} ?>
            </tbody>
        </table>
</div>
    <div id="test2" class="col s12">Test 2</div> 
    <div id="test3" class="col s12">Test 2</div> 
    <div id="test4" class="col s12">Test 4</div>
    <div id="test5" class="col s12">Test 5</div>
    <div id="test6" class="col s12">Test 6</div> 
    <div id="test7" class="col s12">Test 7</div> 
    <div id="test8" class="col s12">Test 8</div>
    <div id="test9" class="col s12">Test 9</div>
    <div id="test10" class="col s12">Test 10</div> 
    <div id="test11" class="col s12">Test 11</div> 
    <div id="test12" class="col s12">Test 12</div>
    <div id="test13" class="col s12">Test 13</div>
    <div id="test14" class="col s12">Test 14</div> 
    <div id="test15" class="col s12">Test 15</div> 
    <div id="test16" class="col s12">Test 16</div>
  </div>
      <div class="row">           
                <div class="col s12  m-t-20">    
                <ul class="collapsible grey lighten-4">
                <li>
                <div class="collapsible-header grey lighten-4" >
                                            
               <table  style="width:100%">
               <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                   Efectivo 
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">search</i>
                </td>
               
               </table>
    </div>
    <div class="collapsible-body">
        <table class="m-t-5 responsive-table white  lighten-5  highlight"  " style="width:100%;">
               <thead>
                <tr class=" blue-grey lighten-4 blue-grey-text text-darken-2">
                    <td></td>
                    <td>Punto de Control</td>
                    <td><a href="#help" class="tooltipped modal-trigger m-r-5" data-position="left" data-tooltip="informaci&oacuten de los puntos de control">
                        <i class="material-icons blue-grey-text">help</i>
                    </a></td>
                    
                  
                </tr>
            </thead>
            <tbody>
                <?php while ($r_g = mysqli_fetch_array($puntosControl)) {

                    if ($r_g["rubroId"] == 1) { ?>
                        <tr><td></td>

                            
                            <td class="blue-grey-text text-darken-2"><?php echo $r_g["puntosControlName"]; ?></td>
 <td><a target="_blank" href="../c/puntosControl.php?m=update&c=<?php echo $r_g["puntosControlId"];  ?>" > <i style="margin: 0;" class="material-icons green-text">assignment</i></a></td>
                            
                        </tr>
    <?php }
} ?>
            </tbody>
        </table>
       
     </div>
    </li>
    
    							</div></div>
 

<div class="row">           
                <div class="col s12  m-t-10">    
                <ul class="collapsible grey lighten-4">
                <li>
                <div class="collapsible-header grey lighten-4" >
                                            
               <table  style="width:100%">
               <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                   Cuentas por cobrar
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">search</i>
                </td>
               
               </table>
    </div>
    <div class="collapsible-body">
        <table class="m-t-5 responsive-table white  lighten-5  highlight"  " style="width:100%;">
               <thead>
                <tr class=" blue-grey lighten-4 blue-grey-text text-darken-2">
                    <td></td>
                    <td>Punto de Control</td>
                    <td><a href="#help" class="tooltipped modal-trigger m-r-5" data-position="left" data-tooltip="informaci&oacuten de los puntos de control">
                        <i class="material-icons blue-grey-text">help</i>
                    </a></td>
                    
                  
                </tr>
            </thead>
            <tbody>
                <?php while ($r_g = mysqli_fetch_array($puntosControl2)) {

                    if ($r_g["rubroId"] == 2) { ?>
                        <tr><td></td>

                            <td class="blue-grey-text text-darken-2"><?php echo $r_g["puntosControlName"]; ?></td>
 <td><a target="_blank" href="../c/puntosControl.php?m=update&c=<?php echo $r_g["puntosControlId"];  ?>" > <i style="margin: 0;" class="material-icons green-text">assignment</i></a></td>
                            
                        </tr>
    <?php }
} ?>
            </tbody>
        </table>
       
     </div>
    </li>
    
    							</div></div>
<div class="row">           
                <div class="col s12  m-t-10">    
                <ul class="collapsible grey lighten-4">
                <li>
                <div class="collapsible-header grey lighten-4" >
                                            
               <table  style="width:100%">
               <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                   Cuentas por cobrar a compan&iacuteas relacionadas
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">search</i>
                </td>
               
               </table>
    </div>
    <div class="collapsible-body">
        <table class="m-t-5 responsive-table white  lighten-5  highlight"  " style="width:100%;">
               <thead>
                <tr class=" blue-grey lighten-4 blue-grey-text text-darken-2">
                    <td></td>
                    <td>Punto de Control</td>
                    <td><a href="#help" class="tooltipped modal-trigger m-r-5" data-position="left" data-tooltip="informaci&oacuten de los puntos de control">
                        <i class="material-icons blue-grey-text">help</i>
                    </a></td>
                    
                  
                </tr>
            </thead>
            <tbody>
                <?php while ($r_g = mysqli_fetch_array($puntosControl2)) {

                    if ($r_g["rubroId"] == 3) { ?>
                        <tr><td></td>

                            <td class="blue-grey-text text-darken-2"><?php echo $r_g["puntosControlName"]; ?></td>
 <td><a target="_blank" href="../c/puntosControl.php?m=update&c=<?php echo $r_g["puntosControlId"];  ?>" > <i style="margin: 0;" class="material-icons green-text">assignment</i></a></td>
                            
                        </tr>
    <?php }
} ?>
            </tbody>
        </table>
       
     </div>
    </li>
    
    							</div></div>    							
 <!-- <div class="row">           
                <div class="col s12  m-t-10">    
                <ul class="collapsible grey lighten-4">
                <li>
                <div class="collapsible-header grey lighten-4" >
                                            
               <table  style="width:100%">
               <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                   Cuentas por cobrar a compnias relacionadas
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">search</i>
                </td>
               
               </table>
    </div>
    <div class="collapsible-body">
        <table class="m-t-5 responsive-table white  lighten-5  highlight"  " style="width:100%;">
               <thead>
                <tr class="blue-grey white-text">
                    <td></td>
                    
                    <td>Requerimiento</td> 
                  
                </tr>
            </thead>
            <tbody>
                <?php while ($r_g = mysqli_fetch_array($puntosControl)) {

                    if ($r_g["rubroId"] == 1) { ?>
                        <tr><td></td>

                       
                            <td><a target="_blank" href="../c/puntosControl.php?m=update&c=<?php echo $r_g["puntosControlId"];  ?>" ><?php echo $r_g["puntosControlName"]; ?></a></td>
  
                            
                        </tr>
    <?php }
} ?>
            </tbody>
        </table>
       
     </div>
    </li>
    
    							</div></div>
 
 <div class="row">           
                <div class="col s12  m-t-10">    
                <ul class="collapsible grey lighten-4">
                <li>
                <div class="collapsible-header grey lighten-4" >
                                            
               <table  style="width:100%">
               <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                   Existencias 
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">search</i>
                </td>
               
               </table>
    </div>
    <div class="collapsible-body">
        <table class="m-t-5 responsive-table white  lighten-5  highlight"  " style="width:100%;">
               <thead>
                <tr class="blue-grey white-text">
                    <td></td>
                    <td>Prueba</td>
                    <td>Requerimiento</td> 
                  
                </tr>
            </thead>
            <tbody>
                <?php while ($r_g = mysqli_fetch_array($puntosControl)) {

                    if ($r_g["rubroId"] == 1) { ?>
                        <tr><td></td>

                            <td><?php echo $r_g["rubroName"]; ?></td>
                            <td><a target="_blank" href="../c/puntosControl.php?m=update&c=<?php echo $r_g["puntosControlId"];  ?>" ><?php echo $r_g["puntosControlName"]; ?></a></td>
  
                            
                        </tr>
    <?php }
} ?>
            </tbody>
        </table>
       
     </div>
    </li>
    
    							</div></div>
 
 <div class="row">           
                <div class="col s12  m-t-10">    
                <ul class="collapsible grey lighten-4">
                <li>
                <div class="collapsible-header grey lighten-4" >
                                            
               <table  style="width:100%">
               <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                   Gastos pagado por anticipado y anticipos a proveedores
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">search</i>
                </td>
               
               </table>
    </div>
    <div class="collapsible-body">
        <table class="m-t-5 responsive-table white  lighten-5  highlight"  " style="width:100%;">
               <thead>
                <tr class="blue-grey white-text">
                    <td></td>
                    <td>Prueba</td>
                    <td>Requerimiento</td> 
                  
                </tr>
            </thead>
            <tbody>
                <?php while ($r_g = mysqli_fetch_array($puntosControl)) {

                    if ($r_g["rubroId"] == 1) { ?>
                        <tr><td></td>

                            <td><?php echo $r_g["rubroName"]; ?></td>
                            <td><a target="_blank" href="../c/puntosControl.php?m=update&c=<?php echo $r_g["puntosControlId"];  ?>" ><?php echo $r_g["puntosControlName"]; ?></a></td>
  
                            
                        </tr>
    <?php }
} ?>
            </tbody>
        </table>
       
     </div>
    </li>
    
    							</div></div> -->
 
