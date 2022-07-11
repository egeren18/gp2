<?php

// modulex
$module = 'scprojects';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';
//GET
$cid = $_GET["cid"];
$projectId = $_GET["projectId"];
$v =$cid.'_'.$projectId;
$d = date('d-m-y / g:i a');
// crear "respaldo" donde se almacenara "def"
//conexion a base de datos para sacar la $vv
$_xac = mysqli_query($app, "
    SELECT * FROM project
    WHERE projectId = '". $projectId ."'
");

$xac = $_xac -> fetch_object();
$xa = $xac -> version;
$vv = $xa + 1;
$fv =$cid.'_'.$projectId.'_'.$vv;





$sql = "CREATE TABLE cac$fv (
  cacId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  mcategoriaId int(11) DEFAULT NULL,
  cacStatus int(11) NOT NULL DEFAULT '1',
  cacName varchar(300) DEFAULT NULL,
  date varchar(100) DEFAULT NULL,
  access int(11) DEFAULT '0',
  etapaId int(11) DEFAULT NULL
  )";
 $appr->query($sql);

$sql = "CREATE TABLE act$fv (
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
 $appr->query($sql);
 
$sql = "CREATE TABLE mod$fv (
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
   $appr->query($sql);  
   
   
   
// respaldo categorias
$_cacr = mysqli_query($appf, "
    SELECT * FROM cac$v
");

while($xcac = $_cacr -> fetch_object())
{
$etapaId = $xcac -> etapaId;
$cacName = $xcac -> cacName;
$cdate = $xcac -> date;
$mcategoriaId = $xcac -> mcategoriaId;
    

 
     // insertar 
    $insert = $appr -> prepare ("
        INSERT INTO cac$fv
        (etapaId, cacName, date, mcategoriaId)
        VALUES
        (?,?,?,?)
    ");

    $insert -> bind_param (
        "issi",
        $etapaId , $cacName, $cdate, $mcategoriaId
    );

    $insert -> execute();
    
}

// respaldo actividad 
$_acr = mysqli_query($appf, "
    SELECT * FROM act$v
");

while($xcac = $_acr -> fetch_object())
{

$serviceId = $xcac -> serviceId;
$etapaId = $xcac -> etapaId;
$mcategoriaId = $xcac -> mcategoriaId;
$actividadId = $xcac -> actividadId;
$actividadName = $xcac -> actividadName;
$actividadText = $xcac -> actividadText;
$cacId = $xcac -> cacId;
$date = $xcac -> date;
        // insertar 
    $insert = $appr -> prepare ("
        INSERT INTO act$fv
        (serviceId, etapaId, mcategoriaId, actividadId, actividadName, actividadText, cacId, date)
        VALUES
        (?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiissis",
        $serviceId, $etapaId , $mcategoriaId, $actividadId, $actividadName, $categoriaText, $cacId, $adate
    );

    $insert -> execute();
    
}


// respaldo modelo
$_mcr = mysqli_query($appf, "
    SELECT * FROM mod$v
");

while($m1 = $_mcr -> fetch_object())
{

$mmodeloId = $m1 -> mmodeloId;
$serviceId = $m1 -> serviceId;
$etapaId = $m1 -> etapaId;
$mcategoriaId = $m1 -> mcategoriaId;
$cacId = $m1 -> cacId;
$actividadId = $m1 -> actividadId;
$mId = $m1 -> mId;
$modeloId = $m1 -> modeloId;
$npregunta = $m1 -> npregunta;
$texto1 = $m1 -> texto1;

$texto2 = $m1 -> texto2;
$texto3 = $m1 -> texto3;
$texto4 = $m1 -> texto4;
$texto5 = $m1 -> texto5;
$texto6 = $m1 -> texto6;
$texto7 = $m1 -> texto7;
$texto8 = $m1 -> texto8;
$texto9 = $m1 -> texto9;
$texto10 = $m1 -> texto10;
$texto11 = $m1 -> texto11;

$texto12 = $m1 -> texto12;
$texto13 = $m1 -> texto13;
$texto14 = $m1 -> texto14;
$texto15 = $m1 -> texto15;
$texto16 = $m1 -> texto16;
$texto17 = $m1 -> texto17;
$texto18 = $m1 -> texto18;
$texto19 = $m1 -> texto19;
$texto20 = $m1 -> texto20;

$normaText = $m1 -> normaText;
$date = $m1 -> date;

        // insertar 
    $insert = $appr -> prepare ("
        INSERT INTO mod$fv
        (mmodeloId, serviceId, etapaId, mcategoriaId, cacId, actividadId, mId, modeloId, npregunta, texto1,
        texto2, texto3, texto4, texto5, texto6, texto7, texto8, texto9, texto10, texto11,
        texto12, texto13, texto14, texto15, texto16, texto17, texto18, texto19, texto20, normaText, date
        )
        VALUES
        (?,?,?,?,?,?,?,?,?,?,
         ?,?,?,?,?,?,?,?,?,?,
         ?,?,?,?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiiiiiissssssssssssssssssssss",
        $mmodeloId, $serviceId, $etapaId, $mcategoriaId, $cacId, $actividadId, $mId, $modeloId, $npregunta, $texto1,
        $texto2, $texto3, $texto4, $texto5, $texto6, $texto7, $texto8, $texto9, $texto10, $texto11,
        $texto12, $texto13, $texto14, $texto15, $texto16, $texto17, $texto18, $texto19, $texto20, $normaText, $d
        
    );

    $insert -> execute();  
    
}





// eliminar
$sqlc = "DELETE FROM cac$v";
$appf -> query($sqlc);


$sqla =  "DELETE FROM act$v";
$appf -> query($sqla);

$sqla =  "DELETE FROM mod$v";
$appf -> query($sqla);


foreach ($_POST['preguntasC1'] as $key => $value) {

    $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;
    
$_m1 = mysqli_query($appm, "
SELECT * FROM project$v
WHERE amId = '" . $value . "' 
");

$m1 = $_m1 -> fetch_object();

$mmodeloId = $m1 -> mmodeloId;
$serviceId = $m1 -> serviceId;
$etapaId = $m1 -> etapaId;
$mcategoriaId = $m1 -> mcategoriaId;
$cacId = $m1 -> cacId;
$actividadId = $m1 -> actividadId;
$mId = $m1 -> mId;
$modeloId = $m1 -> modeloId;
$npregunta = $m1 -> npregunta;

$texto1 = $m1 -> texto1;
$texto2 = $m1 -> texto2;
$texto3 = $m1 -> texto3;
$texto4 = $m1 -> texto4;
$texto5 = $m1 -> texto5;
$texto6 = $m1 -> texto6;
$texto7 = $m1 -> texto7;
$texto8 = $m1 -> texto8;
$texto9 = $m1 -> texto9;
$texto10 = $m1 -> texto10;
$texto11 = $m1 -> texto11;
$texto12 = $m1 -> texto12;
$texto13 = $m1 -> texto13;
$texto14 = $m1 -> texto14;
$texto15 = $m1 -> texto15;
$texto16 = $m1 -> texto16;
$texto17 = $m1 -> texto17;
$texto18 = $m1 -> texto18;
$texto19 = $m1 -> texto19;
$texto20 = $m1 -> texto20;

$normaText = $m1 -> normaText;
$ayudaText = $m1 -> ayudaText;
$date = $m1 -> date;

 if ($jAccess == 1){
     
$insert = $appf -> prepare ("
    INSERT INTO mod$v
    (mmodeloId, serviceId, etapaId, mcategoriaId, cacId, actividadId, mId, modeloId, npregunta, texto1,
    texto2, texto3, texto4, texto5, texto6, texto7, texto8, texto9, texto10, texto11,
    texto12, texto13, texto14, texto15, texto16, texto17, texto18, texto19, texto20, normaText, date
    )
    VALUES
    (?,?,?,?,?,?,?,?,?,?,
     ?,?,?,?,?,?,?,?,?,?,
     ?,?,?,?,?,?,?,?,?,?,?)
");

$insert -> bind_param (
    "iiiiiiiiissssssssssssssssssssss",
    $mmodeloId, $serviceId, $etapaId, $mcategoriaId, $cacId, $actividadId, $mId, $modeloId, $npregunta, $texto1,
    $texto2, $texto3, $texto4, $texto5, $texto6, $texto7, $texto8, $texto9, $texto10, $texto11,
    $texto12, $texto13, $texto14, $texto15, $texto16, $texto17, $texto18, $texto19, $texto20, $normaText, $d
    
);

$insert -> execute();  


$_cac = mysqli_query($appc, "
SELECT * FROM project$v
WHERE mcategoriaId = '". $mcategoriaId ."'
");

$cac = $_cac -> fetch_object();
$cacName = $cac -> cacName;
$cdate = $cac -> date;

// insertar 
$insert = $appf -> prepare ("
    INSERT INTO cac$v
    (etapaId, cacName, date, mcategoriaId)
    VALUES
    (?,?,?,?)
");

$insert -> bind_param (
    "issi",
    $etapaId , $cacName, $cdate, $mcategoriaId
);

$insert -> execute();

$_acac = mysqli_query($appa, "
SELECT * FROM project$v
WHERE actividadId  = '". $actividadId  ."'
");
$acac = $_acac -> fetch_object();
$actividadName = $acac -> actividadName;
$actividadText = $acac -> actividadText;
$adate = $acac -> date;



    // insertar 
$insert = $appf -> prepare ("
    INSERT INTO act$v
    (serviceId, etapaId, mcategoriaId, actividadId, actividadName, actividadText, cacId, date)
    VALUES
    (?,?,?,?,?,?,?,?)
");

$insert -> bind_param (
    "iiiissis",
    $serviceId, $etapaId , $mcategoriaId, $actividadId, $actividadName, $categoriaText, $cacId, $adate
);

$insert -> execute();



//llenar el resplado 

    }}




$update = $app -> prepare ("
UPDATE project
SET
version = ?,
date2 = ?
WHERE
projectId = ?
");	

$update -> bind_param (
"isi",
$vv, $d, $projectId
);

$update -> execute();   







echo "<script> window.location='../c/{$module}.php?m=list&n=updated&cid={$cid}'</script>";