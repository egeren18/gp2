<?php
// connect database
include '../connection.php';
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
$rubroId = $r_rubro["rubroId"];

$srubro = mysqli_query($connection, "
    SELECT * FROM srubro
     WHERE rubroId = '" . $rubroId . "'
     ORDER BY sRubroId"
);   
// view
require_once '../v/requerimiento/jAddRubro.php';
