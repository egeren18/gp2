<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables.
 */

$aid = $_GET["aid"];
$qid = $_GET["qid"];
$iid = $_GET["iid"];

$userId = $_SESSION["userId"];

/*
 * Realiza una consulta a la base de datos.
 */

$_ac = mysqli_query($connection, "SELECT * FROM ac WHERE acId = '" . $aid . "'");
$ac = $_ac -> fetch_object();

/*
 * Realiza una consulta a la base de datos.
 */

$_client = mysqli_query($connection, "SELECT * FROM client WHERE clientId = '" . $ac -> clientId . "'");
$client = $_client -> fetch_object();

/*
 * Realiza una consulta a la base de datos.
 */

$_leader = mysqli_query($connection, "SELECT * FROM acteam WHERE acId = '" . $ac -> acId . "' AND  designatedId = 4");

/*
 * Realiza una consulta a la base de datos.
 */

$_consultant = mysqli_query($connection, "SELECT * FROM acteam WHERE acId = '" . $ac -> acId . "' AND  designatedId = 1");

/*
 * Realiza una consulta a la base de datos.
 */

$_service = mysqli_query($master, " SELECT * FROM service INNER JOIN nature ON service.natureId = nature.natureId WHERE serviceId = '" . $ac -> serviceId . "'");
$service = $_service -> fetch_object();

/*
 * Realiza una consulta a la base de datos.
 */

$_question = mysqli_query($master, "SELECT * FROM qm{$qid} WHERE itemId = '" . $iid . "'");
$question = $_question -> fetch_object();

/*
 * Realiza una consulta a la base de datos.
 */

$_group = mysqli_query($master, "SELECT * FROM interestgroup WHERE groupStatus = 1");

/*
 * Realiza una consulta a la base de datos.
 */

$_role = mysqli_query($connection, "SELECT * FROM acteam WHERE acId = '" . $ac -> acId . "' AND  userId = '" . $_SESSION["userId"] . "'");
$role = $_role -> fetch_object();

/*
 *
 * M  A  T  R  I  X
 *
 */


/*
 * Realiza una consulta a la base de datos.
 */

//$matrix1 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 1");
//$r_matrix1 = mysqli_fetch_array($matrix1);
            
//$matrix2 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 2");
//$r_matrix2 = mysqli_fetch_array($matrix2);

//$matrix3 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 3");
//$r_matrix3 = mysqli_fetch_array($matrix3);

//$matrix4 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 4");
//$r_matrix4 = mysqli_fetch_array($matrix4);

//$matrix5 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 5");
//$r_matrix5 = mysqli_fetch_array($matrix5);

//$matrix6 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 6");
//$r_matrix6 = mysqli_fetch_array($matrix6);

//$matrix7 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 7");
//$r_matrix7 = mysqli_fetch_array($matrix7);

//$matrix8 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 8");
//$r_matrix8 = mysqli_fetch_array($matrix8);

//$matrix9 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 9");
//$r_matrix9 = mysqli_fetch_array($matrix9);

//$matrix10 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 10");
//$r_matrix10 = mysqli_fetch_array($matrix10);

//$matrix11 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 11");
//$r_matrix11 = mysqli_fetch_array($matrix11);

//$matrix12 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 12");
//$r_matrix12 = mysqli_fetch_array($matrix12);

//$matrix13 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 13");
//$r_matrix13 = mysqli_fetch_array($matrix13);

//$matrix14 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 14");
//$r_matrix14 = mysqli_fetch_array($matrix14);

//$matrix15 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 15");
//$r_matrix15 = mysqli_fetch_array($matrix15);

//$matrix16 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 16");
//$r_matrix16 = mysqli_fetch_array($matrix16);

//$matrix17 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 17");
//$r_matrix17 = mysqli_fetch_array($matrix17);

//$matrix18 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 18");
//$r_matrix18 = mysqli_fetch_array($matrix18);

//$matrix19 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 19");
//$r_matrix19 = mysqli_fetch_array($matrix19);

//$matrix20 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 20");
//$r_matrix20 = mysqli_fetch_array($matrix20);

//$matrix21 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 21");
//$r_matrix21 = mysqli_fetch_array($matrix21);

//$matrix22 = mysqli_query($connection, "SELECT * FROM acmatrix WHERE acId = '" . $c . "' AND i = 22");
//$r_matrix22 = mysqli_fetch_array($matrix22);


//$matrixQty = mysqli_query(
//    $connection,
//    "SELECT COUNT(r) AS q
//    FROM acmatrix
//    WHERE acId = '" . $a . "'
//    AND r > 0
//");

//$r_matrixQty = mysqli_fetch_array($matrixQty);

//$matrixQty = $r_matrixQty['q'];

