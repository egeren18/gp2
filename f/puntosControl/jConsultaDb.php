<?php

// connect database
include '../connection.php';

// set id 
$rubroId = $_POST["rubroId"];
// view
$URL="../c/puntosControl.php?m=consulta&n=updated&c=". $rubroId ;
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
 