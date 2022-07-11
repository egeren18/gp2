   <div class="collapsible-header blue-grey-text text-darken-2">
                                                <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                              Subtareas
                                            </div>
                                            <div class="collapsible-body" style="background-color:white;">
                                                
                                                
                                                
                                                       <table id='example2' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td >Nro</td>
                                                <td>Tareas</td>
                                                <td >Fecha solicitud</td>
                                                <td >Asignado</td>
                                                <td class="">Tiempo Estimado</td>
                                                <td class="">Tiempo Real</td>
                                                <td class="td-block">variacion</td>
                                                <td>Estatus</td> 
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $na = 0;
                                            while ($stareas = $_stareas2 -> fetch_object()) {
                                            $na++;
                                            $_user = mysqli_query($master, "
                                                SELECT * FROM user
                                                WHERE userId = '" . $stareas -> userId . "'
                                                
                                            ");
                                            $user = mysqli_fetch_array($_user);
                                            // set fields
                                            $name = $user["userName"];
                                            $ua = $user["userSurname"];
                                            ?>
                                            <tr>
                                                <td ><?php echo $na; ?></td>
                                                <td>
                                                 <?php echo $stareas -> st; ?>
                                                </td>
                                                <td>
                                                    <?php echo $stareas -> date; ?>
                                                </td>
                                                <td><?php echo  $name; ?> <?php echo  $ua; ?></td>
                                                <td>
                                                    <?php echo $stareas -> testimado; ?> Horas
                                                </td>
                                                <td>
                                                    <?php echo $stareas -> treal; ?> Horas
                                                </td>
                                                <td>
                                                    <?php 
                                                    $variacion = $stareas -> testimado - $stareas -> treal;
                                                    echo $variacion; ?> Horas
                                                </td>
                                                <td>
                                          
                                            
                                            
                                                   <?php
                                           if($stareas -> important == 1){
                                           if($stareas -> stareasStatus ==3){?><i class="material-icons m-l-10 red-text ">error_outline</i><?php }
                                           if($stareas -> stareasStatus ==2){?><i class="material-icons m-l-10 green-text">error_outline</i><?php }
                                           if($stareas -> stareasStatus ==1){?><i class="material-icons m-l-10 orange-text">error_outline</i><?php }
                                           if($stareas -> stareasStatus ==4){?><i class="material-icons m-l-10 blue-text ">error_outline</i><?php }?>
                                           <?php }else{
                                           if($stareas -> stareasStatus ==3){?><i class="material-icons m-l-10 red-text ">warning</i><?php }
                                           if($stareas -> stareasStatus ==2){?><i class="material-icons m-l-10 green-text">done</i><?php }
                                           if($stareas -> stareasStatus ==1){?><i class="material-icons m-l-10 orange-text">done</i><?php }
                                           if($stareas -> stareasStatus ==4){?><i class="material-icons m-l-10 blue-text ">done_all</i><?php }}?>
                                            
                                            
                                            
                                            
                                                </td>

                                                
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                                
                                                
                                                
                                        <!--        
                                                <?php 
                                                
                                                $nn = 0;
                                                while ($pac1 = $_pac1 -> fetch_object()) {
                                                    $_user3 = mysqli_query($master, "
                                                        SELECT * FROM user
                                                        WHERE userId = '" . $pac1 -> userId . "'
                                                        
                                                    ");
                                                    $user = $_user3 -> fetch_object();
                                                    $u = $user -> userName ;
                                                    $ua = $user -> userSurname;
                                                    $nn++;
                                                ?>
                                              <tbody>
                                                        <tr>
                                                            <td class="center blue-grey lighten-3">
                                                                <span class="white-text"><?php echo $nn;?></span>
                                                            </td>
                                                            <td class="blue-grey lighten-2 white-text td-block" style="line-height : 20px;">
                                                                <?php echo $pac1 -> st; ?> - <?php echo $u;?> <?php echo $ua;?>
                                                            </td>
                                                 
                                                         
                                                          <!--  <td class="center grey lighten-2">
                                                               
                                                              //  inicia PHP   
                                                                //$status = $pac1 -> stareasStatus;
                                                                //switch ($status) {

                                                                    // Completado
                                                                  //  case 2:  echo "<a href='../c/stareas.php?m=read&id={$pac1  -> stareasId}&sm={$pac1 -> stareasmId}'><i class='material-icons green-text'>done_all</i></a>"; break;
                                                                //default: echo "<a href='../c/stareas.php?m=read&id={$pac1  -> stareasId}&sm={$pac1 -> stareasmId}'><i class='material-icons blue-text'>search</i></a>"; break;

                                                                //}
                                                            //   TERMINA PHP
                                                            </td>-->
                                                            <!--
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                                <?php } ?> -->
                                            </div>