<?php

// connection

include '../connection.php';

// module

$module = 'plan';

// select

$_plan = mysqli_query($master, "
    SELECT * FROM plan
    WHERE planId = '" . $_GET["cid"] . "'
");

$plan = $_plan -> fetch_object();


// view

require_once '../v/plan/jUpdate.php';
