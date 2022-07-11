<?php

// connection

include '../connection.php';

// module

$module = 'oconsideraciones';
$action = 'add';

// var
$rubroId = $_POST['rubroId'];
$titulo = $_POST['titulo'];
$oconsideracionesText = $_POST['oconsideracionesText'];
$oconsideracionesText2 = $_POST['oconsideracionesText2'];


// verify

    $insert = $master -> prepare ("
        INSERT INTO oconsideraciones
        (rubroId, titulo, oconsideracionesText, oconsideracionesText2)
        VALUES
        (?,?,?,?)
    ");

    $insert -> bind_param (
        "isss",
        $rubroId, $titulo, $oconsideracionesText, $oconsideracionesText2
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
    

