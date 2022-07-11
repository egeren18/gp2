<?php

/*
 * Iniciar una nueva sesión o reanudar la existente.
 */

session_start();

/*
 * Variables
 */

$module = "ac";
$moduleId = 27;

/*
 * incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';
include '../allow.php';

/*
 * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
 */

require_once '../m/main.php';
require_once '../m/ac.php';

/*
 * Variables
 */

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();
/*
 * Variables
 */

$mode = $_GET["m"];

/*
 * Es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.
 */

switch ($_SESSION["userTypeId"]) {
    
    case 2:

        switch ($mode) {

            // Vista de inicio de AC
            case 'index': $ac -> jIndex($moduleId); $main -> jFooter(); break;
            case 'descarte': $ac -> jDescarte($moduleId); $main -> jFooter(); break;
            case 'descarteDb': $ac -> jDescarteDb($moduleId); $main -> jFooter(); break;
            case 'm1': $ac -> jM1($moduleId); $main -> jFooter(); break;
            // CERRAR AC
            case 'updateTracingDb': $ac -> jUpdateTracingDb($moduleId); $main -> jFooter(); break;
            // CERRAR AC 2
            case 'updateTracingDb2': $ac -> jUpdateTracingDb2($moduleId); $main -> jFooter(); break;
             // CERRAR AC 3
            case 'updateTracingDb3': $ac -> jUpdateTracingDb3($moduleId); $main -> jFooter(); break;
            // Vista de AC
            case 'questionnaire': $ac -> jQuestionnaire($moduleId); $main -> jFooter(); break;
            // Vista de AC
            case 'questionnaire1': $ac -> jQuestionnaire1($moduleId); $main -> jFooter(); break;

            // Vista de AC
            case 'questionnaire2': $ac -> jQuestionnaire2($moduleId); $main -> jFooter(); break;

            // Vista de AC
            case 'questionnaire3': $ac -> jQuestionnaire3($moduleId); $main -> jFooter(); break;

            // Vista de AC
        
            case 'questionnaire4': $ac -> jQuestionnaire4($moduleId); $main -> jFooter(); break;

            // Vista de AC
            case 'questionnaire5': $ac -> jQuestionnaire5($moduleId); $main -> jFooter(); break;

            // Vista de crear AC
            case 'add': $ac -> jAdd($moduleId); $main -> jFooter(); break;

            // Seleccionar modelo de cuestionario
            case 'model': $ac -> jModel($moduleId); break;

            // Vista de integrantes del equipo
            case 'team': $ac -> jTeam($moduleId); $main -> jFooter(); break;

            // Registrar integrantes del equipo
            case 'teamCreate': $ac -> jTeamCreate($moduleId); break;
            
            // Actualizar integrantes del equipo
            case 'teamUpdate': $ac -> jTeamUpdate($moduleId); break;

            // Eliminar integrantes del equipo
            case 'teamDelete': $ac -> jTeamDelete($moduleId); break;

            // Item
            case 'create': $ac -> jCreate($moduleId); $main -> jFooter(); break;
            
            // Registrar item
            case 'insert': $ac -> jInsert($moduleId); break;

            // Editar item
            case 'edit': $ac -> jEdit($moduleId); $main -> jFooter(); break;
            
            // Editar item
            case 'reviewerEdit': $ac -> jReviewerEdit($moduleId); $main -> jFooter(); break;
            
            // Editar item
            case 'riskPartnerEdit': $ac -> jRiskPartnerEdit($moduleId); $main -> jFooter(); break;
            
            // Editar matriz
            case 'matrixEdit': $ac -> jMatrixEdit($moduleId); $main -> jFooter(); break;
            
            // Actualizar item
            case 'update': $ac -> jUpdate($moduleId); break;

            // Modo lectura item
            case 'read': $ac -> jRead($moduleId); $main -> jFooter(); break;
            
            // Actualizar revisor
            case 'reviewerUpdate': $ac -> jReviewerUpdate($moduleId); break;

            // Actualizar revisor
            case 'riskPartnerUpdate': $ac -> jRiskPartnerUpdate($moduleId); break;
        
        }
        break;

    default: $main -> jError(); $main -> jFooter(); break;

}

