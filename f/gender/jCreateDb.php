<?php

// connection

include '../connection.php';

// module

$module = 'gender';
$action = 'add';

// var

$genderName = filter_var($_POST['genderName'], FILTER_SANITIZE_STRING);

// verify

$_gender = mysqli_query($master, "
    SELECT * FROM gender
    WHERE genderName = '" . $genderName . "'
    AND genderStatus = 1
");

$gender = $_gender -> fetch_object();

$genderDb = $gender -> genderName;

if (strcasecmp($genderName, $genderDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO gender
        (genderName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $genderName
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
