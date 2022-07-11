<?php

// connection

include '../connection.php';

// module

$module = 'cDesk';
$action = 'add';

// var

$cDeskName = filter_var($_POST['cDeskName'], FILTER_SANITIZE_STRING);

// verify

$_cDesk = mysqli_query($master, "
    SELECT * FROM cdesk
    WHERE cDeskName = '" . $cDeskName . "'
    AND cDeskStatus = 1
");

$cDesk = $_cDesk -> fetch_object();

$cDeskDb = $cDesk -> cDeskName;

if (strcasecmp($cDeskName, $cDeskDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO cdesk
        (cDeskName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $cDeskName
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
