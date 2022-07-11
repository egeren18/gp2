v<?php

// connection

include '../connection.php';

// module

$module = 'cmodal';

// select

$_acmodal = mysqli_query($master, "
    SELECT * FROM acmodal
    WHERE acmodalId = '" . $_GET["id"] . "'
");

$acmodal = $_acmodal -> fetch_object();

$_cmodal = mysqli_query($master, "
    SELECT * FROM cmodal
    WHERE moduleId = '" . $_GET["id"] . "'
");

$cmodal = $_cmodal -> fetch_object();

$_tmodal = mysqli_query($master, "
    SELECT * FROM tmodal
    WHERE cmodaltype = '" . $cmodal -> cmodalType . "'
");

$tmodal = $_tmodal -> fetch_object();


$_tmodal2 = mysqli_query($master, "
    SELECT * FROM tmodal
    WHERE tmodalStatus = 1
");

// view

if ($_GET['mod'] == 27){
switch ($_GET['id']) {

    case '1':
      require_once '../v/cmodal/A1.php';
        break;

    case '2':
       require_once '../v/cmodal/A2.php';
        break;

    case '3':
       require_once '../v/cmodal/A3.php';
        break;

    case '4':
        require_once '../v/cmodal/A4.php';
        break;

    case '5':
        require_once '../v/cmodal/A5.php';
        break;
        
    case '6':
        require_once '../v/cmodal/A6.php';
        break;

    case '7':
       require_once '../v/cmodal/A7.php';
        break;

    case '8':
        require_once '../v/cmodal/A8.php';
        break;

    case '9':
        require_once '../v/cmodal/A9.php';
        break;

}
}else {


require_once '../v/cmodal/jUpdate.php';
}