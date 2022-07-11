<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables.
 */

$acId = $_GET["aid"];
$n = $_GET["n"];

$final = mysqli_query(
   $connection,
    "SELECT * FROM acteam
    WHERE acId = '" . $acId ."'
    AND  userId = '" .   $_SESSION["userId"]. "'
"); 
 $r_final  = mysqli_fetch_array($final);
 $valor = $r_final["designatedId"];



$currency = mysqli_query(
    $master,
    "SELECT * FROM currency
");

$Accurrency = mysqli_query(
    $master,
    "SELECT * FROM currency
");

$roleAc = mysqli_query(
    $master,
    "SELECT * FROM role
    WHERE roleStatus = 1
");

$line = mysqli_query(
    $master,
    "SELECT * FROM line
    WHERE lineStatus = 1
");

$selectRisk2 = mysqli_query(
   $master, "
    SELECT * FROM risk
    WHERE riskStatus = 1
    AND riskId > 0
");

$desicion = mysqli_query(
   $master, "
    SELECT * FROM desicion
    WHERE desicionStatus = 1
  
");

$desicion2 = mysqli_query(
   $master, "
    SELECT * FROM desicion2
    WHERE desicionStatus = 1
  
");
$desicion3 = mysqli_query(
    $master, "
     SELECT * FROM desicion
     WHERE desicionStatus = 1
   
 ");
/*
 * conecion q me ayudara a ver si existe datos de esa ac en la tabla de tracingOpinion
 * 
 */
$aphelio = mysqli_query(
    $connection, "
     SELECT * FROM tracingopinion 
     WHERE acId = '" . $acId . "'
 ");
 $r_aphelio  = mysqli_fetch_array($aphelio);
 $tracingOpinionAc = $r_aphelio["acId"];



/*
 * conecion q me ayudara a ver si existe datos de esa ac en la tabla de tracing
 * 
 */
$ezreal = mysqli_query(
    $connection, "
     SELECT * FROM tracing 
     WHERE acId = '" . $acId . "'
 ");
 $r_ezreal  = mysqli_fetch_array($ezreal);
 $tracingAc = $r_ezreal["acId"];


/*
 * conecion q me ayudara a ver si existe datos de esa ac en la tabla de tracing
 * 
 */
$jinx = mysqli_query(
    $connection, "
     SELECT * FROM tracingopinion 
     WHERE acId = '" . $acId . "'
 ");
 $r_jinx  = mysqli_fetch_array($jinx);
 $dsr = $r_jinx["decisionSr"];

 $jhin = mysqli_query(
    $master, "
     SELECT * FROM desicion
     WHERE desicionId = '" . $dsr . "'
 ");

 $r_jhin  = mysqli_fetch_array($jhin);
 $dsrn = $r_jhin["desicionName"];


/*
 * conectar a la base de datos poara mostrar la tabla "tracing"
 * 
 */
$monto = mysqli_query(
    $connection, "
     SELECT * FROM tracing 
     WHERE acId = '" . $acId . "'
 ");

 $r_monto  = mysqli_fetch_array($monto );
 $billete = $r_monto["amount"];
 $moneda = $r_monto["currencyId"];

 $monedaC= mysqli_query(
    $master, "
     SELECT * FROM currency
     WHERE currencyId = '" . $moneda . "'
   
 ");
 $r_monedaC  = mysqli_fetch_array($monedaC );
 $nombreMoneda = $r_monedaC["currencyName"];



$tracinOp = mysqli_query(
    $connection, 
    "SELECT * FROM tracingopinion
     WHERE acId = '" . $acId . "'
   ");
   $r_tracinOp  = mysqli_fetch_array($tracinOp );

   $ac1 = $r_tracinOp["acId"];
   $ac2 = $r_tracinOp["riskId"];
   $ac3 = $r_tracinOp["decision"];
 /*
 * mostar el campo de riesgo sugerido por el sistema con otra conexion 
 * debido a q esta en otra base de datos pero usa de referencia los datos de la primera conexion
 */
   
  $riskAc1 = mysqli_query(
    $master,
    "SELECT * FROM risk
    WHERE riskId = '" . $ac2 . "'
    ");
    $r_riskAc1  = mysqli_fetch_array($riskAc1 );

    $riskAc = $r_riskAc1["riskName"];

 /*
 * mostar el campo de riesgo sugerido por el sistema con otra conexion 
 * debido a q esta en otra base de datos pero usa de referencia los datos de la primera conexion
 */
   
  $riskAc2 = mysqli_query(
    $connection,
    "SELECT * FROM tracingopinion
    WHERE acId = '" . $acId . "'
    ");
    $r_riskAc2  = mysqli_fetch_array($riskAc2);

    $riskAc2 = $r_riskAc2["decision"];





 /*
 * mostar el campo de riesgo sugerido por el sistema con otra conexion 
 * debido a q esta en otra base de datos pero usa de referencia los datos de la primera conexion
 */
   
  $dAc = mysqli_query(
    $master,
    "SELECT * FROM desicion
    WHERE desicionId = '" . $ac3 . "'
    ");
    $r_dAc  = mysqli_fetch_array($dAc);

    $desiAc = $r_dAc["desicionName"];


/*
 * Realiza una consulta a la base de datos.
 */

$_ac = mysqli_query($connection, "SELECT * FROM ac INNER JOIN client ON ac.clientId = client.clientId WHERE ac.acId = '" . $acId . "'");
$ac = $_ac -> fetch_object();

/*
 * Realiza una consulta a la base de datos.
 */
$_client = mysqli_query($connection, "SELECT * FROM client WHERE clientId = '" . $ac -> clientId . "'");
$client = $_client -> fetch_object();


/*
 * Realiza una consulta a la base de datos.
 */

$_leader = mysqli_query($connection, "SELECT * FROM acteam WHERE acId = '" . $ac -> acId . "' AND  designatedId = 4");

/*
 * Realiza una consulta a la base de datos.
 */

$_consultant = mysqli_query($connection, "SELECT * FROM acteam WHERE acId = '" . $ac -> acId . "' AND  designatedId = 1");

/*
 * Realiza una consulta a la base de datos.
 */

$_role = mysqli_query($connection, "SELECT * FROM acteam WHERE acId = '" . $ac -> acId . "' AND userId = '" . $_SESSION["userId"] . "'");
$role = $_role -> fetch_object();

/*
 * Realiza una consulta a la base de datos.
 */
$_ac2 = mysqli_query($connection, "SELECT * FROM ac  WHERE acId = '" . $acId . "'");
$ac2 = $_ac2 -> fetch_object();
 
$_service = mysqli_query($master, " SELECT * FROM service  WHERE serviceId = '" . $ac2 -> serviceId . "'");
$service = $_service -> fetch_object();
$service -> natureId;

$_service2 = mysqli_query($master, " SELECT * FROM  nature WHERE natureId = '" . $service -> natureId . "'");
$service2 = $_service2 -> fetch_object();
$service2 -> natureId;
/*
 * Realiza una consulta a la base de datos.
 */

$qtyIP = mysqli_query($acq, "SELECT COUNT(statusId) AS inProcess FROM acr$acId WHERE acId = '" . $acId . "' AND acQId = '" . $ac -> acQuestionnaireId. "' AND statusId = 1;");
$r_qtyIP = mysqli_fetch_array($qtyIP);
$qIP = $r_qtyIP["inProcess"];

/*
 * Realiza una consulta a la base de datos.
 */

$qtyC = mysqli_query($acq, "SELECT COUNT(statusId) AS completed FROM acr$acId WHERE acId = '" . $acId . "' AND acQId = '" . $ac -> acQuestionnaireId. "' AND statusId = 2;");
$r_qtyC = mysqli_fetch_array($qtyC);
$qC = $r_qtyC["completed"];

/*
 * Realiza una consulta a la base de datos.
 */

$qtyTC = mysqli_query($acq, "SELECT COUNT(statusId) AS toCorrect FROM acr$acId WHERE acId = '" . $acId . "' AND acQId = '" . $ac -> acQuestionnaireId. "' AND statusId = 3;");
$r_qtyTC = mysqli_fetch_array($qtyTC);
$qTC = $r_qtyTC["toCorrect"];

/*
 * Realiza una consulta a la base de datos.
 */

$qtyR = mysqli_query($acq, "SELECT COUNT(statusId) AS reviewed FROM acr$acId WHERE acId = '" . $acId . "' AND acQId = '" . $ac -> acQuestionnaireId. "' AND statusId = 4;");
$r_qtyR = mysqli_fetch_array($qtyR);
$qR = $r_qtyR["reviewed"];

/*
 * Realiza una consulta a la base de datos.
 */

$qtyF = mysqli_query( $acq, "SELECT COUNT(statusId) AS finished FROM acr$acId WHERE acId = '" . $acId . "' AND acQId = '" . $ac -> acQuestionnaireId . "' AND statusId = 5;");
$r_qtyF = mysqli_fetch_array($qtyF);
$qF = $r_qtyF["finished"];

if ($ac -> acQuestionnaireId == 1) {
    

  $query = "SELECT COUNT(r) AS q FROM priskr$acId WHERE acId = '" . $_GET["aid"] . "' AND r > 0";
  $_qty = mysqli_query($acq, $query);
  $qty = $_qty -> fetch_object();

// ahora ya tengo cantidad de respuestas que vamos a promediar, y hago la sumatoria
//almacenando dicho valor en la variable $sum. luego el promedio es almacenado en
//la variable @$average

  $query = "SELECT SUM(r) AS s FROM priskr$acId WHERE acId = '" . $_GET["aid"] . "' AND r > 0";
  $_sum = mysqli_query($acq, $query);
  $sum = $_sum -> fetch_object();

@$average = $sum -> s / $qty -> q;
$dataNum = $sum -> s / $qty -> q;

// ese resultado se ubicara ahora en alguno de los siguientes rangos y mostrara
//en pantalla el equivalente al rango en el que cayo.

switch ($average) {

    case $average < 1.5 : $average = 'Bajo';
        break;
    case $average >= 1.5 && $average < 2.5 : $average = 'Bajo - Moderado';
        break;
    case $average >= 2.5 && $average < 3.5 : $average = 'Moderado';
        break;
    case $average >= 3.5 && $average < 4.5 : $average = 'Moderado - Alto';
        break;
    case $average >= 4.5 && $average <= 5 : $average = 'Alto';
        break;
    default : $average = 'No Aplica';
        break;
}




    /*
     * Realiza una consulta a la base de datos.
     */

    $sql_qM1 = mysqli_query($master, "SELECT COUNT(*) total FROM qm1 WHERE itemStatus = 1");
    $r_sql_qM1 = $sql_qM1 -> fetch_object();

    /*
     * Variables.
     */

    $qty = $r_sql_qM1 -> total;

    /*
     * Realiza una consulta a la base de datos.
     */

  

    /*
     * Realiza una consulta a la base de datos.
     */

    $_qM1_1 = mysqli_query($master, "SELECT * FROM qm1 WHERE itemStatus = 1");

    /*
     * Realiza una consulta a la base de datos.
     */

    $_qM1_2 = mysqli_query($master, "SELECT * FROM qm1 WHERE itemStatus = 1");

    /*
     * Realiza una consulta a la base de datos.
     */

    $_qM1_3 = mysqli_query($master, "SELECT * FROM qm1 WHERE itemStatus = 1");

    /*
     * Realiza una consulta a la base de datos.
     */

    $_qM1_4 = mysqli_query($master, "SELECT * FROM qm1 WHERE itemStatus = 1");

    /*
     * Realiza una consulta a la base de datos.
     */

    $_qM1_5 = mysqli_query($master, "SELECT * FROM qm1 WHERE itemStatus = 1");

    /*
     * Realiza una consulta a la base de datos.
     */

    $_qM1_6 = mysqli_query($master, "SELECT * FROM qm1 WHERE itemStatus = 1");

    /*
     * Realiza una consulta a la base de datos.
     */

    $_qM1_7 = mysqli_query($master, "SELECT * FROM qm1 WHERE itemStatus = 1");
    
}



include '../plugins/toast/toast.php';

switch ($n) {

    case 'added':
        echo $added;
        require_once '../v/ac/jQuestionnaire1.php';
        break;

    case 'updated':
        echo $updated;
        require_once '../v/ac/jQuestionnaire1.php';
        break;

    case 'deleted':
        echo $deleted;
        require_once '../v/ac/jQuestionnaire1.php';
        break;

    case 'sizeError':
        echo $sizeError;
        require_once '../v/ac/jQuestionnaire1.php';
        break;

    default:
        require_once '../v/ac/jQuestionnaire1.php';
        break;

}

//$_riskPartner = mysqli_query(
//    $master, "
//    SELECT * FROM user
//    WHERE subscriberId = '" . $_SESSION["subscriberId"] ."'
//    AND userAdmin = 3
//");

//$riskPartner = $_riskPartner -> fetch_object();
