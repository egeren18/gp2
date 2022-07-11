<?php

// connection

include '../connection.php';

// module

$module = 'sac';
$action = 'add';

// var
$serviceId = $_GET['serviceId'];
$sacc1 = $_GET['sacc1'];
$sacp1 = $_GET['sacp1'];



$d = date('d-m-y / g:i a');

if($serviceId == 1){
    
    
    foreach ($_POST['preguntasC1'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;
        
$_m1 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 
    AND pacId = '" . $value . "' 
");

$m1 = $_m1 -> fetch_object();

$pacName = $m1 -> pacName;
$pap = $m1 -> pap;
$date = $m1 -> date;
$version = $m1 -> version;
$mId = $m1 -> mId;
$cacId = $m1 -> cacId;
        
        
    $insert = $master -> prepare ("
        INSERT INTO m11
        (mId, pacId, pacName, serviceId, cacId, pap, date)
        VALUES
        (?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iisiiss",
        $mId, $value, $pacName, $serviceId, $cacId, $pap, $date
    );

    $insert -> execute();

    }
        foreach ($_POST['preguntasC2'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;
        
$_m1 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 
    AND pacId = '" . $value . "' 
");

$m1 = $_m1 -> fetch_object();

$pacName = $m1 -> pacName;
$pap = $m1 -> pap;
$date = $m1 -> date;
$version = $m1 -> version;
$mId = $m1 -> mId;
$cacId = $m1 -> mId;
        
        
    $insert = $master -> prepare ("
        INSERT INTO m11
        (mId, pacId, pacName, serviceId, cacId, pap, date)
        VALUES
        (?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iisiiss",
        $mId, $value, $pacName, $serviceId, $cacId, $pap, $date
    );

    $insert -> execute();

    }
            foreach ($_POST['preguntasC3'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;
        
$_m1 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 
    AND pacId = '" . $value . "' 
");

$m1 = $_m1 -> fetch_object();

$pacName = $m1 -> pacName;
$pap = $m1 -> pap;
$date = $m1 -> date;
$version = $m1 -> version;
$mId = $m1 -> mId;
$cacId = $m1 -> mId;
        
        
    $insert = $master -> prepare ("
        INSERT INTO m11
        (mId, pacId, pacName, serviceId, cacId, pap, date)
        VALUES
        (?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iisiiss",
        $mId, $value, $pacName, $serviceId, $cacId, $pap, $date
    );

    $insert -> execute();

    }
            foreach ($_POST['preguntasC4'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;
        
$_m1 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 
    AND pacId = '" . $value . "' 
");

$m1 = $_m1 -> fetch_object();

$pacName = $m1 -> pacName;
$pap = $m1 -> pap;
$date = $m1 -> date;
$version = $m1 -> version;
$mId = $m1 -> mId;
$cacId = $m1 -> mId;
        
        
    $insert = $master -> prepare ("
        INSERT INTO m11
        (mId, pacId, pacName, serviceId, cacId, pap, date)
        VALUES
        (?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iisiiss",
        $mId, $value, $pacName, $serviceId, $cacId, $pap, $date
    );

    $insert -> execute();

    }
    // view
     echo "<script> window.location='../c/{$module}.php?m=create3&serviceId={$serviceId}&sacc1={$sacc1}&sacp1={$sacp1}'</script>";
    
}
        foreach ($_POST['preguntasC5'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;
        
$_m1 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 
    AND pacId = '" . $value . "' 
");

$m1 = $_m1 -> fetch_object();

$pacName = $m1 -> pacName;
$pap = $m1 -> pap;
$date = $m1 -> date;
$version = $m1 -> version;
$mId = $m1 -> mId;
$cacId = $m1 -> mId;
        
        
    $insert = $master -> prepare ("
        INSERT INTO m11
        (mId, pacId, pacName, serviceId, cacId, pap, date)
        VALUES
        (?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iisiiss",
        $mId, $value, $pacName, $serviceId, $cacId, $pap, $date
    );

    $insert -> execute();

    }
            foreach ($_POST['preguntasC6'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;
        
$_m1 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 
    AND pacId = '" . $value . "' 
");

$m1 = $_m1 -> fetch_object();

$pacName = $m1 -> pacName;
$pap = $m1 -> pap;
$date = $m1 -> date;
$version = $m1 -> version;
$mId = $m1 -> mId;
$cacId = $m1 -> mId;
        
        
    $insert = $master -> prepare ("
        INSERT INTO m11
        (mId, pacId, pacName, serviceId, cacId, pap, date)
        VALUES
        (?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iisiiss",
        $mId, $value, $pacName, $serviceId, $cacId, $pap, $date
    );

    $insert -> execute();

    }
            foreach ($_POST['preguntasC7'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;
        
$_m1 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 
    AND pacId = '" . $value . "' 
");

$m1 = $_m1 -> fetch_object();

$pacName = $m1 -> pacName;
$pap = $m1 -> pap;
$date = $m1 -> date;
$version = $m1 -> version;
$mId = $m1 -> mId;
$cacId = $m1 -> mId;
        
        
    $insert = $master -> prepare ("
        INSERT INTO m11
        (mId, pacId, pacName, serviceId, cacId, pap, date)
        VALUES
        (?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iisiiss",
        $mId, $value, $pacName, $serviceId, $cacId, $pap, $date
    );

    $insert -> execute();

    }
            foreach ($_POST['preguntasC8'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;
        
$_m1 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 
    AND pacId = '" . $value . "' 
");

$m1 = $_m1 -> fetch_object();

$pacName = $m1 -> pacName;
$pap = $m1 -> pap;
$date = $m1 -> date;
$version = $m1 -> version;
$mId = $m1 -> mId;
$cacId = $m1 -> mId;
        
        
    $insert = $master -> prepare ("
        INSERT INTO m11
        (mId, pacId, pacName, serviceId, cacId, pap, date)
        VALUES
        (?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iisiiss",
        $mId, $value, $pacName, $serviceId, $cacId, $pap, $date
    );

    $insert -> execute();

    }
            foreach ($_POST['preguntasC9'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;
        
$_m1 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 
    AND pacId = '" . $value . "' 
");

$m1 = $_m1 -> fetch_object();

$pacName = $m1 -> pacName;
$pap = $m1 -> pap;
$date = $m1 -> date;
$version = $m1 -> version;
$mId = $m1 -> mId;
$cacId = $m1 -> mId;
        
        
    $insert = $master -> prepare ("
        INSERT INTO m11
        (mId, pacId, pacName, serviceId, cacId, pap, date)
        VALUES
        (?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iisiiss",
        $mId, $value, $pacName, $serviceId, $cacId, $pap, $date
    );

    $insert -> execute();

    }
       foreach ($_POST['preguntasC10'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;
        
$_m1 = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 
    AND pacId = '" . $value . "' 
");

$m1 = $_m1 -> fetch_object();

$pacName = $m1 -> pacName;
$pap = $m1 -> pap;
$date = $m1 -> date;
$version = $m1 -> version;
$mId = $m1 -> mId;
$cacId = $m1 -> mId;
        
        
    $insert = $master -> prepare ("
        INSERT INTO m11
        (mId, pacId, pacName, serviceId, cacId, pap, date)
        VALUES
        (?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iisiiss",
        $mId, $value, $pacName, $serviceId, $cacId, $pap, $date
    );

    $insert -> execute();

    }
if($serviceId == 2){require_once 'm2-2.php';}
if($serviceId == 3){require_once 'm3-3.php';}
if($serviceId == 4){require_once 'm4-4.php';}
if($serviceId == 5){require_once 'm5-5.php';}
if($serviceId == 6){require_once 'm6-6.php';}
if($serviceId == 7){require_once 'm7-7.php';}
if($serviceId == 8){require_once 'm8-8.php';}
if($serviceId == 9){require_once 'm9-9.php';}
if($serviceId == 10){require_once 'm10-10.php';}    


