  <div class="collapsible-header blue-grey-text text-darken-2">
                                                <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                Conocimiento Experto
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="m-t-10"></div>
                                                <?php while ($qM1_3 = $_qM1_3 -> fetch_object()) { $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_3 -> itemId . "'"); $status = $_status -> fetch_object(); if ($qM1_3 -> itemArea == 3) { ?>
                                                <table class="m-t-5" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="center blue-grey lighten-3">
                                                                <span class="white-text"><?php echo $qM1_3 -> itemId; ?></span>
                                                            </td>
                                                            <td class="blue-grey lighten-2 white-text td-block" style="line-height : 20px;">
                                                                <?php echo $qM1_3 -> itemName; ?>
                                                            </td>
                                                            <td class="center grey lighten-2">
                                                                <?php

                                                                $_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_3 -> itemId . "'");
                                                                $status = $_status -> fetch_object();

                                                                $status = $status -> statusId ;

                                                                $_important = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $acId . "' AND acIId = '" . $qM1_3 -> itemId . "' AND important = 1");
                                                                $important = $_important -> fetch_object();

                                                                switch ($status) {

                                                                    // En proceso
                                                                    case 1:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons orange-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons orange-text'>done</i></a>"; break;
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
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 2:
                                                                            case 4: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='../c/ac.php?m=reviewerEdit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            case 3:
                                                                            case 5:
                                                                            default: echo $icon = $important  == 1 ? "<a href='javascript: void();'><i class='material-icons green-text b-b-red'>done</i></a>" : "<a href='javascript: void();'><i class='material-icons green-text'>done</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    // Por corregir

                                                                    case 3:

                                                                        switch ($r) {

                                                                            // Segun el rol
                                                                            case 1: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons red-text b-b-red'>warning</i></a>" : "<a href='../c/ac.php?m=edit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons red-text'>warning</i></a>"; break;
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
                                                                            case 5: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>"; break;
                                                                            default:
                                                                                if ($important  == 1) {
                                                                                    if ($_SESSION["userAdmin"] == 3) {
                                                                                        echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons blue-text b-b-red'>done_all</i></a>";
                                                                                    } else {
                                                                                        echo "";
                                                                                    }
                                                                                } else {
                                                                                    echo "<a href='../c/ac.php?m=riskPartnerEdit&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons blue-text'>done_all</i></a>";
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
                                                                            default: echo $icon = $important  == 1 ? "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons black-text b-b-red'>lock</i></a>" : "<a href='../c/ac.php?m=read&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons black-text'>lock</i></a>"; break;
                                                                            
                                                                        }
                                                                        break;

                                                                    default:

                                                                        switch ($r) {
                                                                        
                                                                            // Segun el rol
                                                                            case 1: echo "<a href='../c/ac.php?m=create&aid={$acId}&qid={$q}&iid={$qM1_3 -> itemId}'><i class='material-icons blue-grey-text'>edit</i></a>"; break;
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
                                                <?php }} ?>
                                            </div>