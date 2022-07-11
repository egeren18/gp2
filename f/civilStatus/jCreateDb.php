<?php

// connection

include '../connection.php';

// module

$module = 'civilStatus';
$action = 'add';

// var

$civilStatusName = filter_var($_POST['civilStatusName'], FILTER_SANITIZE_STRING);

// verify

$_civilStatus = mysqli_query($master, "
    SELECT * FROM civilstatus
    WHERE civilStatusName = '" . $civilStatusName . "'
    AND civilStatusStatus = 1
");

$civilStatus = $_civilStatus -> fetch_object();

$civilStatusDb = $civilStatus -> civilStatusName;

if (strcasecmp($civilStatusName, $civilStatusDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO civilstatus
        (civilStatusName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $civilStatusName
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
