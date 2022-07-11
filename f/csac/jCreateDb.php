<?php

// connection

include '../connection.php';

// module

$module = 'csac';
$action = 'add';

// var
$serviceId = $_POST['serviceId'];
$sacc = $_POST['sacc'];
$sacp = $_POST['sacp'];
$d = date('d-m-y / g:i a');


// sql Crea la tabla usando Lenguaje PHP (tabla para guardar los cuestionarios)
$sql = "CREATE TABLE m$serviceId (
  mId int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  pacId int(11) DEFAULT NULL,
  accessId int(11) DEFAULT NULL,
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
 $master->query($sql);


 $sqll = "CREATE TABLE m$serviceId (
  mId int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
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
 $rer->query($sqll);
 
 
 
 
$_m = mysqli_query($master, "SELECT * FROM modelo WHERE modeloId = '" . $serviceId . "'");
$m = $_m -> fetch_object();
$mName = $m -> modeloName;
$version = 1;    
$v = 1;    
    
    $insert = $master -> prepare ("
        INSERT INTO sac
        (serviceId, sacc, sacp, cdate, userId, modeloName, version, v)
        VALUES
        (?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiisissi",
        $serviceId, $sacc, $sacp, $d, $_SESSION["userId"], $mName, $version,$v
    );

    $insert -> execute();

//traza Cuestionario
    
        $trazamodelo = $master -> prepare ("
    	INSERT INTO tracem
    	(serviceId, date, userId, version)
    	VALUES
    	(?,?,?,?)
    ");

    $trazamodelo -> bind_param ("isii", $serviceId, $acDoerDate, $_SESSION["userId"], $version);
    $trazamodelo -> execute();   


//enviar dato a modelo
    $creado = 1;
$update = $master -> prepare ("
    UPDATE modelo
    SET
    creado = ?
    WHERE
    modeloId = ?
");	

$update -> bind_param (
    "ii",
    $creado ,$serviceId
);

$update -> execute();



// view
echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";
    

