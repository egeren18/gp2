<?php

// connection

include '../connection.php';

// module

$module = 'status';
$action = 'add';

// var

$statusName = filter_var($_POST['statusName'], FILTER_SANITIZE_STRING);

// verify

$_status = mysqli_query($master, "
    SELECT * FROM status
    WHERE statusName = '" . $statusName . "'
    AND statusStatus = 1
");

$status = $_status -> fetch_object();

$statusDb = $status -> statusName ;

if (strcasecmp($statusName, $statusDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO status
        (statusName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $statusName
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
