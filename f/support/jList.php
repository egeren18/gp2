<?php

// connect database
include '../connection.php';

// query
$support = mysqli_query(
    $connection,
    "SELECT * FROM support
");

// view
require_once '../v/support/jList.php';
