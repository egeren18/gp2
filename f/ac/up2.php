<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables.
 */


$aid = $_GET['a'];
$qid = $_GET['q'];


$amount = $_POST['amount'];
$currencyId = $_POST['currencyId'];
$desicion2 = $_POST['desicion2'];

echo $aid  ;
echo $amount;
echo $currencyId ;
echo $desicion2;

$ac = $connection -> prepare ("
INSERT INTO tracing
(acId, term, amount, currencyId)
VALUES
(?,?,?,?)
");
$ac -> bind_param (
"iisi",
$aid, $desicion2, $amount, $currencyId 
);
$ac -> execute();


$id = $aid ;




foreach ($_FILES["archivoAc1"]['tmp_name'] as $archivoAc1 => $tmp_name) {
if ($_FILES["archivoAc1"]["error"] > 0) {
    echo "";
} else {

    if (1 == 1) {

        $ruta = '../documentoAc1/' . $id . '/';
        $archivoAc1 = $ruta . $_FILES["archivoAc1"]["name"];
        if (!file_exists($ruta)) {
            mkdir($ruta);
        }
        if (!file_exists($archivoAc1)) {
            $resultado = @move_uploaded_file($_FILES["archivoAc1"]["tmp_name"], $archivoAc1);
        }if ($resultado) {
            
        } else {
            echo "no guardo ";
        }
    } else {
        echo "Archivo no permitido o exede el tamaño";
    }
}
}
foreach ($_FILES["archivoAc1"]['tmp_name'] as $key => $tmp_name) {
//Validamos que el archivo exista
if ($_FILES["archivoAc1"]["name"][$key]) {
    $filename = $_FILES["archivoAc1"]["name"][$key]; //Obtenemos el nombre original del archivo
    $source = $_FILES["archivoAc1"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo

    $directorio = '../documentoAc1/' . $id . '/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
    //Validamos si la ruta de destino existe, en caso de no existir la creamos
    if (!file_exists($directorio)) {
        mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");
    }

    $dir = opendir($directorio); //Abrimos el directorio de destino
    $target_path = $directorio . '/' . $filename; //Indicamos la ruta de destino, así como el nombre del archivo
    //Movemos y validamos que el archivo se haya cargado correctamente
    //El primer campo es el origen y el segundo el destino
    if (move_uploaded_file($source, $target_path)) {
        echo "";
    } else {
        echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
    }
    closedir($dir); //Cerramos el directorio de destino
}
}



//Presupuesto de proyecto 

foreach ($_FILES["archivoAc2"]['tmp_name'] as $archivoAc2 => $tmp_name) {
    if ($_FILES["archivoAc2"]["error"] > 0) {
        echo "";
    } else {
    
        if (1 == 1) {
    
            $ruta = '../documentoAc2/' . $id . '/';
            $archivoAc2 = $ruta . $_FILES["archivoAc2"]["name"];
            if (!file_exists($ruta)) {
                mkdir($ruta);
            }
            if (!file_exists($archivoAc1)) {
                $resultado = @move_uploaded_file($_FILES["archivoAc2"]["tmp_name"], $archivoAc2);
            }if ($resultado) {
                
            } else {
                echo "no guardo ";
            }
        } else {
            echo "Archivo no permitido o exede el tamaño";
        }
    }
    }
    foreach ($_FILES["archivoAc2"]['tmp_name'] as $key => $tmp_name) {
    //Validamos que el archivo exista
    if ($_FILES["archivoAc2"]["name"][$key]) {
        $filename = $_FILES["archivoAc2"]["name"][$key]; //Obtenemos el nombre original del archivo
        $source = $_FILES["archivoAc2"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
    
        $directorio = '../documentoAc2/' . $id . '/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
        //Validamos si la ruta de destino existe, en caso de no existir la creamos
        if (!file_exists($directorio)) {
            mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");
        }
    
        $dir = opendir($directorio); //Abrimos el directorio de destino
        $target_path = $directorio . '/' . $filename; //Indicamos la ruta de destino, así como el nombre del archivo
        //Movemos y validamos que el archivo se haya cargado correctamente
        //El primer campo es el origen y el segundo el destino
        if (move_uploaded_file($source, $target_path)) {
            echo "";
        } else {
            echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
        }
        closedir($dir); //Cerramos el directorio de destino
    }
    }
    
echo "<script>window.location='../c/ac.php?m=index&n=updated'</script>";    


