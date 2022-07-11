<main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="ac.php?m=questionnaire<?php echo $qid; ?>&aid=<?php echo $ac -> acId; ?>" class="breadcrumb hide-on-med-and-down">Aceptaci&oacute;n y Continuidad</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Cuestionario 1</a>
                    <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                        <i class="material-icons blue-text">help_outline</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons blue-text">forum</i>
                    </a>
                    <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                        <?php echo $_SESSION["userFullName"];?>
                    </span>
                </div>
            </div>
            <form name="" class="form" id="form_validation" action="ac.php?m=update&aid=<?php echo $aid; ?>&qid=<?php echo $qid; ?>&iid=<?php echo $iid; ?>&r=<?php echo $r; ?>&risk=<?php echo $_GET["risk"];?>" method="post">
                <div class="row">
                    <div class="col s12 m12 l12 m-t-5">
                        <div class="card blue-grey lighten-5">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        <span class="blue-text p-l-10">Cliente: <?php echo $client -> clientName; ?></span>
                                        <a href="ac.php?m=questionnaire<?php echo $qid; ?>&aid=<?php echo $ac -> acId; ?>" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                            <i class="material-icons blue-grey-text">cancel</i>
                                        </a>
                                          <a href="#ticket1" class="tooltipped right modal-trigger m-l-5" data-position="left" data-tooltip="Ticket">
                                                <i class="material-icons blue-text">local_offer</i>
                                             </a>
                                             <a href="#Leyenda" class="tooltipped right modal-trigger m-l-5" data-position="left" data-tooltip="Instruciones">
                                                  <i class="material-icons blue-text">local_library</i>
                                            </a>
                                            <a class="right m-r-5 tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                                    <a class="right m-r-5 tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen"><i class="material-icons green-text">file_download</i></a>
                                    <a class="right m-r-5" id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                                    </div>
                                </div>
                                
                                
                    <div id="main">
                        <div id="screenshot">
                                
                                <div class='row'>
                                    <div class="m-l-10 m-r-10">
                                        <div class="col s12 m6 l7 m-t--5">
                                            <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                                <table class="blue-grey lighten-4">
                                                    <?php
                                                    while ($leader = $_leader -> fetch_object()) {
                                                        
                                                        /*
                                                         * Realiza una consulta a la base de datos.
                                                         */

                                                        $_thisRole = mysqli_query($master, "SELECT * FROM designated WHERE designatedId = '" . $leader -> designatedId . "'");
                                                        $thisRole = $_thisRole -> fetch_object();

                                                        echo "<tr>";
                                                        echo "<td>" . $thisRole -> designatedName . ":</td>";


                                                        /*
                                                         * Realiza una consulta a la base de datos.
                                                         */

                                                        $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $leader -> userId . "'");
                                                        $user = $_user -> fetch_object();
                                                        echo "<td>" . $user -> userName . " " . $user -> userSurname . "</td>";
                                                        echo "</tr>";
                                                    }
                                                    while ($consultant = $_consultant -> fetch_object()) {
                                                        
                                                        /*
                                                         * Realiza una consulta a la base de datos.
                                                         */

                                                        $_thisRole = mysqli_query($master, "SELECT * FROM designated WHERE designatedId = '" . $consultant -> designatedId . "'");
                                                        $thisRole = $_thisRole -> fetch_object();

                                                        echo "<tr>";
                                                        echo "<td>" . $thisRole -> designatedName . ":</td>";


                                                        /*
                                                         * Realiza una consulta a la base de datos.
                                                         */

                                                        $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $consultant -> userId . "'");
                                                        $user = $_user -> fetch_object();
                                                        echo "<td>" . $user -> userName . " " . $user -> userSurname . "</td>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td>Naturaleza del Servicio:</td>
                                                        <td><?php echo $service -> natureName; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Servicio:</td>
                                                        <td><?php echo $service -> serviceName; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Período de la AC:</td>
                                                        <td>
                                                            Desde <span class="p-l-5 p-r-5"><?php echo $ac -> acDateStart; ?></span>
                                                            Hasta <span class="p-l-5"><?php echo $ac -> acDateExpire; ?></span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col s12 m5 m-t--5">
                                            <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                                <table class="blue-grey lighten-4">
                                                    <tr>
                                                        <td>Completado por Gerente de AC:</td>
                                                        <td>
                                                            <?php
                                                            $acId = $ac -> acId;
                                                            $_completed = mysqli_query($acq, "SELECT * FROM acr$acId WHERE acId = '" . $ac -> acId . "' AND acIId = '" . $iid . "'");
                                                            $completed = $_completed -> fetch_object();

                                                            /*
                                                             * Realiza una consulta a la base de datos.
                                                             */

                                                            $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $completed -> acDoerId . "'");
                                                            $user = $_user -> fetch_object();

                                                            if(isset($answer -> statusId)) {
                                                                
                                                                echo $doer = $answer -> statusId >= 2 ? $user -> userName . " " . $user -> userSurname : "";
                                                                
                                                            }
                                                            else {
                                                                
                                                                echo "&nbsp;";
                                                                
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fecha:</td>
                                                        <td>
                                                            <?php
                                                            if(isset($answer -> statusId)) {

                                                                echo $doerDate = $answer -> statusId >= 2 ? $completed -> acDoerDate : "";

                                                            }
                                                            else {

                                                                echo "&nbsp;";

                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Revisado por Socio Lider de AC:</td>
                                                        <td>
                                                            <?php
                                                            $acId = $ac -> acId;
                                                            $_reviewed = mysqli_query($acq, "SELECT * FROM acr$acId WHERE acId = '" . $ac -> acId . "' AND acIId = '" . $iid . "'");
                                                            $reviewed = $_reviewed -> fetch_object();

                                                            /*
                                                             * Realiza una consulta a la base de datos.
                                                             */

                                                            $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $completed -> acReviewerId . "'");
                                                            $user = $_user -> fetch_object();
                                                            
                                                            if(isset($answer -> statusId)) {
                                                                
                                                                echo $reviewer = $answer -> statusId >= 3 ? $user -> userName . " " . $user -> userSurname : "";
                                                                
                                                            }
                                                            else {
                                                                
                                                                echo "";
                                                                
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fecha:</td>
                                                        <td>
                                                            <?php
                                                            if(isset($answer -> statusId)) {

                                                                echo $reviewerDate = $answer -> statusId >= 4 ? $completed -> acReviewerDate : "";

                                                            }
                                                            else {

                                                                echo "";

                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                      <tr>
                                                    <td>Revisado por Socio de Riesgo de AC:</td>
                                                    <td>
                                                        <?php
                                                        $acId = $ac -> acId;
                                                        $_reviewed = mysqli_query($acq, "SELECT * FROM acr$acId WHERE acId = '" . $ac -> acId . "' AND acIId = '" . $iid . "' ");
                                                        $reviewed = $_reviewed -> fetch_object();

                                                        /*
                                                         * Realiza una consulta a la base de datos.
                                                         */

                                                        $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $completed -> acSrId . "'");
                                                        $user = $_user -> fetch_object();

                                                        if(isset($answer -> statusId)) {

                                                            echo $reviewer = $answer -> statusId >= 3 ? $user -> userName . " " . $user -> userSurname : "";

                                                        }
                                                        else {

                                                            echo "";

                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Fecha:</td>
                                                    <td>
                                                        <?php
                                                        if(isset($answer -> statusId)) {

                                                            echo $reviewerDate = $answer -> statusId >= 3 ? $completed -> acSrDate : "";

                                                        }
                                                        else {

                                                            echo "";

                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                </table>
                                                <?php 

                                                /*
                                                 * Es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.
                                                 */

                                                $s = $answer -> statusId ;

                                                switch ($s) {

                                                    case 1:
                                                        echo "<span class='new badge orange m-t-15' data-badge-caption='En Proceso'></span>";
                                                        break;

                                                    case 2:
                                                        echo "<span class='new badge green m-t-15' data-badge-caption='Completado'></span>";
                                                        break;

                                                    case 3:
                                                        echo "<span class='new badge red m-t-15' data-badge-caption='Por Corregir'></span>";
                                                        break;

                                                    case 4:
                                                        echo "<span class='new badge blue m-t-15' data-badge-caption='Revisado'></span>";
                                                        break;

                                                    case 5:
                                                        echo "<span class='new badge black m-t-15' data-badge-caption='Cerrado'></span>";
                                                        break;

                                                    default:
                                                        echo "<span class='new badge grey m-t-15' data-badge-caption='Sin Editar'></span>";
                                                        break;
                                                }

                                                ?>
                                            </div>
                                        </div>
                                        <div class="col s12 m-b-10">
                                            <span class='blue-grey-text'>Item No: <?php echo $iid; ?></span>
                                        </div>
                                        <div class="col s12 m-t--10">
                                            <div class='card-panel white-text blue-grey darken-2' style='line-height : 20px;'><?php echo $question -> pap; ?></div>
                                        </div>
                                        <?php 
                                        switch ($iid) {
                                            case 1:
                                        ?>
                                        <div class='col s12'>
                                            <ul class="collapsible">
                                                <li>
                                                    <div class="collapsible-header">
                                                        <label>
                                                            <input id="answer" name="a1" type="radio" value="1" required="" <?php echo $checked = $answer -> a1 == 1 ? "checked" : ""; ?>/>
                                                            <span>Si</span>
                                                        </label>
                                                        <label class="p-l-20">
                                                            <input id="noAnswer" name="a1" type="radio" value="2" <?php echo $checked = $answer -> a1 == 2 ? "checked" : ""; ?>/>
                                                            <span>No</span>
                                                            <span class="grey-text text-darken-3 m-l-40">(Si la respuesta es afirmativa, indique a cu&aacute;l grupo de inter&eacute;s pertenece)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li id="area" style="display:none">
                                                    <div class="p-l-20 p-t-20 p-b-20">
                                                        <?php while ($group = $_group -> fetch_object()) { ?>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <label>
                                                                    <input name="a2" type="radio" value="<?php echo $group -> groupId; ?>" <?php echo $checked = $answer -> a2 == $group -> groupId ? "checked" : ""; ?> required/>
                                                                    <span class="font-15 blue-grey-text text-darken-2"><?php echo $group -> groupName; ?></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        
                                                        <?php } ?>
                                                        
                                                    </div>
                                                     <li>
                                                    <div class="collapsible-header blue-grey-text text-darken-2">
                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                        Comentarios
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <textarea name="a3" class="ckeditor"><?php echo $answer -> a3; ?></textarea>
                                                    </div>
                                                </li>
                                                    
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <div class='col s12 m-t-10'>
                                            <ul class="collapsible">
                                                <li>
                                                    <div class="collapsible-header blue-grey-text text-darken-2">
                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                        Observaciones del Socio L&iacute;der de la A&C
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <textarea name="note" disabled="" class="ckeditor"><?php echo $answer -> note; ?></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php 
                                                break;
                                                     case 2:
                                        ?>
                                        <div class='col s12'>
                                            <ul class="collapsible">
                                                <li>
                                                    <div class="collapsible-header">
                                                        <label>
                                                            <input id="answer" name="a1" type="radio" value="1" required="" <?php echo $checked = $answer -> a1 == 1 ? "checked" : ""; ?>/>
                                                            <span>Si</span>
                                                        </label>
                                                        <label class="p-l-20">
                                                            <input id="noAnswer" name="a1" type="radio" value="2" <?php echo $checked = $answer -> a1 == 2 ? "checked" : ""; ?>/>
                                                            <span>No</span>
                                                           
                                                        </label>
                                                    </div>
                                                </li>
                                         <li>
                                                    <div class="collapsible-header blue-grey-text text-darken-2">
                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                        Comentarios
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <textarea name="a3" class="ckeditor"><?php echo $answer -> a3; ?></textarea>
                                                    </div>
                                                </li>
                                                    
                                            </ul>
                                        </div>
                                        <div class='col s12 m-t-10'>
                                            <ul class="collapsible">
                                                <li>
                                                    <div class="collapsible-header blue-grey-text text-darken-2">
                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                        Observaciones del Socio L&iacute;der de la A&C
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <textarea name="note" disabled="" class="ckeditor"><?php echo $answer -> note; ?></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php 
                                                break;
                                                  case 3:
                                        ?>
                                        <div class='col s12'>
                                            <ul class="collapsible">
                                                <li>
                                                    <div class="collapsible-header">
                                                        <label>
                                                            <input id="answer" name="a1" type="radio" value="1" required="" <?php echo $checked = $answer -> a1 == 1 ? "checked" : ""; ?>/>
                                                            <span>Si</span>
                                                        </label>
                                                        <label class="p-l-20">
                                                            <input id="noAnswer" name="a1" type="radio" value="2" <?php echo $checked = $answer -> a1 == 2 ? "checked" : ""; ?>/>
                                                            <span>No</span>
                                                           
                                                        </label>
                                                    </div>
                                                </li>
                                         <li>
                                                    <div class="collapsible-header blue-grey-text text-darken-2">
                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                        Comentarios
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <textarea name="a3" class="ckeditor"><?php echo $answer -> a3; ?></textarea>
                                                    </div>
                                                </li>
                                                    
                                            </ul>
                                        </div>
                                        <div class='col s12 m-t-10'>
                                            <ul class="collapsible">
                                                <li>
                                                    <div class="collapsible-header blue-grey-text text-darken-2">
                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                        Observaciones del Socio L&iacute;der de la A&C
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <textarea name="note" disabled="" class="ckeditor"><?php echo $answer -> note; ?></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php 
                                                break;
                                                  case 15:
                                        ?>
                                        <div class='col s12'>
                                            <ul class="collapsible">
                                                <li>
                                                    <div class="collapsible-header">
                                                        <label>
                                                            <input id="answer" name="a1" type="radio" value="1" required="" <?php echo $checked = $answer -> a1 == 1 ? "checked" : ""; ?>/>
                                                            <span>Si</span>
                                                        </label>
                                                        <label class="p-l-20">
                                                            <input id="noAnswer" name="a1" type="radio" value="2" <?php echo $checked = $answer -> a1 == 2 ? "checked" : ""; ?>/>
                                                            <span>No</span>
                                                           
                                                        </label>
                                                    </div>
                                                </li>
                                                                                         <li>
                                                    <div class="collapsible-header blue-grey-text text-darken-2">
                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                        Comentarios
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <textarea name="a3" class="ckeditor"><?php echo $answer -> a3; ?></textarea>
                                                    </div>
                                                </li>
                                                    
                                            </ul>
                                        </div>
                                        <div class='col s12 m-t-10'>
                                            <ul class="collapsible">
                                                <li>
                                                    <div class="collapsible-header blue-grey-text text-darken-2">
                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                        Observaciones del Socio L&iacute;der de la A&C
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <textarea name="note" disabled="" class="ckeditor"><?php echo $answer -> note; ?></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php 
                                                break;

                                            case 28:
                                                include 'jMatrixEdit.php';
                                        ?>
                                        <div class="col s12 m-t-10">
                                            <ul class="collapsible">
                                                <li>
                                                    <div class="collapsible-header blue-grey-text text-darken-2">
                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                        Observaciones del Socio L&iacute;der de la A&C
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <textarea name="note" disabled="" class="ckeditor"><?php echo $answer -> note; ?></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php
                                                break;

                                            default:
                                        ?>
                                        <div class="col s12 m-t-10">
                                            <ul class="collapsible">
                                                <li>
                                                    <div class="collapsible-header">
                                                        <label>
                                                            <input id="answer" name="a1" type="radio" value="1" required="" <?php echo $checked = $answer -> a1 == 1 ? "checked" : ""; ?>/>
                                                            <span>Si</span>
                                                        </label>
                                                        <label class="p-l-20">
                                                            <input id="answer" name="a1" type="radio" value="2" <?php echo $checked = $answer -> a1 == 2 ? "checked" : ""; ?>/>
                                                            <span>No</span>
                                                        </label>
                                                        <label class="p-l-20">
                                                            <input name="a1" type="radio" value="3" <?php echo $checked = $answer -> a1 == 3 ? "checked" : ""; ?>/>
                                                            <span>No Aplica</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="collapsible-header blue-grey-text text-darken-2">
                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                        Comentarios
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <textarea name="a3" class="ckeditor"><?php echo $answer -> a3; ?></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m-t-10">
                                            <ul class="collapsible">
                                                <li>
                                                    <div class="collapsible-header blue-grey-text text-darken-2">
                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                        Observaciones del Socio L&iacute;der de la A&C
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <textarea name="note" disabled="" class="ckeditor"><?php echo $answer -> note; ?></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php 
                                                break;
                                        }
                                        ?>
                                        <div class="col s12 m-t-20 m-b-20">
                                            <label>
                                                <input name="important" type="checkbox" <?php echo $checked = $answer -> important  == 1 ? "checked" : ""; ?>/>
                                                <?php if ($answer -> important  == 1) { ?>
                                                <span class="blue-grey-text text-darken-2">
                                                    Haga click en el recuadro si considera haber hallado una "Situaci&oacute;n Importante"!
                                                </span>
                                                <?php } ?>
                                            </label>
                                        </div>
                                        <div class="col s12">
                                            <label>
                                                <input name="ok" type="checkbox" required=""/>
                                                <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                            </label>
                                        </div>
                                          
                                        <div class="col s12">
                                            <label>
                                                <input type="checkbox" name="completed" class="validate"/>
                                                <span class="blue-grey-text text-darken-2"><u>Completado</u>, listo para ser revisado!</span>
                                            </label>
                                        </div>
                                        <div class="col s12 m-t-20 m-b-10">
                                            <a href="javascript: history.go(-1)" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                <i class="material-icons">cancel</i>
                                            </a>
                                            <button type="submit" class="btn blue waves-effect tooltipped m-l-5" data-position="top" data-tooltip="Guardar"><i class="material-icons">save</i></button>
                                                          <?php 
                                                $sig = $iid + 1;
                                                $ant = $iid - 1;      
                                        /*
                                         * Variables.
                                         */
                                  include 'ant.php';     
                                  include 'sig.php';

                                  
                                        ?>
                                        </div>
                                         
                                    </div>
                                </div>
                                
                            </div>
                                </div>     
                                
                            <div class='row'>
                                 <div class="col s12  m-b-10">
                                                   <?php  include 'list.php';  ?>     
                                 </div>
                            </div>
                                <div class='row'>
                                    <div class='col s12'>
                                        <span class='blue-grey-text font-14 left p-l-10'>&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                        <span class='blue-grey-text font-14 right p-r-10 hide-on-small-only'>Versi&oacute;n: 1.0.0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <div id="help" class="modal">
        <div class="modal-content">
            <p class="">Manual de Usuario</p>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="modal-footer">
            <button class="modal-close waves-effect waves-light btn blue btn-small">Continuar</button>
        </div>
    </div>
    <div id="helpItem" class="modal">
        <div class="modal-content">
            <p class="">Instrucciones para el llenado</p>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="modal-footer">
            <button class="modal-close waves-effect waves-light btn blue btn-small">Continuar</button>
        </div>
    </div>

    <?php include '../v/support/modalAdd.php'; ?>
     <?php include '../v/support/leyenda.php'; ?>
      <?php include '../v/support/ticket.php'; ?>
    <script type="text/javascript" src="../js/stepper.js"></script>
    <script>
    $(document).ready(function(){ 
        $('#answer').on('click',function() {
            $('#area').toggle();
        });
        $('#noAnswer').on('click',function(){
            $('#area').hide();
            $('input[name="a2"]').prop('checked', false);
            $('input[name="a2"]').removeAttr("required");
        });
    });
    $('input[type="radio"]').keydown(function(e){
        var arrowKeys = [37, 38, 39, 40];
        if (arrowKeys.indexOf(e.which) !== -1){
            $(this).blur();
            return false;
        }
    });
    </script>
    <script type="text/javascript" src="../js/shareholder.js"></script>
    <script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-ac|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>
