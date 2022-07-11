<?php

// connection
$sM = "localhost";
$uM = "sagracom";
$pM = "Sagra2019";
$dM = 'sagracom_alberto';

$master = new mysqli($sM, $uM, $pM, $dM);

// module

$module = 'formulario';
$action = 'add';

// var

$subscriberName = filter_var($_POST['subscriberName'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberRif = filter_var($_POST['subscriberRif'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberPhone1 = filter_var($_POST['subscriberPhone1'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberPhone2 = filter_var($_POST['subscriberPhone2'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberContactName = filter_var($_POST['subscriberContactName'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberContactSurname = filter_var($_POST['subscriberContactSurname'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberContactEmail = filter_var($_POST['subscriberContactEmail'], FILTER_SANITIZE_EMAIL);
$userPrimary = 1;
$subscriberAddress = filter_var($_POST['subscriberAddress'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberCity = filter_var($_POST['subscriberCity'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberState = filter_var($_POST['subscriberState'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberZipCode = filter_var($_POST['subscriberZipCode'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$countryId = filter_var($_POST['countryId'], FILTER_VALIDATE_INT);
$subscriberWebPage = filter_var($_POST['subscriberWebPage'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriberUsers = filter_var($_POST['subscriberUsers'], FILTER_VALIDATE_INT);
$subscriberStart = filter_var($_POST['subscriberStart'], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$subscriptionId = filter_var($_POST['subscriptionId'], FILTER_VALIDATE_INT);
$userName = filter_var($_POST["userName"], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$userSurname = filter_var($_POST["userSurname"], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$userEmail = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
$userPassword = password_hash("12345", PASSWORD_DEFAULT);
$userTypeId = 2;
$userAdmin = 2;
$riskPartnerName = filter_var($_POST["riskPartnerName"], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$riskPartnerSurname = filter_var($_POST["riskPartnerSurname"], FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
$riskPartnerEmail = filter_var($_POST["riskPartnerEmail"], FILTER_SANITIZE_EMAIL);
$riskPartnerPassword = password_hash("12345", PASSWORD_DEFAULT);
$riskPartnerAdmin = 3;
//$subscriberDatabase = preg_replace('([^A-Za-z0-9])', '', strtolower($subscriberName));
$notification = "El Suscriptor << " . $subscriberName . " >> ha sido creado!";
$userQuestion1 = $_POST['userQuestion'];
$userQuestion2 = $_POST['userQuestion2'];
$pagoName = $_POST['pagoName'];
$refPago = $_POST['refPago'];
// select

$_subscription = mysqli_query($master, "
    SELECT * FROM subscription
    WHERE subscriptionId = '" . $subscriptionId . "'
");

$subscription = $_subscription -> fetch_object();

$days = $subscription -> subscriptionDays;
$subscriberStart = date('Y-m-j');
$subscriberExpires = strtotime ( '+' . $days . ' day' , strtotime ($subscriberStart) ) ;
$subscriberExpires = date ( 'Y-m-j' , $subscriberExpires );

// insert

$insert = $master -> prepare ("
    INSERT INTO subscriber2
    (subscriberName, subscriberRif, subscriberPhone1, subscriberPhone2, subscriberContactName,
    subscriberContactSurname, subscriberContactEmail, subscriberAddress, subscriberCity, subscriberState,
    subscriberZipCode, countryId, subscriberWebPage, subscriberUsers, subscriberStart,
    subscriberExpires, subscriptionId, subscriberDatabase, pagoName, pagoRef)
    VALUES
    (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
");

$insert -> bind_param (
    "sssssssssssissssisss",
    $subscriberName, $subscriberRif, $subscriberPhone1, $subscriberPhone2, $subscriberContactName,
    $subscriberContactSurname, $subscriberContactEmail, $subscriberAddress, $subscriberCity, $subscriberState,
    $subscriberZipCode, $countryId, $subscriberWebPage, $subscriberUsers, $subscriberStart,
    $subscriberExpires, $subscriptionId, $subscriberDatabase, $pagoName, $refPago
);


$insert -> execute();

$id = $master -> insert_id;

foreach ($_FILES["archivo2"]['tmp_name'] as $archivo2 => $tmp_name) {
        if ($_FILES["archivo2"]["error"] > 0) {
            echo "";
        } else {

            if (1 == 1) {

                $ruta2 = 'pago/' . $id . '/';
                $archivo2 = $ruta2 . $_FILES["archivo2"]["name"];
                if (!file_exists($ruta2)) {
                    mkdir($ruta2);
                }
                if (!file_exists($archivo2)) {
                    $resultado2 = @move_uploaded_file($_FILES["archivo2"]["tmp_name"], $archivo2);
                }if ($resultado2) {
                    
                } else {
                    echo "no guardo ";
                }
            } else {
                echo "Archivo no permitido o exede el tamaño";
            }
        }
    }
    foreach ($_FILES["archivo2"]['tmp_name'] as $key => $tmp_name) {
        //Validamos que el archivo exista
        if ($_FILES["archivo2"]["name"][$key]) {
            $filename2 = $_FILES["archivo2"]["name"][$key]; //Obtenemos el nombre original del archivo
            $source2 = $_FILES["archivo2"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo

            $directorio2 = 'pago/' . $id . '/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
            //Validamos si la ruta de destino existe, en caso de no existir la creamos
            if (!file_exists($directorio2)) {
                mkdir($directorio2, 0777) or die("No se puede crear el directorio de extracci&oacute;n");
            }

            $dir2 = opendir($directorio2); //Abrimos el directorio de destino
            $target_path = $directorio2 . '/' . $filename2; //Indicamos la ruta de destino, así como el nombre del archivo
            //Movemos y validamos que el archivo se haya cargado correctamente
            //El primer campo es el origen y el segundo el destino
            if (move_uploaded_file($source2, $target_path)) {
                echo "";
            } else {
                echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
            }
            closedir($dir2); //Cerramos el directorio de destino
        }
    }
   echo "<script> window.location='mensaje.php?id={$id}'</script>";