<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM qitem
    WHERE qitemId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$d = $client -> itemId ;

// select

$_country = mysqli_query($master, "
    SELECT * FROM quest
    WHERE questId = '" .  $_GET["pid"] . "'
");

$country = $_country -> fetch_object();
$itemName = $country -> questName ;


// view

require_once '../v/qitem/jUpdate2.php';







