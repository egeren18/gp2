<?php

// connection

include '../connection.php';
include '../connection2.php';

// var

$c = $_GET["cid"];

// select

$_client = mysqli_query(
    $connection,
    "SELECT * FROM clientprev
    WHERE clientprevId = '" . $c . "'
");

$client = $_client -> fetch_object();

// view

require_once '../v/clientPrev/jDelete.php';
