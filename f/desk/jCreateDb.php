<?php

// connection

include '../connection.php';

// module

$module = 'desk';
$action = 'add';

// var

$cdesk= $_POST['cdesk'];
$desk = $_POST['desk'];

$update = $master -> prepare ("
    UPDATE module
    SET
    cDeskId = ?
    WHERE
    moduleId = ?
");	

$update -> bind_param (
    "ii",
    $cdesk, $desk
);

$update -> execute();
    
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

    echo "<script> window.location='../c/{$module}.php?m=list&n=added&pid={$cdesk}'</script>";

