<?php
   $contador= 0;
   $avav = $_GET["aid"];
     $_acseid = mysqli_query($connection, "
        SELECT * FROM ac
        WHERE acId = '" . $_GET["aid"]  . "'
        ");
$acseid = $_acseid -> fetch_object();
$sserviceId = $acseid -> serviceId;
    if ($sserviceId == 1){ $v =1; }
    if ($sserviceId == 2){ $v =1; }
    
    if ($sserviceId == 3){ $v =3; }
    if ($sserviceId == 4){ $v =3; }
    if ($sserviceId == 5){ $v =3; }
    if ($sserviceId == 6){ $v =3; }
    if ($sserviceId == 7){ $v =3; }
    if ($sserviceId == 8){ $v =3; }
    if ($sserviceId == 9){ $v =3; }
    if ($sserviceId == 10){ $v =3; }
    if ($sserviceId == 11){ $v =3; }
    
    if ($sserviceId == 12){ $v =4; }

    $vacc = 1;
    
    $vvv =$vacc.'_'.$v;

     $_cpx1 = mysqli_query($tipoc, "
        SELECT * FROM cuestionario$vvv
        ");
   while($cp = $_cpx1 -> fetch_object()){
   $contador++;
   ?><li>
      <div class="collapsible-header blue-grey-text text-darken-2">
                                                <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                <?php echo $cp -> cacName; ?>
     </div>
                                            
                                            
                                            <div class="collapsible-body">
                                                
                                                
                                                <?php 
                                                  $_qM1_0 = mysqli_query($acq, "SELECT * FROM acq$avav WHERE cacId = '" . $contador . "'  ");
                                                while ($qM1_0 = $_qM1_0 -> fetch_object()) {
                                               
                                                
                                              
                                                ?>
                                                
                                              
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="center blue-grey lighten-3">
                                                                <span class="white-text"><?php echo $qM1_0 -> mId; ?></span>
                                                            </td>
                                                            <td class="blue-grey lighten-2 white-text td-block" style="line-height : 20px;">
                                                                <?php echo $qM1_0 -> pacName; ?>
                                                            </td>
                                                         
                                                            <td class="center grey lighten-2">
                                                                <?php

                                                                $_status = mysqli_query($acq, "SELECT * FROM acr$acId WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_0 -> mId . "'");
                                                                $status = $_status -> fetch_object();
                                                                $status = $status -> statusId ;

                                                                $_important = mysqli_query($acq, "SELECT * FROM acr$acId WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_0 -> mId . "' AND important = 1");
                                                                $important = $_important -> fetch_object();

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_0 -> mId}&risk={$qM1_0 -> risk}'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_0 -> mId}&risk={$qM1_0 -> risk}'><i class='material-icons orange-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons orange-text'>done</i></a>"; break;

                                                                        }
                                                                        break;

                                                                    // Completado
                                                                    case 2:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_0 -> mId}&risk={$qM1_0 -> risk}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_0 -> mId}&risk={$qM1_0 -> risk}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_0 -> mId}&risk={$qM1_0 -> risk}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_0 -> mId}&risk={$qM1_0 -> risk}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_0 -> mId}&risk={$qM1_0 -> risk}'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_0 -> mId}&risk={$qM1_0 -> risk}'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='javascript: void();'><i class='material-icons red-text'>warning</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Revisado

                                                                    case 4:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_0 -> mId}&risk={$qM1_0 -> risk}'><i class='material-icons blue-text b-b-red'>done_all</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_0 -> mId}&risk={$qM1_0 -> risk}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default:
                                                                                if ($important  == 1) {
                                                                                    if ($_SESSION["userAdmin"] == 3) {
                                                                                        echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_0 -> mId}&risk={$qM1_0 -> risk}'><i class='material-icons blue-text b-b-red'>done_all</i></a>";
                                                                                    } else {
                                                                                        echo "";
                                                                                    }
                                                                                } else {
                                                                                    echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_0 -> mId}&risk={$qM1_0 -> risk}'><i class='material-icons blue-text'>done_all</i></a>";
                                                                                }
                                                                                break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Cerrado

                                                                    case 5:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1:
                                                                            case 3:
                                                                            case 2:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_0 -> mId}&risk={$qM1_0 -> risk}'><i class='material-icons black-text b-b-red'>lock</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_0 -> mId}&risk={$qM1_0 -> risk}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_0 -> mId}&risk={$qM1_0 -> risk}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            case 2:
                                                                            case 3:
                                                                            case 4:
                                                                            case 5:
                                                                            default: echo "<a href='javascript: void();'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;
                                                                    
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <?php } ?>
              </div>
                                            
                                            
                                            
                                            
                                            
                                            
   
  </li> <?php } ?>
   