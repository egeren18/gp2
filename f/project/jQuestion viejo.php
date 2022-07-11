<?php

// connect

include '../connection.php';
include '../connection2.php';

// var

$c = $_GET["c"];
$i = $_GET["i"];
$p = $_GET["p"];

// select

$_project = mysqli_query($connection, "SELECT * FROM project INNER JOIN ac ON project.acId = ac.acId INNER JOIN client ON ac.clientId = client.clientId WHERE project.projectId = '" . $c . "'");
$project = $_project -> fetch_object();

// select

$_leader = mysqli_query($connection, "SELECT * FROM projectteam WHERE projectId = '" . $project -> projectId . "' AND  designatedId = 7");

// select

$_consultant = mysqli_query($connection, "SELECT * FROM projectteam WHERE projectId = '" . $project -> projectId . "' AND  designatedId = 6");

// select

$riskPartner = mysqli_query($master, "SELECT * FROM user WHERE userStatus = 2");
$r_riskPartner = $riskPartner -> fetch_object();

// select

$_service = mysqli_query($master, "SELECT * FROM service WHERE serviceStatus = 1");
$service = $_service -> fetch_object();

// select

$_nature = mysqli_query($master, "SELECT * FROM service INNER JOIN nature ON service.natureId = nature.natureId WHERE service.serviceId = '" . $service -> serviceId . "'");
$nature = $_nature -> fetch_object();

// select

$questionP = mysqli_query($master, "SELECT * FROM qplanning WHERE itemId = '" . $i . "'");
$r_questionP = $questionP -> fetch_object();

// select

$questionS = mysqli_query($master, "SELECT * FROM qstrategy WHERE itemId = '" . $i . "'");
$r_questionS = $questionS -> fetch_object();

// select

$questionE = mysqli_query($master, "SELECT * FROM qexecution WHERE itemId = '" . $i . "'");
$r_questionE = $questionE -> fetch_object();

// select

$questionC = mysqli_query($master, "SELECT * FROM qconclusion WHERE itemId = '" . $i . "'");
$r_questionC = $questionC -> fetch_object();

// select

$answer = mysqli_query($connection, "SELECT * FROM projectplanninganswer WHERE projectId = '" . $c . "' AND projectIId = '" . $i . "'");
$r_answer = $answer -> fetch_object();

// select

$completed = mysqli_query($connection, "SELECT * FROM projectplanninganswer WHERE projectId = '" . $c . "' AND projectIId = '" . $i . "'");
$r_completed = $completed -> fetch_object();

// select

$reviewed = mysqli_query($connection, "SELECT * FROM projectplanninganswer WHERE projectId = '" . $c . "' AND projectIId = '" . $i . "'");
$r_reviewed = $reviewed -> fetch_object();

// select

$title = mysqli_query($master, "SELECT * FROM internalcontroltitle");

// select

$subtitleA = mysqli_query($master, "SELECT * FROM internalcontrolsubtitle WHERE titleId = 1");

// select

$subtitleB = mysqli_query($master, "SELECT * FROM internalcontrolsubtitle WHERE titleId = 2");

// select

$subtitleC = mysqli_query($master, "SELECT * FROM internalcontrolsubtitle WHERE titleId = 3");

// view

switch ($p) {
    
    // obtenemos la fase del item a contestar
    
    case "p":

        $phase = 'Planificaci&oacute;n';
        
        switch ($i) {
            
            // obtenemos el numero del item y le asignamos el modelo definido al numero de item.
            
            case 14:
                require_once '../v/project/planning/jModel3.php';
                break;

            default:
                require_once '../v/project/planning/jModel1.php';
                break;
        }
        break;

    case "s":
        
        $phase = 'Estrategia';
        
        switch ($i) {
            
            // obtenemos el numero del item y le asignamos el modelo definido al numero de item.
            
            case 1:
                require_once '../v/project/strategy/jModel2.php';
                break;

            default:
                require_once '../v/project/strategy/jModel1.php';
                break;
        }
        break;

    case "e":
        
        $phase = 'Ejecuci&oacute;n';

        switch ($i) {
            
            // obtenemos el numero del item y le asignamos el modelo definido al numero de item.
            
            case 1: case 2: case 3: case 4: case 5: case 6: case 7:
            case 8:
                require_once '../v/project/execution/jModel4.php';
                break;

            case 9:
                require_once '../v/project/execution/jModel1.php';
                break;

            case 16: case 20: case 22: case 39: case 52: case 53: case 61:
            case 69: case 76: case 88: case 90:
                require_once '../v/project/execution/jModel6.php';
                break;

            default:
                require_once '../v/project/execution/jModel5.php';
                break;
        }
        break;

    case "c":

        $phase = 'Conclusi&oacute;n';

        switch ($i) {
            
            // obtenemos el numero del item y le asignamos el modelo definido al numero de item.
            
            case 12: case 13:
                require_once '../v/project/conclusion/jModel7.php';
                break;

            default:
                require_once '../v/project/conclusion/jModel1.php';
                break;
        }
        break;

    default:
        break;
}
