<?php

// connection

include '../connection.php';

// module
$id = '73';
$module = 'blog';

// select
$_permiso = mysqli_query($master, "
    SELECT * FROM permiso
    WHERE userId = '" . $_SESSION["userId"] . "'
    AND moduleId = '" . $id . "'
");
$permiso = mysqli_fetch_array($_permiso);

// set fields
$d = $permiso["designatedId"];

$blog = mysqli_query($master, "
    SELECT * FROM blog
    WHERE blogId = '" . $_GET["id"] . "'
");

$r_blog = mysqli_fetch_array($blog);

// set fields
$s = $r_blog["blogStatus"];
$k = $r_blog["nombre"];
$blogId = $r_blog["blogId"];
$titulo = $r_blog["blogName"];
$blogText = $r_blog["blogText"];
$blogText2 = $r_blog["blogText2"];
$cat = $r_blog["cat"];
$t = $r_blog["dateT"];

$date = $r_blog["dateT"];
// view



require_once '../v/blog/jUpdate.php';
