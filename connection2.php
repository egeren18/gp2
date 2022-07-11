<?php

@session_start();

$sS = "localhost";
$uS = "sagracom";
$pS = "Sagra2507.";
$dS = "sagracom_" . $_SESSION["subscriberId"];

$connection = new mysqli($sS, $uS, $pS, $dS);
