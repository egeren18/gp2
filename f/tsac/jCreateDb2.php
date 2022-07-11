<?php

// connection

include '../connection.php';

// module

$module = 'tsac';
$action = 'add';

// var
$tsacId = $_GET['tsacId'];
$cuestionarioName = $_POST['cuestionarioName'];

    $insert = $tipomc -> prepare ("
        INSERT INTO tipo_de_cuestionario_$tsacId
        (tsacId, cuestionarioName)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "is",
        $tsacId, $cuestionarioName
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
     echo "<script> window.location='../c/{$module}.php?m=list&tsacId={$tsacId}'</script>";
    

   

