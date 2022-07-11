<?php
// connect database
include '../connection.php';
$rubros = mysqli_query($connection, "
    SELECT * FROM rubro
     WHERE rubroStatus = 1
     ORDER BY rubroId"
);   
// view
require_once '../v/puntosControl/jAdd.php';
