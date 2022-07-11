<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables
 */

$clientId = $_POST['clientId'];
$serviceId = $_POST['serviceId'];
$userId = $_POST['leaderId'];
$gerenteId = $_POST['gerenteId'];
$designatedId = 4;
$designatedId2 = 1;

/*
 * Con el dato de cliente y servicio debemos verificar si ese cliente posee una
 * AC vigente
 */


if ($userId ==  $gerenteId ) {
    
    echo "<script> window.location='../c/ac.php?m=add&n=validUser'</script>";

} 

$_ac = mysqli_query($connection, "SELECT * FROM ac WHERE clientId = '" . $clientId . "' AND serviceId = '" . $serviceId . "' AND CURDATE() < acDateExpire AND terminado != 1");
$ac = $_ac -> fetch_object();

if ($ac) {
    
    echo "<script> window.location='../c/ac.php?m=add&n=validAc'</script>";

} else {

    /*
     * Variables.
     */

    $qId = 1;
    $acDateStart = date('Y-m-d');
    $acDateExpire = strtotime ('+1 year' , strtotime($acDateStart));
    $acDateExpire = date ('Y-m-d',$acDateExpire);

    /*
     * Realiza un registro en la base de datos.
     */



    $_aca = mysqli_query($connection, "SELECT * FROM ac WHERE clientId = '" . $clientId . "' AND serviceId = 1 AND terminado = 1 AND risk >= 5");

    $aca = $_aca -> fetch_object();

    if ($aca) {



        $insert = $connection -> prepare("INSERT INTO ac (clientId, serviceId, acQuestionnaireId, acDateStart, acDateExpire) VALUES (?,?,?,?,?)");
        $insert -> bind_param("iiiss", $clientId, $serviceId, $qId, $acDateStart, $acDateExpire);
        $insert -> execute();
    
        /*
         * Devuelve el id autogenerado que se utilizó en la última consulta.
         */
    
        $insertId = $connection -> insert_id;
    
        /*
         * Realiza un registro en la base de datos.
         */
    
        $insert = $connection -> prepare("INSERT INTO acteam (acId, userId, designatedId) VALUES (?,?,?)");
        $insert -> bind_param("iii", $insertId, $userId, $designatedId);
        $insert -> execute();
        
        $insert2 = $connection -> prepare("INSERT INTO acteam (acId, userId, designatedId) VALUES (?,?,?)");
        $insert2 -> bind_param("iii", $insertId, $gerenteId, $designatedId2);
        $insert2 -> execute();
        /*
         * Variables
         */
    
        $userId = $_SESSION["userId"];
        $module = 'AC';
        $action = 'Create';
        $itemId = $insertId;
    
          /*
           * Realiza una consulta a la base de datos.
           */
        
    
        /*
         * Realiza un registro en la base de datos.
         */
    
        $trace = $connection -> prepare("INSERT INTO trace (userId, module, action, itemId) VALUES (?,?,?,?)");
        $trace -> bind_param("issi", $userId, $module, $action, $itemId);
        $trace -> execute();
        
        
        
        if ($serviceId == 1){ $v =1; }
        if ($serviceId == 2){ $v =1; }
        
        if ($serviceId == 3){ $v =3; }
        if ($serviceId == 4){ $v =3; }
        if ($serviceId == 5){ $v =3; }
        if ($serviceId == 6){ $v =3; }
        if ($serviceId == 7){ $v =3; }
        if ($serviceId == 8){ $v =3; }
        if ($serviceId == 9){ $v =3; }
        if ($serviceId == 10){ $v =3; }
        if ($serviceId == 11){ $v =3; }
        
        if ($serviceId == 12){ $v =4; }
        
        $vacc = 1;
        
        $vvv =$vacc.'_'.$v;
    
        
    // crear base de datos de la ac    
    $sql = "CREATE TABLE acq$insertId (
      mId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      pacId int(11) DEFAULT NULL, 
      pacStatus int(11) NOT NULL DEFAULT '1',
      pacName varchar(300) DEFAULT NULL,
      serviceId int(11) DEFAULT NULL,
      cacId int(11) DEFAULT NULL,
      pap text, 
      date varchar(100) DEFAULT NULL,
      version int(11) DEFAULT NULL,
      status int(11) DEFAULT NULL,
      access int(11) DEFAULT NULL,
      risk int(11) DEFAULT NULL 
      )";
     $acq->query($sql);
     
     
     
     
     
    // vaciar el cuestionario 
    $_vacq = mysqli_query(
        $bdac, 
        "SELECT * FROM cuestionario$vvv
       ");
    while($vacq = $_vacq -> fetch_object())
    {
    $pacName = $vacq -> pacName;
    $pap = $vacq -> pap;
    $date = $vacq -> date;
    $mId = $vacq -> mId;
    $cacId = $vacq -> cacId;
    $risk = $vacq -> risk;
            
        $insert = $acq -> prepare ("
            INSERT INTO acq$insertId
            (pacName, pap, cacId, date, risk)
            VALUES
            (?,?,?,?,?)
        ");
    
        $insert -> bind_param (
            "ssisi",
            $pacName, $pap, $cacId, $date, $risk
        );
    
        $insert -> execute();  
             
        
    }
     
     
     
     // base de datos donde se va a responder acR
     
     $sql = "CREATE TABLE acr$insertId (
      acAnswerId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      acId int(11) DEFAULT NULL,
      acQId int(11) DEFAULT NULL,
      acIId int(11) DEFAULT NULL,
      a1 int(11) DEFAULT NULL,
      a2 int(11) DEFAULT NULL,
      a3 text, 
      important int(11) DEFAULT NULL,
      acDoerId int(11) DEFAULT NULL,
      acDoerDate varchar(25) DEFAULT NULL,    
      acReviewerId int(11) DEFAULT NULL,
      acReviewerDate varchar(25) DEFAULT NULL,  
      acSrId int(11) DEFAULT NULL,
      acSrDate varchar(300) DEFAULT NULL, 
      note text, 
      statusId int(11) DEFAULT NULL
      )";
     $acq->query($sql);
        
        
     
     
    //crear base de datos para pregunta de riesgo 
    
    $sql = "CREATE TABLE priskq$insertId (
        priskId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        mId int(11) DEFAULT NULL,
        statusId int(11) NOT NULL DEFAULT '1',
        priskName varchar(250) DEFAULT NULL,  
        priskText text, 
        date varchar(50) DEFAULT NULL,
        access int(11) DEFAULT NULL 
        )";
       $acq->query($sql);
     
       $_ccuu = mysqli_query($bdac, "
       SELECT * FROM prisk$vvv
    ");
    while($ccuu = $_ccuu -> fetch_object())
    {
       $priskName  = $ccuu -> priskName; 
       $pmId  = $ccuu -> mId;
       $pmId  = $ccuu -> mId;
       $priskText  = $ccuu -> priskText;
       $priskDate  = $ccuu -> date;
       $priskAccess  = $ccuu -> access;
       
       $insert = $acq -> prepare ("
       INSERT INTO priskq$insertId
       (mId, priskName, priskText, date, access)
       VALUES
       (?,?,?,?,?)
    ");
    
    $insert -> bind_param (
       "isssi",
        $pmId, $priskName, $priskText, $priskDate, $priskAccess
    );
    
    $insert -> execute();
    
    }
    
    
    
    
    
    
    //crear base de datos para pregunta de riesgo (respuesta)
        
        
     $sql = "CREATE TABLE priskr$insertId (
        acMatrixid INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        acId int(11) DEFAULT NULL,
        i int(11) DEFAULT NULL,
        r int(11) DEFAULT NULL,
        d text, 
        a text
        )";
       $acq->query($sql);
        
        
        
        
        
        
     echo "<script> window.location='../c/ac.php?m=index&aid={$insertId}&qid={$qId}&n=added'</script>";   
        

    }   

    $_acan = mysqli_query($connection, "SELECT * FROM ac WHERE clientId = '" . $clientId . "' AND serviceId = 1 AND terminado = 1 AND risk < 5");

    $acan = $_acan -> fetch_object();
    if ($acan){
    
    // aqui se llena con el formulario 1
    echo "<script> window.location='../c/ac.php?m=descarte&clientId={$clientId}&serviceId={$serviceId}&userId={$userId}&gerenteId={$gerenteId}'</script>";

    }else{





        $insert = $connection -> prepare("INSERT INTO ac (clientId, serviceId, acQuestionnaireId, acDateStart, acDateExpire) VALUES (?,?,?,?,?)");
        $insert -> bind_param("iiiss", $clientId, $serviceId, $qId, $acDateStart, $acDateExpire);
        $insert -> execute();
    
        /*
         * Devuelve el id autogenerado que se utilizó en la última consulta.
         */
    
        $insertId = $connection -> insert_id;
    
        /*
         * Realiza un registro en la base de datos.
         */
    
        $insert = $connection -> prepare("INSERT INTO acteam (acId, userId, designatedId) VALUES (?,?,?)");
        $insert -> bind_param("iii", $insertId, $userId, $designatedId);
        $insert -> execute();
        
        $insert2 = $connection -> prepare("INSERT INTO acteam (acId, userId, designatedId) VALUES (?,?,?)");
        $insert2 -> bind_param("iii", $insertId, $gerenteId, $designatedId2);
        $insert2 -> execute();
        /*
         * Variables
         */
    
        $userId = $_SESSION["userId"];
        $module = 'AC';
        $action = 'Create';
        $itemId = $insertId;
    
          /*
           * Realiza una consulta a la base de datos.
           */
        
    
        /*
         * Realiza un registro en la base de datos.
         */
    
        $trace = $connection -> prepare("INSERT INTO trace (userId, module, action, itemId) VALUES (?,?,?,?)");
        $trace -> bind_param("issi", $userId, $module, $action, $itemId);
        $trace -> execute();
        
        
        
        if ($serviceId == 1){ $v =1; }
        if ($serviceId == 2){ $v =1; }
        
        if ($serviceId == 3){ $v =3; }
        if ($serviceId == 4){ $v =3; }
        if ($serviceId == 5){ $v =3; }
        if ($serviceId == 6){ $v =3; }
        if ($serviceId == 7){ $v =3; }
        if ($serviceId == 8){ $v =3; }
        if ($serviceId == 9){ $v =3; }
        if ($serviceId == 10){ $v =3; }
        if ($serviceId == 11){ $v =3; }
        
        if ($serviceId == 12){ $v =4; }
        
        $vacc = 1;
        
        $vvv =$vacc.'_'.$v;
    
        
    // crear base de datos de la ac    
    $sql = "CREATE TABLE acq$insertId (
      mId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      pacId int(11) DEFAULT NULL, 
      pacStatus int(11) NOT NULL DEFAULT '1',
      pacName varchar(300) DEFAULT NULL,
      serviceId int(11) DEFAULT NULL,
      cacId int(11) DEFAULT NULL,
      pap text, 
      date varchar(100) DEFAULT NULL,
      version int(11) DEFAULT NULL,
      status int(11) DEFAULT NULL,
      access int(11) DEFAULT NULL,
      risk int(11) DEFAULT NULL 
      )";
     $acq->query($sql);
     
     
     
     
     
    // vaciar el cuestionario 
    $_vacq = mysqli_query(
        $bdac, 
        "SELECT * FROM cuestionario$vvv
       ");
    while($vacq = $_vacq -> fetch_object())
    {
    $pacName = $vacq -> pacName;
    $pap = $vacq -> pap;
    $date = $vacq -> date;
    $mId = $vacq -> mId;
    $cacId = $vacq -> cacId;
    $risk = $vacq -> risk;
            
        $insert = $acq -> prepare ("
            INSERT INTO acq$insertId
            (pacName, pap, cacId, date, risk)
            VALUES
            (?,?,?,?,?)
        ");
    
        $insert -> bind_param (
            "ssisi",
            $pacName, $pap, $cacId, $date, $risk
        );
    
        $insert -> execute();  
             
        
    }
     
     
     
     // base de datos donde se va a responder acR
     
     $sql = "CREATE TABLE acr$insertId (
      acAnswerId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      acId int(11) DEFAULT NULL,
      acQId int(11) DEFAULT NULL,
      acIId int(11) DEFAULT NULL,
      a1 int(11) DEFAULT NULL,
      a2 int(11) DEFAULT NULL,
      a3 text, 
      important int(11) DEFAULT NULL,
      acDoerId int(11) DEFAULT NULL,
      acDoerDate varchar(25) DEFAULT NULL,    
      acReviewerId int(11) DEFAULT NULL,
      acReviewerDate varchar(25) DEFAULT NULL,  
      acSrId int(11) DEFAULT NULL,
      acSrDate varchar(300) DEFAULT NULL, 
      note text, 
      statusId int(11) DEFAULT NULL
      )";
     $acq->query($sql);
        
        
     
     
    //crear base de datos para pregunta de riesgo 
    
    $sql = "CREATE TABLE priskq$insertId (
        priskId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        mId int(11) DEFAULT NULL,
        statusId int(11) NOT NULL DEFAULT '1',
        priskName varchar(250) DEFAULT NULL,  
        priskText text, 
        date varchar(50) DEFAULT NULL,
        access int(11) DEFAULT NULL 
        )";
       $acq->query($sql);
     
       $_ccuu = mysqli_query($bdac, "
       SELECT * FROM prisk$vvv
    ");
    while($ccuu = $_ccuu -> fetch_object())
    {
       $priskName  = $ccuu -> priskName; 
       $pmId  = $ccuu -> mId;
       $pmId  = $ccuu -> mId;
       $priskText  = $ccuu -> priskText;
       $priskDate  = $ccuu -> date;
       $priskAccess  = $ccuu -> access;
       
       $insert = $acq -> prepare ("
       INSERT INTO priskq$insertId
       (mId, priskName, priskText, date, access)
       VALUES
       (?,?,?,?,?)
    ");
    
    $insert -> bind_param (
       "isssi",
        $pmId, $priskName, $priskText, $priskDate, $priskAccess
    );
    
    $insert -> execute();
    
    }
    
    
    
    
    
    
    //crear base de datos para pregunta de riesgo (respuesta)
        
        
     $sql = "CREATE TABLE priskr$insertId (
        acMatrixid INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        acId int(11) DEFAULT NULL,
        i int(11) DEFAULT NULL,
        r int(11) DEFAULT NULL,
        d text, 
        a text
        )";
       $acq->query($sql);
        
        
        
        
        
        
     echo "<script> window.location='../c/ac.php?m=index&aid={$insertId}&qid={$qId}&n=added'</script>";   
        




        
    }





}



