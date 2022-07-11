<?php

// connection

include '../connection.php';

// var

$c = $_POST["clientId"];
$uid = $_SESSION["userId"];

// select

$client = mysqli_query(
    $connection, "
    SELECT * FROM client
    WHERE clientId = '" . $c . "'
");

$r_client = $client -> fetch_object();

// select

$l1 = mysqli_query(
    $connection, "
    SELECT * FROM user
    WHERE userId = '" . $uid . "'
");

$r_l1 = $l1 -> fetch_object();

$_SESSION["l1"] = $r_l1 -> userAdmin;

$l1 = $_SESSION["l1"];

// select

$ac = mysqli_query(
    $connection, "
    SELECT * FROM ac
    INNER JOIN client
    ON ac.clientId = client.clientId
    INNER JOIN service
    ON ac.serviceId = service.serviceId
    INNER JOIN nature
    ON service.natureId = nature.natureId
");

$r_ac = $ac -> fetch_object();

// view

require_once '../v/project/jDetail.php';
