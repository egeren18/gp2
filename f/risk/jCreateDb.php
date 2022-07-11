<?php

// connection

include '../connection.php';

// module

$module = 'risk';
$action = 'add';

// var

$riskName = filter_var($_POST['riskName'], FILTER_SANITIZE_STRING);

// verify

$_risk = mysqli_query($master, "
    SELECT * FROM risk
    WHERE riskName = '" . $riskName . "'
    AND riskStatus = 1
");

$risk = $_risk -> fetch_object();

$riskDb = $risk -> riskName;

if (strcasecmp($riskName, $riskDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO risk
        (riskName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $riskName
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
