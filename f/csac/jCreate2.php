<?php 
// connection

include '../connection.php';

// module

$module = 'sac';
$action = 'add';

// var
$serviceId = $_POST['serviceId'];
$sacc1 = $_POST['sacc'];
$sacp1 = $_POST['sacp'];
$acDoerDate = date('d-m-y / g:i a');


// sql Crea la tabla usando Lenguaje PHP (tabla para guardar los cuestionarios)
$sql = "CREATE TABLE m$serviceId (
  mId int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  pacId int(11) DEFAULT NULL,
  accessId int(11) DEFAULT NULL,
  pacStatus int(11) NOT NULL DEFAULT '1',
  pacName varchar(300) DEFAULT NULL,
  serviceId int(11) DEFAULT NULL,
  cacId int(11) DEFAULT NULL,
  pap text, 
  date varchar(100) DEFAULT NULL,
  version int(11) DEFAULT NULL,
  status int(11) DEFAULT NULL,
  access int(11) DEFAULT NULL 
  )";
 $master->query($sql);
 
$sMrer = "localhost";
$uMrer = "sagracom_crear";
$pMrer = "Sagra2507.";
$dMrer = 'sagracom_modelos_cuestionarios';
$rer = new mysqli($sMrer, $uMrer, $pMrer, $dMrer);
 
 $sql = "CREATE TABLE m$serviceId (
  mId int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  pacId int(11) DEFAULT NULL,
  pacStatus int(11) NOT NULL DEFAULT '1',
  pacName varchar(300) DEFAULT NULL,
  serviceId int(11) DEFAULT NULL,
  cacId int(11) DEFAULT NULL,
  pap text, 
  date varchar(100) DEFAULT NULL,
  version int(11) DEFAULT NULL,
  status int(11) DEFAULT NULL,
  access int(11) DEFAULT NULL 
  )";
 $rer->query($sql);


// for q me guarda las preguntas q iran en la nueva matriz 
$pad = 0;
foreach ($_POST['preguntasC1'] as $key => $value) {

        $jAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;
        
$_m1 = mysqli_query($master, "
    SELECT * FROM mid
    WHERE pacStatus = 1 
    AND pacId = '" . $value . "' 
");

$m1 = $_m1 -> fetch_object();

$pacName = $m1 -> pacName;
$pap = $m1 -> pap;
$date = $m1 -> date;
$version = $m1 -> version;
$mId = $m1 -> mId;
$cacId = $m1 -> cacId;

    $insert = $rer -> prepare ("
        INSERT INTO m$serviceId
        (pacId, pacName, serviceId, cacId, pap, date, version, access)
        VALUES
        (?,?,?,?,?,?,?,?)
    ");
    
    $insert -> bind_param (
        "isiissii",
        $value, $pacName, $serviceId, $cacId, $pap, $date, $version, $jAccess
    );

    $insert -> execute();  





if ($jAccess == 1){
$pad++;
    $insert = $master -> prepare ("
        INSERT INTO m$serviceId
        (pacId, accessId, pacName, serviceId, cacId, pap, date, version)
        VALUES
        (?,?,?,?,?,?,?,?)
    ");
    
    $insert -> bind_param (
        "iisiissi",
        $pad, $value, $pacName, $serviceId, $cacId, $pap, $date, $version
    );

    $insert -> execute();    
}    
//llenar el resplado 

        }
// termina el for 


// revisar en la tabla para verificar si existe ya ese modelo
//$_country = mysqli_query($master, "
//    SELECT * FROM sac
//    WHERE serviceId = '" . $serviceId . "'
//    AND sacStatus = 1
//");

//$country = $_country -> fetch_object();

//$countryDb = $country -> serviceId;
//$modeloName = $country -> modeloName;
//$sacc = $country -> sacc;
//$sacp = $country -> sacp;
//$oldDate = $country -> date;
//$cdate = $country -> cdate;
//$version = $country -> version;

//$_categoriaAGG = mysqli_query($master, "
//    SELECT * FROM cac
//    WHERE serviceId = '" . $serviceId . "'
//    AND cacStatus = 1
//");
//$_preguntaAGG = mysqli_query($master, "
//    SELECT * FROM m1
//   WHERE serviceId = '" . $serviceId . "'
//    AND pacStatus = 1
//");



//$_trazau = mysqli_query($master, "SELECT * FROM tracem WHERE serviceId = '" . $serviceId . "'  ");
//$client = $_trazau -> fetch_object();

//$_usert = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $client -> userId . "'");
//$user = $_usert -> fetch_object();

//Condicional q me dice q si existe el modelo mostrar la siguiente pantalla
//if (strcasecmp($serviceId, $countryDb) == 0) {
 // usar esto para q no se vean las variables en la url   require_once '../v/sac/jCreate2.php';
//        echo "<script> window.location='../c/{$module}.php?m=create3&n=added&serviceId={$serviceId}&sacc1={$sacc1}&sacp1={$sacp1}'</script>";
//}else {
    // verify

$_m = mysqli_query($master, "SELECT * FROM modelo WHERE modeloId = '" . $serviceId . "'");
$m = $_m -> fetch_object();
$mName = $m -> modeloName;
$version = 1;    
$v = 1;    
    
    $insert = $master -> prepare ("
        INSERT INTO sac
        (serviceId, sacc, sacp, cdate, userId, modeloName, version, v)
        VALUES
        (?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiisissi",
        $serviceId, $sacc1, $sacp1, $acDoerDate, $_SESSION["userId"], $mName, $version,$v
    );

    $insert -> execute();
    $id = $master -> insert_id;
    
    

    
    
    
    
    
    
    //traza Cuestionario
    
        $trazamodelo = $master -> prepare ("
    	INSERT INTO tracem
    	(serviceId, date, userId, version)
    	VALUES
    	(?,?,?,?)
    ");

    $trazamodelo -> bind_param ("isii", $serviceId, $acDoerDate, $_SESSION["userId"], $version);
    $trazamodelo -> execute();   
 
    
    
    
    
    // trace
    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");
    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);
    $trace -> execute();
    
    
    
    //enviar dato a modelo
    $creado = 1;
$update = $master -> prepare ("
    UPDATE modelo
    SET
    creado = ?
    WHERE
    modeloId = ?
");	

$update -> bind_param (
    "ii",
    $creado ,$serviceId
);

$update -> execute();

    
    // view
    echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";
