<?php

// connection

include '../connection.php';

// select

$_consulta = mysqli_query($master, "
    SELECT * FROM consulta
    WHERE consultaId = '" . $_GET["id"] . "'
");

$consulta = $_consulta -> fetch_object();

// view

require_once '../v/consulta/jDelete.php';
