<?php

// connection

include '../connection.php';

// select

$_subscription = mysqli_query($master, "
    SELECT * FROM subscription
    WHERE subscriptionId = '" . $_GET["id"] . "'
");

$subscription = $_subscription -> fetch_object();

// view

require_once '../v/subscription/jDelete.php';
