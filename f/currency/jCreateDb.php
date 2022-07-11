<?php

// connection

include '../connection.php';

// module

$module = 'currency';
$action = 'add';

// var

$currencyName = filter_var($_POST['currencyName'], FILTER_SANITIZE_STRING);

// verify

$_currency = mysqli_query($master, "
    SELECT * FROM currency
    WHERE currencyName = '" . $currencyName . "'
    AND currencyStatus = 1
");

$currency = $_currency -> fetch_object();

$currencyDb = $currency -> currencyName;

if (strcasecmp($currencyName, $currencyDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO currency
        (currencyName)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "s",
        $currencyName
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
