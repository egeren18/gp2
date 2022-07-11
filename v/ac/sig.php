<?php
$_status = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $aid . "' AND acIId = '" . $sig . "'");
$status = $_status -> fetch_object();
$status = $status -> statusId ;
                                                   
$_important = mysqli_query($connection, "SELECT * FROM acanswer WHERE acId = '" . $aid . "' AND acIId = '" . $sig. "' AND important = 1");                                               
$important = $_important -> fetch_object();     
if ($sig <= 30 ){                                                  
switch ($status) {

 // En proceso                                                       
    case 1:
        switch ($r) {
            // Segun el rol
        case 1: echo $icon = $important  == 1 ? "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10'
        data-tooltip='Siguiente' href='../c/ac.php?m=edit&aid={$aid}&qid={$qid }&iid={$sig}'>
                <i class='material-icons blue-text'>chevron_right</i></a>" : "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='../c/ac.php?m=edit&aid={$aid}&qid={$qid}&iid={$sig}'>
                <i class='material-icons blue-text'>chevron_right</i></a>"; break;
        case 2:
        case 3:
        case 4:
        case 5:
        default: echo $icon = $important  == 1 ? "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='javascript: void();'>
        <i class='material-icons blue-text'>chevron_right</i></a>" : "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10'  data-tooltip='Siguiente' href='javascript: void();'>
        <i class='material-icons blue-text'>chevron_right</i></a>"; break;

                     }
    break;

  // Completado
    case 2:
        switch ($r) {
            // Segun el rol
        case 1: echo $icon = $important  == 1 ? "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='../c/ac.php?m=read&aid={$aid}&qid={$qid}&iid={$sig}'>
        <i class='material-icons blue-text'>chevron_right</i></a>
        </a>" : "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='../c/ac.php?m=read&aid={$aid}&qid={$qid}&iid={$sig}'>
        <i class='material-icons blue-text'>chevron_right</i></a>
        </a>"; break;
        case 2:
        case 4: echo $icon = $important  == 1 ? "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='../c/ac.php?m=reviewerEdit&aid={$aid}&qid={$qid}&iid={$sig}'>
        <i class='material-icons blue-text'>chevron_right</i></a>
        </a>" : "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='../c/ac.php?m=reviewerEdit&aid={$aid}&qid={$qid}&iid={$sig}'>
        <i class='material-icons blue-text'>chevron_right</i></a>
        </a>"; break;
        case 3:
        case 5:
        default: echo $icon = $important  == 1 ? "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='javascript: void();'>
        <i class='material-icons blue-text'>chevron_right</i></a>
        </a>" : "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='javascript: void();'>
        <i class='material-icons blue-text'>chevron_right</i></a>
        </a>"; break;
                                                                
                    }
    break;

    // Por corregir
     case 3:
        switch ($r) {
        // Segun el rol
        case 1: echo $icon = $important  == 1 ? "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='../c/ac.php?m=edit&aid={$aid}&qid={$qid}&iid={$sig}'>
        <i class='material-icons blue-text'>chevron_right</i></a>
        </a>" : "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='../c/ac.php?m=edit&aid={$aid}&qid={$qid}&iid={$sig}'>
        <i class='material-icons blue-text'>chevron_right</i></a>
        </a>"; break;
        case 2:
        case 3:
        case 4:
        case 5:
        default: echo $icon = $important  == 1 ? "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='javascript: void();'>
        <i class='material-icons blue-text'>chevron_right</i></a>
        </a>" : "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='javascript: void();'>
        <i class='material-icons blue-text'>chevron_right</i></a>
        </a>"; break;
                                                                
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
         case 5: echo $icon = $important  == 1 ? "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='../c/ac.php?m=read&aid={$aid}&qid={$qid}&iid={$sig}'>
         <i class='material-icons blue-text'>chevron_right</i></a>
         </a>" : "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='../c/ac.php?m=read&aid={$aid}&qid={$qid}&iid={$sig}'>
         <i class='material-icons blue-text'>chevron_right</i></a>
         </a>"; break;
         default:
            if ($important  == 1) {
                if ($_SESSION["userAdmin"] == 3) {
                        echo "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='../c/ac.php?m=riskPartnerEdit&aid={$aid}&qid={$qid}&iid={$sig}'>
                        <i class='material-icons blue-text'>chevron_right</i></a>
                        </a>";
                    } else {
                        echo "";
                            }
                    } else {
                        echo "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='../c/ac.php?m=riskPartnerEdit&aid={$aid}&qid={$qid}&iid={$sig}'>
                        <i class='material-icons blue-text'>chevron_right</i></a>
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
            default: echo $icon = $important  == 1 ? "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='../c/ac.php?m=read&aid={$aid}&qid={$qid}&iid={$sig}'>
            <i class='material-icons black-text'>chevron_right</i></a>
            </a>" : "<a class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='../c/ac.php?m=read&aid={$aid}&qid={$qid}&iid={$sig}'>
            <i class='material-icons blue-text'>chevron_right</i></a>
            </a>"; break;
                                                                
        }
    break;

    // Por defecto
    default:
            switch ($r) {
            // Segun el rol
                case 1: echo "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='../c/ac.php?m=create&aid={$aid}&qid={$qid}&iid={$sig}' >
                <i class='material-icons blue-text'>chevron_right</i></a>
                </a>"; break;
                case 2:
                case 3:
                case 4:
                case 5:
                 default: echo "<a  class='btn blue-grey lighten-4 waves-effect tooltipped m-l-10' data-tooltip='Siguiente' href='javascript: void();'>
                 <i class='material-icons blue-text'>chevron_right</i></a>
                 </a>"; break;
            }
    break;
                                                        
}
}
