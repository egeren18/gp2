<?php

// connection

include '../connection.php';

// module

$module = 'pac';
$action = 'update';

// var

$preguntaName = $_POST['preguntaName'];
//GET
$tsacId = $_GET["tsacId"];
$mId = $_GET["mId"];
$cuestionarioId = 1;
// POST
$cacId = $_POST["cacId"];
$t = $_POST["p"];
$pacName = $_POST["pacName"];
$p = $_POS["pacText"];
$d = date('d-m-y / g:i a');


// update

 $_cma = mysqli_query($tipomc, "
            SELECT * FROM tipo_de_cuestionario_$tsacId
        ");  

while($m = $_cma -> fetch_object()){
    $vcontador++;
    $jAccess = 0;
    
  $update  = $tipod -> prepare ("
            UPDATE cuestionario1_$vcontador
            SET
            pacName = ?,
            pap = ? 
            WHERE
            mId = ?
        ");

        $update  -> bind_param (
            "ssi",
            $pacName, $t, $mId
        );

        $update  -> execute();

}



// trace
$action ="Edit";
$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["cid"]);

$trace -> execute();





// view

echo "<script> window.location='../c/{$module}.php?m=general&n=updated&tsacId=1'</script>";