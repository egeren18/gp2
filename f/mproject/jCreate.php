<?php

// connection

include '../connection.php';



//conexion a la tabla servicios dentro de la base de datos

$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceStatus = 1
    
");

//conexion a la tabla usuarios dentro de la base de datos

$_user = mysqli_query($master, "
    SELECT * FROM user

    
");

//conexion a la tabla usuarios 2 dentro de la base de datos

$_user2 = mysqli_query($master, "
    SELECT * FROM user
    
");



// view

require_once '../v/mproject/jCreate.php';
