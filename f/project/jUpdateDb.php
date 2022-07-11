<?php

/* connection *****************************************************************/

include '../connection.php';

/* var ************************************************************************/

$projectId = $_GET["c"];
$projectDoerId = $_POST["projectDoerId"];
$projectReviewerId = $_POST["projectReviewerId"];

/* update *********************************************************************/

$update = $connection -> prepare ("
    UPDATE project
    SET
    projectDoerId = ?,
    projectReviewerId = ?
    WHERE
    projectId = ?
");

$update -> bind_param (
    "ssi",
    $projectDoerId, $projectReviewerId, $projectId
);

$update -> execute();

/* trace **********************************************************************/

$userId = $_SESSION["userId"];
$module = 'Project';
$action = 'Update';
$itemId = $projectId;

/* insert *********************************************************************/

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

/* view ***********************************************************************/

echo "<body><script> window.location='../c/project.php?m=list&n=updated'</script>";
