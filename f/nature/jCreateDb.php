<?php

// connection

include '../connection.php';

// module

$module = 'nature';
$action = 'add';

// var

$natureName = filter_var($_POST['natureName'], FILTER_SANITIZE_STRING);

// verify

$_nature = mysqli_query($master, "
    SELECT * FROM nature
    WHERE natureName = '" . $natureName . "'
    AND natureStatus = 1
");

$nature = $_nature -> fetch_object();

$natureDb = $nature -> natureName;

if (strcasecmp($natureName, $natureDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO nature
        (natureName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $natureName
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
