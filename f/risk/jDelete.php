<?php

// connection

include '../connection.php';

// select

$_risk = mysqli_query($master, "
    SELECT * FROM risk
    WHERE riskId = '" . $_GET["id"] . "'
");

$risk = $_risk -> fetch_object();

// view

require_once '../v/risk/jDelete.php';
