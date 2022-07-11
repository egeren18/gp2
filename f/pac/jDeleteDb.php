<?php
$module = 'preguntaD';
$action = 'delete';

// connection

include '../connection.php';

// var

$tsacId = $_GET["tsacId"];
$mId = $_GET["mId"];
$s = 0;




 $_cma = mysqli_query($tipomc, "
            SELECT * FROM tipo_de_cuestionario_$tsacId
        ");   
$vcontador = 0;
while($m = $_cma -> fetch_object()){
    $vcontador++;
    
    $update = $tipod -> prepare ("
    UPDATE cuestionario1_$vcontador
    SET
    pacStatus = ?
    WHERE
    mId = ?
");	

$update -> bind_param (
    "ii",
    $s ,$mId
);
    
    $update -> execute();

}


// trace

$userId = $_SESSION["userId"];
$module = 'preguntaD';
$action = 'Delete';
$itemId = $clientId;

$trace = $master -> prepare ("
	INSERT INTO trace
	(userId, module, action, itemId)
	VALUES
	(?,?,?,?)
	");

$trace -> bind_param (
	"issi",
	$userId, $module, $action, $itemId
);

$trace -> execute();

// view

echo "<script> window.location='../c/pac.php?m=general&n=deleted&tsacId={$tsacId}'</script>";
