<?php

// modulex
$module = 'sac';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';
//GET
$tsacId = $_GET["tsacId"];
$cuestionarioId = $_GET["cuestionarioId"];
$v =$tsacId.'_'.$cuestionarioId;
$ddate = date('d-m-y / g:i a');
// crear "respaldo" donde se almacenara "def"
//conexion a base de datos para sacar la $vv

$_ves = mysqli_query($tipomc, "
    SELECT * FROM tipo_de_cuestionario_$tsacId
    WHERE tsacId = '" . $tsacId . "'
");

$ves = $_ves -> fetch_object();
$vversion = $ves -> version;

$vv = $tsacId.'_'.$cuestionarioId.'_'.$vversion;
    

// sql Crea la tabla usando Lenguaje PHP
$sql = "CREATE TABLE cuestionario$vv (
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
  access int(11) DEFAULT NULL,
  risk int(11) DEFAULT NULL 
  )";
 $respal->query($sql);


// respaldar dar "def" en "res" 

$_res = mysqli_query($bdac, "
    SELECT * FROM cuestionario$v
");

while($res = $_res -> fetch_object()){

//variables con la info de los campos mientras de sa el while
$pacName = $res -> pacName;
$pap = $res -> pap;
$cacId = $res -> cacId;
$date = $res -> date;
$risk = $res -> risk;

    $insert = $respal -> prepare ("
        INSERT INTO cuestionario$vv
        (pacName, pap, cacId, date, risk)
        VALUES
        (?,?,?,?,?)
    ");

    $insert -> bind_param (
        "ssisi",
        $pacName, $pap, $cacId, $date, $risk
    );

    $insert -> execute();    


}

// vaciar la tabla "DEF" q en este caso se encuentra en la base de datos "sagracom_cuestionarios_AC"

// Sql para eliminar todo lo de la tabla 
$sql = "TRUNCATE TABLE cuestionario$v ";
$bdac -> query($sql);



// vaciar la info de lo selecionado 


foreach ($_POST['preguntasC1'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;
        
$_m1 = mysqli_query($tipod, "
    SELECT * FROM cuestionario$v
    WHERE mId = '" . $value . "' 
");

$m1 = $_m1 -> fetch_object();

$pacName = $m1 -> pacName;
$pap = $m1 -> pap;
$date = $m1 -> date;
$version = $m1 -> version;
$mId = $m1 -> mId;
$cacId = $m1 -> cacId;
$risk = $m1 -> risk;
$vxv = $m1 -> v;
        
     if ($jAccess == 1){
         
    $insert = $bdac -> prepare ("
        INSERT INTO cuestionario$v
        (pacName, pap, cacId, date, risk, v)
        VALUES
        (?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "ssisis",
        $pacName, $pap, $cacId, $date, $risk, $vxv
    );

    $insert -> execute();  
         
     }  
  
    
//llenar el resplado 

        }


//cambiar la version en modelo de cuetionario
    $sta = $vversion +1 ;
    $update = $tipomc -> prepare ("
    UPDATE tipo_de_cuestionario_$tsacId
    SET
    version = ?,
    date = ?
    WHERE
    cuestionarioId = ?
");	

$update -> bind_param (
    "isi",
    $sta, $ddate, $cuestionarioId
);

$update -> execute();
// view

echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";




