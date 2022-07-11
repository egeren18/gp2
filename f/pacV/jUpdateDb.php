<?php

// connection

include '../connection.php';

// module

$module = 'pac';
$action = 'update';

// var

$preguntaName = $_POST['preguntaName'];

// update

$update = $master -> prepare ("
    UPDATE pac
    SET
    pacName = ?
    WHERE
    pacId = ?
");	

$update -> bind_param (
    "si",
    $preguntaName, $_GET["cid"]
);

$update -> execute();


    foreach ($_POST['preguntasC'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;

        $update = $master -> prepare ("
            UPDATE scpac SET
            access = ?
            WHERE
            cacId = ?
            AND pacId = ?
        ");	

        $update -> bind_param (
            "iii",
            $jAccess, $value, $_GET["cid"]
        );

        $update -> execute();

}


// trace
$action ="Edit";
$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["cid"]);

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=list&n=updated&pid={$_GET["pid"]}'</script>";
