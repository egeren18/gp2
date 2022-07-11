<?php
// connect database
include '../connection.php';
$clientName = $_POST['clientName'];

$rubroId = $_POST['rubroId'];
$rubro = mysqli_query($connection, "
    SELECT * FROM rubro
    WHERE rubroId = '" . $rubroId . "'
     "
); 
// select client
$r_rubro = mysqli_fetch_array($rubro);
// set fields
$rubroName = $r_rubro["rubroName"];

$sRubro = mysqli_query($connection, "
    SELECT * FROM srubro
     WHERE rubroId = '" . $rubroId . "'
     ORDER BY sRubroId"
);   



// view
require_once '../v/prueba/jAddsRubro.php';
