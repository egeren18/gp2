<?php

// connection

include '../connection.php';

// var

$n = $_GET["n"] ?? '';

// select

$client = mysqli_query(
    $connection, "
    SELECT * FROM ac
    INNER JOIN client
    ON ac.clientId = client.clientId
    LEFT JOIN tracing
    ON ac.acId = tracing.acId
    LEFT JOIN tracingopinion
    ON ac.acId = tracingopinion.acId
    LEFT JOIN tracingriskpartneropinion
    ON ac.acId = tracingriskpartneropinion.acId
    WHERE ac.acStatus = 1
    AND client.clientStatus = 1
    AND tracing.term = 2
    AND tracingopinion.decision = 2
    AND tracingriskpartneropinion.decision = 2
");

// select

$service = mysqli_query(
    $connection,
    "SELECT * FROM service
    WHERE serviceStatus = 1
");

$access = $_SESSION["l1"] == 1 ? require_once '../v/project/jAdd.php' : '<script> window.location="../c/project.php?m=list&n=denied"; </script>' ;
