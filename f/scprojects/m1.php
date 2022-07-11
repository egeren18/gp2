  <?php
  $_odate = mysqli_query($master, "
    SELECT * FROM sac
    WHERE serviceId = '" . $serviceId . "'
    AND sacStatus = 1
     ");
  $odate = $_odate -> fetch_object();
  $oldDate = $odate -> date;
  $version = $odate -> version;
  $version++;
    $mupdate = 1;
        $sac = $master -> prepare ("
        UPDATE sac
        SET
        oldDate = ?,
        date = ?,
        userId = ?,
        sacc = ?,
        sacp = ?,
        version = ?
        WHERE
        serviceId = ?
    ");
    $sac -> bind_param (
        "ssiiiii",
        $oldDate, $d, $_SESSION["userId"], $sacc, $sacp, $version, $serviceId
    );
    
    $sac -> execute();
    
    
    $mupdate = 1;
        $updatemodelo = $master -> prepare ("
        UPDATE modelo
        SET
        mupdate = ?
        WHERE
        modeloId = ?
    ");
    $updatemodelo -> bind_param (
        "si",
        $mupdate, $serviceId
    );
    
    $updatemodelo -> execute();

    $_cuestionario = mysqli_query($master, "
    SELECT * FROM m1
    WHERE serviceId = '" . $serviceId . "'
    AND pacStatus = 1
");

while ($cuestionario = $_cuestionario -> fetch_object()){
    
    $cacId = $cuestionario -> cacId;
    $pacId = $cuestionario -> pacId;
    $pacName = $cuestionario -> pacName;
    $pap = $cuestionario -> pap;
    $serviceId = $cuestionario -> serviceId;
    $c = 0;
    
    //udapte
    $update = $master -> prepare ("
        UPDATE m1
        SET
        pacStatus = ?
        WHERE
        pacId = ?
    ");
    $update -> bind_param (
        "si",
        $c, $pacId
    );
    
    $update -> execute();

    $modelo = $master -> prepare ("
    	INSERT INTO m1
    	(cacId, pacId, pacName, pap, serviceId, date, version)
    	VALUES
    	(?,?,?,?,?,?,?)
    ");

    $modelo -> bind_param ("iissisi", $cacId, $pacId, $pacName, $pap, $serviceId, $d, $version);
    $modelo -> execute();   


    
}
       $trazamodelo = $master -> prepare ("
    	INSERT INTO tracem
    	(serviceId, date, userId, version)
    	VALUES
    	(?,?,?,?)
    ");

    $trazamodelo -> bind_param ("isii", $serviceId, $d, $_SESSION["userId"], $version);
    $trazamodelo -> execute();   
 
    // view
    echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";
    