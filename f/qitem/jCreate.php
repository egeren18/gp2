<?php

// connection

include '../connection.php';

// access

include '../allow.php';

// select

$_questName = mysqli_query($master, "
    SELECT * FROM quest
    WHERE questStatus = '" . $_GET['pid'] . "'
    ORDER BY questId
");
$questName = $_questName -> fetch_object();
$qn = $questName -> questName;

// view

require_once '../v/qitem/jCreate.php';
