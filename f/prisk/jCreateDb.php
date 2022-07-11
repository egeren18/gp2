<?php

// connection

include '../connection.php';
include '../connection2.php';

// module

$module = 'prisk';
$action = 'add';

// var
$d = date('d-m-y / g:i a');
$priskName = $_POST['priskName'];
$priskText = $_POST['priskText'];


// verify



$_prisk = mysqli_query($master, "
    SELECT * FROM prisk
    WHERE priskName = '" . $priskName . "'
    AND priskStatus = 1
");

$prisk = $_prisk -> fetch_object();

$priskDb = $prisk -> priskName;

if (strcasecmp($priskName, $priskDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO prisk
        (priskName, priskText, date)
        VALUES
        (?,?,?)
    ");

    $insert -> bind_param (
        "sss",
        $priskName, $priskText, $d
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
