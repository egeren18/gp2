<?php

// connection

include '../connection.php';

// select

$_cmodal = mysqli_query($master, "
    SELECT * FROM cmodal
    WHERE cmodalId = '" . $_GET["id"] . "'
");

$cmodal = $_cmodal -> fetch_object();

// view

require_once '../v/cmodal/jDelete.php';
