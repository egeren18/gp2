<?php

// connection

include '../connection.php';

// module

$module = 'blog';

// select

$blog = mysqli_query($master, "
    SELECT * FROM blog
    WHERE blogId = '" . $_GET["id"] . "'
");

$r_blog = mysqli_fetch_array($blog);

// set fields
$blogId = $r_blog["blogId"];
$titulo = $r_blog["blogName"];
$blogText = $r_blog["blogText"];
$blogText2 = $r_blog["blogText2"];
$cat = $r_blog["cat"];
$s = $r_blog["blogStatus"];
$n = $r_blog["nombre"];
$r = $r_blog["revisor"];

$date = $r_blog["dateT"];
// view



require_once '../v/blog/jRead.php';
