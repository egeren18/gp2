<?php

// connection

include '../connection.php';

// module

$module = 'stareas';
$action = 'update';

// var
// set id


// set fields

$status = 2;

// update
    $update = $master -> prepare ("
        UPDATE stareas
        SET
        stareasStatus = ?
        WHERE
        stareasId = ?
    ");

    // configure parameters
    $update -> bind_param (
        "ii",
        $status, $_GET["d"]
    );

    // execute
    $update -> execute();

  // execute
 
  $id = $_GET["d"] ;


// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["id"]);

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";

