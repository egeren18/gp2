<?php

// connection

include '../connection.php';

// select

$_gender = mysqli_query($master, "
    SELECT * FROM gender
    WHERE genderId = '" . $_GET["id"] . "'
");

$gender = $_gender -> fetch_object();

// view

require_once '../v/gender/jDelete.php';
