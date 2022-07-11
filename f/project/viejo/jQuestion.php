<?php

// connect

include '../connection.php';

// var

$c = $_GET["c"] ?? '';
$i = $_GET["i"] ?? '';
$p = $_GET["p"] ?? '';

// select

$project = mysqli_query(
    $connection,
    "SELECT * FROM project
    INNER JOIN ac
    ON project.acId = ac.acId
    INNER JOIN client
    ON ac.clientId = client.clientId
    INNER JOIN service
    ON ac.serviceId = service.serviceId
    WHERE project.projectId = '" . $c . "'
");

$r_project = $project -> fetch_object();

// select

$_reviewerTeam = mysqli_query(
    $connection, "
    SELECT * FROM projectteam
    INNER JOIN user
    ON projectteam.userId = user.userId
    WHERE projectteam.designatedId = 2
");

// select

$_doerTeam = mysqli_query(
    $connection, "
    SELECT * FROM projectteam
    INNER JOIN user
    ON projectteam.userId = user.userId
    WHERE projectteam.designatedId = 1
");

// select

$riskPartnerTeam = mysqli_query(
    $connection, "
    SELECT * FROM user
    WHERE userStatus = 2
");

$r_riskPartnerTeam = $riskPartnerTeam -> fetch_object();

// select

$service = mysqli_query(
    $connection, "
    SELECT * FROM service
    WHERE serviceStatus = 1
");

$r_service = $service -> fetch_object();

// select

$nature = mysqli_query(
    $connection, "
    SELECT * FROM service
    INNER JOIN nature
    ON service.natureId = nature.natureId
    WHERE service.serviceId = '" . $r_service -> serviceId . "'
");

$r_nature = $nature -> fetch_object();

// select

$questionP = mysqli_query(
    $connection,
    "SELECT * FROM qplanning
    WHERE itemId = '" . $i . "'
");

$r_questionP = $questionP -> fetch_object();

// select

$questionS = mysqli_query(
    $connection,
    "SELECT * FROM qstrategy
    WHERE itemId = '" . $i . "'
");

$r_questionS = $questionS -> fetch_object();

// select

$questionE = mysqli_query(
    $connection,
    "SELECT * FROM qexecution
    WHERE itemId = '" . $i . "'
");

$r_questionE = $questionE -> fetch_object();

// select

$questionC = mysqli_query(
    $connection,
    "SELECT * FROM qconclusion
    WHERE itemId = '" . $i . "'
");

$r_questionC = $questionC -> fetch_object();

// select

$answer = mysqli_query(
    $connection,
    "SELECT * FROM projectplanninganswer
    WHERE projectId = '" . $c . "'
    AND projectIId = '" . $i . "'
");

$r_answer = $answer -> fetch_object();

// select

$completed = mysqli_query(
    $connection,
    "SELECT * FROM projectplanninganswer
    INNER JOIN user
    ON projectplanninganswer.projectDoerId = user.userId
    WHERE projectId = '" . $c . "'
    AND projectIId = '" . $i . "'
");

$r_completed = $completed -> fetch_object();

// select

$reviewed = mysqli_query(
    $connection,
    "SELECT * FROM projectplanninganswer
    INNER JOIN user
    ON projectplanninganswer.projectReviewerId = user.userId
    WHERE projectId = '" . $c . "'
    AND projectIId = '" . $i . "'
");

$r_reviewed = $reviewed -> fetch_object();

// select

$title = mysqli_query(
    $connection,
    "SELECT * FROM internalcontroltitle
");

// select

$subtitleA = mysqli_query(
    $connection, "
    SELECT * FROM internalcontrolsubtitle
    WHERE titleId = 1
");

// select

$subtitleB = mysqli_query(
    $connection, "
    SELECT * FROM internalcontrolsubtitle
    WHERE titleId = 2
");

// select

$subtitleC = mysqli_query(
    $connection, "
    SELECT * FROM internalcontrolsubtitle
    WHERE titleId = 3
");

// view

if ($p == 'p') {

    $phase = 'Planificaci&oacute;n';

    require_once '../v/project/jModel1.php';

}
elseif ($p == 's') {

    $phase = 'Estrategia';

    if ($i == 1) {
        
        require_once '../v/project/jModel2.php';
        
    }
    else {
        
        require_once '../v/project/jModel1.php';
        
    }
    
}
elseif ($p == 'e') {
    
    $phase = 'Ejecuci&oacute;n';

    if ($i < 9) {
        
        require_once '../v/project/jModel4.php';
        
    }
    elseif ($i == 9) {
        
        require_once '../v/project/jModel1.php';
        
    }
    elseif (
            $i > 9 &&
            $i < 16) {
        
        require_once '../v/project/jModel5.php';
        
    }
    elseif (
            $i == 16 or
            $i == 20 or
            $i == 22 or
            $i == 39 or
            $i == 52 or
            $i == 53 or
            $i == 61 or
            $i == 69 or
            $i == 76 or
            $i == 88 or
            $i == 90) {
        
        require_once '../v/project/jModel6.php';
        
    }
    else {
        
        require_once '../v/project/jModel5.php';
        
    }
}
elseif ($p == 'c') {

    $phase = 'Conclusi&oacute;n';
    
    if ($i < 12) {
        
        require_once '../v/project/jModel1.php';
        
    }
    else {
        
        require_once '../v/project/jModel7.php';
        
    }
    
}
