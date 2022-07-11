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
$r++;

}

if ($r <= 3 and $ja == 1){
 /*   
if($a == 1){
      $d= 1;  
    $update = $pquest -> prepare ("
    UPDATE project9_1_3
    SET
    userComplete = ?
    WHERE
    amId = ?
");	

$update -> bind_param (
    "ii",
    $userId, $value
);

$update -> execute();
        
      
    }*/  
    
    
    
    
    
    
    
    
    // insertar 
    $insert = $pquest -> prepare ("
        INSERT INTO permisos$v
        (mmodeloId, serviceId, etapaId, mcategoriaId, cacId, actividadId, mId, modeloId, npregunta, texto1,
        texto2, texto3, texto4, texto5, texto6, texto7, texto8, texto9, texto10, texto11,
        texto12, texto13, texto14, texto15, texto16, texto17, texto18, texto19, texto20, normaText, date, userId, role
        )
        VALUES
        (?,?,?,?,?,?,?,?,?,?,
         ?,?,?,?,?,?,?,?,?,?,
         ?,?,?,?,?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiiiiiissssssssssssssssssssssii",
        $mmodeloId, $serviceId, $etapaId, $mcategoriaId, $cacId, $actividadId, $mId, $modeloId, $npregunta, $texto1,
        $texto2, $texto3, $texto4, $texto5, $texto6, $texto7, $texto8, $texto9, $texto10, $texto11,
        $texto12, $texto13, $texto14, $texto15, $texto16, $texto17, $texto18, $texto19, $texto20, $normaText, $d, $userId, $role
        
    );

    $insert -> execute();
    
    
    
    
    
    
    
  
    $trace = $connection -> prepare ("
    	INSERT INTO permiso9_1_3
    	(ProjectId, amId, userId, role)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("iiii",$projectId, $value, $userId ,$a
);

    $trace -> execute();
    $r = 0;


    
}


}

    
 echo "<script> window.location='../c/{$module}.php?m=updateAsignar&p=7&u=18&c=7'</script>";
 
