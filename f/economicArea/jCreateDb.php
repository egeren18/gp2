<?php

// connection

include '../connection.php';

// module

$module = 'economicArea';
$action = 'add';

// var

$economicAreaName = filter_var($_POST['economicAreaName'], FILTER_SANITIZE_STRING);

// verify

$_economicArea = mysqli_query($master, "
    SELECT * FROM economicarea
    WHERE economicAreaName = '" . $economicAreaName . "'
    AND economicAreaStatus = 1
");

$economicArea = $_economicArea -> fetch_object();

$economicAreaDb = $economicArea -> economicAreaName;

if (strcasecmp($economicAreaName, $economicAreaDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO economicarea
        (economicAreaName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $economicAreaName
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