/*
            case 'item':
                $ac->jItem();
                $main->jFooter();
                break;

            case 'createDb':
                echo $view = $allow -> jAdd == 1 ?
                "{$accessGP -> jcreateDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'update':
                echo $view = $allow -> jUpdate == 1 ?
                "{$accessGP -> jUpdate()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            case 'updateDb':
                echo $view = $allow -> jUpdate == 1 ?
                "{$accessGP -> jUpdateDb()}" : "{$main -> jNotAllowed($module)}";
                $main -> jFooter();
                break;

            default:
                $main -> jError();
                $main -> jFooter();

switch ($mode) {

    case 'index':
        $main -> jHeader();
        $main -> jNavbar();
        $ac -> jIndex();
        $main -> jFooter();
        break;

    case 'add':
        $main -> jHeader();
        $main -> jNavbar();
        $ac -> jAdd();
        $main -> jFooter();
        break;

    case 'client':
        $main -> jHeader();
        $main -> jNavbar();
        $ac -> jClient();
        $main -> jFooter();
        break;

    case 'acList':
        $main -> jHeader();
        $main -> jNavbar();
        $ac -> jAcList();
        $main -> jFooter();
        break;

    case 'item':
        $main -> jHeader();
        $main -> jNavbar();
        $ac -> jItem();
        $main -> jFooter();
        break;

    case 'team':
        $main -> jHeader();
        $main -> jNavbar();
        $ac -> jTeam();
        $main -> jFooter();
        break;

    case 'teamList':
        $main -> jHeader();
        $main -> jNavbar();
        $ac -> jTeamList();
        $main -> jFooter();
        break;

    case 'teamDb':
        $ac -> jTeamDb();
        break;

    case 'acreateDb':
        $ac -> jAcreateDb();
        break;

    case 'riskPartner':
        $main -> jHeader();
        $main -> jNavbar();
        $ac -> jRiskPartner();
        $main -> jFooter();
        break;

    case 'updateTracingOpinionDb':
        $ac -> jUpdateTracingOpinionDb();
        break;

    case 'updateTracingRiskPartnerOpinionDb';
        $ac -> jUpdateTracingRiskPartnerOpinionDb();
        break;
    
    case 'updateTracingDb':
        $ac -> jUpdateTracingDb();
        break;

    case 'addPlanningDb':
        $ac -> jAddPlanningDb();
        break;

    case 'updatePlanning':
        $main -> jHeader();
        $main -> jNavbar();
        $ac -> jUpdatePlanning();
        $main -> jFooter();
        break;

    case 'updatePlanningDb':
        $ac -> jUpdatePlanningDb();
        break;

    case 'deletePlanningDb':
        $ac -> jDeletePlanningDb();
        break;

    case 'addSchemeDb':
        $ac -> jAddSchemeDb();
        break;

    case 'updateScheme':
        $main -> jHeader();
        $main -> jNavbar();
        $ac -> jUpdateScheme();
        $main -> jFooter();
        break;

    case 'updateSchemeDb':
        $ac -> jUpdateSchemeDb();
        break;

    case 'deleteSchemeDb':
        $ac -> jDeleteSchemeDb();
        break;

    case 'backDb':
        $ac -> jBackDb();
        break;

    case 'createDb':
        $ac -> jcreateDb();
        break;

    case 'update':
        $main -> jHeader();
        $main -> jNavbar();
        $ac -> jUpdate();
        $main -> jFooter();
        break;

    case 'updateDb':
        $ac -> jUpdateDb();
        break;

    case 'clientDetail':
        $main -> jHeader();
        $main -> jNavbar();
        $ac -> jClientDetail();
        $main -> jFooter();
        break;

    case 'clientTeam':
        $main -> jHeader();
        $main -> jNavbar();
        $ac -> jClientTeam();
        $main -> jFooter();
        break;

    case 'delete':
        $main -> jHeader();
        $main -> jNavbar();
        $ac -> jDelete();
        $main -> jFooter();
        break;

    case 'deleteDb':
        $ac -> jDeleteDb();
        break;

    default:
        $main -> jError();
        $main -> jFooter();
}
*/
