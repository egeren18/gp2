<?php

// connection

include '../connection.php';

// module

$module = 'level';
$action = 'add';

// var

$levelName = filter_var($_POST['levelName'], FILTER_SANITIZE_STRING);

// verify

$_level = mysqli_query($master, "
    SELECT * FROM level
    WHERE levelName = '" . $levelName . "'
    AND levelStatus = 1
");

$level = $_level -> fetch_object();

$levelDb = $level -> levelName;

if (strcasecmp($levelName, $levelDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO level
        (levelName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $levelName
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
