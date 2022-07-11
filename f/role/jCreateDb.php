<?php

// connection

include '../connection.php';

// module

$module = 'role';
$action = 'add';

// var

$roleName = filter_var($_POST['roleName'], FILTER_SANITIZE_STRING);

// verify

$_role = mysqli_query($master, "
    SELECT * FROM role
    WHERE roleName = '" . $roleName . "'
    AND roleStatus = 1
");

$role = $_role -> fetch_object();

$roleDb = $role -> roleName ;

if (strcasecmp($roleName, $roleDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO role
        (roleName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $roleName
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

    echo "<script> window.location='../c/{$module}.php?m=list&n=duplicated'</script>";

}
