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
                
- Considerar la informaci??n del ambiente de control identificado en el proceso de aceptaci??n y continuidad<br>
- Entender y evaluar la participaci??n de las personas a cargo de la gobernabilidad - en este paso se considera:<br>
    la efectividad de la junta (manera de las operaciones, independencia, frecuencia de las reuniones), el comit?? de auditor??a,
    el equilibrio de poder, la suficiencia y oportunidad de la informaci??n, la renuncia de directores y el rol al establecer el
    tono de alta jerarqu??a.<br>

- Entender y evaluar la filosof??a y el estilo operativo de la gerencia.<br>
- Entender y evaluar la efectividad de la organizaci??n y la gerencia clave 
- en este paso se considera: la estructura organizacional, la competencia de la gerencia, la asignaci??n de la autoridad y las responsabilidades, y las pol??ticas y pr??cticas de recursos humanos.
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
    
    
    
    <form id="form_validation" action="../c/project.php?m=matrizDb&p=s&c=<?php echo $c; ?>&i=<?php echo $i; ?>" method="post">
        
  <!-- Modalales para activo pasivo y patrimonio -->
  <div class="row">
        <div class="col s12 m2">
             <a class="waves-effect waves-light btn blue-grey modal-trigger" style="width:10em;" href="#a1">AMBIENTE</a>
        </div>
        <div class="col s12 m2">
             <a class="waves-effect waves-light btn blue-grey modal-trigger" style="width:10em;" href="#a3">INFORMACION </a>
        </div>
        <div class="col s12 m2">
             <a class="waves-effect waves-light btn blue-grey modal-trigger" style="width:10em;" href="#a3">MONITOREO </a>
        </div>
  </div>
  <!-- aqui termina Modalales para activo pasivo y patrimonio -->

        
<!--         
      <div class="row">
          
                        <div class="col s12 m6">
                            <div class="input-field">
                                <small>Evaluaci??n de los componentes de la estructura de control interno (excluyendo las actividades de control)</small>
                              <input  type="text" name="origenId" class="form-control" required="">
                            </div>
                        </div>
          
                        <div class="col s12 m3">
                            <div class="input-field">
                                <small>Documentar los controles a nivel de entidad</small>
                              <input  type="text" name="objetivosN" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="input-field">
                                <small>Procedimiento de calidacion de los controles</small>
                                <input  type="text" name="riesgoN" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col s12 m2 l2">
                            <div class="input-field">
                                <small>??Debilidades? (S??/No)</small>
                                <input  type="text" name="riesgoC" class="form-control" required="">
                            </div>
                        </div>

                        <div class="col s12 m2">
                            <div class="input-field">
                                <small>Descripci??n de las debilidades</small>
                                <input  type="text" name="controlG" class="form-control" required="">
                            </div>
                        </div>
                         <div class="col s12 m4">
                            <div class="input-field">
                                <small>??Debilidades significativas? (S??/No) De ser Si v??nculo al asunto cr??tico</small>
                                <input  type="text" name="informacion" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="input-field">
                                <small>Impacto sobre el trabajo de auditor??a </small>
                                <input type="text" name="enfoqueA" class="form-control" required="">
                            </div>
                        </div>
                
                        
                        <div class="col s1 m-t-30">
                            <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
                        
                    </div>-->     
    
     </form>
    <table class="white" id="planning">
                                <thead>
                                    <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                        <td id="border-white"  width="22%">Evaluaci??n de los componentes de la estructura de control interno (excluyendo las actividades de control)</td>
                                        <td id="border-white"  width="11%">Documentar los controles a nivel de entidad</td>
                                        <td id="border-white"  width="11%">Procedimiento de calidacion de los controles</td>
                                        <td id="border-white"  width="11%">??Debilidades? (S??/No)</td>
                                        <td id="border-white"  width="11%">Descripci??n de las debilidades</td>
                                        <td id="border-white"  width="11%">??Debilidades significativas? (S??/No) De ser Si v??nculo al asunto cr??tico </td>
                                        <td id="border-white"  width="11%">Impacto sobre el trabajo de auditor??a </td>
                                      
                                       
                                    </tr>
                                </thead>
                                <tbody>
    


        <tbody>
    <?php
$sS = "localhost";
$uS = "sagracom";
$pS = "Sagra2507.";
$dS = "sagracom_2";

$connection = new mysqli($sS, $uS, $pS, $dS);

    $_ma = mysqli_query($connection, "
        SELECT * FROM matriz
        WHERE projectId = '" . $c . "'
        ORDER BY matrizId
        ");

            while ($ma = $_ma -> fetch_object()) {?>              
          <tr>
            <td id="border-grey"> - Considerar la informaci??n del ambiente de control identificado en el proceso de aceptaci??n y continuidad
- Entender y evaluar la participaci??n de las personas a cargo de la gobernabilidad - en este paso se considera:
la efectividad de la junta (manera de las operaciones, independencia, frecuencia de las reuniones), el comit?? de auditor??a, el equilibrio de poder, la suficiencia y oportunidad de la informaci??n, la renuncia de directores y el rol al establecer el tono de alta jerarqu??a.
- Entender y evaluar la filosof??a y el estilo operativo de la gerencia.
- Entender y evaluar la efectividad de la organizaci??n y la gerencia clave - en este paso se considera: la estructura organizacional, la competencia de la gerencia, la asignaci??n de la autoridad y las responsabilidades, y las pol??ticas y pr??cticas de recursos humanos.</td>
            <td id="border-grey"><?php echo $ma -> objetivosN; ?></td>
            <td id="border-grey">sad</td>
            <td id="border-grey">si</td>
            <td id="border-grey">sad</td>
            <td id="border-grey">sad</td>
            <td id="border-grey">sad</td>
            
            
        
            
          </tr>
      <?php
            } ?>
        </tbody>
      </table>
      
          
   
    </div>
</li>