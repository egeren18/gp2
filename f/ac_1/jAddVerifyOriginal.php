<?php

/* connection *****************************************************************/

include '../connection.php';

/* var ************************************************************************/

$clientId = $_POST['clientId'];
$serviceId = $_POST['serviceId'];

/* select *********************************************************************/

$client = mysqli_query(
    $connection, "
    SELECT * FROM client
    WHERE clientId = '" . $clientId . "'
");

$r_client = mysqli_fetch_array($client);

$status = $r_client["statusId"];
$riskId = $r_client["riskId"];

/* select *********************************************************************/

$service = mysqli_query(
    $connection, "
    SELECT * FROM service
    WHERE serviceId = '" . $serviceId . "'
");

$r_service = mysqli_fetch_array($service);

$natureId = $r_service['natureId'];
$service = $r_service['serviceName'];

/* select *********************************************************************/

$ac = mysqli_query(
    $connection, "
    SELECT * FROM ac
    WHERE clientId = '" . $clientId . "'
    AND serviceId = '" . $serviceId . "'
");

$r_ac = mysqli_fetch_array($ac);

$acDateFinal = $r_ac['acDateFinal'] ?? '';
$acDateExpire = $r_ac['acDateExpire'] ?? '';
$acStatus = $r_ac['acStatus'];
$acService = $r_ac['serviceId'];
$today = date('Y-m-d');

/* select *********************************************************************/

$previousAc = mysqli_query(
    $connection, "
    SELECT * FROM ac
    WHERE clientId = '" . $clientId . "'
    AND serviceId = 1
");

$r_previousAc = mysqli_fetch_array($previousAc);

/* select *********************************************************************/

$deniedAc = mysqli_query(
    $connection, "
    SELECT * FROM tracing
    INNER JOIN ac
    ON tracing.acId = ac.acId
    WHERE decision = 1
");

$r_deniedAc = mysqli_fetch_array($deniedAc);

/* route **********************************************************************/

if ($status > 2) {

    //echo "<body><script> window.location='../c/ac.php?m=add&n=changeStatus'</script>";
    
}
else {
    
    switch ($natureId) {

        case 1:
            if (!isset($r_previousAc)) {

                $qId = 1;
                $acDateStart = date('Y-m-d');
                
                /* AC *********************************************************/

                /* insert *****************************************************/

                $insert = $connection -> prepare("
                    INSERT INTO ac
                    (clientId, serviceId, acQuestionnaireId, acDateStart)
                    VALUES
                    (?,?,?,?)
                ");

                $insert -> bind_param(
                    "iiis",
                    $clientId, $serviceId, $qId, $acDateStart
                );

                $insert -> execute();

                $insertId = $connection -> insert_id;
                $acId = $insertId;

                /* select *****************************************************/

                $qty = mysqli_query(
                    $connection, "
                    SELECT COUNT(*) total
                    FROM qm1
                    WHERE itemStatus = 1
                ");

                $r_qty = mysqli_fetch_array($qty);

                $qty = $r_qty['total'];

                /* insert *****************************************************/

                for ($i = 1; $i <= $qty; $i++) {

                    $newAc = $connection -> prepare("
                        INSERT INTO acanswer
                        (acId, acQId, acIId)
                        VALUES
                        (?,?,?)
                    ");

                    $newAc -> bind_param(
                        "iii",
                        $acId, $qId, $i
                    );

                    $newAc -> execute();

                }

                /* insert *****************************************************/

                for ($i = 1; $i <= 22; $i++) {
                    
                    $d= NULL;
                    $a= NULL;

                    $newMatrix = $connection -> prepare("
                        INSERT INTO acmatrix
                        (acId, i, d, a)
                        VALUES
                        (?,?,?,?)
                    ");
                    $newMatrix -> bind_param(
                        "iiss",
                        $acId, $i, $d, $a
                    );
                    $newMatrix -> execute();
                }

                /* insert *****************************************************/

                $insert = $connection -> prepare("
                    INSERT INTO tracing
                    (acId)
                    VALUES
                    (?)
                ");
                $insert -> bind_param(
                    "i",
                    $acId
                );
                $insert -> execute();

                /* PROJECT ****************************************************/

                /* insert *****************************************************/

                $insert = $connection -> prepare("
                    INSERT INTO project
                    (acId, serviceId, clientId)
                    VALUES
                    (?,?,?)
                ");

                $insert -> bind_param(
                    "iii",
                    $acId, $serviceId, $clientId
                );

                $insert -> execute();

                /* trace ******************************************************/

                $userId = $_SESSION["userId"];
                $module = 'AC';
                $action = 'Insert';
                $itemId = $insertId;

                $trace = $connection->prepare("
                    INSERT INTO trace
                    (userId, module, action, itemId)
                    VALUES
                    (?,?,?,?)
                ");
                $trace->bind_param(
                    "issi",
                    $userId, $module, $action, $itemId
                );
                $trace -> execute();

                /* view *******************************************************/

                //echo "<body><script> window.location='../c/ac.php?m=start&c=" . $insertId . "&q=" . $qId . "'</script>";
                
            }
            elseif ($acDateExpire == NULL or $today < $acDateExpire){
                
                //echo "<body><script> window.location='../c/ac.php?m=add&n=validAc'</script>";
                
            }
            else {
                
                if (isset($r_deniedAc) or $riskId > 2) {

                    $qId = 1;
                    $acDateStart = date('Y-m-d');
                
                    /* insert *************************************************/

                    $insert = $connection -> prepare("
                        INSERT INTO ac
                        (clientId, serviceId, acQuestionnaireId, acDateStart)
                        VALUES
                        (?,?,?,?)
                    ");
                    $insert -> bind_param(
                        "iiis",
                        $clientId, $serviceId, $qId, $acDateStart
                    );
                    $insert -> execute();
                    $insertId = $connection -> insert_id;
                    $acId = $insertId;

                    /* select *************************************************/

                    $qty = mysqli_query(
                        $connection, "
                        SELECT COUNT(*) total
                        FROM qm1
                        WHERE itemStatus = 1
                    ");
                    $r_qty = mysqli_fetch_array($qty);
                    $qty = $r_qty['total'];

                    /* insert *************************************************/

                    for ($i = 1; $i <= $qty; $i++) {

                        $newAc = $connection -> prepare("
                            INSERT INTO acanswer
                            (acId, acQId, acIId)
                            VALUES
                            (?,?,?)
                        ");
                        $newAc -> bind_param(
                            "iii",
                            $acId, $qId, $i
                        );
                        $newAc -> execute();

                    }

                    /* insert *************************************************/
                    
                    for ($i = 1; $i <= 22; $i++) {

                        $newMatrix = $connection -> prepare("
                            INSERT INTO acmatrix
                            (acId, i)
                            VALUES
                            (?,?)
                        ");
                        $newMatrix -> bind_param(
                            "ii",
                            $acId, $i
                        );
                        $newMatrix -> execute();
                    }

                    /* insert *************************************************/

                    $insert = $connection -> prepare("
                        INSERT INTO tracing
                        (acId)
                        VALUES
                        (?)
                    ");
                    $insert -> bind_param(
                        "i",
                        $acId
                    );
                    $insert -> execute();

                    /* trace **************************************************/

                    $userId = $_SESSION["userId"];
                    $module = 'AC';
                    $action = 'Insert';
                    $itemId = $insertId;

                    $trace = $connection->prepare("
                        INSERT INTO trace
                        (userId, module, action, itemId)
                        VALUES
                        (?,?,?,?)
                    ");
                    $trace->bind_param(
                        "issi",
                        $userId, $module, $action, $itemId
                    );
                    $trace -> execute();

                    /* view ***************************************************/

                    //echo "<body><script> window.location='../c/ac.php?m=start&c=" . $insertId . "&q=" . $qId . "'</script>";
                    
                }
                else {

                    $qId = 5;
                    $acDateStart = date('Y-m-d');
                
                    /* insert *************************************************/

                    $insert = $connection -> prepare("
                        INSERT INTO ac
                        (clientId, serviceId, acQuestionnaireId, acDateStart)
                        VALUES
                        (?,?,?,?)
                    ");
                    $insert -> bind_param(
                        "iiis",
                        $clientId, $serviceId, $qId, $acDateStart
                    );
                    $insert -> execute();
                    $insertId = $connection -> insert_id;
                    $acId = $insertId;

                    /* select *************************************************/

                    $qty = mysqli_query(
                        $connection, "
                        SELECT COUNT(*) total
                        FROM qm5
                        WHERE itemStatus = 1
                    ");
                    $r_qty = mysqli_fetch_array($qty);
                    $qty = $r_qty['total'];

                    /* insert *************************************************/

                    for ($i = 1; $i <= $qty; $i++) {

                        $newAc = $connection -> prepare("
                            INSERT INTO acanswer
                            (acId, acQId, acIId)
                            VALUES
                            (?,?,?)
                        ");
                        $newAc -> bind_param(
                            "iii",
                            $acId, $qId, $i
                        );
                        $newAc -> execute();

                    }

                    /* trace **************************************************/

                    $userId = $_SESSION["userId"];
                    $module = 'AC';
                    $action = 'Insert';
                    $itemId = $insertId;

                    $trace = $connection->prepare("
                        INSERT INTO trace
                        (userId, module, action, itemId)
                        VALUES
                        (?,?,?,?)
                    ");
                    $trace->bind_param(
                        "issi",
                        $userId, $module, $action, $itemId
                    );
                    $trace -> execute();

                    /* view ***************************************************/

                    //echo "<body><script> window.location='../c/ac.php?m=start&c=" . $insertId . "&q=" . $qId . "'</script>";
                }
            }
            break;

        case 2:
            if ($acStatus == 1 or isset($r_previousAc)) {

                //echo "<body><script> window.location='../c/ac.php?m=start&n=associate'</script>";

            }
            else {
                
                $qId = 3;
                $acDateStart = date('Y-m-d');
                
                /* insert *****************************************************/

                $insert = $connection -> prepare("
                    INSERT INTO ac
                    (clientId, serviceId, acQuestionnaireId, acDateStart)
                    VALUES
                    (?,?,?,?)
                ");
                $insert -> bind_param(
                    "iiis",
                    $clientId, $serviceId, $qId, $acDateStart
                );
                $insert -> execute();
                $insertId = $connection -> insert_id;
                $acId = $insertId;

                /* select *****************************************************/

                $qty = mysqli_query(
                    $connection, "
                    SELECT COUNT(*) total
                    FROM qm3
                    WHERE itemStatus = 1
                ");
                $r_qty = mysqli_fetch_array($qty);
                $qty = $r_qty['total'];

                /* insert *****************************************************/

                for ($i = 1; $i <= $qty; $i++) {

                    $newAc = $connection -> prepare("
                        INSERT INTO acanswer
                        (acId, acQId, acIId)
                        VALUES
                        (?,?,?)
                    ");
                    $newAc -> bind_param(
                        "iii",
                        $acId, $qId, $i
                    );
                    $newAc -> execute();

                }

                /* insert *****************************************************/

                $insert = $connection -> prepare("
                    INSERT INTO tracing
                    (acId)
                    VALUES
                    (?)
                ");
                $insert -> bind_param(
                    "i",
                    $acId
                );
                $insert -> execute();

                /* trace ******************************************************/

                $userId = $_SESSION["userId"];
                $module = 'AC';
                $action = 'Insert';
                $itemId = $insertId;

                $trace = $connection->prepare("
                    INSERT INTO trace
                    (userId, module, action, itemId)
                    VALUES
                    (?,?,?,?)
                ");
                $trace->bind_param(
                    "issi",
                    $userId, $module, $action, $itemId
                );
                $trace -> execute();

                /* view *******************************************************/

                //echo "<body><script> window.location='../c/ac.php?m=start&c=" . $insertId . "&q=" . $qId . "'</script>";
            }
            break;

        case 3:
            if ($acStatus == 1 or isset($r_previousAc)) {

                //echo "<body><script> window.location='../c/ac.php?m=start&n=associate'</script>";

            }
            else {
                
                $qId = 3;
                $acDateStart = date('Y-m-d');
                
                /* insert *****************************************************/

                $insert = $connection -> prepare("
                    INSERT INTO ac
                    (clientId, serviceId, acQuestionnaireId, acDateStart)
                    VALUES
                    (?,?,?,?)
                ");
                $insert -> bind_param(
                    "iiis",
                    $clientId, $serviceId, $qId, $acDateStart
                );
                $insert -> execute();
                $insertId = $connection -> insert_id;
                $acId = $insertId;

                /* select *****************************************************/

                $qty = mysqli_query(
                    $connection, "
                    SELECT COUNT(*) total
                    FROM qm3
                    WHERE itemStatus = 1
                ");
                $r_qty = mysqli_fetch_array($qty);
                $qty = $r_qty['total'];

                /* insert *****************************************************/

                for ($i = 1; $i <= $qty; $i++) {

                    $newAc = $connection -> prepare("
                        INSERT INTO acanswer
                        (acId, acQId, acIId)
                        VALUES
                        (?,?,?)
                    ");
                    $newAc -> bind_param(
                        "iii",
                        $acId, $qId, $i
                    );
                    $newAc -> execute();

                }

                /* insert *****************************************************/

                $insert = $connection -> prepare("
                    INSERT INTO tracing
                    (acId)
                    VALUES
                    (?)
                ");
                $insert -> bind_param(
                    "i",
                    $acId
                );
                $insert -> execute();

                /* trace ******************************************************/

                $userId = $_SESSION["userId"];
                $module = 'AC';
                $action = 'Insert';
                $itemId = $insertId;

                $trace = $connection->prepare("
                    INSERT INTO trace
                    (userId, module, action, itemId)
                    VALUES
                    (?,?,?,?)
                ");
                $trace->bind_param(
                    "issi",
                    $userId, $module, $action, $itemId
                );
                $trace -> execute();

                /* view *******************************************************/

                //echo "<body><script> window.location='../c/ac.php?m=start&c=" . $insertId . "&q=" . $qId . "'</script>";
            }
            break;

        case 4:
            if ($acStatus == 1 or isset($r_previousAc)) {

                //echo "<body><script> window.location='../c/ac.php?m=start&n=associate'</script>";

            }
            else {
                
                $qId = 3;
                $acDateStart = date('Y-m-d');
                
                /* insert *****************************************************/

                $insert = $connection -> prepare("
                    INSERT INTO ac
                    (clientId, serviceId, acQuestionnaireId, acDateStart)
                    VALUES
                    (?,?,?,?)
                ");
                $insert -> bind_param(
                    "iiis",
                    $clientId, $serviceId, $qId, $acDateStart
                );
                $insert -> execute();
                $insertId = $connection -> insert_id;
                $acId = $insertId;

                /* select *****************************************************/

                $qty = mysqli_query(
                    $connection, "
                    SELECT COUNT(*) total
                    FROM qm3
                    WHERE itemStatus = 1
                ");
                $r_qty = mysqli_fetch_array($qty);
                $qty = $r_qty['total'];

                /* insert *****************************************************/

                for ($i = 1; $i <= $qty; $i++) {

                    $newAc = $connection -> prepare("
                        INSERT INTO acanswer
                        (acId, acQId, acIId)
                        VALUES
                        (?,?,?)
                    ");
                    $newAc -> bind_param(
                        "iii",
                        $acId, $qId, $i
                    );
                    $newAc -> execute();

                }

                /* insert *****************************************************/

                $insert = $connection -> prepare("
                    INSERT INTO tracing
                    (acId)
                    VALUES
                    (?)
                ");
                $insert -> bind_param(
                    "i",
                    $acId
                );
                $insert -> execute();

                /* trace ******************************************************/

                $userId = $_SESSION["userId"];
                $module = 'AC';
                $action = 'Insert';
                $itemId = $insertId;

                $trace = $connection->prepare("
                    INSERT INTO trace
                    (userId, module, action, itemId)
                    VALUES
                    (?,?,?,?)
                ");
                $trace->bind_param(
                    "issi",
                    $userId, $module, $action, $itemId
                );
                $trace -> execute();

                /* view *******************************************************/

                //echo "<body><script> window.location='../c/ac.php?m=start&c=" . $insertId . "&q=" . $qId . "'</script>";
            }
            break;

        case 5:
            
            $qId = 3;
            $acDateStart = date('Y-m-d');

            /* insert *********************************************************/

            $insert = $connection -> prepare("
                INSERT INTO ac
                (clientId, serviceId, acQuestionnaireId, acDateStart)
                VALUES
                (?,?,?,?)
            ");
            $insert -> bind_param(
                "iiis",
                $clientId, $serviceId, $qId, $acDateStart
            );
            $insert -> execute();
            $insertId = $connection -> insert_id;
            $acId = $insertId;

            /* select *********************************************************/

            $qty = mysqli_query(
                $connection, "
                SELECT COUNT(*) total
                FROM qm3
                WHERE itemStatus = 1
            ");
            $r_qty = mysqli_fetch_array($qty);
            $qty = $r_qty['total'];

            /* insert *********************************************************/

            for ($i = 1; $i <= $qty; $i++) {

                $newAc = $connection -> prepare("
                    INSERT INTO acanswer
                    (acId, acQId, acIId)
                    VALUES
                    (?,?,?)
                ");
                $newAc -> bind_param(
                    "iii",
                    $acId, $qId, $i
                );
                $newAc -> execute();

            }

            /* insert *********************************************************/

            $insert = $connection -> prepare("
                INSERT INTO tracing
                (acId)
                VALUES
                (?)
            ");
            $insert -> bind_param(
                "i",
                $acId
            );
            $insert -> execute();

            /* trace **********************************************************/

            $userId = $_SESSION["userId"];
            $module = 'AC';
            $action = 'Insert';
            $itemId = $insertId;

            $trace = $connection->prepare("
                INSERT INTO trace
                (userId, module, action, itemId)
                VALUES
                (?,?,?,?)
            ");
            $trace->bind_param(
                "issi",
                $userId, $module, $action, $itemId
            );
            $trace -> execute();

            /* view ***********************************************************/

            //echo "<body><script> window.location='../c/ac.php?m=start&c=" . $insertId . "&q=" . $qId . "'</script>";
            break;
    
        case 6:
            
            $qId = 4;
            $acDateStart = date('Y-m-d');

            /* insert *********************************************************/

            $insert = $connection -> prepare("
                INSERT INTO ac
                (clientId, serviceId, acQuestionnaireId, acDateStart)
                VALUES
                (?,?,?,?)
            ");
            $insert -> bind_param(
                "iiis",
                $clientId, $serviceId, $qId, $acDateStart
            );
            $insert -> execute();
            $insertId = $connection->insert_id;
            $acId = $insertId;

            /* select *********************************************************/

            $qty = mysqli_query(
                $connection, "
                SELECT COUNT(*) total
                FROM qm4
                WHERE itemStatus = 1
            ");
            $r_qty = mysqli_fetch_array($qty);
            $qty = $r_qty['total'];

            /* insert *********************************************************/

            for ($i = 1; $i <= $qty; $i++) {

                $newAc = $connection -> prepare("
                    INSERT INTO acanswer
                    (acId, acQId, acIId)
                    VALUES
                    (?,?,?)
                ");
                $newAc -> bind_param(
                    "iii",
                    $acId, $qId, $i
                );
                $newAc -> execute();
            }

            /* insert *********************************************************/

            for ($i = 1; $i <= 22; $i++) {

                $newMatrix = $connection -> prepare("
                    INSERT INTO acmatrix
                    (acId, i)
                    VALUES
                    (?,?)
                ");
                $newMatrix -> bind_param(
                    "ii",
                    $acId, $i
                );
                $newMatrix -> execute();
            }

            /* insert *********************************************************/

            $insert = $connection -> prepare("
                INSERT INTO tracing
                (acId)
                VALUES
                (?)
            ");
            $insert -> bind_param(
                "i",
                $acId
            );
            $insert -> execute();

            /* trace **********************************************************/

            $userId = $_SESSION["userId"];
            $module = 'AC';
            $action = 'Insert';
            $itemId = $insertId;

            $trace = $connection -> prepare("
                INSERT INTO trace
                (userId, module, action, itemId)
                VALUES
                (?,?,?,?)
            ");
            $trace -> bind_param(
                "issi",
                $userId, $module, $action, $itemId
            );
            $trace -> execute();

            /* view ***********************************************************/

            //echo "<body><script> window.location='../c/ac.php?m=start&c=" . $insertId . "&q=" . $qId . "'</script>";
            break;
    
    }
}
