<?php

// connection

include '../connection.php';

$service = mysqli_query($master, "
    SELECT * FROM modelo
    WHERE modeloStatus = 1 AND creado < 1
");


require_once '../v/csac/jCreate.php';
