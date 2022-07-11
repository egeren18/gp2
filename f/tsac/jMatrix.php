<?php 
$serviceId = $_GET['serviceId'] ;
$cacId = $_GET['cacId'];


$pap = $m -> pap;
$pacName = $m -> pacName;

    $modelo = $master -> prepare ("
    	INSERT INTO m1-1
    	(cacId, pacId, pacName, pap, serviceId, date, version)
    	VALUES
    	(?,?,?,?,?,?,?)
    ");

    $modelo -> bind_param ("iissisi", $cacId, $pacId, $pacName, $pap, $serviceId, $d, $version);
    $modelo -> execute();   