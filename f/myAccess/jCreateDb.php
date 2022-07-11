<?php

// connection

include '../connection.php';

// module

$module = 'access';

// insert

if (isset($_POST['moduleId'])){

    foreach ($_POST['moduleId'] as $key => $value) {

        $moduleId = $value;
        $jList = ($_POST['jList'][$value]) == true ? 1 : 0;
        $jAdd = ($_POST['jAdd'][$value]) == true ? 1 : 0;
        $jUpdate = ($_POST['jUpdate'][$value]) == true ? 1 : 0;
        $jDelete = ($_POST['jDelete'][$value]) == true ? 1 : 0;
        $subscriberId = 1;

        $insert = $master -> prepare ("
            INSERT INTO access
            (subscriberId, userId, moduleId, jList, jAdd, jUpdate, jDelete)
            VALUES
            (?,?,?,?,?,?,?)
        ");

        $insert -> bind_param (
            "iiiiiii",
            $subscriberId, $_GET["id"], $moduleId, $jList, $jAdd, $jUpdate, $jDelete
        );

        $insert -> execute();

    }
}

// view

echo "<script> window.location='../c/{$module}.php?m=list&n=added'</script>";
