<?php

// connection

include '../connection.php';

// select

$_nature = mysqli_query($master, "
    SELECT * FROM nature
    WHERE natureStatus = 1
    ORDER BY natureName
");

// view

require_once '../v/service/jCreate.php';
