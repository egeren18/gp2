<?php

// connection

include '../connection.php';

// module

$module = 'accessSubscriber';
include '../allow.php';

// select

$_subscriber = mysqli_query($master, "
    SELECT * FROM subscriber
    WHERE subscriberStatus = 1
    AND subscriberId <> 1
");

// view

require_once '../v/accessSubscriber/jIndex.php';
