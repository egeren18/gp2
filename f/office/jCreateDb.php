<?php

// connection

include '../connection.php';

// module

$module = 'office';
$action = 'add';

// var

$officeName = filter_var($_POST['officeName'], FILTER_SANITIZE_STRING);

// verify

$_office = mysqli_query($master, "
    SELECT * FROM office
    WHERE officeName = '" . $officeName . "'
    AND officeStatus = 1
");

$office = $_office -> fetch_object();

$officeDb = $office -> officeName;

if (strcasecmp($officeName, $officeDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO office
        (officeName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $officeName
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
