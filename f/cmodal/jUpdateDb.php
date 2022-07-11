<?php

// connection

include '../connection.php';

// module

$module = 'cmodal';
$action = 'update';

// var
$tituloId = $_POST['tituloId'];
$cmodalType = $_POST['cmodalType'];
$t1 = $_POST['text1'];
$t2 = $_POST['text2'];
$t3 = $_POST['text3'];
$t4 = $_POST['text4'];
$t5 = $_POST['text5'];
$t6 = $_POST['text6'];
$t7 = $_POST['text7'];
$t8 = $_POST['text8'];
$t9 = $_POST['text9'];
$t10 = $_POST['text10'];
$t11 = $_POST['text11'];




if ($_GET['mod'] == 27){
    
    $update = $master -> prepare ("
    UPDATE acmodal
    SET
    acmodaltext1 = ?,
    acmodaltext2 = ?,
    acmodaltext3 = ?,
    acmodaltext4 = ?    
    WHERE
    acmodalId = ?
");	

$update -> bind_param (
    "ssssi",
    $t1, $t2, $t3, $t4,  $_GET["id"]
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

echo "<script> window.location='../c/{$module}.php?m=list&id=27&n=updated'</script>";

    
}else{
// update

$update = $master -> prepare ("
    UPDATE cmodal
    SET
    moduleTest1 = ?,
    moduleTest2 = ?,
    moduleTest3 = ?,
    moduleTest4 = ?,
    moduleTest5 = ?,
    moduleTest6 = ?,
    moduleTest7 = ?,
    moduleTest8 = ?,
    moduleTest9 = ?,
    moduleTest10 = ?,
    moduleTest11 = ?,
    cmodalType = ?,
    tituloId = ?
    WHERE
    moduleId = ?
");	

$update -> bind_param (
    "sssssssssssiii",
    $t1, $t2, $t3, $t4, $t5, $t6, $t7, $t8, $t9, $t10, $t11, $cmodalType, $tituloId,  $_GET["id"]
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

echo "<script> window.location='../c/{$module}.php?m=list&id={$_GET['id']}&n=updated'</script>";
}
