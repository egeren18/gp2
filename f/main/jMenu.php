<?php

// connection

include '../connection.php';

// select

$_qty = mysqli_query($master, "
    SELECT count(*) as total FROM notification
    WHERE notificationStatus = 0
");

$qty = mysqli_fetch_array($_qty);

// select

$_management = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleType = 1
    AND moduleId <> 1
    ORDER BY moduleId
");
$_management2 = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND cDeskId = 2
    ORDER BY moduleId
");
$_management3 = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND cDeskId = 3
    ORDER BY moduleId
");
$_management4 = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND cDeskId = 4
    ORDER BY moduleId
");
$_management5 = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND cDeskId = 5
    ORDER BY moduleId
");
$_management6 = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND cDeskId = 6
    ORDER BY moduleId
");
$_management7 = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND cDeskId = 7
    ORDER BY moduleId
");
$_management8 = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND cDeskId = 8
    ORDER BY moduleId
");
$_management9 = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND cDeskId = 9
    ORDER BY moduleId
");
$_management10 = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND cDeskId = 10
    ORDER BY moduleId
");
$_management11 = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND cDeskId = 11
    ORDER BY moduleId
");
// select

$_sagragp = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleType = 2
    AND moduleStatus = 1
");

// select

$_module = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleType = 3
    AND moduleStatus = 1
    ORDER BY moduleName
");
    
// select

$_audit = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleType = 4
    AND moduleStatus = 1
");

// select

$_administration = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleType = 5
    AND moduleStatus = 1
");
// select

$_herramientas = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleType = 9
    AND moduleStatus = 1
    ORDER BY moduleId     
");

// select

$_rrhh = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleType = 6
    AND moduleStatus = 1
");

// select

$_support = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleType = 7
    AND moduleStatus = 1
");

// select

$_net = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleType = 8
    AND moduleStatus = 1
");

// conexiones a la base de datos
$_c2 = mysqli_query($master, "
    SELECT * FROM cdesk
    WHERE cDeskStatus = 1 AND
    cDeskId = 2
");
$c2 = $_c2 -> fetch_object();
$name2 = $c2 -> cDeskName;
$id2 = $c2 -> cDeskId;
// conexiones a la base de datos
$_c3 = mysqli_query($master, "
    SELECT * FROM cdesk
    WHERE cDeskStatus = 1 AND
    cDeskId = 3
");
$c3 = $_c3 -> fetch_object();
$name3 = $c3 -> cDeskName;
$id3 = $c3 -> cDeskId;
// conexiones a la base de datos
$_c4 = mysqli_query($master, "
    SELECT * FROM cdesk
    WHERE cDeskStatus = 1 AND
    cDeskId = 4
");
$c4 = $_c4 -> fetch_object();
$name4 = $c4 -> cDeskName;
$id4 = $c4 -> cDeskId;
// conexiones a la base de datos
$_c5 = mysqli_query($master, "
    SELECT * FROM cdesk
    WHERE cDeskStatus = 1 AND
    cDeskId = 5
");
$c5 = $_c5 -> fetch_object();
$name5 = $c5 -> cDeskName;
$id5 = $c5 -> cDeskId;
// conexiones a la base de datos
$_c6 = mysqli_query($master, "
    SELECT * FROM cdesk
    WHERE cDeskStatus = 1 AND
    cDeskId = 6
");
$c6 = $_c6 -> fetch_object();
$name6 = $c6 -> cDeskName;
$id6 = $c6 -> cDeskId;
// conexiones a la base de datos
$_c7 = mysqli_query($master, "
    SELECT * FROM cdesk
    WHERE cDeskStatus = 1 AND
    cDeskId = 7
");
$c7 = $_c7 -> fetch_object();
$name7 = $c7 -> cDeskName;
$id7 = $c7 -> cDeskId;
// conexiones a la base de datos
$_c8 = mysqli_query($master, "
    SELECT * FROM cdesk
    WHERE cDeskStatus = 1 AND
    cDeskId = 8
");
$c8 = $_c8 -> fetch_object();
$name8 = $c8 -> cDeskName;
$id8 = $c8 -> cDeskId;
// conexiones a la base de datos
$_c9 = mysqli_query($master, "
    SELECT * FROM cdesk
    WHERE cDeskStatus = 1 AND
    cDeskId = 9
");
$c9 = $_c9 -> fetch_object();
$name9 = $c9 -> cDeskName;
$id9 = $c9 -> cDeskId;
// conexiones a la base de datos
$_c10 = mysqli_query($master, "
    SELECT * FROM cdesk
    WHERE cDeskStatus = 1 AND
    cDeskId = 10
");
$c10 = $_c10 -> fetch_object();
$name10 = $c10 -> cDeskName;
$id10 = $c10 -> cDeskId;
$_c11 = mysqli_query($master, "
    SELECT * FROM cdesk
    WHERE cDeskStatus = 1 AND
    cDeskId = 11
");
$c11 = $_c11 -> fetch_object();
$name11 = $c11 -> cDeskName;
$id11 = $c11 -> cDeskId;


// view

include '../plugins/toast/toast.php';

$n = $_GET["n"];

switch ($n) {

    case 'notAllowed':
        echo $notAllowed;
        require_once '../v/main/jMenu.php';
        break;

    default:
        require_once '../v/main/jMenu.php';
        break;
}
