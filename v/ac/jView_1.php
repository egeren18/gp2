<?php 

$r = $_GET["rid"];

switch ($r) {
    
    case 1:
        break;

    default:
        break;
}

?>

<div class="m-l-10 m-t-10 m-r-10">
                                <form name="sumar" class="form" id="form_validation" action="ac.php?m=create&aid=<?php echo $aid; ?>&qid=<?php echo $qid; ?>&iid=<?php echo $iid; ?>&did=<?php echo $role -> designatedId; ?>" method="post">
                                    <div class="row">
                                        <div class="col s12">
                                            <ul class="collapsible blue-grey-text text-darken-2">
                                                <?php
                                                switch ($iid) {

                                                    case 1:
                                                ?>
                                                <li>
                                                    <div class="collapsible-header">
                                                        <label>
                                                            <input id="answer" name="a1" type="radio" value="1" required/>
                                                            <span>Si</span>
                                                        </label>
                                                        <label class="p-l-20">
                                                            <input id="noAnswer" name="a1" type="radio" value="2"/>
                                                            <span>No</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li id="area" style="display:none">
                                                    <div class="p-l-20 p-t-20 p-b-20">
                                                        <div class="row">
                                                            <div class="col s12 m-b-10">
                                                                <p>Por favor, seleccione un grupo de inter&eacute;s:</p>
                                                            </div>
                                                        </div>
                                                        <?php while ($group = $_group -> fetch_object()) { ?>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <label>
                                                                    <input name="a2" type="radio" value="<?php echo $group -> groupId; ?>"/>
                                                                    <span class="font-15 blue-grey-text text-darken-2"><?php echo $group -> groupName; ?></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </li>
                                            </ul>
                                                <?php
                                                    break;
                                                
                                                case 28: include 'jMatrixCreate.php';
                                                    break;
                                                
                                                    default:
                                                ?>
                                            <ul class="collapsible blue-grey-text text-darken-2">
                                                <li>
                                                    <div class="collapsible-header">
                                                        <label>
                                                            <input id="answer" name="a1" type="radio" value="1" required/>
                                                            <span>Si</span>
                                                        </label>
                                                        <label class="p-l-20">
                                                            <input id="answer" name="a1" type="radio" value="2"/>
                                                            <span>No</span>
                                                        </label>
                                                        <label class="p-l-20">
                                                            <input name="a1" type="radio" value="3"/>
                                                            <span>No Aplica</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li class="p-b-5">
                                                    <div class="steps">
                                                        <div class="step minimized">
                                                            <div class="step-header">
                                                                <div class="header">Comentarios</div>
                                                            </div>
                                                            <div class="step-content ac1 one white">
                                                                <textarea name="a3" class="ckeditor"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php
                                                    break;
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m-t-20">
                                            <label>
                                                <input name="ok" type="checkbox" required=""/>
                                                <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <label>
                                                <input name="important" type="checkbox" />
                                                <span class="blue-grey-text text-darken-2">Haga click en el recuadro si considera haber hallado una "Situaci&oacute;n Importante"!</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <label>
                                                <input type="checkbox" name="completed" class="validate"/>
                                                <span class="blue-grey-text text-darken-2"><u>Completado</u>, listo para ser revisado!</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m-t-20 m-b-10">
                                            <a href="javascript: history.go(-1)" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                <i class="material-icons">cancel</i>
                                            </a>
                                            <button type="submit" class="btn blue waves-effect tooltipped m-l-5" data-position="top" data-tooltip="Guardar"><i class="material-icons">save</i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>




                                                <!--
                                                <li id="area" style="display:none">
                                                    <div class="p-l-20 p-t-20 p-b-20">
                                                        <?php
//                                                                while ($r_group = mysqli_fetch_array($group)) {
//                                                                  $groupId = $r_group["groupId"];
//                                                                $groupName = $r_group["groupName"];
                                                            ?>
                                                            <div class="row">
                                                                <div class="col s12">
                                                                    <label>
                                                                        <input name="a2" type="radio" value="<?php echo $groupId; ?>" <?php echo $checked = $r_answer -> a2 == $groupId ? "checked" : ""; ?>/>
                                                                        <span class="font-15 blue-grey-text text-darken-2"><?php echo $groupName; ?></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        <?php //} ?>
                                                    </div>
                                                </li>
                                                <?php //} else { ?>
                                                <li class="p-b-5">
                                                    <div class="steps">
                                                        <div class="step minimized">
                                                            <div class="step-header">
                                                                <div class="header">Comentarios</div>
                                                            </div>
                                                            <div class="step-content ac1 one white">
                                                                <textarea name="a3" class="ckeditor"><?php //echo $r_answer -> a3; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php //} ?>
                                        <?php //} ?>
                                    </ul>
                                    <div class="m-t-20"></div>
                            <?php
//                                    $checked = $r_answer -> important == 1 ? "checked" : "";

//                                  $action = '<div class="row">';
//                                $action.= '<div class="col s12">';
//                              $action.= '<label>';
//                            $action.= '<input ' . $checked . ' name="important" type="checkbox" />';
  //                          $action.= '<span class="blue-grey-text text-darken-2">Haga click en el recuadro si considera haber hallado una "Situaci&oacute;n Importante"!</span>';
    //                        $action.= '</label>';
      //                      $action.= '</div>';
//                    $action.= '</div>';
//
//                                  echo $action;


//                            $type = $type -> designatedId;

//                            if ($riskPartner -> userId == $_SESSION["userId"]) {
//                              if ($r_answer -> statusId == 4) {

//                                include 'jA4r.php';
//                              include 'jA5rpe.php';
//                        }
  //                      else {

    //                        include 'jA4r.php';
      //                      include 'jA5rpr.php';
        //                }
          //              include 'jStatus.php';
            //        }
              //      else {
                //        switch ($type) {
                  //          case 1:
                    //            if ($i != 28) {
                      //              if ($answer -> statusId == NULL){
                        //                include 'jAnswerEdit.php';
                          //              include 'jAdminEdit.php';
//                                            }
//                                          elseif ($answer -> statusId == 1) {
//                                            include 'jA4e.php';
//                                          include 'jA5e.php';
//                                    }
  //                                  elseif ($answer -> statusId == 2) {
    //                                    include 'jA4r.php';
      //                              }
        //                            elseif ($answer -> statusId == 3) {
          //                              include 'jA4e.php';
            //                            include 'jA5e.php';
              //                      }
                //                    elseif ($answer -> statusId == 4) {
                  //                      include 'jA4r.php';
                    //                }
                      //              elseif ($answer -> statusId == 5) {
                        //                include 'jA4r.php';
                          //          }
//                                        }
//                                      else {
//                                        if ($answer -> statusId == NULL) {
//                                          include 'jA4me.php';
//                                    }
  //                                  elseif ($answer -> statusId == 1) {
    //                                    include 'jA4me.php';
      //                              }
        //                            elseif ($answer -> statusId == 2) {
          //                              include 'jA4mr.php';
            //                        }
              //                      elseif ($answer -> statusId == 3) {
                //                        include 'jA4me.php';
                  //                  }
                    //                elseif ($answer -> statusId == 4) {
                      //                  include 'jA4mr.php';
                        //            }
                          //          elseif ($answer -> statusId == 5) {
                            //            include 'jA4mr.php';
                              //      }
//                                        }                                    
//                                      include 'jStatus.php';
//                                    break;

//                                    case 3:
//                                      echo 'soy consultant';
//                                    break;

//                              case 4:
//                                if ($i != 28) {
  //                                  if ($answer -> statusId == NULL){
    //                                    include 'jA4r.php';
      //                                  include 'jA6.php';
        //                            }
          //                          elseif ($answer -> statusId == 1) {
            //                            include 'jA4r.php';
              //                          include 'jA6.php';
                //                    }
                  //                  elseif ($answer -> statusId == 2) {
                    //                    include 'jA4r.php';
                      //                  include 'jA5s.php';
                        //                include 'jA6.php';
                          //          }
                            //        elseif ($answer -> statusId == 3) {
                              //          include 'jA4r.php';
                                //        include 'jA6.php';
                                  //  }
//                                            elseif ($answer -> statusId == 4) {
//                                              include 'jA4r.php';
//                                            include 'jA6.php';
//                                      }
//                                    elseif ($answer -> statusId == 5) {
  //                                      include 'jA4r.php';
    //                                    include 'jA6.php';
      //                              }
        //                        }
          //                      else {
            //                        include 'jA4ms.php';
              //                      include 'jA6.php';
                //                }
                  //              break;
//
//                                  default:
//                                    break;
//                          }
//                    }
                    ?>
                                                -->
