<?php

// connection

include '../connection.php';
include '../allow.php';

//get
$cid = $_GET["cid"];
$projectId = $_GET["projectId"];
$service = $_GET["cid"];
$v =$cid.'_'.$projectId;
$_sservice = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $cid . "'
");

$sservice = $_sservice -> fetch_object();
$serviceName = $sservice -> serviceName;

$_scproject = mysqli_query($app, "
    SELECT * FROM project
    WHERE projectId = '" . $projectId . "'
");

$scproject = $_scproject -> fetch_object();
$projectName = $scproject -> projectName;
$date = $scproject -> date;



//$_trazau = mysqli_query($master, "SELECT * FROM tracem WHERE serviceId = '" . $serviceId . "'  ");
//$client = $_trazau -> fetch_object();

//$_usert = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $client -> userId . "'");
//$user = $_usert -> fetch_object();

$_validar = mysqli_query($appa, "
    SELECT * FROM project$v 
    ");
    
    while($validar = $_validar -> fetch_object()){
    
    $_mvalidar = mysqli_query($appm, "
    SELECT * FROM project$v 
    WHERE actividadId = '" . $validar -> actividadId  . "'
     ");   
     $fallo = $validar -> actividadId;
   if($mvalidar = $_mvalidar -> fetch_object() == null)
   {
    echo "<script> window.location='../c/scproject.php?m=update2&actividadId={$fallo}&cid={$cid}&projectId={$projectId}'</script>";
   }

  
        
        
    }




// view

require_once '../v/scproject/jUpdate.php';