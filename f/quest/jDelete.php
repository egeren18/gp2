<?php

// connection

include '../connection.php';

// select

$_quest = mysqli_query($master, "
    SELECT * FROM quest
    WHERE questId = '" . $_GET["id"] . "'
");

$quest = $_quest -> fetch_object();

// view

require_once '../v/quest/jDelete.php';
