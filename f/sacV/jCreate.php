<?php

// connection

include '../connection.php';

$service = mysqli_query($master, "
    SELECT * FROM modelo
    WHERE modeloStatus = 1 AND creado < 1
");

$_cp1 = mysqli_query($master, "
    SELECT * FROM mid
    WHERE cacId = 1
");
$_cac1 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE cacId = 1
");
$cac1 = $_cac1 -> fetch_object();
$cac1Name = $cac1 -> cacName;
$_cac2 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE cacId = 2
");
$cac2 = $_cac2 -> fetch_object();
$cac2Name = $cac2 -> cacName;

$_cac3 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE cacId = 3
");
$cac3 = $_cac3 -> fetch_object();
$cac3Name = $cac3 -> cacName;

$_cac4 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE cacId = 4
");
$cac4 = $_cac4 -> fetch_object();
$cac4Name = $cac4 -> cacName;
$_cac5 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE cacId = 5
");
$cac5 = $_cac5 -> fetch_object();
$cac5Name = $cac5 -> cacName;

$_cac6 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE cacId = 6
");
$cac6 = $_cac6 -> fetch_object();
$cac6Name = $cac6 -> cacName;

$_cac7 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE cacId = 7
");
$cac7 = $_cac7 -> fetch_object();
$cac7Name = $cac7 -> cacName;

$_cac8 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE cacId = 8
");
$cac8 = $_cac8 -> fetch_object();
$cac8Name = $cac8 -> cacName;

$_cac9 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE cacId = 8
");
$cac9 = $_cac9 -> fetch_object();
$cac9Name = $cac9 -> cacName;

$_cac10 = mysqli_query($master, "
    SELECT * FROM cac
    WHERE cacId = 8
");
$cac10 = $_cac10 -> fetch_object();
$cac10Name = $cac10 -> cacName;

$_cp2 = mysqli_query($master, "
    SELECT * FROM mid
    WHERE cacId = 2
");

$_cp3 = mysqli_query($master, "
    SELECT * FROM mid
    WHERE cacId = 3
");

$_cp4 = mysqli_query($master, "
    SELECT * FROM mid
    WHERE cacId = 4
");

$_cp5 = mysqli_query($master, "
    SELECT * FROM mid
    WHERE cacId = 5
");

$_cp6 = mysqli_query($master, "
    SELECT * FROM mid
    WHERE cacId = 6
");

$_cp7 = mysqli_query($master, "
    SELECT * FROM mid
    WHERE cacId = 7
");
$_cp8 = mysqli_query($master, "
    SELECT * FROM mid
    WHERE cacId = 8
");
$_cp9 = mysqli_query($master, "
    SELECT * FROM mid
    WHERE cacId = 9
");

$_cp10 = mysqli_query($master, "
    SELECT * FROM mid
    WHERE cacId = 10
");


require_once '../v/sac/jCreate.php';
