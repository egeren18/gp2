<?php

// connection

include '../connection.php';

// select

$_cDesk = mysqli_query($master, "
    SELECT * FROM cdesk
    WHERE cDeskId = '" . $_GET["id"] . "'
");

$cDesk = $_cDesk -> fetch_object();

// view

require_once '../v/cDesk/jDelete.php';
