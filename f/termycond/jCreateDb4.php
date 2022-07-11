<?php

// connection

include '../connection.php';
include '../connection2.php';

// module

$module = 'termycond';
$action = 'add';
//declarar variables que se van a utilizar 
// GET
$termycondId = $_GET["termycondId"];
$serviceId = $_GET["serviceId"];
$clientId = $_GET["clientId"];
$ii = 1;

// POST
$amount = $_POST['amount'];
$et = $_POST['et'];
$currencyId = $_POST['currencyId'];
$desicion2 = $_POST['desicion2'];
$horasc = $_POST['horasc'];

$f1 = $_POST['f1'];
$f2 = $_POST['f2'];




//variables logica ac
$important = isset($_POST['important']) == true ? 1 : NULL;
$statusId = isset($_POST['completed']) == true ? 2 : 1;


$update = $connection-> prepare ("
    UPDATE termycond
    SET
    statusId = ?,
    important = ?
    WHERE
    termycondId	 = ? AND mId = 1
");	

$update -> bind_param    (
    "iii",
   $statusId, $important, $termycondId 
);

$update -> execute();

//enviar a base de datos
    $insert = $master -> prepare ("
        INSERT INTO cartypreprojecto
        (clientId, serviceId, amount, currencyId, termycondId, desicion2, horasc)
        VALUES
        (?,?,?,?,?,?,?)
    ");
//enviar con parametros las variables declaradas
    $insert -> bind_param (
        "iiiiiii",
        $clientId, $serviceId, $amount, $currencyId, $termycondId, $desicion2, $horasc
    );


    $insert -> execute();
    
    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();
    
    
    //PRIMERA ARCHIVO
    $id = $termycondId;
    foreach ($_FILES["archivotyc1"]['tmp_name'] as $archivo2 => $tmp_name) {
        if ($_FILES["archivotyc1"]["error"] > 0) {
            echo "";
        } else {

            if (1 == 1) {

                $ruta2 = '../termycond/' . $id . '/';       //AQUI VA LA CARPETA A LA QUE ESTAMOS DIRIGIENDO EL ARCHIVO
                $archivo2 = $ruta2 . $_FILES["archivotyc1"]["name"];
                if (!file_exists($ruta2)) {
                    mkdir($ruta2);
                }
                if (!file_exists($archivo2)) {
                    $resultado2 = @move_uploaded_file($_FILES["archivotyc1"]["tmp_name"], $archivo2);
                }if ($resultado2) {
                    
                } else {
                    echo "no guardo ";
                }
            } else {
                echo "Archivo no permitido o exede el tamaño";
            }
        }
    }
    foreach ($_FILES["archivotyc1"]['tmp_name'] as $key => $tmp_name) {
        //Validamos que el archivo exista
        if ($_FILES["archivotyc1"]["name"][$key]) {
            $filename2 = $_FILES["archivotyc1"]["name"][$key]; //Obtenemos el nombre original del archivo
            $source2 = $_FILES["archivotyc1"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo

            $directorio2 = '../termycond/' . $id . '/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
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
    
    //FIN DE ARCHIVO IMAGEN
    
    // SEGUNDA ARCHIVO
    
    foreach ($_FILES["archivotyc2"]['tmp_name'] as $archivo2 => $tmp_name) {
        if ($_FILES["archivotyc2"]["error"] > 0) {
            echo "";
        } else {

            if (1 == 1) {

                $ruta2 = '../termycond2/' . $id . '/';  //AQUI VA LA CARPETA A LA QUE ESTAMOS DIRIGIENDO EL ARCHIVO
                $archivo2 = $ruta2 . $_FILES["archivotyc2"]["name"];
                if (!file_exists($ruta2)) {
                    mkdir($ruta2);
                }
                if (!file_exists($archivo2)) {
                    $resultado2 = @move_uploaded_file($_FILES["archivotyc2"]["tmp_name"], $archivo2);
                }if ($resultado2) {
                    
                } else {
                    echo "no guardo ";
                }
            } else {
                echo "Archivo no permitido o exede el tamaño";
            }
        }
    }
    foreach ($_FILES["archivotyc2"]['tmp_name'] as $key => $tmp_name) {
        //Validamos que el archivo exista
        if ($_FILES["archivotyc2"]["name"][$key]) {
            $filename2 = $_FILES["archivotyc2"]["name"][$key]; //Obtenemos el nombre original del archivo
            $source2 = $_FILES["archivotyc2"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo

            $directorio2 = '../termycond2/' . $id . '/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
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
    
    //FIN DE SEGUNDO ARCHIVO
    
    //SE DECLARA VARIABLE PARA HACER ACTUALIZACION
    $cStatus = 1;
    
    // update

$update = $master -> prepare ("
    UPDATE termycond
    SET
    cStatus = ?,
    currencyId = ?,
    efacturacionText = ?,
    f1 = ?,
    f2 = ?
    WHERE
    termycondId = ?
");	

$update -> bind_param (
    "iisssi",
    $cStatus, $currencyId, $et, $f1, $f2, $termycondId
);

$update -> execute();



    // view

    echo "<script> window.location='../c/{$module}.php?m=list&n=added&cid={$termycondId}&iid=1&clientId={$clientId}&serviceId={$serviceId}'</script>";


    
