<?php

// connection

include '../connection.php';

// module

$module = 'plan';
$moduleId = 84;

$planName = $_POST['planName'];
$monto = $_POST['monto'];
$text1 = $_POST['text1'];
$text2 = $_POST['text2'];
$text3 = $_POST['text3'];
$text4 = $_POST['text4'];



// verify


    $insert = $master -> prepare ("
        INSERT INTO plan
        (planName, monto, text1, text2, text3, text4 )
        VALUES
        (?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "sissss",
        $planName, $monto, $text1, $text2, $text3, $text4
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
    
