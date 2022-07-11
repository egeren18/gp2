<?php

// Connection variables 
$host = "localhost"; // MySQL host name eg. localhost
$user = "sagracom_crear"; // MySQL user. eg. root ( if your on localserver)
$password = "Sagra2507."; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "sagracom_php_creacion"; // MySQL Database name

// Connect to MySQL Database
$con = new mysqli($host, $user, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>