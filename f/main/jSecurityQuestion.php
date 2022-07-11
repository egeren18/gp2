<?php

// connect database
include '../connection.php';

// set variables
$emailForm = $_POST['userEmail'];

// query user
$user = mysqli_query(
    $connection, "
    SELECT userId, userEmail FROM user
    WHERE
    userEmail = '" . $emailForm . "'
");

// select email
$r_user = mysqli_fetch_array($user);

// set variables
$userEmail = $r_user["userEmail"];
$userId = $r_user["userId"];

// compare emails
if (strcmp($emailForm, $userEmail) === 0) {
    echo "
        <body>
            <script> window.location='../c/main.php?m=question&c=$userId'; </script>
        </body>
    ";
}
// else
else {
    echo "
    <body>
        <script> window.location='../c/main.php?m=logInEmail&n=emailNotFound'; </script>
    </body>
    ";
}
