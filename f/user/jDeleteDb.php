<?php

// connection

include '../connection.php';

// module

$module = 'user';
$action = 'delete';

// var

$userStatus = 0;

if ($_GET["id"] <= 2) {
    
    echo "<script> window.location='../c/{$module}.php?m=index&n=notAllowed'</script>";

}
else {
    
    // update

    $update = $master -> prepare ("
        UPDATE user
        SET
        userStatus = ?
        WHERE
        userId = ?
    ");

    $update -> bind_param (
        "ii",
        $userStatus, $_GET["id"]
    );

    $update -> execute();

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
    
    echo "<script> window.location='../c/{$module}.php?m=index&n=deleted'</script>";
    
}
