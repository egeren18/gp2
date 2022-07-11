<?php

// connection

include '../connection.php';

// module

$module = 'trace';
$moduleId = 6;

// select

$_trace = mysqli_query($master, "
    SELECT * FROM trace
    INNER JOIN user
    ON trace.userId = user.userId
");

// view

require_once '../v/trace/jIndex.php';
