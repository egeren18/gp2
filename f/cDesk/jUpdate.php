<?php

// connection

include '../connection.php';

// module

$module = 'cDesk';

// select

$_cDesk = mysqli_query($master, "
    SELECT * FROM cdesk
    WHERE cDeskId = '" . $_GET["id"] . "'
");

$cDesk = $_cDesk -> fetch_object();

// view

require_once '../v/cDesk/jUpdate.php';
