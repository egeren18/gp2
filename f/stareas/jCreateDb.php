<?php

// connection

include '../connection.php';

// module

$module = 'stareas';
$action = 'add';

$u = $_GET["u"];
// set variables stareas
$stareasName = $_POST['stareasName'];
$ptareaId = $_POST['ptareaId'];
$testimado = $_POST['testimado'];
$stareasText = $_POST['stareasText'];
$userId = $_POST['userId'];
$departmentId = $_POST['departmentId'];
$asignar =  $_POST["asignar"] == true ? 1 : 0;
$d = date('d-m-y / g:i a');
// date
    // insert
    $insert = $master -> prepare ("
        INSERT INTO stareas
        (stareasName, stareasText, testimado, ptareaId, userId, departmentId, date )
        VALUES
        (?,?,?,?,?,?,?)
    ");

    // configure parameters
    $insert -> bind_param (
        "ssiiiis",
        $stareasName, $stareasText, $testimado, $ptareaId, $userId, $departmentId, $d
    );

    // execute
    $insert -> execute();
    $id = $master -> insert_id;
     foreach ($_FILES["archivo2"]['tmp_name'] as $archivo2 => $tmp_name) {
        if ($_FILES["archivo2"]["error"] > 0) {
            echo "";
        } else {

            if (1 == 1) {

                $ruta2 = '../stareas/' . $id . '/';
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

            $directorio2 = '../stareas/' . $id . '/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
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
    // trace

    $trace = $master -> prepare ("
        INSERT INTO trace
        (userId, module, action, itemId)
        VALUES
        (?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();


    // view
    if($asignar == 1){
        echo "<script> window.location='../c/{$module}.php?m=asignar&n=added&cid={$id}'</script>";
    }
    else {
        
  echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";      
    }
    
  








