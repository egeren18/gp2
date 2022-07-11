<?php

// connection

include '../connection.php';

$_rubro = mysqli_query($master, "
    SELECT * FROM rubro
    WHERE rubroStatus = 1
");


// view

require_once '../v/oconsideraciones/jCreate.php';
