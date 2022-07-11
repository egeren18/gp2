<?php

// connection

include '../connection.php';

// module

$module = 'currency';

// select

$_currency = mysqli_query($master, "
    SELECT * FROM currency
    WHERE currencyId = '" . $_GET["id"] . "'
");

$currency = $_currency -> fetch_object();

// view

require_once '../v/currency/jUpdate.php';
