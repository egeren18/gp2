<?php

// connect database
include '../connection.php';

// set variables
$userId = $_GET['c'];

// query user
$user = mysqli_query(
    $connection, "
    SELECT * FROM user
    WHERE userId = '" . $userId . "'
");

// select email
$r_user = mysqli_fetch_array($user);

// view
require_once '../v/main/jQuestion.php';
