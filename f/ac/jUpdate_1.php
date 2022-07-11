<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables.
 */

date_default_timezone_set("America/Caracas");
$aid = $_GET['aid'];
$qid = $_GET['qid'];
$iid = $_GET['iid'];
$important = isset($_POST['important']) == true ? 1 : NULL;
$acDoerId = $_SESSION['userId'];
$acDoerDate = date('Y-m-d / g:i a');
$c = $_POST['completed'];
$statusId = $c == true ? 2 : 1;

/*
 * Es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.
 */

switch ($iid) {

    case 28:
        
        /*
         * Variables.
         */

        $i1 = isset($_POST['i1']) ? filter_input(INPUT_POST, 'i1', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r1 = isset($_POST['r1']) ? filter_input(INPUT_POST, 'r1', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d1 = isset($_POST['d1']) ? filter_input(INPUT_POST, 'd1', FILTER_SANITIZE_STRING) : NULL;
        $a1 = isset($_POST['a1']) ? filter_input(INPUT_POST, 'a1', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r1, $d1, $a1, $i1);
        $update -> execute();

        /*
         * Variables.
         */

        $i2 = isset($_POST['i2']) ? filter_input(INPUT_POST, 'i2', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r2 = isset($_POST['r2']) ? filter_input(INPUT_POST, 'r2', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d2 = isset($_POST['d2']) ? filter_input(INPUT_POST, 'd2', FILTER_SANITIZE_STRING) : NULL;
        $a2 = isset($_POST['a2']) ? filter_input(INPUT_POST, 'a2', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r2, $d2, $a2, $i2);
        $update -> execute();

        /*
         * Variables.
         */

        $i3 = isset($_POST['i3']) ? filter_input(INPUT_POST, 'i3', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r3 = isset($_POST['r3']) ? filter_input(INPUT_POST, 'r3', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d3 = isset($_POST['d3']) ? filter_input(INPUT_POST, 'd3', FILTER_SANITIZE_STRING) : NULL;
        $a3 = isset($_POST['a3']) ? filter_input(INPUT_POST, 'a3', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r3, $d3, $a3, $i3);
        $update -> execute();

        /*
         * Variables.
         */

        $i4 = isset($_POST['i4']) ? filter_input(INPUT_POST, 'i4', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r4 = isset($_POST['r4']) ? filter_input(INPUT_POST, 'r4', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d4 = isset($_POST['d4']) ? filter_input(INPUT_POST, 'd4', FILTER_SANITIZE_STRING) : NULL;
        $a4 = isset($_POST['a4']) ? filter_input(INPUT_POST, 'a4', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r4, $d4, $a4, $i4);
        $update -> execute();

        /*
         * Variables.
         */

        $i5 = isset($_POST['i5']) ? filter_input(INPUT_POST, 'i5', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r5 = isset($_POST['r5']) ? filter_input(INPUT_POST, 'r5', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d5 = isset($_POST['d5']) ? filter_input(INPUT_POST, 'd5', FILTER_SANITIZE_STRING) : NULL;
        $a5 = isset($_POST['a5']) ? filter_input(INPUT_POST, 'a5', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r5, $d5, $a5, $i5);
        $update -> execute();

        /*
         * Variables.
         */

        $i6 = isset($_POST['i6']) ? filter_input(INPUT_POST, 'i6', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r6 = isset($_POST['r6']) ? filter_input(INPUT_POST, 'r6', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d6 = isset($_POST['d6']) ? filter_input(INPUT_POST, 'd6', FILTER_SANITIZE_STRING) : NULL;
        $a6 = isset($_POST['a6']) ? filter_input(INPUT_POST, 'a6', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r6, $d6, $a6, $i6);
        $update -> execute();

        /*
         * Variables.
         */

        $i7 = isset($_POST['i7']) ? filter_input(INPUT_POST, 'i7', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r7 = isset($_POST['r7']) ? filter_input(INPUT_POST, 'r7', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d7 = isset($_POST['d7']) ? filter_input(INPUT_POST, 'd7', FILTER_SANITIZE_STRING) : NULL;
        $a7 = isset($_POST['a7']) ? filter_input(INPUT_POST, 'a7', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r7, $d7, $a7, $i7);
        $update -> execute();

        /*
         * Variables.
         */

        $i8 = isset($_POST['i8']) ? filter_input(INPUT_POST, 'i8', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r8 = isset($_POST['r8']) ? filter_input(INPUT_POST, 'r8', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d8 = isset($_POST['d8']) ? filter_input(INPUT_POST, 'd8', FILTER_SANITIZE_STRING) : NULL;
        $a8 = isset($_POST['a8']) ? filter_input(INPUT_POST, 'a8', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r8, $d8, $a8, $i8);
        $update -> execute();

        /*
         * Variables.
         */

        $i9 = isset($_POST['i9']) ? filter_input(INPUT_POST, 'i9', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r9 = isset($_POST['r9']) ? filter_input(INPUT_POST, 'r9', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d9 = isset($_POST['d9']) ? filter_input(INPUT_POST, 'd9', FILTER_SANITIZE_STRING) : NULL;
        $a9 = isset($_POST['a9']) ? filter_input(INPUT_POST, 'a9', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r9, $d9, $a9, $i9);
        $update -> execute();

        /*
         * Variables.
         */

        $i10 = isset($_POST['i10']) ? filter_input(INPUT_POST, 'i10', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r10 = isset($_POST['r10']) ? filter_input(INPUT_POST, 'r10', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d10 = isset($_POST['d10']) ? filter_input(INPUT_POST, 'd10', FILTER_SANITIZE_STRING) : NULL;
        $a10 = isset($_POST['a10']) ? filter_input(INPUT_POST, 'a10', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r10, $d10, $a10, $i10);
        $update -> execute();

        /*
         * Variables.
         */

        $i11 = isset($_POST['i11']) ? filter_input(INPUT_POST, 'i11', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r11 = isset($_POST['r11']) ? filter_input(INPUT_POST, 'r11', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d11 = isset($_POST['d11']) ? filter_input(INPUT_POST, 'd11', FILTER_SANITIZE_STRING) : NULL;
        $a11 = isset($_POST['a11']) ? filter_input(INPUT_POST, 'a11', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r11, $d11, $a11, $i11);
        $update -> execute();

        /*
         * Variables.
         */

        $i12 = isset($_POST['i12']) ? filter_input(INPUT_POST, 'i12', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r12 = isset($_POST['r12']) ? filter_input(INPUT_POST, 'r12', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d12 = isset($_POST['d12']) ? filter_input(INPUT_POST, 'd12', FILTER_SANITIZE_STRING) : NULL;
        $a12 = isset($_POST['a12']) ? filter_input(INPUT_POST, 'a12', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r12, $d12, $a12, $i12);
        $update -> execute();

        /*
         * Variables.
         */

        $i13 = isset($_POST['i13']) ? filter_input(INPUT_POST, 'i13', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r13 = isset($_POST['r13']) ? filter_input(INPUT_POST, 'r13', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d13 = isset($_POST['d13']) ? filter_input(INPUT_POST, 'd13', FILTER_SANITIZE_STRING) : NULL;
        $a13 = isset($_POST['a13']) ? filter_input(INPUT_POST, 'a13', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r13, $d13, $a13, $i13);
        $update -> execute();

        /*
         * Variables.
         */

        $i14 = isset($_POST['i14']) ? filter_input(INPUT_POST, 'i14', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r14 = isset($_POST['r14']) ? filter_input(INPUT_POST, 'r14', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d14 = isset($_POST['d14']) ? filter_input(INPUT_POST, 'd14', FILTER_SANITIZE_STRING) : NULL;
        $a14 = isset($_POST['a14']) ? filter_input(INPUT_POST, 'a14', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r14, $d14, $a14, $i14);
        $update -> execute();

        /*
         * Variables.
         */

        $i15 = isset($_POST['i15']) ? filter_input(INPUT_POST, 'i15', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r15 = isset($_POST['r15']) ? filter_input(INPUT_POST, 'r15', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d15 = isset($_POST['d15']) ? filter_input(INPUT_POST, 'd15', FILTER_SANITIZE_STRING) : NULL;
        $a15 = isset($_POST['a15']) ? filter_input(INPUT_POST, 'a15', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r15, $d15, $a15, $i15);
        $update -> execute();

        /*
         * Variables.
         */

        $i16 = isset($_POST['i16']) ? filter_input(INPUT_POST, 'i16', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r16 = isset($_POST['r16']) ? filter_input(INPUT_POST, 'r16', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d16 = isset($_POST['d16']) ? filter_input(INPUT_POST, 'd16', FILTER_SANITIZE_STRING) : NULL;
        $a16 = isset($_POST['a16']) ? filter_input(INPUT_POST, 'a16', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r16, $d16, $a16, $i16);
        $update -> execute();

        /*
         * Variables.
         */

        $i17 = isset($_POST['i17']) ? filter_input(INPUT_POST, 'i17', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r17 = isset($_POST['r17']) ? filter_input(INPUT_POST, 'r17', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d17 = isset($_POST['d17']) ? filter_input(INPUT_POST, 'd17', FILTER_SANITIZE_STRING) : NULL;
        $a17 = isset($_POST['a17']) ? filter_input(INPUT_POST, 'a17', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r17, $d17, $a17, $i17);
        $update -> execute();

        /*
         * Variables.
         */

        $i18 = isset($_POST['i18']) ? filter_input(INPUT_POST, 'i18', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r18 = isset($_POST['r18']) ? filter_input(INPUT_POST, 'r18', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d18 = isset($_POST['d18']) ? filter_input(INPUT_POST, 'd18', FILTER_SANITIZE_STRING) : NULL;
        $a18 = isset($_POST['a18']) ? filter_input(INPUT_POST, 'a18', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r18, $d18, $a18, $i18);
        $update -> execute();

        /*
         * Variables.
         */

        $i19 = isset($_POST['i19']) ? filter_input(INPUT_POST, 'i19', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r19 = isset($_POST['r19']) ? filter_input(INPUT_POST, 'r19', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d19 = isset($_POST['d19']) ? filter_input(INPUT_POST, 'd19', FILTER_SANITIZE_STRING) : NULL;
        $a19 = isset($_POST['a19']) ? filter_input(INPUT_POST, 'a19', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r19, $d19, $a19, $i19);
        $update -> execute();

        /*
         * Variables.
         */

        $i20 = isset($_POST['i20']) ? filter_input(INPUT_POST, 'i20', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r20 = isset($_POST['r20']) ? filter_input(INPUT_POST, 'r20', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d20 = isset($_POST['d20']) ? filter_input(INPUT_POST, 'd20', FILTER_SANITIZE_STRING) : NULL;
        $a20 = isset($_POST['a20']) ? filter_input(INPUT_POST, 'a20', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r20, $d20, $a20, $i20);
        $update -> execute();

        /*
         * Variables.
         */

        $i21 = isset($_POST['i21']) ? filter_input(INPUT_POST, 'i21', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r21 = isset($_POST['r21']) ? filter_input(INPUT_POST, 'r21', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d21 = isset($_POST['d21']) ? filter_input(INPUT_POST, 'd21', FILTER_SANITIZE_STRING) : NULL;
        $a21 = isset($_POST['a21']) ? filter_input(INPUT_POST, 'a21', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r21, $d21, $a21, $i21);
        $update -> execute();

        /*
         * Variables.
         */

        $i22 = isset($_POST['i22']) ? filter_input(INPUT_POST, 'i22', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $r22 = isset($_POST['r22']) ? filter_input(INPUT_POST, 'r22', FILTER_SANITIZE_NUMBER_INT) : NULL;
        $d22 = isset($_POST['d22']) ? filter_input(INPUT_POST, 'd22', FILTER_SANITIZE_STRING) : NULL;
        $a22 = isset($_POST['a22']) ? filter_input(INPUT_POST, 'a22', FILTER_SANITIZE_STRING) : NULL;

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acmatrix SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r22, $d22, $a22, $i22);
        $update -> execute();

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare ("UPDATE acanswer SET r = ?, d = ?, a = ? WHERE i = ? AND acId = '" . $aid . "'");
        $update -> bind_param ("issi", $r22, $d22, $a22, $i22);
        $update -> execute();

        /*
         * Actualiza un registro en la base de datos.
         */

        $update = $connection -> prepare("UPDATE acanswer SET important = ?, acDoerId = ?, acDoerDate = ?, statusId = ? WHERE acId = ? AND acQId = '" . $qid . "' AND acIId = '" . $iid . "'");
        $update -> bind_param("iisii", $important, $acDoerId, $acDoerDate, $statusId, $aid);
        $update -> execute();

/*        
    // actualizar AC

    if (isset($_POST['approved']) == TRUE) {
        
        $acReviewerId = $_SESSION['userId'];
        $acReviewerDate = date('Y-m-d / g:i a');
        $b = $_POST['back'] ;
        $a = $_POST['approved'] ;
        $c = $_POST['closed'] ;
        $statusId = 4;

        $update = $connection->prepare("
            UPDATE acanswer
            SET
            acReviewerId = ?,
            acReviewerDate = ?,
            statusId = ?
            WHERE
            acId = ?
            AND acQId = '" . $_GET['q'] . "'
            AND acIId = '" . $_GET['i'] . "'
        ");
        
        $update -> bind_param("isii", $acReviewerId, $acReviewerDate, $statusId, $acId);
        
        $update -> execute();
        
    }
    
    elseif (isset($_POST['back']) == TRUE) {
        
        $acReviewerId = $_SESSION['userId'];
        $acReviewerDate = date('Y-m-d / g:i a');
        $b = $_POST['back'] ;
        $a = $_POST['approved'] ;
        $c = $_POST['closed'] ;
        $statusId = 3;

        $update = $connection->prepare("
            UPDATE acanswer
            SET
            acReviewerId = ?,
            acReviewerDate = ?,
            statusId = ?
            WHERE
            acId = ?
            AND acQId = '" . $_GET['q'] . "'
            AND acIId = '" . $_GET['i'] . "'
        ");
        
        $update -> bind_param("isii", $acReviewerId, $acReviewerDate, $statusId, $acId);
        
        $update -> execute();
        
    }

    elseif (isset($_POST['closed']) == TRUE) {
        
        $acReviewerId = $_SESSION['userId'];
        $acReviewerDate = date('Y-m-d / g:i a');
        $b = $_POST['back'] ;
        $a = $_POST['approved'] ;
        $c = $_POST['closed'] ;
        $statusId = 5;

        $update = $connection->prepare("
            UPDATE acanswer
            SET
            acReviewerId = ?,
            acReviewerDate = ?,
            statusId = ?
            WHERE
            acId = ?
            AND acQId = '" . $_GET['q'] . "'
            AND acIId = '" . $_GET['i'] . "'
        ");
        
        $update -> bind_param("isii", $acReviewerId, $acReviewerDate, $statusId, $acId);
        
        $update -> execute();
        
    }
    else {

        $acDoerId = $_SESSION['userId'];
        $acDoerDate = date('Y-m-d / g:i a');
        $c = $_POST['completed'] ;
        $statusId = $c == true ? 2 : 1;
        
        $update = $connection->prepare("
            UPDATE acanswer
            SET
            acDoerId = ?,
            acDoerDate = ?,
            statusId = ?
            WHERE
            acId = ?
            AND acQId = '" . $_GET['q'] . "'
            AND acIId = '" . $_GET['i'] . "'
        ");
        
        $update -> bind_param("isii", $acDoerId, $acDoerDate, $statusId, $acId);
        
        $update -> execute();
        
    }

}

/* si el item no es la matriz (item 28) ***************************************/

else {
    
    /* declaración de variables ***********************************************/

    $a1 = $_POST['a1'] ;
    if ($acIId == 1 && isset($_POST["a2"])) {
        $a2 = isset($_POST['a2']) == true ? $_POST['a2'] : NULL;
    }
    else {
        $a2 = NULL;
    }
    $a3 = isset($_POST['a3']) ? $_POST['a3'] : NULL;

    /* actualizar AC **********************************************************/

    if ($rp == 1) {

        if (isset($_POST['back']) == TRUE) {
        
            $c = $_POST['closed'] ;
            $b = $_POST['back'] ;
            $statusId = 3;
        
            $update = $connection -> prepare("
                UPDATE acanswer
                SET
                statusId = ?
                WHERE
                acId = ?
                AND acQId = '" . $_GET['q'] . "'
                AND acIId = '" . $_GET['i'] . "'
            ");
            
            $update -> bind_param("ii", $statusId, $acId);
            
            $update -> execute();
            
        }
        elseif (isset($_POST['closed']) == TRUE) {
        
            $c = $_POST['closed'] ;
            $b = $_POST['back'] ;
            $statusId = 5;

            $update = $connection -> prepare("
                UPDATE acanswer
                SET
                statusId = ?
                WHERE
                acId = ?
                AND acQId = '" . $_GET['q'] . "'
                AND acIId = '" . $_GET['i'] . "'
            ");
        
            $update -> bind_param("ii", $statusId, $acId);
        
            $update -> execute();

        }
        else {
            $c = $_POST['closed'];
            $b = $_POST['back'];
        }

    }
    elseif ($s == 1) {
        
        if (isset($_POST['back']) == TRUE) {
        
            $b = $_POST['back'];
            $a = $_POST['approved'];
            $statusId = 3;
        
            $update = $connection -> prepare("
                UPDATE acanswer
                SET
                statusId = ?
                WHERE
                acId = ?
                AND acQId = '" . $_GET['q'] . "'
                AND acIId = '" . $_GET['i'] . "'
            ");
            
            $update -> bind_param("ii", $statusId, $acId);
            
            $update -> execute();
            
        }
        
        if (isset($_POST['approved']) == TRUE) {
        
            $b = $_POST['back'];
            $a = $_POST['approved'];
            $statusId = 4;
        
            $update = $connection -> prepare("
                UPDATE acanswer
                SET
                statusId = ?
                WHERE
                acId = ?
                AND acQId = '" . $_GET['q'] . "'
                AND acIId = '" . $_GET['i'] . "'
            ");
            
            $update -> bind_param("ii", $statusId, $acId);
            
            $update -> execute();
            
        }
    }
    else {

        if (isset($_POST['approved']) == TRUE) {
            
            $acReviewerId = $_SESSION['userId'];
            $acReviewerDate = date('Y-m-d / g:i a');
            $b = $_POST['back'];
            $a = $_POST['approved'];
            $statusId = 4;
        
            $update = $connection->prepare("
                UPDATE acanswer
                SET
                acReviewerId = ?,
                acReviewerDate = ?,
                statusId = ?
                WHERE
                acId = ?
                AND acQId = '" . $_GET['q'] . "'
                AND acIId = '" . $_GET['i'] . "'
            ");
            
            $update -> bind_param("isii", $acReviewerId, $acReviewerDate, $statusId, $acId);
           
            $update->execute();
            
        }
    
        elseif (isset($_POST['back']) == TRUE) {
        
            $acReviewerId = $_SESSION['userId'];
            $acReviewerDate = date('Y-m-d / g:i a');
            $b = $_POST['back'];
            $a = $_POST['approved'];
            $statusId = 3;

            $update = $connection->prepare("
                UPDATE acanswer
                SET
                acReviewerId = ?,
                acReviewerDate = ?,
                statusId = ?
                WHERE
                acId = ?
                AND acQId = '" . $_GET['q'] . "'
                AND acIId = '" . $_GET['i'] . "'
            ");
        
            $update -> bind_param("isii", $acReviewerId, $acReviewerDate, $statusId, $acId);
        
            $update->execute();

        }

        else {

            $acDoerId = $_SESSION['userId'];
            $acDoerDate = date('Y-m-d / g:i a');
            $c = $_POST['completed'];
            $statusId = $c == true ? 2 : 1;
        
            $update = $connection->prepare("
                UPDATE acanswer
                SET
                a1 = ?,
                a2 = ?,
                a3 = ?,
                important = ?,
                acDoerId = ?,
                acDoerDate = ?,
                statusId = ?
                WHERE
                acId = ?
                AND acQId = '" . $_GET['q'] . "'
                AND acIId = '" . $_GET['i'] . "'
            ");
        
            $update -> bind_param("issiisii", $a1, $a2, $a3, $important, $acDoerId, $acDoerDate, $statusId, $acId);
        
            $update->execute();
        
        }
    }
}

/* traza **********************************************************************/

$userId = $_SESSION["userId"];
$module = 'AcAnswer';
$action = 'Update';
$itemId = $acIId;

$trace = $connection -> prepare("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param("issi", $userId, $module, $action, $itemId);

$trace -> execute();

echo "<script> window.location='../c/ac.php?m=questionnaire1&aid={$aid}&n=updated'</script>";
