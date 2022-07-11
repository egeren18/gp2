<?php

// connection

include '../connection.php';

// var

$clientId = $_POST['clientId'];
$serviceId = $_POST['serviceId'];
//$userId = $_POST['userId'];
//$designatedId = $_POST['designatedId'];
/*

// select

$_ac = mysqli_query(
    $connection, "
    SELECT * FROM ac
    WHERE clientId = '" . $clientId . "'
    AND serviceId = '" . $serviceId . "'
    AND acDateExpire < CURDATE()
");

$ac = $_ac -> fetch_object();

// select

$_client = mysqli_query($connection, "
    SELECT * FROM client
    WHERE clientId = '" . $clientId . "'
");

$client = $_client -> fetch_object();

// select

$_service = mysqli_query($connection, "
    SELECT * FROM service
    WHERE serviceId = '" . $serviceId . "'
");

$service = $_service -> fetch_object();

// select

$_deniedAc = mysqli_query(
    $connection, "
    SELECT * FROM tracingopinion
    INNER JOIN ac
    ON tracingopinion.acId = ac.acId
    WHERE decision = 1
");

$deniedAc = $_deniedAc -> fetch_object();

// route

if ($ac) {
    
    echo "<body><script> window.location='../c/ac.php?m=add&n=validAc'</script>";
    
}
else {
    
    // var

    $status = $client -> statusId;
    $riskId = $client -> riskId;
    $natureId = $service -> natureId;
    $service = $service -> serviceName;
    $acDateStart = $ac -> acDateStart ?? '';
    $acDateFinal = $ac -> acDateFinal ?? '';
    $acDateExpire = $ac -> acDateExpire ?? '';
    $acStatus = $ac -> acStatus ?? '';
    $acService = $ac -> serviceId ?? '';
    $today = date('Y-m-d');

    if ($status > 2) {

        echo "<body><script> window.location='../c/ac.php?m=add&n=changeStatus'</script>";

    }
    else {

        switch ($natureId) {

            case 1:
                if (!isset($ac)) {

                    $qId = 1;
                    $acDateStart = date('Y-m-d');
                    $acDateExpire = strtotime ('+1 year' , strtotime($acDateStart));
                    $acDateExpire = date ('Y-m-d',$acDateExpire);

                    // insert

                    $insert = $connection -> prepare("
                        INSERT INTO ac
                        (clientId, serviceId, acQuestionnaireId, acDateStart, acDateExpire)
                        VALUES
                        (?,?,?,?,?)
                    ");

                    $insert -> bind_param(
                        "iiiss",
                        $clientId, $serviceId, $qId, $acDateStart, $acDateExpire
                    );

                    $insert -> execute();

                    $insertId = $connection -> insert_id;
                    $acId = $insertId;

                    // insert

                    $insert = $connection -> prepare("
                        INSERT INTO acteam
                        (acId, userId, designatedId)
                        VALUES
                        (?,?,?)
                    ");

                    $insert -> bind_param(
                        "iii",
                        $acId, $userId, $designatedId
                    );

                    $insert -> execute();

                    // select

                    $qty = mysqli_query(
                        $connection, "
                        SELECT COUNT(*) total
                        FROM qm1
                        WHERE itemStatus = 1
                    ");

                    $r_qty = mysqli_fetch_array($qty);

                    $qty = $r_qty['total'];

                    // insert

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

                    // insert

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

                    // insert

                    $insert = $connection -> prepare("
                        INSERT INTO tracingopinion
                        (acId)
                        VALUES
                        (?)
                    ");

                    $insert -> bind_param(
                        "i",
                        $acId
                    );

                    $insert -> execute();

                    // insert

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

                    // insert

                    $insert = $connection -> prepare("
                        INSERT INTO tracingriskpartneropinion
                        (acId)
                        VALUES
                        (?)
                    ");

                    $insert -> bind_param(
                        "i",
                        $acId
                    );

                    $insert -> execute();

                    echo "<body><script> window.location='../c/ac.php?m=acTeam&a=" . $insertId . "&q=" . $qId . "'</script>";

                }

                elseif ($acDateExpire == NULL or $today < $acDateExpire){

                    echo "<body><script> window.location='../c/ac.php?m=add&n=validAc'</script>";

                }

                else {

                    if (isset($r_deniedAc) or $riskId > 2) {

                        $qId = 1;
                        $acDateStart = date('Y-m-d');

                        // insert

                        $insert = $connection -> prepare("
                            INSERT INTO ac
                            (clientId, serviceId, acQuestionnaireId, acDateStart, acDateExpire)
                            VALUES
                            (?,?,?,?,?)
                        ");

                        $insert -> bind_param(
                            "iiiss",
                            $clientId, $serviceId, $qId, $acDateStart, $acDateExpire
                        );

                        $insert -> execute();

                        $insertId = $connection -> insert_id;
                        $acId = $insertId;

                        // select

                        $qty = mysqli_query(
                            $connection, "
                            SELECT COUNT(*) total
                            FROM qm1
                            WHERE itemStatus = 1
                        ");

                        $r_qty = mysqli_fetch_array($qty);

                        $qty = $r_qty['total'];

                        // insert

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

                        // insert

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

                        // insert

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

                        // insert

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

                        // view

                        echo "<body><script> window.location='../c/ac.php?m=acTeam&a=" . $insertId . "&q=" . $qId . "'</script>";

                    }

                    else {

                        $qId = 5;
                        $acDateStart = date('Y-m-d');

                        // insert

                        $insert = $connection -> prepare("
                            INSERT INTO ac
                            (clientId, serviceId, acQuestionnaireId, acDateStart, acDateExpire)
                            VALUES
                            (?,?,?,?,?)
                        ");

                        $insert -> bind_param(
                            "iiiss",
                            $clientId, $serviceId, $qId, $acDateStart, $acDateExpire
                        );

                        $insert -> execute();

                        $insertId = $connection -> insert_id;
                        $acId = $insertId;

                        // select

                        $qty = mysqli_query(
                            $connection, "
                            SELECT COUNT(*) total
                            FROM qm5
                            WHERE itemStatus = 1
                        ");

                        $r_qty = mysqli_fetch_array($qty);
                        $qty = $r_qty['total'];

                        // insert

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

                        // insert

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

                        // view

                        echo "<body><script> window.location='../c/ac.php?m=acTeam&a=" . $insertId . "&q=" . $qId . "'</script>";

                    }
                }
                break;

            case 2:
                echo "<body><script> window.location='../c/ac.php?m=add&n=onDevelopment'</script>";
                break;

            case 3:
                echo "<body><script> window.location='../c/ac.php?m=add&n=onDevelopment'</script>";
                break;

            case 4:
                echo "<body><script> window.location='../c/ac.php?m=add&n=onDevelopment'</script>";
                break;

            case 5:
                echo "<body><script> window.location='../c/ac.php?m=add&n=onDevelopment'</script>";
                break;

            case 6:
                echo "<body><script> window.location='../c/ac.php?m=add&n=onDevelopment'</script>";
                break;
        
        }
    }
}
*/