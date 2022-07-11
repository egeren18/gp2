<?php

// connection

include '../connection.php';

// module

$module = 'scproject';
$action = 'add';

// var
$cid = $_GET["cid"];
$md = $_POST["md"];
$d = date('d-m-y / g:i a');


    $modelo = $app -> prepare ("
    	INSERT INTO project
    	(serviceId, projectName, date)
    	VALUES
    	(?,?,?)
    ");

    $modelo -> bind_param ("iss", $cid, $md, $d);
    $modelo -> execute();   

$id = mysqli_insert_id($app);


$v = $cid.'_'.$id; 

//creaR TABLA EN LA BASE DE DATOS(sagracom_tipo_project_categoria)  REFERENTE CATEGORIAS DE MODEOS DE proyectos. 

// formato 
// sql Crea la tabla usando Lenguaje PHP
$sql = "CREATE TABLE project$v (
  cacId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  mcategoriaId int(11) DEFAULT NULL,
  cacStatus int(11) NOT NULL DEFAULT '1',
  cacName varchar(300) DEFAULT NULL,
  date varchar(100) DEFAULT NULL,
  access int(11) DEFAULT '0',
  etapaId int(11) DEFAULT NULL
  )";
 $appc->query($sql);

$_cac = mysqli_query($master, "
    SELECT * FROM mcategoria
    WHERE serviceId = '". $cid ."'
");

while ($cac = $_cac -> fetch_object()){

$etapaId = $cac -> etapaId;
$categoriaText = $cac -> categoriaText;
$mcategoriaId = $cac -> mcategoriaId;
	
    
    // insertar 
    $insert = $appc -> prepare ("
        INSERT INTO project$v
        (etapaId, cacName, date, mcategoriaId)
        VALUES
        (?,?,?,?)
    ");

    $insert -> bind_param (
        "issi",
        $etapaId ,$categoriaText, $d, $mcategoriaId
    );

    $insert -> execute();
}

//creaR TABLA EN LA BASE DE DATOS(sagracom_tipo_project_acividad)  REFERENTE ACTIVIDADES DE MODEOS DE proyectos. 
//formato
 // sql Crea la tabla usando Lenguaje PHP
$sql = "CREATE TABLE project$v (
  mId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  serviceId int(11) DEFAULT NULL, 
  etapaId int(11) DEFAULT NULL,
  cacId int(11) DEFAULT NULL,
  mcategoriaId int(11) DEFAULT NULL,
  actividadId int(11) DEFAULT NULL,
  actividadName varchar(300) DEFAULT NULL,
  actividadText text, 
  date varchar(100) DEFAULT NULL,
  version int(11) DEFAULT '0',
  status int(11) DEFAULT NULL,
  access int(11) DEFAULT '0',
  v varchar(200) DEFAULT NULL
  )";
 $appa->query($sql);  


$_cac = mysqli_query($master, "
    SELECT * FROM actividad
    WHERE serviceId = '". $cid ."'
");

while ($cac = $_cac -> fetch_object()){
$serviceId = $cac -> serviceId; 
$etapaId = $cac -> etapaId;
$mcategoriaId = $cac -> mcategoriaId;
$actividadName = $cac -> actividadName;
$actividadText = $cac -> actividadText;
$actividadId = $cac -> actividadId;

$_acac = mysqli_query($appc, "
    SELECT * FROM project$v
    WHERE mcategoriaId = '". $mcategoriaId ."'
");
$acac = $_acac -> fetch_object();
$acacId = $acac -> cacId;

    // insertar 
    $insert = $appa -> prepare ("
        INSERT INTO project$v
        (serviceId, etapaId, mcategoriaId, actividadId, actividadName, actividadText, cacId, date)
        VALUES
        (?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiissis",
        $serviceId, $etapaId , $mcategoriaId, $actividadId, $actividadName, $categoriaText, $acacId, $d
    );

    $insert -> execute();
}




//creaR TABLA EN LA BASE DE DATOS(sagracom_tipo_project_modelo)  REFERENTE ACTIVIDADES DE MODEOS DE proyectos. 
//formato
 // sql Crea la tabla usando Lenguaje PHP
 $sql = "CREATE TABLE project$v (
    amId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    mmodeloId int(11) DEFAULT NULL, 
    serviceId int(11) DEFAULT NULL, 
    etapaId int(11) DEFAULT NULL,
    mcategoriaId int(11) DEFAULT NULL,
    cacId int(11) DEFAULT NULL,
    actividadId int(11) DEFAULT NULL,
    mId int(11) DEFAULT NULL,
    modeloId int(11) DEFAULT NULL,
    npregunta int(11) DEFAULT NULL,
    texto1 text, 
    texto2 text, 
    texto3 text, 
    texto4 text, 
    texto5 text, 
    texto6 text, 
    texto7 text, 
    texto8 text, 
    texto9 text, 
    texto10 text, 
    texto11 text, 
    texto12 text, 
    texto13 text, 
    texto14 text, 
    texto15 text, 
    texto16 text, 
    texto17 text, 
    texto18 text, 
    texto19 text, 
    texto20 text, 
    normaText varchar(100) DEFAULT NULL,
    oc int(11) DEFAULT NULL,
	ayudaText text, 
    mci int(11) DEFAULT '0',
    cg int(11) DEFAULT '0',
    sc int(11) DEFAULT '0',
    aa int(11) DEFAULT '0',
    mciT text, 
    cgT text,
    scT text,
    aaT text,
    date varchar(100) DEFAULT NULL,
    version int(11) DEFAULT '0',
    status int(11) DEFAULT NULL,
    access int(11) DEFAULT '0',
    v varchar(200) DEFAULT NULL
    )";
   $appm->query($sql);  
  
  
  $_cac = mysqli_query($master, "
      SELECT * FROM mmodelo
      WHERE serviceId = '". $cid ."'
  ");
  
  while ($cac = $_cac -> fetch_object()){
  $serviceId = $cac -> serviceId; 
  $etapaId = $cac -> etapaId;
  $mcategoriaId = $cac -> mcategoriaId;
  $actividadId = $cac -> actividadId;
  $mmodeloId = $cac ->	mmodeloId;
  $modeloId = $cac ->	modeloId;
  $npregunta = $cac ->	npregunta;
  $normaText = $cac ->	normaText;

  $texto1 = $cac -> texto1;
  $texto2 = $cac -> texto2;
  $texto3 = $cac -> texto3;
  $texto4 = $cac -> texto4;
  $texto5 = $cac -> texto5;
  $texto6 = $cac -> texto6;
  $texto7 = $cac -> texto7;
  $texto8 = $cac -> texto8;
  $texto9 = $cac -> texto9;
  $texto10 = $cac -> texto10;
  $texto11 = $cac -> texto11;
  $texto12 = $cac -> texto12;
  $texto13 = $cac -> texto13;
  $texto14 = $cac -> texto14;
  $texto15 = $cac -> texto15;
  $texto16 = $cac -> texto16;
  $texto17 = $cac -> texto17;
  $texto18 = $cac -> texto18;
  $texto19 = $cac -> texto19;
  $texto20 = $cac -> texto20;
  
$_acac2 = mysqli_query($appc, "
    SELECT * FROM project$v
    WHERE mcategoriaId = '". $mcategoriaId ."'
");
$acac2 = $_acac2 -> fetch_object();
$acacId = $acac2 -> cacId;

$_macac2 = mysqli_query($appa, "
    SELECT * FROM project$v
    WHERE  actividadId = '".  $actividadId ."'
");
$macac2 = $_macac2 -> fetch_object();
$amId = $macac2 -> mId;
      
      // insertar 
      $insert = $appm -> prepare ("
          INSERT INTO project$v
          (serviceId, etapaId, mcategoriaId, actividadId, mmodeloId, modeloId, npregunta, texto1, texto2, texto3,
           texto4, texto5, texto6, texto7, texto8, texto9, texto10, texto11, texto12, texto13, 
           texto14, texto15, texto16, texto17, texto18, texto19, texto20, normaText, date, cacId, mId)
          VALUES
          (?,?,?,?,?,?,?,?,?,?,
          ?,?,?,?,?,?,?,?,?,?,
          ?,?,?,?,?,?,?,?,?,?,?)
      ");
  
      $insert -> bind_param (
          "iiiiiiissssssssssssssssssssssii",
          $serviceId, $etapaId , $mcategoriaId, $actividadId, $mmodeloId , $modeloId,  $npregunta, $texto1, $texto2, $texto3,
          $texto4, $texto5, $texto6, $texto7, $texto8, $texto9, $texto10, $texto11, $texto12, $texto13,
          $texto14, $texto15, $texto16, $texto17, $texto18, $texto19, $texto20, $normaText, $d, $acacId, $amId
      );
  
      $insert -> execute();
  }


    // view
    echo "<script> window.location='../c/{$module}.php?m=list&n=added&cid={$cid}'</script>";

























