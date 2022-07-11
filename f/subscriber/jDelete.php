<?php

// connection

include '../connection.php';

// select

$_subscriber = mysqli_query($master, "
    SELECT * FROM subscriber
    WHERE subscriberId = '" . $_GET["id"] . "'
");

$subscriber = $_subscriber -> fetch_object();

// view

require_once '../v/subscriber/jDelete.php';
