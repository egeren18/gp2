<?php

// connection

include '../connection.php';

// module

$module = 'user';

// select

$_access = mysqli_query($master, "
    SELECT * FROM access
    INNER JOIN module
    ON access.moduleId = module.moduleId
    INNER JOIN user
    ON access.userId = user.userId
    WHERE user.userId = '" . $_SESSION["userId"] . "'
    AND module.moduleController = '" . $module . "'
");

$access = $_access -> fetch_object();

$_permission = mysqli_query($master, "
    SELECT * FROM access
    INNER JOIN module
    ON access.moduleId = module.moduleId
    INNER JOIN user
    ON access.userId = user.userId
    WHERE user.userId = '" . $_GET["id"] . "'
");

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    INNER JOIN civilstatus
    ON user.civilStatusId = civilstatus.civilStatusId
    INNER JOIN gender
    ON user.genderId = gender.genderId
    INNER JOIN country
    ON user.countryId = country.countryId
    INNER JOIN office
    ON user.officeId = office.officeId
    INNER JOIN division
    ON user.divisionId = division.divisionId
    INNER JOIN department
    ON user.departmentId = department.departmentId
    INNER JOIN level
    ON user.levelId = level.levelId
    WHERE user.userId = '" . $_GET["id"] . "'
");

$user = $_user -> fetch_object();

// view

require_once '../v/user/jRead.php';
