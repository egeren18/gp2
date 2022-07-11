<?php

// connection

include '../connection.php';

// var

$c = $_GET["c"] ?? '';
$q = $_GET["q"] ?? '';
$n = $_GET["n"] ?? '';
$i = $_GET["i"] ?? '';
$userId = $_SESSION["userId"];

// select

$ac = mysqli_query(
    $connection, "
    SELECT * FROM ac
    INNER JOIN client
    ON ac.clientId = client.clientId
    INNER JOIN service
    ON ac.serviceId = service.serviceId
    WHERE ac.acId = '" . $c . "'
");

$r_ac = $ac -> fetch_object();

// select

$reviewer = mysqli_query(
    $connection, "
    SELECT * FROM user
    WHERE userAdmin = 1
    AND userStatus = 1
    
");

// select

$doer = mysqli_query(
    $connection, "
    SELECT * FROM user
    WHERE userStatus = 1
");

// select

$reviewerTeam = mysqli_query(
    $connection,
    "SELECT * FROM acteam
    WHERE acId = '" . $c . "'
");

$r_reviewerTeam = $reviewerTeam -> fetch_object();

// select

$doerTeam = mysqli_query(
    $connection,
    "SELECT * FROM acteam
    WHERE acId = '" . $c . "'
");

$r_doerTeam = $doerTeam -> fetch_object();

// select

$riskPartnerTeam = mysqli_query(
    $connection, "
    SELECT * FROM user
    WHERE userStatus = 2
");

$r_riskPartnerTeam = $riskPartnerTeam -> fetch_object();

// select

$nature = mysqli_query(
    $connection,
    "SELECT * FROM service
    INNER JOIN nature
    ON service.natureId = nature.natureId
    WHERE service.serviceId = '" . $r_ac -> serviceId . "'
");

$r_nature = $nature -> fetch_object();

// select

$question = mysqli_query(
    $connection,
    "SELECT * FROM qm" . $q . "
    WHERE itemId = '" . $i . "'
");

$r_question = $question -> fetch_object();

// select

$answer = mysqli_query(
    $connection,
    "SELECT * FROM acanswer
    WHERE acId = '" . $c . "'
    AND acQId = '" . $q . "'
    AND acIId = '" . $i . "'
");

$r_answer = $answer -> fetch_object();

// select

$completed = mysqli_query(
    $connection,
    "SELECT * FROM acanswer
    INNER JOIN user
    ON acanswer.acDoerId = user.userId
    WHERE acId = '" . $c . "'
    AND acQId = '" . $q . "'
    AND acIId = '" . $i . "'
");

$r_completed = $completed -> fetch_object();

// select

$reviewed = mysqli_query(
    $connection,
    "SELECT * FROM acanswer
    INNER JOIN user
    ON acanswer.acReviewerId = user.userId
    WHERE acId = '" . $c . "'
    AND acQId = '" . $q . "'
    AND acIId = '" . $i . "'
");

$r_reviewed = $reviewed -> fetch_object();

/* select *********************************************************************/

$teamGroup = 0;

$group = mysqli_query(
    $connection,
    "SELECT * FROM interestgroup
    WHERE groupStatus = 1
");

/* select *********************************************************************/

$matrix = mysqli_query(
    $connection,
    "SELECT * FROM qmatrix
");

/* select *********************************************************************/

$qty = mysqli_query(
    $connection,
    "SELECT COUNT(r) AS q
    FROM acmatrix
    WHERE acId = '" . $c . "'
    AND r > 0
");

$r_qty = mysqli_fetch_array($qty);

$qty = $r_qty['q'];

/* select *********************************************************************/

$sum = mysqli_query(
    $connection,
    "SELECT SUM(r) AS s
    FROM acmatrix
    WHERE acId = '" . $c . "'
    AND r > 0
");

$r_sum = mysqli_fetch_array($sum);

$sum = $r_sum['s'];

@$average = $sum / $qty;

/* switch *********************************************************************/

switch ($average) {

    case $average < 1.5 : $average = 'Bajo';
        break;
    case $average >= 1.5 && $average < 2.5 : $average = 'Bajo - Moderado';
        break;
    case $average >= 2.5 && $average < 3.5 : $average = 'Moderado';
        break;
    case $average >= 3.5 && $average < 4.5 : $average = 'Moderado - Alto';
        break;
    case $average >= 4.5 && $average <= 5 : $average = 'Alto';
        break;
    default : $average = 'No Aplica';
        break;
    
}

/* view ***********************************************************************/

require_once '../v/ac/jQuestion.php';
    