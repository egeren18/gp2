<?php 

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';


//var 
$clientId = $_GET['clientId'];
$serviceId = $_GET['serviceId'];
$userId = $_GET['userId'];
$gerenteId = $_GET['gerenteId'];
$designatedId = 4;
$designatedId2 = 1;

//var
$group1 = $_POST["approved1"];
$group2 = $_POST["approved2"];
$group3 = $_POST["approved3"];
$group4 = $_POST["approved4"];
$group5 = $_POST["approved5"];
$group6 = $_POST["approved6"];
$group7 = $_POST["approved7"];
$group8 = $_POST["approved8"];

//1
if ($group1 == 1){
 echo "<script> window.location='../c/ac.php?m=m1&clientId={$clientId}&serviceId={$serviceId}&userId={$userId}&gerenteId={$gerenteId}'</script>";    
}
//2
if($group2 == 1){
echo "<script> window.location='../c/ac.php?m=m1&clientId={$clientId}&serviceId={$serviceId}&userId={$userId}&gerenteId={$gerenteId}'</script>";
}
//3
if ($group3 == 1){
echo "<script> window.location='../c/ac.php?m=m1&clientId={$clientId}&serviceId={$serviceId}&userId={$userId}&gerenteId={$gerenteId}'</script>"; 
}
//4
if($group4 == 1){
echo "<script> window.location='../c/ac.php?m=m1&clientId={$clientId}&serviceId={$serviceId}&userId={$userId}&gerenteId={$gerenteId}'</script>";
}
//5
if ($group5 == 1){
echo "<script> window.location='../c/ac.php?m=m1&clientId={$clientId}&serviceId={$serviceId}&userId={$userId}&gerenteId={$gerenteId}'</script>";
}
//6
if($group6 == 1){
echo "<script> window.location='../c/ac.php?m=m1&clientId={$clientId}&serviceId={$serviceId}&userId={$userId}&gerenteId={$gerenteId}'</script>";
}
//7
if ($group7 == 1){
echo "<script> window.location='../c/ac.php?m=m1&clientId={$clientId}&serviceId={$serviceId}&userId={$userId}&gerenteId={$gerenteId}'</script>";  
}
//8
if($group8 == 1){
echo "<script> window.location='../c/ac.php?m=m1&clientId={$clientId}&serviceId={$serviceId}&userId={$userId}&gerenteId={$gerenteId}'</script>";

}
if($group1 != 1 && $group2 != 1 && $group3 != 1 && $group3 != 1 && $group4 != 1 && $group5 != 1 && $group7 != 1 && $group8 != 1) {

   
$clientId = $_GET['clientId'];
$serviceId = $_GET['serviceId'];
$userId = $_GET['userId'];
$gerenteId = $_GET['gerenteId'];
$designatedId = 4;
$designatedId2 = 1;

    $qId = 1;
    $acDateStart = date('Y-m-d');
    $acDateExpire = strtotime ('+1 year' , strtotime($acDateStart));
    $acDateExpire = date ('Y-m-d',$acDateExpire);



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
        
        
        
        if ($serviceId == 1){ $v =2; }
        if ($serviceId == 2){ $v =2; }
        if ($serviceId == 3){ $v =2; }
        if ($serviceId == 4){ $v =2; }
        if ($serviceId == 5){ $v =2; }
        if ($serviceId == 6){ $v =2; }
        if ($serviceId == 7){ $v =2; }
        if ($serviceId == 8){ $v =2; }
        if ($serviceId == 9){ $v =2; }
        if ($serviceId == 10){ $v =2; }
        if ($serviceId == 11){ $v =2; }
        if ($serviceId == 12){ $v =2; }
        
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
        

        
     echo "<script> window.location='../c/ac.php?m=team&aid={$insertId}&qid={$qId}&n=added'</script>";   
    
    
    
}
    


?>