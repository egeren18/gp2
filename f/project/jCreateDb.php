<?php

// modulex

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';
include '../connection2.php';


// var
$termycondId = $_GET["termycondId"];
$clientId = $_GET["clientId"];
$serviceId = $_GET["serviceId"];
$userId = $_GET["userId"];
$userId2 = $_GET["userId2"];
$frecuencia = $_GET["frecuencia"];

$md = $_POST["md"];


//fechas 
$projectDateStart = date('d-m-y');
$projectDateExpire = strtotime ('+1 year' , strtotime($projectDateStart));
$projectDateExpire  = date ('Y-m-d',$projectDateExpire );

    $modelo = $connection -> prepare ("
    	INSERT INTO project
    	(termycondId, clientId, serviceId, userId, userId2, projectDateStart, projectDateExpire, md)
    	VALUES
    	(?,?,?,?,?,?,?,?)
    ");

    $modelo -> bind_param ("iiiiissi", $termycondId , $clientId , $serviceId, $userId, $userId2, $projectDateStart, $projectDateExpire, $md);
    $modelo -> execute();   



$id = mysqli_insert_id($connection);

$v=$id.'_'.$serviceId.'_'.$md;
$vv=$serviceId.'_'.$md;
// crear las tablas 

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
    v varchar(200) DEFAULT NULL,
    userComplete int(11) DEFAULT '0'
    )";
   $pquest->query($sql);  


//creaR TABLA EN LA BASE DE DATOS(sagracom_tipo_project_modelo)  REFERENTE ACTIVIDADES DE MODEOS DE proyectos. 
//formato
 // sql Crea la tabla usando Lenguaje PHP
 $sql = "CREATE TABLE ejecucion$v (
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
    v varchar(200) DEFAULT NULL,
    frecuencia int(11) DEFAULT NULL,
    userComplete int(11) DEFAULT '0'
    )";
   $pquest->query($sql);
   
   

   

