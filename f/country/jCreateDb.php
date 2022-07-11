<?php

// connection

include '../connection.php';

// module

$module = 'country';
$action = 'add';

// var

$countryName = filter_var($_POST['countryName'], FILTER_SANITIZE_STRING);

// verify

$_country = mysqli_query($master, "
    SELECT * FROM country
    WHERE countryName = '" . $countryName . "'
    AND countryStatus = 1
");

$country = $_country -> fetch_object();

$countryDb = $country -> countryName;

if (strcasecmp($countryName, $countryDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO country
        (countryName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $countryName
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
