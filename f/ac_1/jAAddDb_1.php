<?php

/* conexión a base de datos ***************************************************/

include '../connection.php';

/* declaración de variables ***************************************************/

date_default_timezone_set("America/Caracas");
$acId = $_GET['c'];
$acIId = $_GET['i'];
$acQId = $_GET['q'];
$rp = $_GET['rp'] ?? '';
$s = $_GET['s'] ?? '';
$important = isset($_POST['important']) == true ? 1 : NULL;

/* si el item es la matriz (item 28) ******************************************/

if ($acIId == 28) {

    /* declaración de variables ***********************************************/

    $i1 = isset($_POST['i1']) == true ? $_POST['i1'] : NULL;
    $r1 = isset($_POST['r1']) == true ? $_POST['r1'] : NULL;
    $d1 = isset($_POST['d1']) == true ? $_POST['d1'] : NULL;
    $a1 = isset($_POST['a1']) == true ? $_POST['a1'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r1, $d1, $a1, $i1);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i2 = isset($_POST['i2']) == true ? $_POST['i2'] : NULL;
    $r2 = isset($_POST['r2']) == true ? $_POST['r2'] : NULL;
    $d2 = isset($_POST['d2']) == true ? $_POST['d2'] : NULL;
    $a2 = isset($_POST['a2']) == true ? $_POST['a2'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r2, $d2, $a2, $i2);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i3 = isset($_POST['i3']) == true ? $_POST['i3'] : NULL;
    $r3 = isset($_POST['r3']) == true ? $_POST['r3'] : NULL;
    $d3 = isset($_POST['d3']) == true ? $_POST['d3'] : NULL;
    $a3 = isset($_POST['a3']) == true ? $_POST['a3'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r3, $d3, $a3, $i3);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i4 = isset($_POST['i4']) == true ? $_POST['i4'] : NULL;
    $r4 = isset($_POST['r4']) == true ? $_POST['r4'] : NULL;
    $d4 = isset($_POST['d4']) == true ? $_POST['d4'] : NULL;
    $a4 = isset($_POST['a4']) == true ? $_POST['a4'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r4, $d4, $a4, $i4);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i5 = isset($_POST['i5']) == true ? $_POST['i5'] : NULL;
    $r5 = isset($_POST['r5']) == true ? $_POST['r5'] : NULL;
    $d5 = isset($_POST['d5']) == true ? $_POST['d5'] : NULL;
    $a5 = isset($_POST['a5']) == true ? $_POST['a5'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r5, $d5, $a5, $i5);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i6 = isset($_POST['i6']) == true ? $_POST['i6'] : NULL;
    $r6 = isset($_POST['r6']) == true ? $_POST['r6'] : NULL;
    $d6 = isset($_POST['d6']) == true ? $_POST['d6'] : NULL;
    $a6 = isset($_POST['a6']) == true ? $_POST['a6'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r6, $d6, $a6, $i6);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i7 = isset($_POST['i7']) == true ? $_POST['i7'] : NULL;
    $r7 = isset($_POST['r7']) == true ? $_POST['r7'] : NULL;
    $d7 = isset($_POST['d7']) == true ? $_POST['d7'] : NULL;
    $a7 = isset($_POST['a7']) == true ? $_POST['a7'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r7, $d7, $a7, $i7);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i8 = isset($_POST['i8']) == true ? $_POST['i8'] : NULL;
    $r8 = isset($_POST['r8']) == true ? $_POST['r8'] : NULL;
    $d8 = isset($_POST['d8']) == true ? $_POST['d8'] : NULL;
    $a8 = isset($_POST['a8']) == true ? $_POST['a8'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r8, $d8, $a8, $i8);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i9 = isset($_POST['i9']) == true ? $_POST['i9'] : NULL;
    $r9 = isset($_POST['r9']) == true ? $_POST['r9'] : NULL;
    $d9 = isset($_POST['d9']) == true ? $_POST['d9'] : NULL;
    $a9 = isset($_POST['a9']) == true ? $_POST['a9'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r9, $d9, $a9, $i9);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i10 = isset($_POST['i10']) == true ? $_POST['i10'] : NULL;
    $r10 = isset($_POST['r10']) == true ? $_POST['r10'] : NULL;
    $d10 = isset($_POST['d10']) == true ? $_POST['d10'] : NULL;
    $a10 = isset($_POST['a10']) == true ? $_POST['a10'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r10, $d10, $a10, $i10);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i11 = isset($_POST['i11']) == true ? $_POST['i11'] : NULL;
    $r11 = isset($_POST['r11']) == true ? $_POST['r11'] : NULL;
    $d11 = isset($_POST['d11']) == true ? $_POST['d11'] : NULL;
    $a11 = isset($_POST['a11']) == true ? $_POST['a11'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r11, $d11, $a11, $i11);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i12 = isset($_POST['i12']) == true ? $_POST['i12'] : NULL;
    $r12 = isset($_POST['r12']) == true ? $_POST['r12'] : NULL;
    $d12 = isset($_POST['d12']) == true ? $_POST['d12'] : NULL;
    $a12 = isset($_POST['a12']) == true ? $_POST['a12'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r12, $d12, $a12, $i12);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i13 = isset($_POST['i13']) == true ? $_POST['i13'] : NULL;
    $r13 = isset($_POST['r13']) == true ? $_POST['r13'] : NULL;
    $d13 = isset($_POST['d13']) == true ? $_POST['d13'] : NULL;
    $a13 = isset($_POST['a13']) == true ? $_POST['a13'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r13, $d13, $a13, $i13);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i14 = isset($_POST['i14']) == true ? $_POST['i14'] : NULL;
    $r14 = isset($_POST['r14']) == true ? $_POST['r14'] : NULL;
    $d14 = isset($_POST['d14']) == true ? $_POST['d14'] : NULL;
    $a14 = isset($_POST['a14']) == true ? $_POST['a14'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r14, $d14, $a14, $i14);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i15 = isset($_POST['i15']) == true ? $_POST['i15'] : NULL;
    $r15 = isset($_POST['r15']) == true ? $_POST['r15'] : NULL;
    $d15 = isset($_POST['d15']) == true ? $_POST['d15'] : NULL;
    $a15 = isset($_POST['a15']) == true ? $_POST['a15'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r15, $d15, $a15, $i15);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i16 = isset($_POST['i16']) == true ? $_POST['i16'] : NULL;
    $r16 = isset($_POST['r16']) == true ? $_POST['r16'] : NULL;
    $d16 = isset($_POST['d16']) == true ? $_POST['d16'] : NULL;
    $a16 = isset($_POST['a16']) == true ? $_POST['a16'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r16, $d16, $a16, $i16);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i17 = isset($_POST['i17']) == true ? $_POST['i17'] : NULL;
    $r17 = isset($_POST['r17']) == true ? $_POST['r17'] : NULL;
    $d17 = isset($_POST['d17']) == true ? $_POST['d17'] : NULL;
    $a17 = isset($_POST['a17']) == true ? $_POST['a17'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r17, $d17, $a17, $i17);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i18 = isset($_POST['i18']) == true ? $_POST['i18'] : NULL;
    $r18 = isset($_POST['r18']) == true ? $_POST['r18'] : NULL;
    $d18 = isset($_POST['d18']) == true ? $_POST['d18'] : NULL;
    $a18 = isset($_POST['a18']) == true ? $_POST['a18'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r18, $d18, $a18, $i18);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i19 = isset($_POST['i19']) == true ? $_POST['i19'] : NULL;
    $r19 = isset($_POST['r19']) == true ? $_POST['r19'] : NULL;
    $d19 = isset($_POST['d19']) == true ? $_POST['d19'] : NULL;
    $a19 = isset($_POST['a19']) == true ? $_POST['a19'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r19, $d19, $a19, $i19);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i20 = isset($_POST['i20']) == true ? $_POST['i20'] : NULL;
    $r20 = isset($_POST['r20']) == true ? $_POST['r20'] : NULL;
    $d20 = isset($_POST['d20']) == true ? $_POST['d20'] : NULL;
    $a20 = isset($_POST['a20']) == true ? $_POST['a20'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r20, $d20, $a20, $i20);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i21 = isset($_POST['i21']) == true ? $_POST['i21'] : NULL;
    $r21 = isset($_POST['r21']) == true ? $_POST['r21'] : NULL;
    $d21 = isset($_POST['d21']) == true ? $_POST['d21'] : NULL;
    $a21 = isset($_POST['a21']) == true ? $_POST['a21'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r21, $d21, $a21, $i21);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $i22 = isset($_POST['i22']) == true ? $_POST['i22'] : NULL;
    $r22 = isset($_POST['r22']) == true ? $_POST['r22'] : NULL;
    $d22 = isset($_POST['d22']) == true ? $_POST['d22'] : NULL;
    $a22 = isset($_POST['a22']) == true ? $_POST['a22'] : NULL;

    /* actualizar matriz ******************************************************/

    $update = $connection -> prepare ("
        UPDATE acmatrix
        SET
        r = ?,
        d = ?,
        a = ?
        WHERE
        i = ?
        AND acId = '" . $acId . "'
    ");

    $update -> bind_param ("issi", $r22, $d22, $a22, $i22);
    
    $update -> execute();

    /* declaración de variables ***********************************************/

    $acDoerId = $_SESSION['userId'];
    $acDoerDate = date('Y-m-d');
    $statusId = 1;

    /* actualizar AC **********************************************************/

    $update = $connection -> prepare("
        UPDATE acanswer
        SET
        important = ?,
        acDoerId = ?,
        acDoerDate = ?,
        statusId = ?
        WHERE
        acId = ?
        AND acQId = '" . $_GET['q'] . "'
        AND acIId = '" . $_GET['i'] . "'
    ");

    $update -> bind_param("iisii", $important, $acDoerId, $acDoerDate, $statusId, $acId);

    $update -> execute();

    /* actualizar AC **********************************************************/

    if (isset($_POST['approved']) == TRUE) {
        
        $acReviewerId = $_SESSION['userId'];
        $acReviewerDate = date('Y-m-d / g:i a');
        $b = $_POST['back'] ?? '';
        $a = $_POST['approved'] ?? '';
        $c = $_POST['closed'] ?? '';
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
        $b = $_POST['back'] ?? '';
        $a = $_POST['approved'] ?? '';
        $c = $_POST['closed'] ?? '';
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
        $b = $_POST['back'] ?? '';
        $a = $_POST['approved'] ?? '';
        $c = $_POST['closed'] ?? '';
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
        $c = $_POST['completed'] ?? '';
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

    $a1 = $_POST['a1'] ?? '';
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
        
            $c = $_POST['closed'] ?? '';
            $b = $_POST['back'] ?? '';
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
        
            $c = $_POST['closed'] ?? '';
            $b = $_POST['back'] ?? '';
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
            $c = $_POST['closed'] ?? '';
            $b = $_POST['back'] ?? '';
        }

    }
    elseif ($s == 1) {
        
        if (isset($_POST['back']) == TRUE) {
        
            $b = $_POST['back'] ?? '';
            $a = $_POST['approved'] ?? '';
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
        
            $b = $_POST['back'] ?? '';
            $a = $_POST['approved'] ?? '';
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
            $b = $_POST['back'] ?? '';
            $a = $_POST['approved'] ?? '';
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
            $b = $_POST['back'] ?? '';
            $a = $_POST['approved'] ?? '';
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
            $c = $_POST['completed'] ?? '';
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

/* vista **********************************************************************/

echo "<body><script>window.history.go(-2);</script>";
