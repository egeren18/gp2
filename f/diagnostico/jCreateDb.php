<?php

// connection

include '../connection.php';

// module

$module = 'diagnostico';
$action = 'add';

// var
$diagnosticoName = filter_var($_POST['diagnosticoName'], FILTER_SANITIZE_STRING);
$diagnosticoText = filter_var($_POST['diagnosticoText'], FILTER_SANITIZE_STRING);
$diagnosticoText2 = filter_var($_POST['diagnosticoText2'], FILTER_SANITIZE_STRING);

// verify

$_diagnostico = mysqli_query($master, "
    SELECT * FROM diagnostico
    WHERE diagnosticoName = '" . $diagnosticoName . "'
    AND diagnosticoStatus = 1
");

$diagnostico = $_diagnostico -> fetch_object();

$diagnosticoDb = $diagnostico -> diagnosticoName;

if (strcasecmp($diagnosticoName, $diagnosticoDb) !== 0) {

    $insert = $master -> prepare ("
        INSERT INTO diagnostico
        (diagnosticoName, diagnosticoText, diagnosticoText2)
        VALUES
        (?,?,?)
    ");

    $insert -> bind_param (
        "sss",
        $diagnosticoName, $diagnosticoText, $diagnosticoText2
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
    
    
    
         foreach ($_FILES["archivo2"]['tmp_name'] as $archivo2 => $tmp_name) {
        if ($_FILES["archivo2"]["error"] > 0) {
            echo "";
        } else {

            if (1 == 1) {

                $ruta2 = '../diagnostico/' . $id . '/';
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
                echo "Archivo no permitido o exede el tama??o";
            }
        }
    }
    foreach ($_FILES["archivo2"]['tmp_name'] as $key => $tmp_name) {
        //Validamos que el archivo exista
        if ($_FILES["archivo2"]["name"][$key]) {
            $filename2 = $_FILES["archivo2"]["name"][$key]; //Obtenemos el nombre original del archivo
            $source2 = $_FILES["archivo2"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo

            $directorio2 = '../diagnostico/' . $id . '/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
            //Validamos si la ruta de destino existe, en caso de no existir la creamos
            if (!file_exists($directorio2)) {
                mkdir($directorio2, 0777) or die("No se puede crear el directorio de extracci&oacute;n");
            }

            $dir2 = opendir($directorio2); //Abrimos el directorio de destino
            $target_path = $directorio2 . '/' . $filename2; //Indicamos la ruta de destino, as?? como el nombre del archivo
            //Movemos y validamos que el archivo se haya cargado correctamente
            //El primer campo es el origen y el segundo el destino
            if (move_uploaded_file($source2, $target_path)) {
                echo "";
            } else {
                echo "Ha ocurrido un error, por favor int??ntelo de nuevo.<br>";
            }
            closedir($dir2); //Cerramos el directorio de destino
        }
    }

    // view

    echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";
    
}
else {

    echo "<script> window.location='../c/{$module}.php?m=index&n=duplicated'</script>";

}
