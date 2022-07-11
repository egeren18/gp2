<?php

// connection

include '../connection.php';

include '../allow.php';

// select
$tsacId = $_GET["tsacId"];
$cacId = $_GET["cacId"];
$cuestionarioId = $_GET["cuestionarioId"];
$g = $_GET["g"] ;

// select

$_country = mysqli_query($master, "
    SELECT * FROM tsac
    WHERE tsacId = '" . $tsacId . "'
");

$country = $_country -> fetch_object();
$tsacName = $country -> tsacName;



$_cc = mysqli_query($tipoc, "
    SELECT * FROM cuestionario1_1
    WHERE cacId = '". $cacId . "'
    
");

$c = $_cc -> fetch_object();
$cn = $c -> cacName;


// view

require_once '../v/cac/jUpdate.php';







