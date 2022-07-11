<?php
// connection
$sS = "localhost";
$uS = "sagracom";
$pS = "Sagra2507.";
$dS = "sagracom_2" ;

$connection = new mysqli($sS, $uS, $pS, $dS);


// select
$documento = 2;
$documentodate = date('d-m-y / g:i a');

$update = $connection -> prepare ("
    UPDATE clientprev
    SET
    documento = ?,
    datedocumento1 = ?
    WHERE
    clientId = ?
");	

$update -> bind_param (
    "isi",
    $documento, $documentodate, $_GET["cid"]
);

$update -> execute();




$para1      = 'egeren18@gmail.com';
$titulo1    = 'solicitud de requerimiento iniciales ';
$mensaje1   = '
<html>
<head>
  <title>Requerimientos Iniciales</title>
</head>
<body>
  <img src="https://sagragp.com/wp-content/uploads/2022/02/1.jpg">
  <p>Para continuar con el proceso de preparacion de propuesta de servicio es necesario tener la siguiente<br>
  informacion, la cual debera adjuntar en el siguiente link
  <a href="https://sagra.com.ve/ri/formulario.php?cid=' . $_GET['cid'] . '">Pulsar Aqui</<a></p>
</body>
</html>
';
// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Cabeceras adicionales
$cabeceras .= 'To: ' . "\r\n";
$cabeceras .= 'From: Sagra <administracion@sagra.com.ve>' . "\r\n";

mail($para1, $titulo1, $mensaje1, $cabeceras);
echo "<script> window.location='javascript: history.go(-1)'</script>";





