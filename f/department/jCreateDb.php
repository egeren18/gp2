<?php

// connection

include '../connection.php';

// module

$module = 'department';
$action = 'add';

// var

$departmentName = filter_var($_POST['departmentName'], FILTER_SANITIZE_STRING);

// verify

$_department = mysqli_query($master, "
    SELECT * FROM department
    WHERE departmentName = '" . $departmentName . "'
    AND departmentStatus = 1
");

$department = $_department -> fetch_object();

$departmentDb = $department -> departmentName;

if (strcasecmp($departmentName, $departmentDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO department
        (departmentName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $departmentName
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
