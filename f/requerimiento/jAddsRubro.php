<?php
// connect database
include '../connection.php';
$rubroName = $_POST['rubroName'];
$srubroId = $_POST['srubroId'];
$srubro = mysqli_query($connection, "
    SELECT * FROM srubro
    WHERE sRubroId = '" . $srubroId . "'
     "
); 
// select client
$r_srubro = mysqli_fetch_array($srubro);

// set fields
$srubroName = $r_srubro["sRubroName"];
$pruebaId = $r_srubro["sRubroId"];
$rubroId = $r_srubro["rubroId"];


// view
require_once '../v/requerimiento/jAddsRubro.php';
