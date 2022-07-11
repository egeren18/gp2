<?php

// connect database
include '../connection.php';

// set variables
$userId = $_GET['c'];
$userAnswerForm = $_POST['userAnswer'];

// query
$user = mysqli_query(
    $connection,"
    SELECT * FROM user
    WHERE userId = '" . $userId . "'
");

// select user
$r_user = mysqli_fetch_array($user);

// variables
$userAnswer = $r_user['userAnswer'];

// compare passwords
if (password_verify($userAnswerForm, $userAnswer)) {
	echo "
        <body>
            <script> window.location='../c/main.php?m=changePassword&c=" . $userId . "&n=validated'</script>
        </body>
    ";
}
// else
else {
    echo "
        <body>
            <script> window.location='../c/main.php?m=logInEmail&n=errorAnswer'</script>
        </body>
    ";

}
