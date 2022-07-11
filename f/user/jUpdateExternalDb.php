<?php

// connection

include '../connection.php';

// module

$module = 'user';
$action = 'update';

// var
$userName = filter_var($_POST['userName'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$userSurname = filter_var($_POST['userSurname'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$civilStatusId = $_POST['civilStatusId'];
$userBirthday = filter_var($_POST['userBirthday'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$genderId = $_POST['genderId'];
$userEmail = filter_var($_POST['userEmail'], FILTER_SANITIZE_EMAIL);
$userPhone1 = filter_var($_POST['userPhone1'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$userPhone2 = filter_var($_POST['userPhone2'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$userAddress = filter_var($_POST['userAddress'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$userCity = filter_var($_POST['userCity'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$userState = filter_var($_POST['userState'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$countryId = $_POST['countryId'];
$userAdmission = filter_var($_POST['userAdmission'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$officeId = $_POST['officeId'];
$divisionId = $_POST['divisionId'];
$departmentId = $_POST['departmentId'];
$levelId = $_POST['levelId'];

// update

$update = $master -> prepare ("
    UPDATE user SET
    userName = ?,
    userSurname = ?,
    civilStatusId = ?,
    userBirthday = ?,
    genderId = ?,
    userEmail = ?,
    userPhone1 = ?,
    userPhone2 = ?,
    userAddress = ?,
    userCity = ?,
    userState = ?,
    countryId = ?,
    userAdmission = ?,
    officeId = ?,
    divisionId = ?,
    departmentId = ?,
    levelId = ?
    WHERE
    userId = ?
");

$update -> bind_param (
    "ssisissssssisiiiii",
    $userName, $userSurname, $civilStatusId, $userBirthday, $genderId,
    $userEmail, $userPhone1, $userPhone2, $userAddress, $userCity,
    $userState, $countryId, $userAdmission, $officeId, $divisionId,
    $departmentId, $levelId, $_GET["id"]
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["id"]);

$trace -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=external&n=updated'</script>";
