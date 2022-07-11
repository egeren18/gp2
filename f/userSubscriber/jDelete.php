<?php

// connection

include '../connection.php';

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userId = '" . $_GET["uid"] . "'
");

$user = $_user -> fetch_object();

// view

require_once '../v/userSubscriber/jDelete.php';
