<?php

// connection

include '../connection.php';

// module

$module = 'subscriber';

// select

$_modal = mysqli_query($master, "
    SELECT * FROM modal
    WHERE modalStatus = 1
");

$modal = $_modal -> fetch_object();


// view

require_once '../v/modal/jRead.php';
