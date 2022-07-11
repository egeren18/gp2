<?php 
 $_atcd = mysqli_query($connection, "
 SELECT * FROM   ac
 WHERE acId = '" . $acId. "'
 ");
 $atcd = $_atcd -> fetch_object();
 $atcdn =  $atcd -> serviceId;
$_pris28 = mysqli_query($acq, "
SELECT * FROM priskr$acId                            
");
                    
$pris28 = $_pris28 -> fetch_object();

if ($pris28 --> statusId == 1 ) {
?>                       





<?php if ( $valor  == 4  or  $_SESSION["userAdmin"]  == 3 ){ ?>           
                                <div class="row">
        <div class="col s12 m-t-20">
            <div class="card m-l-10 m-r-10">
                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                    <ul class="collection">
                        <li class="collection-item blue-grey lighten-2 white-text">En base a mi conocimiento preliminar del posible Cliente/Proyecto y de los indicadores presentes, decido:</li>
                    </ul>





 <?php if ($tracingOpinionAc == $acId and $_SESSION["userAdmin"]  == 3 ){
                    // AQUI VAN LAS CASILLAS CUANDO ESTA LLENADO 

                    $_tc = mysqli_query($connection, "
                    SELECT * FROM   tracingopinion
                    WHERE acId = '" . $acId. "'
                    ");
                    $tc = $_tc -> fetch_object();
                    $tcn =  $tc -> riskId;

                    $_tcr = mysqli_query($master, "
                    SELECT * FROM   risk
                    WHERE riskId = '" . $tcn. "'
                    ");
                    $tcr = $_tcr -> fetch_object();
                    $tcrn =  $tcr -> riskName;


                    $_tcd = mysqli_query($connection, "
                    SELECT * FROM   tracingopinion
                    WHERE acId = '" . $acId. "'
                    ");
                    $tcd = $_tcd -> fetch_object();
                    $tcdn =  $tcd -> decision;

                    $_tcdr = mysqli_query($master, "
                    SELECT * FROM   desicion
                    WHERE desicionId = '" . $tcn. "'
                    ");
                    $tcdr = $_tcdr -> fetch_object();
                    $tcdrn =  $tcdr -> desicionName;
                      ?>
 <form action="../c/ac.php?m=updateTracingDb3&cod=<?php echo $c; ?>&q=<?php echo $q; ?>&a=<?php echo  $acId; ?>&risk=<?php echo $tcn;?>" method="post" enctype="multipart/form-data">                     
<div class="row">
 <?php if($atcdn = 1){?>
    <div class="col s12 m6 l3 m-t-20">
       <div class="input-field">
     <small class="blue-grey-text text-darken-2">Riesgo sugerido por el sistema</small>
           <input value="<?php echo $average; ?> " disabled="">
       </div>
   </div>

 <?php } ?>
   
   <div class="col s12 m6 l3 m-t-20">
       <div class="input-field">
                <small class="blue-grey-text text-darken-2">Calificaci&oacute;n Socio Lider</small>
           <input value="<?php echo $tcrn   ; ?> " disabled="">
       </div>
   </div>

   <div class="col s12 m6 l3 m-t-20">


       <div class="input-field">
           <small class="blue-grey-text text-darken-2">Decisi&oacute;n Socio lider </small>
           <input value="<?php echo  $tcdrn ; ?> " disabled="">
       </div>
   </div>
   <div class="col s12 m6 l3 m-t-20">
                            <div class="input-field">
                                <small>Decisi&oacute;n Socio de Riesgo</small>

                                <?php if ( $dsr == 0 ){
                                        // AQUI VAN LAS CASILLAS CUANDO ESTA LLENADO 
                                    ?>

                                    <select name="dsr" placeholder="" class="validate" required="">
                                    <option value="">&nbsp;</option>
                                    <?php while ($r_d = mysqli_fetch_array($desicion3)) { ?>
                                    <?php $desicionId = $r_d["desicionId"]; $desicionName = $r_d["desicionName"]; ?>
                                    <option  value="<?php echo $desicionId; ?>"><?php echo $desicionName; ?></option>
                                    <?php } ?>
                                </select>

                                <?php }else {
                                    // AQUI VA SI NO SE HA LLENADO 
                                 ?>
                                  <input value="<?php echo  $dsrn; ?> " disabled="">
                                  <?php }
                                 ?>
                            </div>
     </div>

     <?php if ( $dsr == 0 ){  ?>
        <div class="col s12 m-t-20">
                                            <label>
                                                <input name="ok" type="checkbox" required=""/>
                                                <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                            </label>
        </div>
        <div class="col s12 m-t-20">
                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
        <?php }  ?>     
                       
</div>
</form>

                        <?php }else {



// AQUI VA SI NO SE HA LLENADO 
                        ?>
                        

                        <form action="../c/ac.php?m=updateTracingDb&cod=<?php echo $c; ?>&q=<?php echo $q; ?>&a=<?php echo  $acId; ?>" method="post" enctype="multipart/form-data">
                        <div class="row">

                        <div class="col s12">

              
                        </div>
                        <?php if($atcdn = 1){?>
                        <div class="col s12 m6 l4">
                            <div class="input-field">
                                <small class="blue-grey-text text-darken-2">Riesgo sugerido por el sistema  </small>
                                 <input value="<?php echo $average; ?> " disabled="">
                            </div>
                        </div>
                        <?php }?>
                   
                        
                        <?php 
                      
                        
                        $_acr = mysqli_query($acq, "
                            SELECT * FROM acr$acId
                            WHERE statusId = 5
                            ");
                            $ccontador = 0;
                        while  ($acr = $_acr -> fetch_object()) {
                            $ccontador = $ccontador + 1;
                        }
                        
                        $_acrx = mysqli_query($acq, "
                        SELECT * FROM acq$acId
                        ");
                        $ccontadorx = 0;
                     while  ($acrx = $_acrx -> fetch_object()) {
                        $ccontadorx = $ccontadorx + 1;
                    }  
                        
                    if ($tracingOpinionAc == $acId){
                        
                        
                        $_tc = mysqli_query($connection, "
                        SELECT * FROM   tracingopinion
                        WHERE acId = '" . $acId. "'
                        ");
                        $tc = $_tc -> fetch_object();
                        $tcn =  $tc -> riskId;

                        $_tcr = mysqli_query($master, "
                        SELECT * FROM   risk
                        WHERE riskId = '" . $tcn. "'
                        ");
                        $tcr = $_tcr -> fetch_object();
                        $tcrn =  $tcr -> riskName;


                        $_tcd = mysqli_query($connection, "
                        SELECT * FROM   tracingopinion
                        WHERE acId = '" . $acId. "'
                        ");
                        $tcd = $_tcd -> fetch_object();
                        $tcdn =  $tcd -> decision;

                        $_tcdr = mysqli_query($master, "
                        SELECT * FROM   desicion
                        WHERE desicionId = '" . $tcn. "'
                        ");
                        $tcdr = $_tcdr -> fetch_object();
                        $tcdrn =  $tcdr -> desicionName;

                    
                        ?>


<div class="col s12 m6 l3 ">
       <div class="input-field">
                <small class="blue-grey-text text-darken-2">Calificaci&oacute;n Socio Lider</small>
           <input value="<?php echo $tcrn   ; ?> " disabled="">
       </div>
   </div>
   <div class="col s12 m6 l3 ">
       <div class="input-field">
                <small class="blue-grey-text text-darken-2">Decision</small>
           <input value="<?php echo $tcdrn   ; ?> " disabled="">
       </div>
   </div>

                    <?}else{
                        if ($ccontador == $ccontadorx){ ?>
                              
                     <div class="col s12 m6 l4">
                            <div class="input-field">
                                <small class="blue-grey-text text-darken-2">Calificación Socio Lider </small>
                                <select id="ris" name="ris" placeholder="" type="text" class="validate" >
                                    <?php while ($r_selectRisk2 = $selectRisk2->fetch_object()) { ?>
                                        <option <?php echo $selected = $r_selectRisk1->riskId == $r_selectRisk2->riskId ? 'selected' : ''; ?> value="<?php echo $r_selectRisk2->riskId; ?>"><?php echo $r_selectRisk2->riskName; ?></option>
                                    <?php } ?>
                                </select>
                            </div>                                                
                        </div>
                        
                        <div class="col m5 offset-m1 l4 m-t-10">
                        <?php while ($r_desicion = $desicion ->fetch_object()) { ?>
                            <label class="m-l-20">
                                <input value="<?php echo $r_desicion -> desicionId; ?>"  type="radio" name="de" id="de" required >
                                <span><?php echo $r_desicion -> desicionName; ?></span>
                            </label><br>
                             <?php } ?>
                        </div>        
                        <div class="col s12 m-t-20">
                                            <label>
                                                <input name="ok" type="checkbox" required=""/>
                                                <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                            </label>
                        </div>
                 
                    <div class="row">
                        <div class="col s12 m-t-20">
                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
                    </div>
                        
                        
                     <?php   }} ?>
                        
                        
                        
                        
                        
                        
                        </div>

                       

                    </form>
                        <?php }
                        ?>

                  
                </div>
            </div>
        </div>
    </div>
 
                            <?php }}
                            if ($pris28 --> statusId == 1 ) {
?>                       





<?php if ( $valor  == 4  or  $_SESSION["userAdmin"]  == 3 ){ ?>           
                                <div class="row">
        <div class="col s12 m-t-20">
            <div class="card m-l-10 m-r-10">
                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                    <ul class="collection">
                        <li class="collection-item blue-grey lighten-2 white-text">En base a mi conocimiento preliminar del posible Cliente/Proyecto y de los indicadores presentes, decido:</li>
                    </ul>





 <?php if ($tracingOpinionAc == $acId and $_SESSION["userAdmin"]  == 3 ){
                    // AQUI VAN LAS CASILLAS CUANDO ESTA LLENADO 

                    $_tc = mysqli_query($connection, "
                    SELECT * FROM   tracingopinion
                    WHERE acId = '" . $acId. "'
                    ");
                    $tc = $_tc -> fetch_object();
                    $tcn =  $tc -> riskId;

                    $_tcr = mysqli_query($master, "
                    SELECT * FROM   risk
                    WHERE riskId = '" . $tcn. "'
                    ");
                    $tcr = $_tcr -> fetch_object();
                    $tcrn =  $tcr -> riskName;


                    $_tcd = mysqli_query($connection, "
                    SELECT * FROM   tracingopinion
                    WHERE acId = '" . $acId. "'
                    ");
                    $tcd = $_tcd -> fetch_object();
                    $tcdn =  $tcd -> decision;

                    $_tcdr = mysqli_query($master, "
                    SELECT * FROM   desicion
                    WHERE desicionId = '" . $tcn. "'
                    ");
                    $tcdr = $_tcdr -> fetch_object();
                    $tcdrn =  $tcdr -> desicionName;
                      ?>
 <form action="../c/ac.php?m=updateTracingDb3&cod=<?php echo $c; ?>&q=<?php echo $q; ?>&a=<?php echo  $acId; ?>" method="post" enctype="multipart/form-data">                     
<div class="row">
 <?php if($atcdn = 1){?>
    <div class="col s12 m6 l3 m-t-20">
       <div class="input-field">
     <small class="blue-grey-text text-darken-2">Riesgo sugerido por el sistema</small>
           <input value="<?php echo $average; ?> " disabled="">
       </div>
   </div>

 <?php } ?>
   
   <div class="col s12 m6 l3 m-t-20">
       <div class="input-field">
                <small class="blue-grey-text text-darken-2">Calificaci&oacute;n Socio Lider</small>
           <input value="<?php echo $tcrn   ; ?> " disabled="">
       </div>
   </div>

   <div class="col s12 m6 l3 m-t-20">


       <div class="input-field">
           <small class="blue-grey-text text-darken-2">Decisi&oacute;n Socio lider </small>
           <input value="<?php echo  $tcdrn ; ?> " disabled="">
       </div>
   </div>
   <div class="col s12 m6 l3 m-t-20">
                            <div class="input-field">
                                <small>Decisi&oacute;n Socio de Riesgo</small>

                                <?php if ( $dsr == 0 ){
                                        // AQUI VAN LAS CASILLAS CUANDO ESTA LLENADO 
                                    ?>

                                    <select name="dsr" placeholder="" class="validate" required="">
                                    <option value="">&nbsp;</option>
                                    <?php while ($r_d = mysqli_fetch_array($desicion3)) { ?>
                                    <?php $desicionId = $r_d["desicionId"]; $desicionName = $r_d["desicionName"]; ?>
                                    <option  value="<?php echo $desicionId; ?>"><?php echo $desicionName; ?></option>
                                    <?php } ?>
                                </select>

                                <?php }else {
                                    // AQUI VA SI NO SE HA LLENADO 
                                 ?>
                                  <input value="<?php echo  $dsrn; ?> " disabled="">
                                  <?php }
                                 ?>
                            </div>
     </div>

     <?php if ( $dsr == 0 ){  ?>
        <div class="col s12 m-t-20">
                                            <label>
                                                <input name="ok" type="checkbox" required=""/>
                                                <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                            </label>
        </div>
        <div class="col s12 m-t-20">
                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
        <?php }  ?>     
                       
</div>
</form>

                        <?php }else {



// AQUI VA SI NO SE HA LLENADO 
                        ?>
                        

                        <form action="../c/ac.php?m=updateTracingDb&cod=<?php echo $c; ?>&q=<?php echo $q; ?>&a=<?php echo  $acId; ?>" method="post" enctype="multipart/form-data">
                        <div class="row">

                        <div class="col s12">

              
                        </div>
                        <?php if($atcdn = 1){?>
                        <div class="col s12 m6 l4">
                            <div class="input-field">
                                <small class="blue-grey-text text-darken-2">Riesgo sugerido por el sistema  </small>
                                 <input value="<?php echo $average; ?> " disabled="">
                            </div>
                        </div>
                        <?php }?>
                   
                        
                        <?php 
                      
                        
                        $_acr = mysqli_query($acq, "
                            SELECT * FROM acr$acId
                            WHERE statusId = 5
                            ");
                            $ccontador = 0;
                        while  ($acr = $_acr -> fetch_object()) {
                            $ccontador = $ccontador + 1;
                        }
                        
                        $_acrx = mysqli_query($acq, "
                        SELECT * FROM acq$acId
                        ");
                        $ccontadorx = 0;
                     while  ($acrx = $_acrx -> fetch_object()) {
                        $ccontadorx = $ccontadorx + 1;
                    }  
                        
                    if ($tracingOpinionAc == $acId){
                        
                        
                        $_tc = mysqli_query($connection, "
                        SELECT * FROM   tracingopinion
                        WHERE acId = '" . $acId. "'
                        ");
                        $tc = $_tc -> fetch_object();
                        $tcn =  $tc -> riskId;

                        $_tcr = mysqli_query($master, "
                        SELECT * FROM   risk
                        WHERE riskId = '" . $tcn. "'
                        ");
                        $tcr = $_tcr -> fetch_object();
                        $tcrn =  $tcr -> riskName;


                        $_tcd = mysqli_query($connection, "
                        SELECT * FROM   tracingopinion
                        WHERE acId = '" . $acId. "'
                        ");
                        $tcd = $_tcd -> fetch_object();
                        $tcdn =  $tcd -> decision;

                        $_tcdr = mysqli_query($master, "
                        SELECT * FROM   desicion
                        WHERE desicionId = '" . $tcn. "'
                        ");
                        $tcdr = $_tcdr -> fetch_object();
                        $tcdrn =  $tcdr -> desicionName;

                    
                        ?>


<div class="col s12 m6 l3 ">
       <div class="input-field">
                <small class="blue-grey-text text-darken-2">Calificaci&oacute;n Socio Lider</small>
           <input value="<?php echo $tcrn   ; ?> " disabled="">
       </div>
   </div>
   <div class="col s12 m6 l3 ">
       <div class="input-field">
                <small class="blue-grey-text text-darken-2">Decision</small>
           <input value="<?php echo $tcdrn   ; ?> " disabled="">
       </div>
   </div>

                    <?}else{
                        if ($ccontador == $ccontadorx){ ?>
                              
                     <div class="col s12 m6 l4">
                            <div class="input-field">
                                <small class="blue-grey-text text-darken-2">Calificación Socio Lider </small>
                                <select id="ris" name="ris" placeholder="" type="text" class="validate" >
                                    <?php while ($r_selectRisk2 = $selectRisk2->fetch_object()) { ?>
                                        <option <?php echo $selected = $r_selectRisk1->riskId == $r_selectRisk2->riskId ? 'selected' : ''; ?> value="<?php echo $r_selectRisk2->riskId; ?>"><?php echo $r_selectRisk2->riskName; ?></option>
                                    <?php } ?>
                                </select>
                            </div>                                                
                        </div>
                        
                        <div class="col m5 offset-m1 l4 m-t-10">
                        <?php while ($r_desicion = $desicion ->fetch_object()) { ?>
                            <label class="m-l-20">
                                <input value="<?php echo $r_desicion -> desicionId; ?>"  type="radio" name="de" id="de" required >
                                <span><?php echo $r_desicion -> desicionName; ?></span>
                            </label><br>
                             <?php } ?>
                        </div>        
                        <div class="col s12 m-t-20">
                                            <label>
                                                <input name="ok" type="checkbox" required=""/>
                                                <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                            </label>
                        </div>
                 
                    <div class="row">
                        <div class="col s12 m-t-20">
                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
                    </div>
                        
                        
                     <?php   }} ?>
                        
                        
                        
                        
                        
                        
                        </div>

                       

                    </form>
                        <?php }
                        ?>

                  
                </div>
            </div>
        </div>
    </div>
 
                            <?php }}
                        else { ?>                       
                                
                                
                                
                                
                                
                                <?php if ( $valor  == 4  or  $_SESSION["userAdmin"]  == 3 ){ ?>           
                                                                <div class="row">
                                        <div class="col s12 m-t-20">
                                            <div class="card m-l-10 m-r-10">
                                                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                                    <ul class="collection">
                                                        <li class="collection-item blue-grey lighten-2 white-text">En base a mi conocimiento preliminar del posible Cliente/Proyecto y de los indicadores presentes, decido:</li>
                                                    </ul>
                                
                                
                                
                                
                                
                                 <?php if ($tracingOpinionAc == $acId and $_SESSION["userAdmin"]  == 3 ){
                                                    // AQUI VAN LAS CASILLAS CUANDO ESTA LLENADO 
                                
                                                    $_tc = mysqli_query($connection, "
                                                    SELECT * FROM   tracingopinion
                                                    WHERE acId = '" . $acId. "'
                                                    ");
                                                    $tc = $_tc -> fetch_object();
                                                    $tcn =  $tc -> riskId;
                                
                                                    $_tcr = mysqli_query($master, "
                                                    SELECT * FROM   risk
                                                    WHERE riskId = '" . $tcn. "'
                                                    ");
                                                    $tcr = $_tcr -> fetch_object();
                                                    $tcrn =  $tcr -> riskName;
                                
                                
                                                    $_tcd = mysqli_query($connection, "
                                                    SELECT * FROM   tracingopinion
                                                    WHERE acId = '" . $acId. "'
                                                    ");
                                                    $tcd = $_tcd -> fetch_object();
                                                    $tcdn =  $tcd -> decision;
                                
                                                    $_tcdr = mysqli_query($master, "
                                                    SELECT * FROM   desicion
                                                    WHERE desicionId = '" . $tcn. "'
                                                    ");
                                                    $tcdr = $_tcdr -> fetch_object();
                                                    $tcdrn =  $tcdr -> desicionName;
                                                      ?>
                                 <form action="../c/ac.php?m=updateTracingDb3&cod=<?php echo $c; ?>&q=<?php echo $q; ?>&a=<?php echo  $acId; ?>" method="post" enctype="multipart/form-data">                     
                                <div class="row">
                              
                                   
                                   <div class="col s12 m6 l3 m-t-20">
                                       <div class="input-field">
                                                <small class="blue-grey-text text-darken-2">Calificaci&oacute;n Socio Lider</small>
                                           <input value="<?php echo $tcrn   ; ?> " disabled="">
                                       </div>
                                   </div>
                                
                                   <div class="col s12 m6 l3 m-t-20">
                                
                                
                                       <div class="input-field">
                                           <small class="blue-grey-text text-darken-2">Decisi&oacute;n Socio lider </small>
                                           <input value="<?php echo  $tcdrn ; ?> " disabled="">
                                       </div>
                                   </div>
                                   <div class="col s12 m6 l3 m-t-20">
                                                            <div class="input-field">
                                                                <small>Decisi&oacute;n Socio de Riesgo</small>
                                
                                                                <?php if ( $dsr == 0 ){
                                                                        // AQUI VAN LAS CASILLAS CUANDO ESTA LLENADO 
                                                                    ?>
                                
                                                                    <select name="dsr" placeholder="" class="validate" required="">
                                                                    <option value="">&nbsp;</option>
                                                                    <?php while ($r_d = mysqli_fetch_array($desicion3)) { ?>
                                                                    <?php $desicionId = $r_d["desicionId"]; $desicionName = $r_d["desicionName"]; ?>
                                                                    <option  value="<?php echo $desicionId; ?>"><?php echo $desicionName; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                
                                                                <?php }else {
                                                                    // AQUI VA SI NO SE HA LLENADO 
                                                                 ?>
                                                                  <input value="<?php echo  $dsrn; ?> " disabled="">
                                                                  <?php }
                                                                 ?>
                                                            </div>
                                     </div>
                                
                                     <?php if ( $dsr == 0 ){  ?>
                                        <div class="col s12 m-t-20">
                                                                            <label>
                                                                                <input name="ok" type="checkbox" required=""/>
                                                                                <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                                            </label>
                                        </div>
                                        <div class="col s12 m-t-20">
                                                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                                                <i class="material-icons">save</i>
                                                            </button>
                                                        </div>
                                        <?php }  ?>     
                                                       
                                </div>
                                </form>
                                
                                                        <?php }else {
                                
                                
                                
                                // AQUI VA SI NO SE HA LLENADO 
                                                        ?>
                                                        
                                
                                                        <form action="../c/ac.php?m=updateTracingDb&cod=<?php echo $c; ?>&q=<?php echo $q; ?>&a=<?php echo  $acId; ?>" method="post" enctype="multipart/form-data">
                                                        <div class="row">
                                
                                                        <div class="col s12">
                                
                                              
                                                        </div>
                                                   
                                                   
                                                        
                                                        <?php 
                                                      
                                                        
                                                        $_acr = mysqli_query($acq, "
                                                            SELECT * FROM acr$acId
                                                            WHERE statusId = 5
                                                            ");
                                                            $ccontador = 0;
                                                        while  ($acr = $_acr -> fetch_object()) {
                                                            $ccontador = $ccontador + 1;
                                                        }
                                                        
                                                        $_acrx = mysqli_query($acq, "
                                                        SELECT * FROM acq$acId
                                                        ");
                                                        $ccontadorx = 0;
                                                     while  ($acrx = $_acrx -> fetch_object()) {
                                                        $ccontadorx = $ccontadorx + 1;
                                                    }  
                                                        
                                                    if ($tracingOpinionAc == $acId){
                                                        
                                                        
                                                        $_tc = mysqli_query($connection, "
                                                        SELECT * FROM   tracingopinion
                                                        WHERE acId = '" . $acId. "'
                                                        ");
                                                        $tc = $_tc -> fetch_object();
                                                        $tcn =  $tc -> riskId;
                                
                                                        $_tcr = mysqli_query($master, "
                                                        SELECT * FROM   risk
                                                        WHERE riskId = '" . $tcn. "'
                                                        ");
                                                        $tcr = $_tcr -> fetch_object();
                                                        $tcrn =  $tcr -> riskName;
                                
                                
                                                        $_tcd = mysqli_query($connection, "
                                                        SELECT * FROM   tracingopinion
                                                        WHERE acId = '" . $acId. "'
                                                        ");
                                                        $tcd = $_tcd -> fetch_object();
                                                        $tcdn =  $tcd -> decision;
                                
                                                        $_tcdr = mysqli_query($master, "
                                                        SELECT * FROM   desicion
                                                        WHERE desicionId = '" . $tcn. "'
                                                        ");
                                                        $tcdr = $_tcdr -> fetch_object();
                                                        $tcdrn =  $tcdr -> desicionName;
                                
                                                    
                                                        ?>
                                
                                
                                <div class="col s12 m6 l3 ">
                                       <div class="input-field">
                                                <small class="blue-grey-text text-darken-2">Calificaci&oacute;n Socio Lider</small>
                                           <input value="<?php echo $tcrn   ; ?> " disabled="">
                                       </div>
                                   </div>
                                   <div class="col s12 m6 l3 ">
                                       <div class="input-field">
                                                <small class="blue-grey-text text-darken-2">Decision</small>
                                           <input value="<?php echo $tcdrn   ; ?> " disabled="">
                                       </div>
                                   </div>
                                
                                                    <?}else{
                                                        if ($ccontador == $ccontadorx){ ?>
                                                              
                                                     <div class="col s12 m6 l4">
                                                            <div class="input-field">
                                                                <small class="blue-grey-text text-darken-2">Calificación Socio Lider </small>
                                                                <select id="ris" name="ris" placeholder="" type="text" class="validate" >
                                                                    <?php while ($r_selectRisk2 = $selectRisk2->fetch_object()) { ?>
                                                                        <option <?php echo $selected = $r_selectRisk1->riskId == $r_selectRisk2->riskId ? 'selected' : ''; ?> value="<?php echo $r_selectRisk2->riskId; ?>"><?php echo $r_selectRisk2->riskName; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>                                                
                                                        </div>
                                                        
                                                        <div class="col m5 offset-m1 l4 m-t-10">
                                                        <?php while ($r_desicion = $desicion ->fetch_object()) { ?>
                                                            <label class="m-l-20">
                                                                <input value="<?php echo $r_desicion -> desicionId; ?>"  type="radio" name="de" id="de" required >
                                                                <span><?php echo $r_desicion -> desicionName; ?></span>
                                                            </label><br>
                                                             <?php } ?>
                                                        </div>        
                                                        <div class="col s12 m-t-20">
                                                                            <label>
                                                                                <input name="ok" type="checkbox" required=""/>
                                                                                <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                                            </label>
                                                        </div>
                                                 
                                                    <div class="row">
                                                        <div class="col s12 m-t-20">
                                                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                                                <i class="material-icons">save</i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                        
                                                        
                                                     <?php   }} ?>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </div>
                                
                                                       
                                
                                                    </form>
                                                        <?php }
                                                        ?>
                                
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 
                                                            <?php }}
                            
                            
                            ?>

