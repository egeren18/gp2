<?php

// connection

include '../connection.php';

// select

$_office = mysqli_query($master, "
    SELECT * FROM office
    WHERE officeId = '" . $_GET["id"] . "'
");

$office = $_office -> fetch_object();

// view

require_once '../v/office/jDelete.php';
