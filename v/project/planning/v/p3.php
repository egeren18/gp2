<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                   Frecuencia 
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">       
       <?php 
if ($fa == $c ){ ?>
     <form id="form_validation" action="project.php?m=questionEditDb&c=<?php echo $c; ?>&i=<?php echo $i; ?>" method="post">
         
<div class="row">
 <div class="col s12 m12 L2">
    <div class="input-field">
         <select id="frecuencia" name="frecuencia" placeholder="" type="text" class="validate">
            <option value="<?php echo $fa2; ?> "> <?php echo $fa2; ?> </option>
                    <?php while ($fefe = $_fefe -> fetch_object()) { ?>
                        <option value="<?php echo $fefe -> frecuenciaId ; ?>"><?php echo $fefe -> frecuenciaName;     ?></option>
                             <?php } ?>
         </select>
             <label class="font-13" for="civilStatusId">Frecuencia del Proyecto al a&ntilde;o </label>
     </div>
 </div></div>
 
 
  <div class="row">
   
 
 
                                                              <?php 
                                                                 if ($fa2 >= 1 ){ ?>
                                                            <div class="col s12 m4 l2">
                                                                <div class="input-field">
                                                                    <input id="dateP1" name="dateP1" placeholder="" value="<?php echo $dP1 ; ?>" type="text" class="datepicker validate">
                                                                    <label for="dateP1">Fecha de revisi&oacute;n 1</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div></div>
                                                             <?php } ?> 

                                                             <?php 
                                                             if ($fa2 >= 2 ){ ?>
                                                            <div class="col s12 m4 l2">
                                                                <div class="input-field">
                                                                    <input id="dateP2" name="dateP2" placeholder=" <?php echo $dP2 ; ?>"  value="<?php echo $dP2 ; ?>" type="text" class="datepicker validate">
                                                                    <label for="dateP2">Fecha de revisi&oacute;n 2</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div></div>
                                                         <?php } ?>
                                                         
                                                         <?php 
                                                                  if ($fa2 >= 3 ){ ?>
                                                            <div class="col s12 m4 l2">
                                                                <div class="input-field">
                                                                    <input id="dateP3" name="dateP3" placeholder="<?php echo $dP3;  ?>" value="<?php echo $dP3 ; ?>" type="text" class="datepicker validate">
                                                                    <label for="userBirthday">Fecha de revisi&oacute;n 3</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div></div>
                                                                   <?php } ?> 
                                                               <?php 
                                                                  if ($fa2 >= 4 ){ ?>       
                                                                <div class="col s12 m4 l2">
                                                                <div class="input-field">
                                                                    <input id="dateP4" name="dateP4" placeholder="<?php echo $dP4 ; ?>" value="<?php echo $dP4 ; ?>" type="text" class="datepicker validate">
                                                                    <label for="dateP4">Fecha de revisi&oacute;n 4</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div></div>
                                                                   <?php } ?> 
                                                            <?php 
                                                                if ($fa2 >= 5 ){ ?>           
                                                            <div class="col s12 m4 l2">
                                                                <div class="input-field">
                                                                    <input id="dateP5" name="dateP5" placeholder="<?php echo $dP5;  ?>" value="<?php echo $dP5 ; ?>" type="text" class="datepicker validate">
                                                                    <label for="dateP5">Fecha de revisi&oacute;n 5</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div></div>
                                                                   <?php } ?> 
                                                                   
                                                            <?php 
                                                                if ($fa2 >= 6 ){ ?>                  
                                                            <div class="col s12 m4 l2">
                                                                <div class="input-field">
                                                                    <input id="dateP6" name="dateP6" placeholder="<?php echo $dP6; ?>" value="<?php echo $dP6 ; ?>" type="text" class="datepicker validate">
                                                                    <label for="dateP6">Fecha de revisi&oacute;n 6</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div></div>
                                                                   <?php } ?> 
                                                                
                                                                <?php 
                                                                if ($fa2 >= 7 ){ ?>           
                                                                <div class="col s12 m4 l2">
                                                                <div class="input-field">
                                                                    <input id="dateP7" name="dateP7" placeholder="<?php echo $dP7;  ?>" value="<?php echo $dP7 ; ?>" type="text" class="datepicker validate">
                                                                    <label for="userBirthday">Fecha de revisi&oacute;n 7</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div></div>
                                                                   <?php } ?>
                                                                   
                                                        <?php 
                                                                if ($fa2 >= 8 ){ ?>                      
                                                            <div class="col s12 m4 l2">
                                                                <div class="input-field">
                                                                    <input id="dateP8" name="dateP8" placeholder=" <?php echo $dP8; ?>" value="<?php echo $dP8 ; ?>" type="text" class="datepicker validate">
                                                                    <label for="userBirthday">Fecha de revisi&oacute;n 8</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div></div>
                                                                   <?php } ?> 
                                                         <?php 
                                                                if ($fa2 >= 9 ){ ?>                     
                                                            <div class="col s12 m4 l2">
                                                                <div class="input-field">
                                                                    <input id="dateP9" name="dateP9" placeholder=" <?php echo $dP9;  ?>" value="<?php echo $dP9 ; ?>" type="text" class="datepicker validate">
                                                                    <label for="dateP9">Fecha de revisi&oacute;n 9</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div></div>
                                                                   <?php } ?> 
                                                                
                                                        <?php 
                                                                if ($fa2 >= 10 ){ ?>           
                                                                <div class="col s12 m4 l2">
                                                                <div class="input-field">
                                                                    <input id="dateP10" name="dateP10" placeholder="<?php echo $dP10; ?>" value="<?php echo $dP10 ; ?>" type="text" class="datepicker validate">
                                                                    <label for="dateP10">Fecha de revisi&oacute;n 10</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div></div>
                                                                   <?php } ?> 
                                                        <?php 
                                                                if ($fa2 >= 11 ){ ?>                      
                                                            <div class="col s12 m4 l2">
                                                                <div class="input-field">
                                                                    <input id="dateP11" name="dateP11" placeholder=" <?php echo $dP11;  ?>"value="<?php echo $dP11 ; ?>" type="text" class="datepicker validate">
                                                                    <label for="dateP11">Fecha de revisi&oacute;n  11</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div></div>
                                                                   <?php } ?> 
                                                        <?php 
                                                                if ($fa2 >= 12 ){ ?>                      
                                                            <div class="col s12 m4 l2">
                                                                <div class="input-field">
                                                                    <input id="dateP12" name="dateP12" placeholder=" <?php echo $dP12;  ?>" value="<?php echo $dP12 ; ?>" type="text" class="datepicker validate">
                                                                    <label for="dateP12">Fecha de revisi&oacute;n 12</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div></div>
                                                                   <?php } ?> 
                                                    
 
   
 </div>
<?php }else {?>
      <form id="form_validation" action="project.php?m=questionDb&c=<?php echo $c; ?>&i=<?php echo $i; ?>" method="post">
 <div class="col s12 m12 L12">
    <div class="input-field">
         <select id="frecuencia" name="frecuencia" placeholder="" type="text" class="validate">
            <option value="">&nbsp;</option>
                    <?php while ($frecuenciaProyecto= $_frecuenciaProyecto -> fetch_object()) { ?>
                        <option value="<?php echo $frecuenciaProyecto -> frecuenciaId ; ?>"><?php echo $frecuenciaProyecto -> frecuenciaName;     ?></option>
                             <?php } ?>
         </select>
             <label class="font-13" for="civilStatusId">Frecuencia del Proyecto al a&ntilde;o </label>
     </div>
 </div>
 
    
<?php } ?>                   
       
       
       
       
       
       
       
       
       
       
    </div>
</li>



