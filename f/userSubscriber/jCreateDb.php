<?php

// connection

include '../connection.php';

// module

$module = 'userSubscriber';
$action = 'add';

// var

$userName = filter_var($_POST['userName'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$userSurname = filter_var($_POST['userSurname'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$userEmail = filter_var($_POST['userEmail'], FILTER_SANITIZE_EMAIL);
$userPassword = password_hash("12345", PASSWORD_DEFAULT);
$userTypeId = 2;
$userAdmin = 1;

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userEmail = '" . $userEmail . "'
    AND userStatus = 1
");

$user = $_user -> fetch_object();

$userDb = $user -> userEmail;

// insert

if (strcasecmp($userEmail, $userDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO user
        (subscriberId, userName, userSurname, userEmail, userTypeId, userPassword, userAdmin)
        VALUES
        (?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "isssisi",
        $_GET["sid"], $userName, $userSurname, $userEmail, $userTypeId, $userPassword, $userAdmin
    );

    $insert -> execute();

    $id = $master -> insert_id;

    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script>window.location='../c/{$module}.php?m=user&sid={$_GET["sid"]}&n=added'</script>";
}

// view

else {

    echo "<script>window.location='../c/{$module}.php?m=user&sid={$_GET["sid"]}&n=duplicated'</script>";

}
