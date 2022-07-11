<?php

// connection

include '../connection.php';

// module

$module = 'user';
$action = 'add';

// var

$subscriberId = 1;
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
$userPassword = password_hash("12345", PASSWORD_DEFAULT);
$userTypeId = 1;
$userAdmin = 4;

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE userEmail = '" . $userEmail . "'
    AND userStatus = 1
");

$user = $_user -> fetch_object();

$userDb = $user -> userEmail ;

// insert

if (strcasecmp($userEmail, $userDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO user
        (subscriberId, userName, userSurname, civilStatusId, userBirthday,
        genderId, userEmail, userPhone1, userPhone2, userAddress,
        userCity, userState, countryId, userAdmission, officeId,
        divisionId, departmentId, levelId, userPassword, userTypeId,
        userAdmin)
        VALUES
        (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "issisissssssisiiiisii",
        $subscriberId, $userName, $userSurname, $civilStatusId, $userBirthday,
        $genderId, $userEmail, $userPhone1, $userPhone2, $userAddress,
        $userCity, $userState, $countryId, $userAdmission, $officeId,
        $divisionId, $departmentId, $levelId, $userPassword, $userTypeId,
        $userAdmin
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

    echo "<script> window.location='../c/{$module}.php?m=external&n=added'</script>";
}
else {

    // view

    echo "<script> window.location='../c/{$module}.php?m=external&n=duplicated'</script>";

}
