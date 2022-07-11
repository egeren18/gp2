<?php

// connection

include '../connection.php';

// module

$module = 'gedocumento';
$action = 'add';

//variables
$gedocumentoName = $_POST["gedocumentoName"];
$gedocumentoText = $_POST["gedocumentoText"];


    // insert
    $insert = $manuales -> prepare ("
        INSERT INTO gedocumento
        (gedocumentoName, gedocumentoText)
        VALUES
        (?,?)
    ");

    // configure parameters
    $insert -> bind_param (
        "ss",
        $gedocumentoName, $gedocumentoText
    );

    // execute
    $insert -> execute();
    $id = mysqli_insert_id($manuales);

     foreach ($_FILES["archivo2"]['tmp_name'] as $archivo2 => $tmp_name) {
        if ($_FILES["archivo2"]["error"] > 0) {
            echo "";
        } else {

            if (1 == 1) {

                $ruta2 = '../gedocumento/' . $id . '/';
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

            $directorio2 = '../gedocumento/' . $id . '/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
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




  echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";