<?php

// connection

include '../connection.php';
include '../connection2.php';

// var
$termycondId = $_POST["clientId"];

$_termycond = mysqli_query(
    $master,
    "SELECT * FROM termycond
    WHERE termycondId = '" . $termycondId .  "'
");

$termycond = $_termycond -> fetch_object();

$clientId = $termycond -> clientId;
$serviceId = $termycond -> serviceId;
$userId = $termycond -> userId;
$userId2 = $termycond -> userId2;

$_masterdata = mysqli_query(
    $app,
    "SELECT * FROM project
    WHERE serviceId = '" . $serviceId .  "'
");

$_client = mysqli_query(
    $master,
    "SELECT * FROM client
    WHERE clientId = '" . $clientId .  "'
");
$client = $_client -> fetch_object();
$clientName = $client -> clientName;

$_service = mysqli_query(
    $master,
    "SELECT * FROM service
    WHERE serviceId = '" . $serviceId .  "'
");
$service = $_service -> fetch_object();
$serviceName = $service -> serviceName;

$_user = mysqli_query(
    $master,
    "SELECT * FROM user
    WHERE userId = '" . $userId .  "'
");
$user = $_user -> fetch_object();
$userName = $user -> userName;


$_user2 = mysqli_query(
    $master,
    "SELECT * FROM user
    WHERE userId = '" . $userId2 .  "'
");

$user2 = $_user2 -> fetch_object();
$userName2 = $user2 -> userName;

$_frecuencia = mysqli_query(
    $connection,
    "SELECT * FROM frecuencia
    WHERE termycondId = '" . $termycondId .  "'
");

$frecuencia = $_frecuencia -> fetch_object();
$frecuenciaN = $frecuencia -> frecuencia;



require_once '../v/project/jCreatet.php';

