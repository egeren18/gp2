<?php

    
    $insert = $master -> prepare ("
        INSERT INTO m1-1
        (mId, pacId, pacName, serviceId, cacId, pap, date)
        VALUES
        (?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iisiiss",
        $mId, $paId, $pacName, $serviceId, $cacId, $pap, $date
    );

    $insert -> execute();
    $id = $master -> insert_id;
    
    
        
    // view
 require_once '../f/sac/jCreate2.php';