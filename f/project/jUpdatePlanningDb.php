<?php

// connect

include '../connection.php';

$mode = $_POST['mode'];

switch ($mode) {

    case 'doer':
        
        // var
        
        $projectId = $_GET['c'];
        $itemId = $_GET['i'];
        $a1 = $_POST['a1'];
        $a2 = $_POST['a2'];
        $a3 = $_POST['a3'];
        $a4 = $_POST['a4'];
        $a5 = $_POST['a5'];
        $a6 = $_POST['a6'];
        $a7 = $_POST['a7'];
        $a8 = $_POST['a8'];
        $a9 = $_POST['a9'];
        $a10 = $_POST['a10'];
        $a11 = $_POST['a11'];
        $a12 = $_POST['a12'];
        $a13 = $_POST['a13'];
        $a14 = $_POST['a14'];
        $a15 = $_POST['a15'];
        $a16 = $_POST['a16'];
        $debility = $_POST['debility'];
        $letter = $_POST['letter'];
        $critical = $_POST['critical'];
        $trim = $_POST['trim'];
        $projectDoerId = $_POST['projectDoerId'];
        $projectDoerDate = $_POST['projectDoerDate'];
        $completed = $_POST["completed"];

        if ($completed == TRUE) {
            $status = 2;
        }
        else {
            $status = 1;
        }

        // update

        $update = $connection -> prepare ("
            UPDATE projectplanninganswer
            SET
            a1 = ?,
            a2 = ?,
            a3 = ?,
            a4 = ?,
            a5 = ?,
            a6 = ?,
            a7 = ?,
            a8 = ?,
            a9 = ?,
            a10 = ?,
            a11 = ?,
            a12 = ?,
            a13 = ?,
            a14 = ?,
            a15 = ?,
            a16 = ?,
            debility = ?,
            letter = ?,
            critical = ?,
            trim = ?,
            projectDoerId = ?,
            projectDoerDate = ?,
            statusId = ?
            WHERE
            projectId = ?
            AND projectIId = '" . $itemId . "'
        ");

        $update -> bind_param (
            "ssssssssssssssssssssisii",
            $a1, $a2, $a3, $a4, $a5,
            $a6, $a7, $a8, $a9, $a10,
            $a11, $a12, $a13, $a14, $a15,
            $a16, $debility, $letter, $critical, $trim,
            $projectDoerId, $projectDoerDate, $status, $projectId
        );

        $update -> execute();
        break;

    case 'reviewer':

        // var

        $projectId = $_GET['c'];
        $itemId = $_GET['i'];
        $projectReviewerId = $_POST['projectReviewerId'];
        $projectReviewerDate = $_POST['projectReviewerDate'];
        $completed = $_POST["completed"];
        $back = $_POST["back"];
        $approved = $_POST["approved"];

        if ($completed == TRUE) {
            $status = 2;
        }
        elseif ($back == TRUE) {
            $status = 3;
        }
        elseif ($approved == TRUE) {
            $status = 4;
        }
        else {
            $status = 1;
        }

        // update

        $update = $connection -> prepare ("
            UPDATE projectplanninganswer
            SET
            projectReviewerId = ?,
            projectReviewerDate = ?,
            statusId = ?
            WHERE
            projectId = ?
            AND projectIId = '" . $itemId . "'
        ");

        $update -> bind_param (
            "isii",
            $projectReviewerId, $projectReviewerDate, $status, $projectId
        );

        $update -> execute();
        break;

    case 'risk':
        
        // var
        
        $projectId = $_GET['c'];
        $itemId = $_GET['i'];
        $back = $_POST["back"];
        $approved = $_POST["approved"];
        $closed = $_POST["closed"];

        if ($back == TRUE) {
            $status = 3;
        }
        elseif ($approved == TRUE) {
            $status = 4;
        }
        elseif ($closed == TRUE) {
            $status = 5;
        }
        else {
            $status = 1;
        }

        // update

        $update = $connection -> prepare ("
            UPDATE projectplanninganswer
            SET
            statusId = ?
            WHERE
            projectId = ?
            AND projectIId = '" . $itemId . "'
        ");

        $update -> bind_param (
            "ii",
            $status, $projectId
        );

        $update -> execute();
        break;

    default:
        break;
}

// update

$userId = $_SESSION["userId"];
$module = 'Project';
$action = 'Update Planning';
$itemId = $projectId;

$trace = $connection -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param (
    "issi",
    $userId, $module, $action, $itemId
);

$trace -> execute();

// view

echo "<body><script>window.history.go(-2);</script>";
