<?php

// connection

include '../connection.php';

// module

$module = 'accessSubscriber';

// update

if (isset($_POST['moduleId'])){

    foreach ($_POST['moduleId'] as $key => $value) {

        $moduleId = $value;
        $jList = ($_POST['jList'][$value]) == true ? 1 : 0;
        $jAdd = ($_POST['jAdd'][$value]) == true ? 1 : 0;
        $jUpdate = ($_POST['jUpdate'][$value]) == true ? 1 : 0;
        $jDelete = ($_POST['jDelete'][$value]) == true ? 1 : 0;

        $update = $master -> prepare ("
            UPDATE access SET
            jList = ?,
            jAdd = ?,
            jUpdate = ?,
            jDelete = ?
            WHERE
            moduleId = ?
            AND userId = '" . $_GET["uid"] . "'
        ");	

        $update -> bind_param (
            "iiiii",
            $jList, $jAdd, $jUpdate, $jDelete, $moduleId
        );

        $update -> execute();

    }

}

// view

echo "<script>window.location='../c/{$module}.php?m=user&sid={$_GET["sid"]}&n=updated'</script>";
