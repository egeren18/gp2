<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables
 */

$acId = $_GET["aid"];
$userId = $_POST["userId"];
$designatedId = $_POST["designatedId"];
/* conexion a la base de datos y selecionar la tabla acteam 
 */
 $_acteam = mysqli_query($connection, "SELECT * FROM acteam WHERE acId = '" . $acId  . "' AND designatedId = 4 ");
 $acteam = $_acteam -> fetch_object();
 
 $acteamDb = $acteam -> designatedId;
 
 $_acteam2 = mysqli_query($connection, "SELECT * FROM acteam WHERE acId = '" . $acId  . "' AND designatedId = 1 ");
 $acteam2 = $_acteam2 -> fetch_object();
 
 $acteam2Db = $acteam2 -> designatedId;
if ($designatedId == 0) {
    echo "<script> window.location='../c/ac.php?m=team&aid={$acId}&n=ee'</script>";
    
}else{


if (isset($acteamDb) and isset($acteam2Db) ) {
$insert = $connection -> prepare("INSERT INTO acteam (acId, userId, designatedId) VALUES (?,?,?)");
$insert -> bind_param("iii", $acId, $userId, $designatedId);
$insert -> execute();
/*
 * Variables
 */

$userId = $_SESSION["userId"];
$module = 'AC';
$action = 'Create AC Team';
$itemId = $acId;

/*
 * Realiza un registro en la base de datos.
 */

$trace = $connection -> prepare ("INSERT INTO trace (userId, module, action, itemId) VALUES (?,?,?,?)");
$trace -> bind_param ("issi", $userId, $module, $action, $itemId);
$trace -> execute();

echo "<script> window.location='../c/ac.php?m=team&aid={$acId}&n=added'</script>";   
    
    
    
    
}else {
 if ($designatedId == 4){
$insert = $connection -> prepare("INSERT INTO acteam (acId, userId, designatedId) VALUES (?,?,?)");
$insert -> bind_param("iii", $acId, $userId, $designatedId);
$insert -> execute();
/*
 * Variables
 */

$userId = $_SESSION["userId"];
$module = 'AC';
$action = 'Create AC Team';
$itemId = $acId;

/*
 * Realiza un registro en la base de datos.
 */

$trace = $connection -> prepare ("INSERT INTO trace (userId, module, action, itemId) VALUES (?,?,?,?)");
$trace -> bind_param ("issi", $userId, $module, $action, $itemId);
$trace -> execute();

echo "<script> window.location='../c/ac.php?m=team&aid={$acId}&n=added'</script>";    
}
elseif ($designatedId == 1 ) {
$insert = $connection -> prepare("INSERT INTO acteam (acId, userId, designatedId) VALUES (?,?,?)");
$insert -> bind_param("iii", $acId, $userId, $designatedId);
$insert -> execute();
/*
 * Variables
 */

$userId = $_SESSION["userId"];
$module = 'AC';
$action = 'Create AC Team';
$itemId = $acId;

/*
 * Realiza un registro en la base de datos.
 */

$trace = $connection -> prepare ("INSERT INTO trace (userId, module, action, itemId) VALUES (?,?,?,?)");
$trace -> bind_param ("issi", $userId, $module, $action, $itemId);
$trace -> execute();

echo "<script> window.location='../c/ac.php?m=team&aid={$acId}&n=added'</script>";
}else{

echo "<script> window.location='../c/ac.php?m=team&aid={$acId}&n=no'</script>";

}

    
}


}












