<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables.
 */
$module = 'project';

$userId = $_GET["userId"];
$projectId = $_GET["projectId"];
$serviceId = $_GET["serviceId"];
$md = $_GET["md"];
$u = $_GET["u"];

$v =$serviceId.'_'.$md;
$vv =$projectId.'_'.$serviceId.'_'.$md;

$c = $_GET["c"];
$i = $_GET["i"];
$r = $_GET["a"];
$t = $_GET["b"];
$p = $_GET["p"];


$r=0;
foreach ($_POST['moduleId'] as $key => $value) {
    
$ja = $_POST['jb'][$value]  == true ? 1 : 0;

$a = $_POST['jb'][$value];
if($ja == 1){

$_project = mysqli_query($pquest, "SELECT * FROM permisos$vv WHERE amId = '" . $value . "' AND userId = '" . $userId . "' ");
$project = $_project -> fetch_object();
   
if($project -> userComplete == $userId and $a != 1 ){
      $dd = 0;  
    $update = $pquest -> prepare ("
    UPDATE permisos$vv
    SET
    userComplete = ?,
    role = ?,
    tiempo = ?,
    tiempoId = ?
    WHERE
    amId = '" . $value . "' AND userId = '" . $userId . "'
");	

$update -> bind_param (
    "iisi",
    $dd, $a, $_POST['tiempo'.$value], $_POST['tiempoId'.$value]
);

$update -> execute();
        
}elseif($a == 1){
      $d= 1;  
    $update = $pquest -> prepare ("
    UPDATE permisos$vv
    SET
    userComplete = ?,
    role = ?,
    tiempo = ?,
    tiempoId = ?
    WHERE
    amId = '" . $value . "' AND userId = '" . $userId . "'
");	

$update -> bind_param (
    "iisi",
    $userId, $a, $_POST['tiempo'.$value], $_POST['tiempoId'.$value]
);

$update -> execute();
        
      
    }else{
        $d= 1;  
      $update = $pquest -> prepare ("
      UPDATE permisos$vv
      SET
      role = ?,
      tiempo = ?,
      tiempoId = ?
      WHERE
      amId = '" . $value . "' AND userId = '" . $userId . "'
  ");	
  
  $update -> bind_param (
      "isi",
     $a, $_POST['tiempo'.$value], $_POST['tiempoId'.$value]
  );
  
  $update -> execute();
          
        
      }

}
}
    
 echo "<script> window.location='../c/{$module}.php?m=updateAsignar&p={$projectId}&u={$u}&c={$projectId}'</script>";
 
