<?php

// connection

include '../connection.php';

// module

$module = 'sac';
$action = 'add';

// var
$serviceId = $_GET['cid'];
$sacc = $_POST['sacc'];
$sacp = $_POST['s'];
$d = date('d-m-y / g:i a');
$tilde = isset($_POST['tilde']) == true ? 1 : NULL;

if($tilde == 1){
    
if($serviceId == 1){ require_once'm1.php';}
if($serviceId == 2){require_once 'm2.php';}
if($serviceId == 3){require_once 'm3.php';}
if($serviceId == 4){require_once 'm4.php';}
if($serviceId == 5){require_once 'm5.php';}
if($serviceId == 6){require_once 'm6.php';}
if($serviceId == 7){require_once 'm7.php';}
if($serviceId == 8){require_once 'm8.php';}
if($serviceId == 9){require_once 'm9.php';}
if($serviceId == 10){require_once 'm10.php';}    

}
else{
    // view
    echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";
    
}
