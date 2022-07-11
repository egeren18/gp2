<?php

// module
$module = 'sac';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

$serviceId = $_GET["serviceId"];

$date = date('d-m-y / g:i a');

$_sacVersion = mysqli_query($master, "
    SELECT * FROM sac
    WHERE serviceId = '" . $serviceId . "'
    AND sacStatus = 1 
");

$sacVersion = $_sacVersion -> fetch_object();

$ccdate = $sacVersion -> date;


// var
// for q me guarda las preguntas q iran en la nueva matriz     
foreach ($_POST['preguntasC1'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;
        
$_m1 = mysqli_query($rer, "
    SELECT * FROM m$serviceId
    WHERE pacStatus = 1 
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
        (mId, pacId, pacName, serviceId, cacId, pap, date, access)
        VALUES
        (?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iisiisss",
        $mId, $value, $pacName, $serviceId, $cacId, $pap, $date, $jAccess
    );

    $insert -> execute();    
    
//llenar el resplado 

        }
// termina el for 


// limpiar la tabla 
$_limpiar = mysqli_query($master, "
    SELECT * FROM m$serviceId
    WHERE pacStatus = 1 
");

while($limpiar = $_limpiar -> fetch_object()){
    $status =0;
    $pacId = $limpiar -> pacId;
    $update = $master -> prepare ("
    UPDATE m$serviceId
    SET
    pacStatus = ?
    WHERE
    pacId = ?
");	

$update -> bind_param (
    "ii",
    $status, $pacId
);

$update -> execute();

}


//crear la tabla donde migrare el resplado

//conexion a base de datos  para sacar el id de la version 
$_cv = mysqli_query($master, "
    SELECT * FROM sac
    WHERE serviceId = '" . $serviceId . "'
");
$cv = $_cv -> fetch_object();

$v = $cv -> v;
$v2 = $v + 1 ;
//variablaes donde determinare el id de la version



$versionSac =  $serviceId. '_' .$v2;

$sM = "localhost";
$uM = "sagracom_crear";
$pM = "Sagra2507.";
$dM = 'sagracom_cuestionarios_AC';
$re = new mysqli($sM, $uM, $pM, $dM);
// sql Crea la tabla usando Lenguaje PHP
$vsac = $v2 ;

$versionSac =  $serviceId. '_' .$vsac;
// sql Crea la tabla usando Lenguaje PHP
$sql = "CREATE TABLE modelo$versionSac (
  mId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  pacId int(11) DEFAULT NULL, 
  pacStatus int(11) NOT NULL DEFAULT '1',
  pacName varchar(300) DEFAULT NULL,
  serviceId int(11) DEFAULT NULL,
  cacId int(11) DEFAULT NULL,
  pap text, 
  date varchar(100) DEFAULT NULL,
  version int(11) DEFAULT NULL,
  status int(11) DEFAULT NULL,
  access int(11) DEFAULT NULL 
  )";
 $re->query($sql);
 
//crear conexion de base de datos q tengan status 0
 $_rc = mysqli_query($master, "
    SELECT * FROM m$serviceId
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 0 
");

// while para hacer el repaldo 
$pid = 0;
while($rc = $_rc -> fetch_object()){
$pid++;
$pacName = $rc -> pacName;
$pap = $rc -> pap;
$date = $rc -> date;
$version = $rc -> version;
$mId = $rc -> mId;
$cacId = $rc -> cacId;    
$a = 1;
    $insert = $re -> prepare ("
        INSERT INTO modelo$versionSac
        (mId, pacId, pacName, serviceId, cacId, pap, date, access, version)
        VALUES
        (?,?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iisiissss",
        $mId, $pid, $pacName, $serviceId, $cacId, $pap, $date, $a, $version
    );

    $insert -> execute();  
    
    
    
}


// limpiar tabla paso 2
$sql = "DELETE FROM m$serviceId WHERE pacStatus = 0";
$master -> query($sql);


// llenar con lo seleccionado 
$_cc = mysqli_query($master, "
    SELECT * FROM m11
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1 AND access = 1
");
$pad = 0;
while($cc = $_cc -> fetch_object()){
$pad++;
$pacName = $cc -> pacName;
$pap = $cc -> pap;
$d = date('d-m-y / g:i a');

$mId = $cc -> mId;
$cacId = $cc -> cacId;
        
   
    $insert = $master -> prepare ("
        INSERT INTO m$serviceId
        (pacId, pacName, serviceId, cacId, pap, date)
        VALUES
        (?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "isiiss",
          $pad, $pacName, $serviceId, $cacId, $pap, $d
    );

    $insert -> execute();            
    
}

// sql to create table

// limpiar tabla paso 3
$sqlm11 = "DELETE FROM m11 WHERE serviceId = '" . $serviceId . "'";
$master -> query($sqlm11);

//dd

$update = $master -> prepare ("
    UPDATE sac
    SET
    version = ?,
    v = ?,
    oldDate = ?,
    date = ?
    WHERE
    serviceId = ?
");	

$update -> bind_param (
    "sissi",
    $versionSac, $v2 , $ccdate, $date,$serviceId
);

$update -> execute();


// view

echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";
