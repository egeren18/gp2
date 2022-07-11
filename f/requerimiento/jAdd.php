<?php
// connect database
include '../connection.php';
$rubro = mysqli_query($connection, "
    SELECT * FROM rubro
     WHERE rubroStatus = 1
     ORDER BY rubroId"
);   
// view
require_once '../v/requerimiento/jAdd.php';
