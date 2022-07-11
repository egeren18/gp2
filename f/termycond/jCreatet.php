<?php

// connection

include '../connection.php';
include '../connection2.php';
//conexion a la tabla cliente dentro de la base de datos

$clientId = $_POST["clientId"];

$_clientn = mysqli_query(
    $connection, "
    SELECT * FROM client
    WHERE clientId = '" . $clientId ."'
");
$clientn = $_clientn -> fetch_object();

//esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$cn = $clientn -> clientName;


$_client = mysqli_query(
    $connection, "
    SELECT * FROM ac
    WHERE clientId = '" . $clientId ."'
");
$client = $_client -> fetch_object();

//esta variable me almacena el valor de serviceName y lo uso con la llave. $serviceName = $g -> serviceName ;
$serviceId = $client -> serviceId;


if($serviceId == 1){
    
    $_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceStatus = 1
    
");
    
}

if($serviceId == 2){
    
    $_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId >= 2 AND serviceId <= 11
    
");
}

if($serviceId == 3){
    
    $_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId >= 2 AND serviceId <= 11
    
");
}

if($serviceId == 4){
    
    $_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId >= 2 AND serviceId <= 11
    
");
}
if($serviceId == 5){
    
    $_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId >= 2 AND serviceId <= 11
    
");
}

if($serviceId == 6){
    
    $_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId >= 2 AND serviceId <= 11
    
");
}

if($serviceId == 7){
    
    $_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId >= 2 AND serviceId <= 11
    
");
}

if($serviceId == 8){
    
    $_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId >= 2 AND serviceId <= 11
    
");
}



if($serviceId == 10){
    
    $_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId >= 2 AND serviceId <= 11
    
");
}


if($serviceId == 11){
    
    $_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId >= 2 AND serviceId <= 11
    
");
}

if($serviceId == 12){
    
    $_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = 12
    
");
}

if($serviceId == 13){
    
    $_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = 13
    
");
}

if($serviceId == 14){
    
    $_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = 14
    
");
}

if($serviceId == 15){
    
    $_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = 15
    
");
}

if($serviceId == 16){
    
    $_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = 16
    
");
}



//conexion a la tabla servicios dentro de la base de datos


//conexion a la tabla usuarios dentro de la base de datos

$_user = mysqli_query($master, "
    SELECT * FROM user
where subscriberId = 2
    
");

//conexion a la tabla usuarios 2 dentro de la base de datos

$_user2 = mysqli_query($master, "
    SELECT * FROM user
    where subscriberId = 2
    
");



// view

require_once '../v/termycond/jCreatet.php';
