<?php

// connection

include '../connection.php';

// module

$module = 'service';
$action = 'add';

// var

$natureId = $_POST['natureId'];
$serviceName = filter_var($_POST['serviceName'], FILTER_SANITIZE_STRING);

// verify

$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceName = '" . $serviceName . "'
    AND serviceStatus = 1
");

$service = $_service -> fetch_object();

$serviceDb = $service -> serviceName;

if (strcasecmp($serviceName, $serviceDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO service
        (natureId, serviceName)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "is",
        $natureId, $serviceName
    );

    $insert -> execute();
    
    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";
    
}
else {

    echo "<script> window.location='../c/{$module}.php?m=index&n=duplicated'</script>";

}
