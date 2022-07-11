<?php

// connection

include '../connection.php';

// module

$module = 'civilStatus';

// select

$_civilStatus = mysqli_query($master, "
    SELECT * FROM civilstatus
    WHERE civilStatusId = '" . $_GET["id"] . "'
");

$civilStatus = $_civilStatus -> fetch_object();

// view

require_once '../v/civilStatus/jUpdate.php';
