<?php

// connection

include '../connection.php';

// module

$module = 'economicArea';

// select

$_economicArea = mysqli_query($master, "
    SELECT * FROM economicarea
    WHERE economicAreaId = '" . $_GET["id"] . "'
");

$economicArea = $_economicArea -> fetch_object();

// view

require_once '../v/economicArea/jUpdate.php';
