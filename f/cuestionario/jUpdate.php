<?php

// connection

include '../connection.php';

// module

$module = 'modal';

// select

$_modal = mysqli_query($master, "
    SELECT * FROM qm1
    WHERE itemId = '" . $_GET["id"] . "'
");

$modal = $_modal -> fetch_object();

// view

require_once '../v/cuestionario/jUpdate.php';
