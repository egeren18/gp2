<?php

// connection

include '../connection.php';

// var

$acId = $_GET['cod'];
$term = $_POST['term'];
$decision = $_POST['decision'];
$amount = $_POST['amount'];
$currencyId = $_POST['currencyId'];

// update

$update = $connection -> prepare ("
    UPDATE tracing
    SET
    term = ?,
    decision = ?,
    amount = ?,
    currencyId = ?
    WHERE
    acId = ?
");

$update -> bind_param (
    "iisii",
    $term, $decision, $amount, $currencyId, $acId
);

$update -> execute();

// attach

$ps = $_FILES["proposal"]["size"];
$pt = $_FILES['proposal']['type'];
$ptn = $_FILES["proposal"]["tmp_name"];
$pn = basename($_FILES["proposal"]["name"]);
$pf = '../pdf';

if ($ps == 0) {

    if ($ps > 1048576) {
        echo "<body><script> window.location='../c/tracing.php?m=detail&c=" . $acId . "&n=sizeError'</script>";
    }

}
else {

    if ($pt == 'application/pdf') {

        chmod($pf, 0777);

        $unlink = mysqli_query($connection, "
            SELECT * FROM tracing
            WHERE acId = '" . $acId . "'
        ");

        $r_unlink = mysqli_fetch_array($unlink);

        $pdf =  $r_unlink["proposal"] ?? '';
        $unlink = $pdf != '' ? unlink('../pdf/' . $pdf) : '';
        move_uploaded_file($ptn, "$pf/$pn");

        $update = $connection -> prepare ("
            UPDATE tracing
            SET
            proposal = ?
            WHERE
            acId = ?
        ");

        $update -> bind_param (
            "si",
            $pn, $acId
        );
        
        $update -> execute();

    }
}

$bs = $_FILES["budget"]["size"];
$bt = $_FILES['budget']['type'];
$btn = $_FILES["budget"]["tmp_name"];
$bn = basename($_FILES["budget"]["name"]);
$bf = '../excel';

if ($bs == 0) {

    if ($bs > 1048576) {
        echo "<body><script> window.location='../c/tracing.php?m=detail&c=" . $acId . "&n=sizeError'</script>";
    }
    
}
else {
    
    if ($bt == 'application/vnd.ms-excel' or $bt == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {

        chmod($pf, 0777);

        $unlink = mysqli_query($connection, "
            SELECT * FROM tracing
            WHERE acId = '" . $acId . "'
        ");

        $r_unlink = mysqli_fetch_array($unlink);

        $excel =  $r_unlink["budget"] ?? '';
        $unlink = $excel != '' ? unlink('../excel/' . $excel) : '';
        move_uploaded_file($btn, "$bf/$bn");

        $update = $connection -> prepare ("
            UPDATE tracing
            SET
            budget = ?
            WHERE
            acId = ?
        ");

        $update -> bind_param (
            "si",
            $bn, $acId
        );

        $update -> execute();
        
    }
}

// trace

$userId = $_SESSION["userId"];
$module = 'AC Tracing';
$action = 'Update';
$itemId = $acId;

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
//echo "<body><script> window.location='../c/tracing.php?m=detail&c=" . $acId . "&n=updated'</script>";
