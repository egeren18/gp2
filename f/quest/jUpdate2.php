<?php

// connection

include '../connection.php';

//module

$module = 'quest';

// select

$_client = mysqli_query($master, "
    SELECT * FROM quest
    WHERE questId = '" . $_GET["pid"] . "'
");

$client = $_client -> fetch_object();
$qi = $client -> questId;

$_client2 = mysqli_query($master, "
    SELECT * FROM qitem
    WHERE questId = '" . $qi . "' AND itemStatus = 1
");

// select



// view

require_once '../v/quest/jUpdate2.php';







