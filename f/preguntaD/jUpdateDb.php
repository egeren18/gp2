<?php

// connection

include '../connection.php';

// module

$module = 'preguntaD';
$action = 'update';

// var

$preguntaName = filter_var($_POST['preguntaName'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE pregunta
    SET
    preguntaName = ?
    WHERE
    preguntaId = ?
");	

$update -> bind_param (
    "si",
    $preguntaName, $_GET["cid"]
);

$update -> execute();


    foreach ($_POST['preguntasC'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;

        $update = $master -> prepare ("
            UPDATE dcp SET
            access = ?
            WHERE
            categoriasId = ?
            AND preguntaId = ?
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
