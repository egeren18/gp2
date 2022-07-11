<?php

// connection

include '../connection.php';

// module

$module = 'qitem';
$action = 'add';

// var

$pid = $_GET['pid'];
$qitemNameM = filter_var($_POST['qitemNameM'], FILTER_SANITIZE_STRING);
$itemName = filter_var($_POST['itemName'], FILTER_SANITIZE_STRING);
$itemArea = $_POST['itemArea'];

    $insert = $master -> prepare ("
        INSERT INTO qitem
        (qitemNameM, itemName, itemArea, questId)
        VALUES
        (?,?,?,?)
    ");

    $insert -> bind_param (
        "ssii",
        $qitemNameM, $itemName, $itemArea, $pid
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

    echo "<script> window.location='../c/{$module}.php?m=list&n=added&pid={$pid}'</script>";
    