//$sum = mysqli_query(
//    $connection,
//    "SELECT SUM(r) AS s
//    FROM acmatrix
//    WHERE acId = '" . $a . "'
//    AND r > 0
//");
//
//$r_sum = mysqli_fetch_array($sum);
//
//$sum = $r_sum['s'];
//
//@$average1 = $sum / $matrixQty;
//
//switch ($average1) {
//    case $average1 < 1.5 : $average1 = 'Bajo';
//        break;
//    case $average1 >= 1.5 && $average1 < 2.5 : $average1 = 'Bajo - Moderado';
//        break;
//    case $average1 >= 2.5 && $average1 < 3.5 : $average1 = 'Moderado';
//        break;
//    case $average1 >= 3.5 && $average1 < 4.5 : $average1 = 'Moderado - Alto';
//        break;
//    case $average1 >= 4.5 && $average1 <= 5 : $average1 = 'Alto';
//        break;
//    default : $average1 = 'No Aplica';
//        break;
//}


/*
 *
 * ./ M  A  T  R  I  X
 *
 */

/*
// select

$_riskPartner = mysqli_query(
    $connection, "
    SELECT * FROM user
    WHERE userStatus = 2
");

$riskPartner = $_riskPartner -> fetch_object();

// select

$_reviewer = mysqli_query(
    $connection, "
    SELECT * FROM acteam
    INNER JOIN user
    ON acteam.userId = user.userId
    WHERE acteam.acId = '" . $a . "'
    AND acteam.designatedId = 4
");

$reviewer = $_reviewer -> fetch_object();

// select

$_doer = mysqli_query(
    $connection, "
    SELECT * FROM acteam
    INNER JOIN user
    ON acteam.userId = user.userId
    WHERE acteam.acId = '" . $a . "'
    AND acteam.designatedId = 1
");

$doer = $_doer -> fetch_object();

// select

$_consultant = mysqli_query(
    $connection, "
    SELECT * FROM acteam
    INNER JOIN user
    ON acteam.userId = user.userId
    WHERE acteam.acId = '" . $a . "'
    AND acteam.designatedId = 3
");

$consultant = $_consultant -> fetch_object();

// select

$_type = mysqli_query(
    $connection, "
    SELECT * FROM acteam
    WHERE acteam.acId = '" . $a . "'
    AND acteam.userId = '" . $_SESSION["userId"] . "'
");

$type = $_type -> fetch_object();

// select

$_service = mysqli_query(
    $connection, "
    SELECT * FROM service
    WHERE serviceStatus = 1
");

$service = $_service -> fetch_object();

// select

$_nature = mysqli_query(
    $connection, "
    SELECT * FROM service
    INNER JOIN nature
    ON service.natureId = nature.natureId
    WHERE service.serviceId = '" . $service -> serviceId . "'
");

$nature = $_nature -> fetch_object();

// select

$_answer = mysqli_query(
    $connection,
    "SELECT * FROM acanswer
    WHERE acId = '" . $a . "'
    AND acQId = '" . $q . "'
    AND acIId = '" . $i . "'
");

$answer = $_answer -> fetch_object();

// select

$_completed = mysqli_query(
    $connection,
    "SELECT * FROM acanswer
    INNER JOIN user
    ON acanswer.acDoerId = user.userId
    WHERE acId = '" . $a . "'
    AND acQId = '" . $q . "'
    AND acIId = '" . $i . "'
");

$completed = $_completed -> fetch_object();

// select

$_reviewed = mysqli_query(
    $connection,
    "SELECT * FROM acanswer
    INNER JOIN user
    ON acanswer.acReviewerId = user.userId
    WHERE acId = '" . $a . "'
    AND acQId = '" . $q . "'
    AND acIId = '" . $i . "'
");

$reviewed = $_reviewed -> fetch_object();

// select

$teamGroup = 0;


// select

$_matrix = mysqli_query(
    $connection,
    "SELECT * FROM qmatrix
");

// select

$qty = mysqli_query(
    $connection,
    "SELECT COUNT(r) AS q
    FROM acmatrix
    WHERE acId = '" . $a . "'
    AND r > 0
");

$r_qty = mysqli_fetch_array($qty);

$qty = $r_qty['q'];

// select

$sum = mysqli_query(
    $connection,
    "SELECT SUM(r) AS s
    FROM acmatrix
    WHERE acId = '" . $a . "'
    AND r > 0
");

$r_sum = mysqli_fetch_array($sum);

$sum = $r_sum['s'];

@$average = $sum / $qty;

// switch

switch ($average) {

    case
        $average < 1.5 : $average = 'Bajo';
        break;

    case
        $average >= 1.5 && $average < 2.5 : $average = 'Bajo - Moderado';
        break;

    case
        $average >= 2.5 && $average < 3.5 : $average = 'Moderado';
        break;

    case
        $average >= 3.5 && $average < 4.5 : $average = 'Moderado - Alto';
        break;

    case
        $average >= 4.5 && $average <= 5 : $average = 'Alto';
        break;

    default:
        $average = 'No Aplica';
        break;
    
}

// view
*/
require_once '../v/ac/jItem.php';
    