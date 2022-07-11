<?php
// connect database
include '../connection.php';
$client = mysqli_query($master, "
    SELECT * FROM client
     WHERE clientStatus = 1
     ORDER BY clientId"
);   
$srubro = mysqli_query($master, "
    SELECT * FROM srubro
     WHERE sRubroStatus = 1
     ORDER BY sRubroId"
);   
// view
require_once '../v/prueba/jAdd.php';
