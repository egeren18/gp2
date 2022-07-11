<?php

// connection

include '../connection.php';

// select

$_blog = mysqli_query($master, "
    SELECT * FROM blog
    WHERE blogId = '" . $_GET["id"] . "'
");

$blog = $_blog -> fetch_object();

// view

require_once '../v/blog/jDelete.php';
