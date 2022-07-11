<?php

// connection

include '../connection.php';

// module

$module = 'handbook';
$action = 'add';


// var
$tsacId = $_GET['tsacId'];
$cuestionarioName = $_POST['cuestionarioName'];


$date = date('d-m-y / g:i a');


    $insert = $tipomc -> prepare ("
        INSERT INTO tipo_de_cuestionario_$tsacId
        (tsacId, cuestionarioName, date)
        VALUES
        (?,?,?)
    ");

    $insert -> bind_param (
        "iss",
        $tsacId, $cuestionarioName, $date
    );

    $insert -> execute();
    
    $id = mysqli_insert_id($tipomc);
    


$v = $tsacId.'_'.$id; 
//creaR TABLA EN LA BASE DE DATOS(sagracom_tipo_cuestionario_categoria)  REFERENTE CATEGORIAS DE MODEOS DE CUESTIONARIO. TENDRA NOMBRE DE (categoria_cuestionario$tsacId_modelo$id)

// formato 
// sql Crea la tabla usando Lenguaje PHP
$sql = "CREATE TABLE cuestionario$v (
  cacId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  cacStatus int(11) NOT NULL DEFAULT '1',
  cacName varchar(300) DEFAULT NULL,
  date varchar(100) DEFAULT NULL,
  access int(11) DEFAULT NULL
  )";
 $tipoc->query($sql);

 $_cctipoc = mysqli_query($tipoc, "
 SELECT * FROM cuestionario
");

while($cctipod = $_cctipoc -> fetch_object())
{
//var
$cacName = $cctipod -> cacName;
$date = $cctipod -> date;
$caccess = 0;

 $insert = $tipoc -> prepare ("
     INSERT INTO cuestionario$v
     (cacName, date, access )
     VALUES
     (?,?,?)
 ");

 $insert -> bind_param (
     "ssi",
     $cacName, $date, $caccess
 );

 $insert -> execute();
 

}


//creaR TABLA EN LA BASE DE DATOS(sagracom_tipo_cuestionario_pregunta)  REFERENTE CATEGORIAS DE MODEOS DE CUESTIONARIO. TENDRA NOMBRE DE  (pregunta_cuestionario$$tsacId_modelo$id)
//formato
 // sql Crea la tabla usando Lenguaje PHP


$sql = "CREATE TABLE cuestionario$v (
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
  risk int(11) DEFAULT NULL,
  v varchar(200) DEFAULT NULL
  )";
 $tipod->query($sql);   
 
 $_cctipod = mysqli_query($tipod, "
    SELECT * FROM cuestionario
");

while($cctipod = $_cctipod -> fetch_object())
{
//var
$cacId = $cctipod -> cacId;
$pacName = $cctipod -> pacName;
$pap = $cctipod -> pap;
$date = $cctipod -> date;
$risk = $cctipod -> risk;
$caccess = 0;
$version = $cctipod -> version;
$vv = $cctipod -> v;


    $insert = $tipod -> prepare ("
        INSERT INTO cuestionario$v
        (cacId, pacName, pap, date, risk, access, v)
        VALUES
        (?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "isssiis",
        $cacId, $pacName, $pap, $date, $risk, $caccess, $vv
    );

    $insert -> execute();
    

}
 
 //creaR TABLA EN LA BASE DE DATOS(sagracom_tipo_cuestionario_categoria)  REFERENTE CATEGORIAS DE MODEOS DE CUESTIONARIO. TENDRA NOMBRE DE (categoria_cuestionario$tsacId_modelo$id)

// formato 
// sql Crea la tabla usando Lenguaje PHP
$sql = "CREATE TABLE cuestionario$v (
  mId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  tsacId int(11) DEFAULT NULL,
  cuestionarioId int(11) DEFAULT NULL,
  serviceId int(11) DEFAULT NULL,
  access int(11) DEFAULT NULL
  )";
 $tipos->query($sql);
 
 
// CREAR LA TABLA DONDE SE ALMACENARA LA VERSION DEFINITIVA DE LOS CUESTIONARIOS 
// formato 
// sql Crea la tabla usando Lenguaje PHP
$sql = "CREATE TABLE cuestionario$v (
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
  risk int(11) DEFAULT NULL,
  v varchar(200) DEFAULT NULL
  )";
 $bdac->query($sql);

 
 // CREAR LA TABLA pregunta de riesgo 
// formato 
// sql Crea la tabla usando Lenguaje PHP
$sql = "CREATE TABLE prisk$v (
  priskId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  priskStatus int(11) NOT NULL DEFAULT '1',
  priskName varchar(300) DEFAULT NULL,
  prisktext text,
  date varchar(300) DEFAULT NULL,
  access int(11) DEFAULT NULL
  )";
 $tipod->query($sql);

 $_cctipop = mysqli_query($tipod, "
 SELECT * FROM prisk
");

while($cctipod = $_cctipop -> fetch_object())
{
//var
$priskName = $cctipod -> priskName;
$priskText = $cctipod -> priskText;
$date = $cctipod -> date;
$caccess = 0;

 $insert = $tipod -> prepare ("
     INSERT INTO prisk$v
     (priskName, priskText, date, access )
     VALUES
     (?,?,?,?)
 ");

 $insert -> bind_param (
     "sssi",
     $priskName, $priskText, $date, $caccess
 );

 $insert -> execute();
 

}
 
 
 // CREAR LA TABLA DONDE SE ALMACENARA LA VERSION DEFINITIVA DE LOS CUESTIONARIOS 
 
 
 
    foreach ($_POST['serviceC'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;

        $insert = $tipos -> prepare ("
            INSERT INTO cuestionario$v
            (tsacId, cuestionarioId, serviceId, access)
            VALUES
            (?,?,?,?)
        ");

        $insert -> bind_param (
            "iiii",
            $tsacId, $id, $value,  $jAccess
        );

        $insert -> execute();

    }

 
 
 
// view
     echo "<script> window.location='../c/{$module}.php?m=index'</script>";