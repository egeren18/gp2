<?php

// connection

include '../connection.php';

// select

$_currency = mysqli_query($master, "
    SELECT * FROM currency
    WHERE currencyId = '" . $_GET["id"] . "'
");

$currency = $_currency -> fetch_object();

// view

require_once '../v/currency/jDelete.php';
