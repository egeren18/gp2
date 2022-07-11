<?php

// connection

include '../connection.php';

// module

$module = 'cmodal';
$action = 'add';

// var

$cmodalName = filter_var($_POST['cmodalName'], FILTER_SANITIZE_STRING);

// verify

$_cmodal = mysqli_query($master, "
    SELECT * FROM cmodal
    WHERE cmodalName = '" . $cmodalName . "'
    AND cmodalStatus = 1
");

$cmodal = $_cmodal -> fetch_object();

$cmodalDb = $cmodal -> cmodalName;

if (strcasecmp($cmodalName, $cmodalDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO cmodal
        (cmodalName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $cmodalName
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
