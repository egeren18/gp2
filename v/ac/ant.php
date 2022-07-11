<?php
$_status2 = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $aid . "' AND acIId = '" . $ant . "'");
$status2 = $_status2 -> fetch_object();
$status2 = $status2 -> statusId ;
                                                   
$_important2 = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $aid . "' AND acIId = '" . $ant. "' AND important = 1");                                               
$important2 = $_important2 -> fetch_object(); 
if ($ant > 0 ){                                              
switch ($status2) {

 // En proceso                                                       
    case 1:
        switch ($r) {
            // Segun el rol
        case 1: echo $icon = $important2  == 1 ? "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='../c/ac.php?m=edit&aid={$aid}&qid={$qid }&iid={$ant}'>
                <i class='material-icons blue-text'>chevron_left</i></a>" : "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='../c/ac.php?m=edit&aid={$aid}&qid={$qid}&iid={$ant}'>
                <i class='material-icons blue-text'>chevron_left</i></a>"; break;
        case 2:
        case 3:
        case 4:
        case 5:
        default: echo $icon = $important2  == 1 ? "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='javascript: void();'>
        <i class='material-icons blue-text'>chevron_left</i></a>" : "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='javascript: void();'>
        <i class='material-icons blue-text'>chevron_left</i></a>"; break;

                     }
    break;

  // Completado
    case 2:
        switch ($r) {
            // Segun el rol
        case 1: echo $icon = $important2  == 1 ? "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='../c/ac.php?m=read&aid={$aid}&qid={$qid}&iid={$ant}'>
        <i class='material-icons blue-text'>chevron_left</i>
        </a>" : "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='../c/ac.php?m=read&aid={$aid}&qid={$qid}&iid={$ant}'>
        <i class='material-icons blue-text'>chevron_left</i>
        </a>"; break;
        case 2:
        case 4: echo $icon = $important2  == 1 ? "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='../c/ac.php?m=reviewerEdit&aid={$aid}&qid={$qid}&iid={$ant}'>
        <i class='material-icons blue-text'>chevron_left</i>
        </a>" : "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='../c/ac.php?m=reviewerEdit&aid={$aid}&qid={$qid}&iid={$ant}'>
        <i class='material-icons blue-text'>chevron_left</i>
        </a>"; break;
        case 3:
        case 5:
        default: echo $icon = $important2  == 1 ? "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='javascript: void();'>
        <i class='material-icons blue-text'>chevron_left</i>
        </a>" : "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='javascript: void();'>
        <i class='material-icons blue-text'>chevron_left</i>
        </a>"; break;
                                                                
                    }
    break;

    // Por corregir
     case 3:
        switch ($r) {
        // Segun el rol
        case 1: echo $icon = $important2  == 1 ? "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='../c/ac.php?m=edit&aid={$aid}&qid={$qid}&iid={$ant}'>
        <i class='material-icons blue-text'>chevron_left</i>
        </a>" : "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='../c/ac.php?m=edit&aid={$aid}&qid={$qid}&iid={$ant}'>
        <i class='material-icons blue-text'>chevron_left</i>
        </a>"; break;
        case 2:
        case 3:
        case 4:
        case 5:
        default: echo $icon = $important2  == 1 ? "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='javascript: void();'>
        <i class='material-icons blue-text'>chevron_left</i>
        </a>" : "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='javascript: void();'>
        <i class='material-icons blue-text'>chevron_left</i>
        </span></a>"; break;
                                                                
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
         case 5: echo $icon = $important2  == 1 ? "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='../c/ac.php?m=read&aid={$aid}&qid={$qid}&iid={$ant}'>
         <i class='material-icons blue-text'>chevron_left</i>
         </a>" : "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='../c/ac.php?m=read&aid={$aid}&qid={$qid}&iid={$ant}'>
         <i class='material-icons blue-text'>chevron_left</i>
         </a>"; break;
         default:
            if ($important2  == 1) {
                if ($_SESSION["userAdmin"] == 3) {
                        echo "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='../c/ac.php?m=riskPartnerEdit&aid={$aid}&qid={$qid}&iid={$ant}'>
                        <i class='material-icons blue-text'>chevron_left</i>
                        </a>";
                    } else {
                        echo "";
                            }
                    } else {
                        echo "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='../c/ac.php?m=riskPartnerEdit&aid={$aid}&qid={$qid}&iid={$ant}'>
                        <i class='material-icons blue-text'>chevron_left</i>
                        </a>";
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
            default: echo $icon = $important2  == 1 ? "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='../c/ac.php?m=read&aid={$aid}&qid={$qid}&iid={$ant}'>
            <i class='material-icons blue-text'>chevron_left</i>
            </a>" : "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='../c/ac.php?m=read&aid={$aid}&qid={$qid}&iid={$ant}'>
            <i class='material-icons blue-text'>chevron_left</i>
            </a>"; break;
                                                                
        }
    break;
        // Por defecto
        default:
            switch ($r) {
            // Segun el rol
                case 1: echo "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='../c/ac.php?m=create&aid={$aid}&qid={$qid}&iid={$ant}'>
                <i class='material-icons blue-text'>chevron_left</i>
                </a>"; break;
                case 2:
                case 3:
                case 4:
                case 5:
                 default: echo "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-5' data-tooltip='Anterior' href='javascript: void();'>
                 <i class='material-icons blue-text'>chevron_left</i>
                 </a>"; break;
            }
        break;
                                                        
}
}