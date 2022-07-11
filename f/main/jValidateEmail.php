<?php

// connection

include '../connection.php';

// var

$emailForm = $_POST['userEmail'];

// select
/*
$_user = mysqli_query($master, "
    SELECT * FROM user
    INNER JOIN subscriber
    ON user.subscriberId = subscriber.subscriberId
    WHERE userEmail = '" . $emailForm . "'
    AND subscriber.subscriberId = 1
");
*/
$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userEmail = '" . $emailForm . "'
    AND userStatus = 1
");

$user = $_user -> fetch_object();

// compare

if (strcmp($emailForm, $user -> userEmail) === 0) {
    
    echo "<script>window.location='../c/main.php?m=logInPassword&c={$user -> userId}'; </script>";
    
}
else {
    
    echo "<script>window.location='../c/main.php?m=logInEmail&n=error';</script>";
    
}
