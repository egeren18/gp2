<?php

// connection

include '../connection.php';

// select

$_economicArea = mysqli_query($master, "
    SELECT * FROM economicarea
    WHERE economicAreaId = '" . $_GET["id"] . "'
");

$economicArea = $_economicArea -> fetch_object();

// view

require_once '../v/economicArea/jDelete.php';
