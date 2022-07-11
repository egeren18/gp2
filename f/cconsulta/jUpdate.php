<?php

// connection

include '../connection.php';

// module

$module = 'cconsulta';

// select

$_cticket = mysqli_query($master, "
    SELECT * FROM cconsulta
    WHERE cconsultaId = '" . $_GET["id"] . "'
");

$cconsulta = $_cticket -> fetch_object();

// view

require_once '../v/cconsulta/jUpdate.php';
