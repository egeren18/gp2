<?php

// connection

include '../connection.php';
include '../connection2.php';

// module

$module = 'termycond';
$action = 'add';
//declarar variables que se van a utilizar 
// var
$clientId = $_POST['clientId'];
$serviceId = $_POST['serviceId'];
$userId = $_POST['userId'];
$userId2 = $_POST['userId2'];
$rf = $_POST['fecha11'];
$d1 = 4;
$d2 = 1;

//var 
$m1 =1;
$m2 =2;
$m3 =3;
$m4 =4;

$n1 ='Carta de Contrataci&oacute;n';
$n2 ='Frecuencia';
$n3 ='Roles de proyecto';
$n4 = 'Esquema de facturaci&oacute;n ';

//enviar a base de datos
    $insert = $master -> prepare ("
        INSERT INTO termycond
        (clientId, serviceId, userId, userId2, rf )
        VALUES
        (?,?,?,?,?)
    ");
//enviar con parametros las variables declaradas
    $insert -> bind_param (
        "iiiis",
        $clientId, $serviceId, $userId, $userId2, $rf
    );
     $insert -> execute();
    
    $id = $master -> insert_id;




//enviar a base de datos
    $insert = $connection -> prepare ("
        INSERT INTO termycond
        (termycondId, mId, name)
        VALUES
        (?,?,?)
    ");
//enviar con parametros las variables declaradas
    $insert -> bind_param (
        "iis",
        $id, $m1, $n1
    );

$insert -> execute();

//enviar a base de datos
    $insert = $connection -> prepare ("
        INSERT INTO termycond
        (termycondId, mId, name)
        VALUES
        (?,?,?)
    ");
//enviar con parametros las variables declaradas
    $insert -> bind_param (
        "iis",
        $id, $m2, $n2
    );

$insert -> execute();

//enviar a base de datos
    $insert = $connection -> prepare ("
        INSERT INTO termycond
        (termycondId, mId, name)
        VALUES
        (?,?,?)
    ");
//enviar con parametros las variables declaradas
    $insert -> bind_param (
        "iis",
        $id, $m3, $n3
    );

$insert -> execute();
//enviar a base de datos
    $insert = $connection -> prepare ("
        INSERT INTO termycond
        (termycondId, mId, name)
        VALUES
        (?,?,?)
    ");
//enviar con parametros las variables declaradas
    $insert -> bind_param (
        "iis",
        $id, $m4, $n4
    );

$insert -> execute();


   
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();
    
    
    
    //enviar a base de datos
    $insert = $connection -> prepare ("
        INSERT INTO tteam
        (termycondId, userId, designatedId)
        VALUES
        (?,?,?)
    ");
//enviar con parametros las variables declaradas
    $insert -> bind_param (
        "iii",
        $id, $userId, $d1
    );

$insert -> execute();





//enviar a base de datos
    $insert = $connection -> prepare ("
        INSERT INTO tteam
        (termycondId, userId, designatedId	)
        VALUES
        (?,?,?)
    ");
//enviar con parametros las variables declaradas
    $insert -> bind_param (
        "iii",
        $id, $userId2, $d2
    );

$insert -> execute();
    
    
    

    // view

    echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";


    
