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
$_prisk = mysqli_query($acq, "SELECT * FROM priskr$aid ");
$acu = 0;?>


<div class='col s12'>
    <ul class="collapsible blue-grey-text text-darken-2">

<?php 
while($prisk = $_prisk -> fetch_object()){
    $acu++;   
    
    $_pprisk = mysqli_query($acq, "SELECT * FROM priskq$aid where priskId =  '" . $prisk ->  acMatrixid . "' ");
    $pprisk = $_pprisk -> fetch_object()
    ?>

<div class="step minimized">
            <div class="step-header">
                <input type="hidden" name="i<?php echo $acu;?>" value="1"/>
                <div class="header"><?php echo $pprisk -> priskName;?></div>
            </div>
            <div class="step-content grey lighten-5 ac1 one">
                <div class="p-l-10 p-r-10 p-b-10">
                    <div class="row grey lighten-3 ">
                        <div class="col s12 m-b-10">
                            <div class="blue-text m-t-10 m-b-10">Tipo de Riesgo</div>
                            <label>
                                <input type="radio" name="r<?php echo $acu;?>" value="0" <?php echo $checked = $prisk -> r == 0 ? "checked" : ""; ?>/>
                                <span>No Aplica</span>
                            </label>
                            <label class="p-l-20">
                                <input type="radio" name="r<?php echo $acu;?>" value="1" <?php echo $checked = $prisk -> r == 1 ? "checked" : ""; ?>/>
                                <span>Bajo</span>
                            </label>
                            <label class="p-l-20">
                                <input type="radio" name="r<?php echo $acu;?>" value="2" <?php echo $checked = $prisk -> r == 2 ? "checked" : ""; ?>/>
                                <span>Bajo - Moderado</span>
                            </label>
                            <label class="p-l-20">
                                <input type="radio" name="r<?php echo $acu;?>" value="3" <?php echo $checked = $prisk -> r == 3 ? "checked" : ""; ?>/>
                                <span>Moderado</span>
                            </label>
                            <label class="p-l-20">
                                <input type="radio" name="r<?php echo $acu;?>" value="4" <?php echo $checked = $prisk -> r == 4 ? "checked" : ""; ?>/>
                                <span>Moderado - Alto</span>
                            </label>
                            <label class="p-l-20">
                                <input type="radio" name="r<?php echo $acu;?>" value="5" <?php echo $checked = $prisk -> r == 5 ? "checked" : ""; ?>/>
                                <span>Alto</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="p-l-10 p-r-10 p-b-10">
                        <div class="col s12 m6 l6">
                            <div class="blue-text m-b-10">Documentar el riesgo identificado asociado al cliente</div>
                            <textarea name="d<?php echo $acu;?>" class="ckeditor"><?php echo $prisk -> d; ?></textarea>
                        </div>
                        <div class="col s12 m6 l6">
                            <div class="blue-text m-b-10">Respuesta al Riesgo Identificado</div>
                            <textarea name="a<?php echo $acu;?>" class="ckeditor"><?php echo $prisk -> a; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
     </div>

<?php }?>



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
