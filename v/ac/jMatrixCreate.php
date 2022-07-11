<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables.
 */

$acId = $_GET["aid"];


$_prisk = mysqli_query($acq, "SELECT * FROM priskq$acId WHERE access = 1");
$acumulador = 0;
?> 
<div class="row">
<div class='col s12'>
<ul class="collapsible blue-grey-text text-darken-2"> 
<?php 
while($prisk = $_prisk -> fetch_object()){
$acumulador++;   ?>


    <div class="step minimized">
            <div class="step-header">
                <input type="hidden" name="i<?php echo $acumulador ;?>" value="<?php echo $acumulador ;?>"/>
                <div class="header"><?php echo $prisk -> priskName;?></div>
            </div>
            <div class="step-content grey lighten-5 ac1 one">
                <div class="p-l-10 p-r-10 p-b-10">
                    <div class="row grey lighten-3 ">
                        <div class="col s12 m-b-10">
                            <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                            <label>
                                <input type="radio" name="r<?php echo $acumulador ;?>" value="0" required>
                                <span>No Aplica</span>
                            </label>
                            <label class="p-l-20">
                                <input type="radio" name="r<?php echo $acumulador ;?>" value="1"/>
                                <span>Bajo</span>
                            </label>
                            <label class="p-l-20">
                                <input type="radio" name="r<?php echo $acumulador ;?>" value="2"/>
                                <span>Bajo - Moderado</span>
                            </label>
                            <label class="p-l-20">
                                <input type="radio" name="r<?php echo $acumulador ;?>" value="3"/>
                                <span>Moderado</span>
                            </label>
                            <label class="p-l-20">
                                <input type="radio" name="r<?php echo $acumulador ;?>" value="4"/>
                                <span>Moderado - Alto</span>
                            </label>
                            <label class="p-l-20">
                                <input type="radio" name="r<?php echo $acumulador ;?>" value="5"/>
                                <span>Alto</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="p-l-10 p-r-10 p-b-10">
                        <div class="col s12 m6 l6">
                            <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                            <textarea name="d<?php echo $acumulador ;?>" class="ckeditor"></textarea>
                        </div>
                        <div class="col s12 m6 l6">
                            <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                            <textarea name="a<?php echo $acumulador ;?>" class="ckeditor"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  

<?php }

?>
  

        <li>
            <div class='row'>
                <div class='col s12 m-t-10 m-b-10'>
                    <span class='m-l-35 m-r-20'>Ranking de Riesgo:</span>
                    <span class='btn blue-grey lighten-5 blue-grey-text text-darken-2 waves-light bold'>
                        <?php
                        echo $ranking = $average  ? $average : "0";
                        ?>
                    </span>
                </div>
            </div>
        </li>
    </ul>
</div>
</div>