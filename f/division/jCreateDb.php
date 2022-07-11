<?php

// connection

include '../connection.php';

// module

$module = 'division';
$action = 'add';

// var

$divisionName = filter_var($_POST['divisionName'], FILTER_SANITIZE_STRING);

// verify

$_division = mysqli_query($master, "
    SELECT * FROM division
    WHERE divisionName = '" . $divisionName . "'
    AND divisionStatus = 1
");

$division = $_division -> fetch_object();

$divisionDb = $division -> divisionName;

if (strcasecmp($divisionName, $divisionDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO division
        (divisionName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $divisionName
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
