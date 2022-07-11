<?php

// connection

include '../connection.php';

// module

$module = 'tsac';
$action = 'add';

// var
$tsacName = $_POST['tsacName'];
$d = date('d-m-y / g:i a');

// insertar 
    $insert = $master -> prepare ("
        INSERT INTO tsac
        (tsacName, date)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ss",
        $tsacName ,$d
    );

    $insert -> execute();
$id = mysqli_insert_id($master);

// sql Crea la tabla usando Lenguaje PHP (tabla para guardar los cuestionarios)
//En estas tabla se guardara los tipos de cuestionarios asociados a el tipo de cuestionario indicado 
$sql = "CREATE TABLE tipo_de_cuestionario_$id (
  cuestionarioId int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  tsacId int(11) DEFAULT NULL,
  cuestionarioStatus int(11) NOT NULL DEFAULT '1',
  cuestionarioName varchar(300) DEFAULT NULL,
  cuestionarioText varchar(300) DEFAULT NULL,
  version int(11) NOT NULL DEFAULT '1'
  )";
 $tipomc->query($sql);


 







// view
echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";
    

