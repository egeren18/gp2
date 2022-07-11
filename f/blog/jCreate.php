<?php
// conectar
include '../connection.php';
$module = 'blog';
$id = '73';
// connection


// select
$_permiso = mysqli_query($master, "
    SELECT * FROM permiso
    WHERE userId = '" . $_SESSION["userId"] . "'
    AND moduleId = '" . $id . "'
");
$permiso = mysqli_fetch_array($_permiso);

// set fields
$d = $permiso["designatedId"];

// view
require_once '../v/blog/jCreate.php';
