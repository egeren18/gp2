                                                    <!-- categoria 1 -->        
                                                        <?php
                                                        if($r1 > 0){?>
                                                         <ul class="collapsible ">
                                                            <li>
                                                                <div class="collapsible-header  blue-grey lighten-2">
                                                                    <i class="material-icons blue-grey-text text-lighten-4">keyboard_arrow_right</i>
                                                                    <span class="white-text "><?php echo $i;?>) <?php echo $cname1;?> </span>
                                                                    <?php $indicador1 = 2.33; $indicador2 = 3.66;?>
                                                                    <span class=" new badge" data-badge-caption="" style="<?php if( round($r1, 2) <= $indicador1){?>background-color:red;<?php }
                                                                    if( round($r1, 2) > $indicador1 AND round($r1, 2) <= $indicador2 ){?>background-color:#ef6c00;<?php }if( round($r1, 2) > $indicador2 ){?>
                                                                    background-color:green;<?php }?>"><?php echo $r1;?></span>
                                                                </div>
                                                                <div class="collapsible-body grey lighten-4"><div class="p-t-20"></div><table><tbody>
                                                      <?php while($dcp = $_dcp -> fetch_object()) {
                                                          $_p1 = mysqli_query($master, "    SELECT * FROM pregunta  WHERE preguntaId = '" . $dcp -> preguntaId . "' ");
                                                                $p1 = $_p1 -> fetch_object(); $p1name = $p1 -> preguntaName;
                                                                $_pc1 = mysqli_query($master, " SELECT * FROM c3 WHERE c1Id = '" . $_GET["cid"] . "' AND  preguntaId = '" . $p1 -> preguntaId . "' ");
                                                                $pc1 = $_pc1 -> fetch_object(); $pc1name = $pc1 -> r;
                                                      ?>
                                                      <tr><td style="color:#607d8b;">  <?php echo $p1name;?></td>
                                                      <td><?php if($pc1name  == 1 ) {?>Muy en Desacuerdo<?php }?><?php if($pc1name  == 2 ) {?>Desacuerdo<?php }?><?php if($pc1name  == 3 ) {?>Neutral<?php }?><?php if($pc1name  == 4 ) {?>Deacuerdo<?php }?><?php if($pc1name  == 5 ) {?>Muy Deacuerdo<?php }?></td></tr>
                                                      <?php } ?></tr></tbody></table>
                                                                </div>
                                                            </li>
                                                       </ul>
                                                        <?php } ?>
                                                    <!-- categoria 1 fin-->
                                                      <!-- categoria 2 --> 
                                                      <?php
                                                      $caId++;
                                                      $i++;
                                                      $_cp1 = mysqli_query($mastera, "
                                                        SELECT * FROM r
                                                        WHERE c1Id = '" . $_GET["cid"] . "' AND 
                                                        categoria = '" . $caId  . "'
                                                    ");
                                                    $cp1 = $_cp1 -> fetch_object();
                                                    
                                                        $_diagnostico1 = mysqli_query($master, "
                                                            SELECT * FROM categorias
                                                            WHERE categoriasId = '" . $cp1 -> categoria . "'
                                                            ");
                                                                                                            
                                                            $diagnostico1 = $_diagnostico1 -> fetch_object();
                                                            $cname1 = $diagnostico1 -> categoriasName;
                                                            $r1 = $cp1 -> r1;
                                                            
                                                        $_dcp = mysqli_query($master, "
                                                                SELECT * FROM c3
                                                                WHERE c1Id = '" . $c1Id  . "'
                                                                AND  diagnosticoId = '" . $_GET["d"] . "' 
                                                                AND a2 = 1
                                                                "); 
                                                      ?>
                                                    <?php
                                                        if($r1 > 0){?>
                                                         <ul class="collapsible ">
                                                            <li>
                                                                <div class="collapsible-header  blue-grey lighten-2">
                                                                    <i class="material-icons blue-grey-text text-lighten-4">keyboard_arrow_right</i>
                                                                    <span class="white-text "><?php echo $i;?>) <?php echo $cname1;?> </span>
                                                                    <?php $indicador1 = 2.33; $indicador2 = 3.66;?>
                                                                    <span class=" new badge" data-badge-caption="" style="<?php if( round($r1, 2) <= $indicador1){?>background-color:red;<?php }
                                                                    if( round($r1, 2) > $indicador1 AND round($r1, 2) <= $indicador2 ){?>background-color:#ef6c00;<?php }if( round($r1, 2) > $indicador2 ){?>
                                                                    background-color:green;<?php }?>"><?php echo $r1;?></span>
                                                                </div>
                                                                <div class="collapsible-body grey lighten-4"><div class="p-t-20"></div><table><tbody>
                                                      <?php while($dcp = $_dcp -> fetch_object()) {
                                                          $_p1 = mysqli_query($master, "    SELECT * FROM pregunta  WHERE preguntaId = '" . $dcp -> preguntaId . "' ");
                                                                $p1 = $_p1 -> fetch_object(); $p1name = $p1 -> preguntaName;
                                                                $_pc1 = mysqli_query($master, " SELECT * FROM c3 WHERE c1Id = '" . $_GET["cid"] . "' AND  preguntaId = '" . $p1 -> preguntaId . "' ");
                                                                $pc1 = $_pc1 -> fetch_object(); $pc1name = $pc1 -> r;
                                                      ?>
                                                      <tr><td style="color:#607d8b;">  <?php echo $p1name;?></td>
                                                      <td><?php if($pc1name  == 1 ) {?>Muy en Desacuerdo<?php }?><?php if($pc1name  == 2 ) {?>Desacuerdo<?php }?><?php if($pc1name  == 3 ) {?>Neutral<?php }?><?php if($pc1name  == 4 ) {?>Deacuerdo<?php }?><?php if($pc1name  == 5 ) {?>Muy Deacuerdo<?php }?></td></tr>
                                                      <?php } ?></tr></tbody></table>
                                                                </div>
                                                            </li>
                                                       </ul>
                                                        <?php } ?>
                                                    <!-- categoria 2 fin-->
                                                     <!-- categoria 3 --> 
                                                      <?php
                                                      $caId++;
                                                      $i++;
                                                      $_cp1 = mysqli_query($mastera, "
                                                        SELECT * FROM r
                                                        WHERE c1Id = '" . $_GET["cid"] . "' AND 
                                                        categoria = '" . $caId  . "'
                                                    ");
                                                    $cp1 = $_cp1 -> fetch_object();
                                                    
                                                        $_diagnostico1 = mysqli_query($master, "
                                                            SELECT * FROM categorias
                                                            WHERE categoriasId = '" . $cp1 -> categoria . "'
                                                            ");
                                                                                                            
                                                            $diagnostico1 = $_diagnostico1 -> fetch_object();
                                                            $cname1 = $diagnostico1 -> categoriasName;
                                                            $r1 = $cp1 -> r1;
                                                            
                                                        $_dcp = mysqli_query($master, "
                                                                SELECT * FROM c3
                                                                WHERE c1Id = '" . $c1Id  . "'
                                                                AND  diagnosticoId = '" . $_GET["d"] . "' 
                                                                AND a3 = 1
                                                                "); 
                                                      ?>
                                                        <?php
                                                        if($r1 > 0){?>
                                                         <ul class="collapsible ">
                                                            <li>
                                                                <div class="collapsible-header  blue-grey lighten-2">
                                                                    <i class="material-icons blue-grey-text text-lighten-4">keyboard_arrow_right</i>
                                                                    <span class="white-text "><?php echo $i;?>) <?php echo $cname1;?> </span>
                                                                    <?php $indicador1 = 2.33; $indicador2 = 3.66;?>
                                                                    <span class=" new badge" data-badge-caption="" style="<?php if( round($r1, 2) <= $indicador1){?>background-color:red;<?php }
                                                                    if( round($r1, 2) > $indicador1 AND round($r1, 2) <= $indicador2 ){?>background-color:#ef6c00;<?php }if( round($r1, 2) > $indicador2 ){?>
                                                                    background-color:green;<?php }?>"><?php echo $r1;?></span>
                                                                </div>
                                                                <div class="collapsible-body grey lighten-4"><div class="p-t-20"></div><table><tbody>
                                                      <?php while($dcp = $_dcp -> fetch_object()) {
                                                          $_p1 = mysqli_query($master, "    SELECT * FROM pregunta  WHERE preguntaId = '" . $dcp -> preguntaId . "' ");
                                                                $p1 = $_p1 -> fetch_object(); $p1name = $p1 -> preguntaName;
                                                                $_pc1 = mysqli_query($master, " SELECT * FROM c3 WHERE c1Id = '" . $_GET["cid"] . "' AND  preguntaId = '" . $p1 -> preguntaId . "' ");
                                                                $pc1 = $_pc1 -> fetch_object(); $pc1name = $pc1 -> r;
                                                      ?>
                                                      <tr><td style="color:#607d8b;">  <?php echo $p1name;?></td>
                                                      <td><?php if($pc1name  == 1 ) {?>Muy en Desacuerdo<?php }?><?php if($pc1name  == 2 ) {?>Desacuerdo<?php }?><?php if($pc1name  == 3 ) {?>Neutral<?php }?><?php if($pc1name  == 4 ) {?>Deacuerdo<?php }?><?php if($pc1name  == 5 ) {?>Muy Deacuerdo<?php }?></td></tr>
                                                      <?php } ?></tr></tbody></table>
                                                                </div>
                                                            </li>
                                                       </ul>
                                                        <?php } ?>
                                                    <!-- categoria 3 fin-->
                                                     <!-- categoria 4 --> 
                                                      <?php
                                                      $caId++;
                                                      $i++;
                                                      $_cp1 = mysqli_query($mastera, "
                                                        SELECT * FROM r
                                                        WHERE c1Id = '" . $_GET["cid"] . "' AND 
                                                        categoria = '" . $caId  . "'
                                                    ");
                                                    $cp1 = $_cp1 -> fetch_object();
                                                    
                                                        $_diagnostico1 = mysqli_query($master, "
                                                            SELECT * FROM categorias
                                                            WHERE categoriasId = '" . $cp1 -> categoria . "'
                                                            ");
                                                                                                            
                                                            $diagnostico1 = $_diagnostico1 -> fetch_object();
                                                            $cname1 = $diagnostico1 -> categoriasName;
                                                            $r1 = $cp1 -> r1;
                                                            
                                                        $_dcp = mysqli_query($master, "
                                                                SELECT * FROM c3
                                                                WHERE c1Id = '" . $c1Id  . "'
                                                                AND  diagnosticoId = '" . $_GET["d"] . "' 
                                                                AND a4 = 1
                                                                "); 
                                                      ?>
                                                    <?php
                                                        if($r1 > 0){?>
                                                         <ul class="collapsible ">
                                                            <li>
                                                                <div class="collapsible-header  blue-grey lighten-2">
                                                                    <i class="material-icons blue-grey-text text-lighten-4">keyboard_arrow_right</i>
                                                                    <span class="white-text "><?php echo $i;?>) <?php echo $cname1;?> </span>
                                                                    <?php $indicador1 = 2.33; $indicador2 = 3.66;?>
                                                                    <span class=" new badge" data-badge-caption="" style="<?php if( round($r1, 2) <= $indicador1){?>background-color:red;<?php }
                                                                    if( round($r1, 2) > $indicador1 AND round($r1, 2) <= $indicador2 ){?>background-color:#ef6c00;<?php }if( round($r1, 2) > $indicador2 ){?>
                                                                    background-color:green;<?php }?>"><?php echo $r1;?></span>
                                                                </div>
                                                                <div class="collapsible-body grey lighten-4"><div class="p-t-20"></div><table><tbody>
                                                      <?php while($dcp = $_dcp -> fetch_object()) {
                                                          $_p1 = mysqli_query($master, "    SELECT * FROM pregunta  WHERE preguntaId = '" . $dcp -> preguntaId . "' ");
                                                                $p1 = $_p1 -> fetch_object(); $p1name = $p1 -> preguntaName;
                                                                $_pc1 = mysqli_query($master, " SELECT * FROM c3 WHERE c1Id = '" . $_GET["cid"] . "' AND  preguntaId = '" . $p1 -> preguntaId . "' ");
                                                                $pc1 = $_pc1 -> fetch_object(); $pc1name = $pc1 -> r;
                                                      ?>
                                                      <tr><td style="color:#607d8b;">  <?php echo $p1name;?></td>
                                                      <td><?php if($pc1name  == 1 ) {?>Muy en Desacuerdo<?php }?><?php if($pc1name  == 2 ) {?>Desacuerdo<?php }?><?php if($pc1name  == 3 ) {?>Neutral<?php }?><?php if($pc1name  == 4 ) {?>Deacuerdo<?php }?><?php if($pc1name  == 5 ) {?>Muy Deacuerdo<?php }?></td></tr>
                                                      <?php } ?></tr></tbody></table>
                                                                </div>
                                                            </li>
                                                       </ul>
                                                        <?php } ?>
                                                    <!-- categoria 4 fin-->
                                                     <!-- categoria 5 --> 
                                                      <?php
                                                      $caId++;
                                                      $i++;
                                                      $_cp1 = mysqli_query($mastera, "
                                                        SELECT * FROM r
                                                        WHERE c1Id = '" . $_GET["cid"] . "' AND 
                                                        categoria = '" . $caId  . "'
                                                    ");
                                                    $cp1 = $_cp1 -> fetch_object();
                                                    
                                                        $_diagnostico1 = mysqli_query($master, "
                                                            SELECT * FROM categorias
                                                            WHERE categoriasId = '" . $cp1 -> categoria . "'
                                                            ");
                                                                                                            
                                                            $diagnostico1 = $_diagnostico1 -> fetch_object();
                                                            $cname1 = $diagnostico1 -> categoriasName;
                                                            $r1 = $cp1 -> r1;
                                                            
                                                        $_dcp = mysqli_query($master, "
                                                                SELECT * FROM c3
                                                                WHERE c1Id = '" . $c1Id  . "'
                                                                AND  diagnosticoId = '" . $_GET["d"] . "' 
                                                                AND a5 = 1
                                                                "); 
                                                      ?>
                                                    <?php
                                                        if($r1 > 0){?>
                                                         <ul class="collapsible ">
                                                            <li>
                                                                <div class="collapsible-header  blue-grey lighten-2">
                                                                    <i class="material-icons blue-grey-text text-lighten-4">keyboard_arrow_right</i>
                                                                    <span class="white-text "><?php echo $i;?>) <?php echo $cname1;?> </span>
                                                                    <?php $indicador1 = 2.33; $indicador2 = 3.66;?>
                                                                    <span class=" new badge" data-badge-caption="" style="<?php if( round($r1, 2) <= $indicador1){?>background-color:red;<?php }
                                                                    if( round($r1, 2) > $indicador1 AND round($r1, 2) <= $indicador2 ){?>background-color:#ef6c00;<?php }if( round($r1, 2) > $indicador2 ){?>
                                                                    background-color:green;<?php }?>"><?php echo $r1;?></span>
                                                                </div>
                                                                <div class="collapsible-body grey lighten-4"><div class="p-t-20"></div><table><tbody>
                                                      <?php while($dcp = $_dcp -> fetch_object()) {
                                                          $_p1 = mysqli_query($master, "    SELECT * FROM pregunta  WHERE preguntaId = '" . $dcp -> preguntaId . "' ");
                                                                $p1 = $_p1 -> fetch_object(); $p1name = $p1 -> preguntaName;
                                                                $_pc1 = mysqli_query($master, " SELECT * FROM c3 WHERE c1Id = '" . $_GET["cid"] . "' AND  preguntaId = '" . $p1 -> preguntaId . "' ");
                                                                $pc1 = $_pc1 -> fetch_object(); $pc1name = $pc1 -> r;
                                                      ?>
                                                      <tr><td style="color:#607d8b;">  <?php echo $p1name;?></td>
                                                      <td><?php if($pc1name  == 1 ) {?>Muy en Desacuerdo<?php }?><?php if($pc1name  == 2 ) {?>Desacuerdo<?php }?><?php if($pc1name  == 3 ) {?>Neutral<?php }?><?php if($pc1name  == 4 ) {?>Deacuerdo<?php }?><?php if($pc1name  == 5 ) {?>Muy Deacuerdo<?php }?></td></tr>
                                                      <?php } ?></tr></tbody></table>
                                                                </div>
                                                            </li>
                                                       </ul>
                                                        <?php } ?>
                                                    <!-- categoria 5 fin-->
                                                    <!-- categoria 6 --> 
                                                      <?php
                                                      $caId++;
                                                      $i++;
                                                      $_cp1 = mysqli_query($mastera, "
                                                        SELECT * FROM r
                                                        WHERE c1Id = '" . $_GET["cid"] . "' AND 
                                                        categoria = '" . $caId  . "'
                                                    ");
                                                    $cp1 = $_cp1 -> fetch_object();
                                                    
                                                        $_diagnostico1 = mysqli_query($master, "
                                                            SELECT * FROM categorias
                                                            WHERE categoriasId = '" . $cp1 -> categoria . "'
                                                            ");
                                                                                                            
                                                            $diagnostico1 = $_diagnostico1 -> fetch_object();
                                                            $cname1 = $diagnostico1 -> categoriasName;
                                                            $r1 = $cp1 -> r1;
                                                            
                                                        $_dcp = mysqli_query($master, "
                                                                SELECT * FROM c3
                                                                WHERE c1Id = '" . $c1Id  . "'
                                                                AND  diagnosticoId = '" . $_GET["d"] . "' 
                                                                AND a6 = 1
                                                                "); 
                                                      ?>
                                                      <?php
                                                        if($r1 > 0){?>
                                                         <ul class="collapsible ">
                                                            <li>
                                                                <div class="collapsible-header  blue-grey lighten-2">
                                                                    <i class="material-icons blue-grey-text text-lighten-4">keyboard_arrow_right</i>
                                                                    <span class="white-text "><?php echo $i;?>) <?php echo $cname1;?> </span>
                                                                    <?php $indicador1 = 2.33; $indicador2 = 3.66;?>
                                                                    <span class=" new badge" data-badge-caption="" style="<?php if( round($r1, 2) <= $indicador1){?>background-color:red;<?php }
                                                                    if( round($r1, 2) > $indicador1 AND round($r1, 2) <= $indicador2 ){?>background-color:#ef6c00;<?php }if( round($r1, 2) > $indicador2 ){?>
                                                                    background-color:green;<?php }?>"><?php echo $r1;?></span>
                                                                </div>
                                                                <div class="collapsible-body grey lighten-4"><div class="p-t-20"></div><table><tbody>
                                                      <?php while($dcp = $_dcp -> fetch_object()) {
                                                          $_p1 = mysqli_query($master, "    SELECT * FROM pregunta  WHERE preguntaId = '" . $dcp -> preguntaId . "' ");
                                                                $p1 = $_p1 -> fetch_object(); $p1name = $p1 -> preguntaName;
                                                                $_pc1 = mysqli_query($master, " SELECT * FROM c3 WHERE c1Id = '" . $_GET["cid"] . "' AND  preguntaId = '" . $p1 -> preguntaId . "' ");
                                                                $pc1 = $_pc1 -> fetch_object(); $pc1name = $pc1 -> r;
                                                      ?>
                                                      <tr><td style="color:#607d8b;">  <?php echo $p1name;?></td>
                                                      <td><?php if($pc1name  == 1 ) {?>Muy en Desacuerdo<?php }?><?php if($pc1name  == 2 ) {?>Desacuerdo<?php }?><?php if($pc1name  == 3 ) {?>Neutral<?php }?><?php if($pc1name  == 4 ) {?>Deacuerdo<?php }?><?php if($pc1name  == 5 ) {?>Muy Deacuerdo<?php }?></td></tr>
                                                      <?php } ?></tr></tbody></table>
                                                                </div>
                                                            </li>
                                                       </ul>
                                                        <?php } ?>
                                                     
                                                    <!-- categoria 6 fin-->
                                                    <!-- categoria 7 --> 
                                                      <?php $caId++;$i++;
                                                      $_cp1 = mysqli_query($mastera, " SELECT * FROM r WHERE c1Id = '" . $_GET["cid"] . "' AND categoria = '" . $caId  . "' ");
                                                            $cp1 = $_cp1 -> fetch_object();
                                                        $_diagnostico1 = mysqli_query($master, " SELECT * FROM categorias WHERE categoriasId = '" . $cp1 -> categoria . "' ");
                                                            $diagnostico1 = $_diagnostico1 -> fetch_object();$cname1 = $diagnostico1 -> categoriasName;$r1 = $cp1 -> r1;
                                                        $_dcp = mysqli_query($master, "SELECT * FROM c3 WHERE c1Id = '" . $c1Id  . "'AND  diagnosticoId = '" . $_GET["d"] . "' AND a7 = 1 "); ?>
                                                      <?php
                                                        if($r1 > 0){?>
                                                         <ul class="collapsible ">
                                                            <li>
                                                                <div class="collapsible-header  blue-grey lighten-2">
                                                                    <i class="material-icons blue-grey-text text-lighten-4">keyboard_arrow_right</i>
                                                                    <span class="white-text "><?php echo $i;?>) <?php echo $cname1;?> </span>
                                                                    <?php $indicador1 = 2.33; $indicador2 = 3.66;?>
                                                                    <span class=" new badge" data-badge-caption="" style="<?php if( round($r1, 2) <= $indicador1){?>background-color:red;<?php }
                                                                    if( round($r1, 2) > $indicador1 AND round($r1, 2) <= $indicador2 ){?>background-color:#ef6c00;<?php }if( round($r1, 2) > $indicador2 ){?>
                                                                    background-color:green;<?php }?>"><?php echo $r1;?></span>
                                                                </div>
                                                                <div class="collapsible-body grey lighten-4"><div class="p-t-20"></div><table><tbody>
                                                      <?php while($dcp = $_dcp -> fetch_object()) {
                                                          $_p1 = mysqli_query($master, "    SELECT * FROM pregunta  WHERE preguntaId = '" . $dcp -> preguntaId . "' ");
                                                                $p1 = $_p1 -> fetch_object(); $p1name = $p1 -> preguntaName;
                                                                $_pc1 = mysqli_query($master, " SELECT * FROM c3 WHERE c1Id = '" . $_GET["cid"] . "' AND  preguntaId = '" . $p1 -> preguntaId . "' ");
                                                                $pc1 = $_pc1 -> fetch_object(); $pc1name = $pc1 -> r;
                                                      ?>
                                                      <tr><td style="color:#607d8b;">  <?php echo $p1name;?></td>
                                                      <td><?php if($pc1name  == 1 ) {?>Muy en Desacuerdo<?php }?><?php if($pc1name  == 2 ) {?>Desacuerdo<?php }?><?php if($pc1name  == 3 ) {?>Neutral<?php }?><?php if($pc1name  == 4 ) {?>Deacuerdo<?php }?><?php if($pc1name  == 5 ) {?>Muy Deacuerdo<?php }?></td></tr>
                                                      <?php } ?></tr></tbody></table>
                                                                </div>
                                                            </li>
                                                       </ul>
                                                        <?php } ?>
                                                    <!-- categoria 7 fin-->
                                                    <!-- categoria 8 --> 
                                                      <?php
                                                      $caId++; $i++;
                                                        $_cp1 = mysqli_query($mastera, " SELECT * FROM r WHERE c1Id = '" . $_GET["cid"] . "' AND categoria = '" . $caId  . "' ");
                                                            $cp1 = $_cp1 -> fetch_object();
                                                        $_diagnostico1 = mysqli_query($master, " SELECT * FROM categorias WHERE categoriasId = '" . $cp1 -> categoria . "' ");
                                                            $diagnostico1 = $_diagnostico1 -> fetch_object(); $cname1 = $diagnostico1 -> categoriasName; $r1 = $cp1 -> r1;
                                                        $_dcp = mysqli_query($master, " SELECT * FROM c3 WHERE c1Id = '" . $c1Id  . "' AND  diagnosticoId = '" . $_GET["d"] . "' AND a8 = 1 "); ?>
                                                       <?php
                                                        if($r1 > 0){?>
                                                         <ul class="collapsible ">
                                                            <li>
                                                                <div class="collapsible-header  blue-grey lighten-2">
                                                                    <i class="material-icons blue-grey-text text-lighten-4">keyboard_arrow_right</i>
                                                                    <span class="white-text "><?php echo $i;?>) <?php echo $cname1;?> </span>
                                                                    <?php $indicador1 = 2.33; $indicador2 = 3.66;?>
                                                                    <span class=" new badge" data-badge-caption="" style="<?php if( round($r1, 2) <= $indicador1){?>background-color:red;<?php }
                                                                    if( round($r1, 2) > $indicador1 AND round($r1, 2) <= $indicador2 ){?>background-color:#ef6c00;<?php }if( round($r1, 2) > $indicador2 ){?>
                                                                    background-color:green;<?php }?>"><?php echo $r1;?></span>
                                                                </div>
                                                                <div class="collapsible-body grey lighten-4"><div class="p-t-20"></div><table><tbody>
                                                      <?php while($dcp = $_dcp -> fetch_object()) {
                                                          $_p1 = mysqli_query($master, "    SELECT * FROM pregunta  WHERE preguntaId = '" . $dcp -> preguntaId . "' ");
                                                                $p1 = $_p1 -> fetch_object(); $p1name = $p1 -> preguntaName;
                                                                $_pc1 = mysqli_query($master, " SELECT * FROM c3 WHERE c1Id = '" . $_GET["cid"] . "' AND  preguntaId = '" . $p1 -> preguntaId . "' ");
                                                                $pc1 = $_pc1 -> fetch_object(); $pc1name = $pc1 -> r;
                                                      ?>
                                                      <tr><td style="color:#607d8b;">  <?php echo $p1name;?></td>
                                                      <td><?php if($pc1name  == 1 ) {?>Muy en Desacuerdo<?php }?><?php if($pc1name  == 2 ) {?>Desacuerdo<?php }?><?php if($pc1name  == 3 ) {?>Neutral<?php }?><?php if($pc1name  == 4 ) {?>Deacuerdo<?php }?><?php if($pc1name  == 5 ) {?>Muy Deacuerdo<?php }?></td></tr>
                                                      <?php } ?></tr></tbody></table>
                                                                </div>
                                                            </li>
                                                       </ul>
                                                        <?php } ?>
                                                    <!-- categoria 8 fin-->
                                                    <!-- categoria 9 --> 
                                                      <?php
                                                      $caId++;  $i++;
                                                        $_cp1 = mysqli_query($mastera, " SELECT * FROM r WHERE c1Id = '" . $_GET["cid"] . "' AND categoria = '" . $caId  . "' ");
                                                            $cp1 = $_cp1 -> fetch_object();
                                                        $_diagnostico1 = mysqli_query($master, " SELECT * FROM categorias WHERE categoriasId = '" . $cp1 -> categoria . "' ");
                                                            $diagnostico1 = $_diagnostico1 -> fetch_object();
                                                            $cname1 = $diagnostico1 -> categoriasName; $r1 = $cp1 -> r1;
                                                        $_dcp = mysqli_query($master, "SELECT * FROM c3 WHERE c1Id = '" . $c1Id  . "' AND  diagnosticoId = '" . $_GET["d"] . "' AND a9 = 1 ");?>
                                                      <?php
                                                        if($r1 > 0){?>
                                                         <ul class="collapsible ">
                                                            <li>
                                                                <div class="collapsible-header  blue-grey lighten-2">
                                                                    <i class="material-icons blue-grey-text text-lighten-4">keyboard_arrow_right</i>
                                                                    <span class="white-text "><?php echo $i;?>) <?php echo $cname1;?> </span>
                                                                    <?php $indicador1 = 2.33; $indicador2 = 3.66;?>
                                                                    <span class=" new badge" data-badge-caption="" style="<?php if( round($r1, 2) <= $indicador1){?>background-color:red;<?php }
                                                                    if( round($r1, 2) > $indicador1 AND round($r1, 2) <= $indicador2 ){?>background-color:#ef6c00;<?php }if( round($r1, 2) > $indicador2 ){?>
                                                                    background-color:green;<?php }?>"><?php echo $r1;?></span>
                                                                </div>
                                                                <div class="collapsible-body grey lighten-4"><div class="p-t-20"></div><table><tbody>
                                                      <?php while($dcp = $_dcp -> fetch_object()) {
                                                          $_p1 = mysqli_query($master, "    SELECT * FROM pregunta  WHERE preguntaId = '" . $dcp -> preguntaId . "' ");
                                                                $p1 = $_p1 -> fetch_object(); $p1name = $p1 -> preguntaName;
                                                                $_pc1 = mysqli_query($master, " SELECT * FROM c3 WHERE c1Id = '" . $_GET["cid"] . "' AND  preguntaId = '" . $p1 -> preguntaId . "' ");
                                                                $pc1 = $_pc1 -> fetch_object(); $pc1name = $pc1 -> r;
                                                      ?>
                                                      <tr><td style="color:#607d8b;">  <?php echo $p1name;?></td>
                                                      <td><?php if($pc1name  == 1 ) {?>Muy en Desacuerdo<?php }?><?php if($pc1name  == 2 ) {?>Desacuerdo<?php }?><?php if($pc1name  == 3 ) {?>Neutral<?php }?><?php if($pc1name  == 4 ) {?>Deacuerdo<?php }?><?php if($pc1name  == 5 ) {?>Muy Deacuerdo<?php }?></td></tr>
                                                      <?php } ?></tr></tbody></table>
                                                                </div>
                                                            </li>
                                                       </ul>
                                                        <?php } ?>
                                                    <!-- categoria 9 fin-->
                                                     <!-- categoria 10 --> 
                                                      <?php
                                                      $caId++;  $i++;
                                                      $_cp1 = mysqli_query($mastera, " SELECT * FROM r WHERE c1Id = '" . $_GET["cid"] . "' AND  categoria = '" . $caId  . "' ");
                                                      $cp1 = $_cp1 -> fetch_object();
                                                        $_diagnostico1 = mysqli_query($master, " SELECT * FROM categorias WHERE categoriasId = '" . $cp1 -> categoria . "' ");
                                                            $diagnostico1 = $_diagnostico1 -> fetch_object(); $cname1 = $diagnostico1 -> categoriasName; $r1 = $cp1 -> r1;
                                                        $_dcp = mysqli_query($master, " SELECT * FROM c3 WHERE c1Id = '" . $c1Id  . "' AND  diagnosticoId = '" . $_GET["d"] . "' AND a10 = 1"); ?>
                                                       <?php
                                                        if($r1 > 0){?>
                                                         <ul class="collapsible ">
                                                            <li>
                                                                <div class="collapsible-header  blue-grey lighten-2">
                                                                    <i class="material-icons blue-grey-text text-lighten-4">keyboard_arrow_right</i>
                                                                    <span class="white-text "><?php echo $i;?>) <?php echo $cname1;?> </span>
                                                                    <?php $indicador1 = 2.33; $indicador2 = 3.66;?>
                                                                    <span class=" new badge" data-badge-caption="" style="<?php if( round($r1, 2) <= $indicador1){?>background-color:red;<?php }
                                                                    if( round($r1, 2) > $indicador1 AND round($r1, 2) <= $indicador2 ){?>background-color:#ef6c00;<?php }if( round($r1, 2) > $indicador2 ){?>
                                                                    background-color:green;<?php }?>"><?php echo $r1;?></span>
                                                                </div>
                                                                <div class="collapsible-body grey lighten-4"><div class="p-t-20"></div><table><tbody>
                                                      <?php while($dcp = $_dcp -> fetch_object()) {
                                                          $_p1 = mysqli_query($master, "    SELECT * FROM pregunta  WHERE preguntaId = '" . $dcp -> preguntaId . "' ");
                                                                $p1 = $_p1 -> fetch_object(); $p1name = $p1 -> preguntaName;
                                                                $_pc1 = mysqli_query($master, " SELECT * FROM c3 WHERE c1Id = '" . $_GET["cid"] . "' AND  preguntaId = '" . $p1 -> preguntaId . "' ");
                                                                $pc1 = $_pc1 -> fetch_object(); $pc1name = $pc1 -> r;
                                                      ?>
                                                      <tr><td style="color:#607d8b;">  <?php echo $p1name;?></td>
                                                      <td><?php if($pc1name  == 1 ) {?>Muy en Desacuerdo<?php }?><?php if($pc1name  == 2 ) {?>Desacuerdo<?php }?><?php if($pc1name  == 3 ) {?>Neutral<?php }?><?php if($pc1name  == 4 ) {?>Deacuerdo<?php }?><?php if($pc1name  == 5 ) {?>Muy Deacuerdo<?php }?></td></tr>
                                                      <?php } ?></tr></tbody></table>
                                                                </div>
                                                            </li>
                                                       </ul>
                                                        <?php } ?>
                                                    <!-- categoria 10 fin-->