// respaldo modelo
$_mcr = mysqli_query($appf, "
    SELECT * FROM mod$vv
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

if ($modeloId == 11){
    $contador = 1;
    while($contador <= $frecuencia){
        $contador++;
// insertar 
    $insert = $pquest -> prepare ("
        INSERT INTO project$v
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
    
}

if ($modeloId == 12){
    $contador = 1;
    while($contador <= $frecuencia){
        $contador++;
// insertar 
    $insert = $pquest -> prepare ("
        INSERT INTO project$v
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
    
}
if ($modeloId == 2){
    $contador = 1;
    while($contador <= $frecuencia){
        $contador++;
// insertar 
    $insert = $pquest -> prepare ("
        INSERT INTO project$v
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
    
}

if ($modeloId != 2 and $modeloId != 11 and $modeloId != 12  and $etapaId != 3){
    // insertar 
    $insert = $pquest -> prepare ("
        INSERT INTO project$v
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
if ($modeloId != 2 and $modeloId != 11 and $modeloId != 12  and $etapaId == 3){
    // insertar 
        $contador = 1;
        $fr = 0;
    while($contador <= $frecuencia){
        $contador++;
        $fr++;
    $insert = $pquest -> prepare ("
        INSERT INTO ejecucion$v
        (mmodeloId, serviceId, etapaId, mcategoriaId, cacId, actividadId, mId, modeloId, npregunta, texto1,
        texto2, texto3, texto4, texto5, texto6, texto7, texto8, texto9, texto10, texto11,
        texto12, texto13, texto14, texto15, texto16, texto17, texto18, texto19, texto20, normaText, date, frecuencia
        )
        VALUES
        (?,?,?,?,?,?,?,?,?,?,
         ?,?,?,?,?,?,?,?,?,?,
         ?,?,?,?,?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiiiiiissssssssssssssssssssssi",
        $mmodeloId, $serviceId, $etapaId, $mcategoriaId, $cacId, $actividadId, $mId, $modeloId, $npregunta, $texto1,
        $texto2, $texto3, $texto4, $texto5, $texto6, $texto7, $texto8, $texto9, $texto10, $texto11,
        $texto12, $texto13, $texto14, $texto15, $texto16, $texto17, $texto18, $texto19, $texto20, $normaText, $d, $fr
        
    );

    $insert -> execute();  
}
}

    
}

 // sql Crea la tabla usando Lenguaje PHP
 $sql = "CREATE TABLE permisos$v (
    aId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    amId int(11) DEFAULT NULL,
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
    v varchar(200) DEFAULT NULL,
    frecuencia int(11) DEFAULT NULL,
    userComplete int(11) DEFAULT '0',
    userId int(11) DEFAULT NULL,
    role int(11) DEFAULT NULL
    )";
   $pquest->query($sql);
//permisos del usuario 1
// role = 0
$role = 0;
//  conexion 
$_permisos = mysqli_query($pquest, "
    SELECT * FROM project$v
");

//whilepara meter permisos   
while($m1 = $_permisos -> fetch_object()){
//variables con la info del llenado
$amId = $m1 -> amId;
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

//insert para el llenado 
$insert = $pquest -> prepare ("
INSERT INTO permisos$v
(amId, mmodeloId, serviceId, etapaId, mcategoriaId, cacId, actividadId, mId, modeloId, npregunta, texto1,
texto2, texto3, texto4, texto5, texto6, texto7, texto8, texto9, texto10, texto11,
texto12, texto13, texto14, texto15, texto16, texto17, texto18, texto19, texto20, normaText, date,
userId, role
)
VALUES
(?,?,?,?,?,?,?,?,?,?,?,
 ?,?,?,?,?,?,?,?,?,?,
 ?,?,?,?,?,?,?,?,?,?,?,
 ?,?)
");

$insert -> bind_param (
"iiiiiiiiiissssssssssssssssssssssii",
$amId, $mmodeloId, $serviceId, $etapaId, $mcategoriaId, $cacId, $actividadId, $mId, $modeloId, $npregunta, $texto1,
$texto2, $texto3, $texto4, $texto5, $texto6, $texto7, $texto8, $texto9, $texto10, $texto11,
$texto12, $texto13, $texto14, $texto15, $texto16, $texto17, $texto18, $texto19, $texto20, $normaText, $d, $userId, $role

);

$insert -> execute();         

}

//permisos del usuario 2 
// role = 0
$role = 0;
//  conexion 
$_permisos2 = mysqli_query($pquest, "
    SELECT * FROM project$v
");

//whilepara meter permisos   
while($m1 = $_permisos2 -> fetch_object()){
//variables con la info del llenado
$amId = $m1 -> amId;
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
//insert para el llenado 
$insert = $pquest -> prepare ("
INSERT INTO permisos$v
(amId,mmodeloId, serviceId, etapaId, mcategoriaId, cacId, actividadId, mId, modeloId, npregunta, texto1,
texto2, texto3, texto4, texto5, texto6, texto7, texto8, texto9, texto10, texto11,
texto12, texto13, texto14, texto15, texto16, texto17, texto18, texto19, texto20, normaText, date,
userId, role
)
VALUES
(?,?,?,?,?,?,?,?,?,?,?,
 ?,?,?,?,?,?,?,?,?,?,
 ?,?,?,?,?,?,?,?,?,?,?,
 ?,?)
");

$insert -> bind_param (
"iiiiiiiiiissssssssssssssssssssssii",
$amId, $mmodeloId, $serviceId, $etapaId, $mcategoriaId, $cacId, $actividadId, $mId, $modeloId, $npregunta, $texto1,
$texto2, $texto3, $texto4, $texto5, $texto6, $texto7, $texto8, $texto9, $texto10, $texto11,
$texto12, $texto13, $texto14, $texto15, $texto16, $texto17, $texto18, $texto19, $texto20, $normaText, $d, $userId2, $role

);

$insert -> execute();         

}



$lider = 4;
$gerente = 1;
$sl = 23;
$gr = 18;
$lineId = 5;

$insert = $connection -> prepare("INSERT INTO projectteam (projectId, userId, designatedId, roleId, lineId) VALUES (?,?,?,?,?)");
$insert -> bind_param("iiiii", $id, $userId, $lider, $sl, $lineId);
$insert -> execute();

$insert = $connection -> prepare("INSERT INTO projectteam (projectId, userId, designatedId, roleId, lineId) VALUES (?,?,?,?,?)");
$insert -> bind_param("iiiii", $id, $userId2, $gerente, $gr, $lineId);
$insert -> execute();

// tabla de respuestas 

 // sql Crea la tabla usando Lenguaje PHP
 $sql = "CREATE TABLE repuesta$v (
    aId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    amId int(11) DEFAULT NULL,
    mmodeloId int(11) DEFAULT NULL, 
    serviceId int(11) DEFAULT NULL, 
    etapaId int(11) DEFAULT NULL,
    mcategoriaId int(11) DEFAULT NULL,
    cacId int(11) DEFAULT NULL,
    actividadId int(11) DEFAULT NULL,
    mId int(11) DEFAULT NULL,
    modeloId int(11) DEFAULT NULL,
    projectId int(11) DEFAULT NULL,
    a1 text, 
    a2 text, 
    a3 text, 
    a4 text, 
    a5 text, 
    a6 text, 
    a7 text, 
    a8 text, 
    a9 text, 
    a10 text, 
    a11 text, 
    a12 text, 
    a13 text, 
    a14 text, 
    a15 text, 
    a16 text, 
    a17 text, 
    a18 text, 
    a19 text, 
    a20 text, 
    oc1 text,
    oc2 text,
    oc3 text,
    oc4 text,
    projectDoerId int(11) DEFAULT '0',
    projectDoerDate varchar(30) DEFAULT NULL,
    projectReviewerId int(11) DEFAULT '0',
    projectReviewerDate varchar(30) DEFAULT NULL,
    statusId int(11) DEFAULT '0',
    obs text
    )";
   $pquest->query($sql);

echo "<script> window.location='../c/project.php?m=index&mod=28'</script>";