<?php

// session start

session_start();

// all

$_SESSION = array();

// session destroy

session_destroy();

// view

echo "<script> window.location='index.php'</script>";
