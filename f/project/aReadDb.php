<?php

// connection

include '../connection.php';
include '../connection2.php';

// module


$c = $_GET["c"];
$serviceId = $_GET["serviceId"];
$amId = $_GET["amId"];
$md = $_GET["md"];
$a = $_GET["a"];
$vv=$c.'_'.$serviceId.'_'.$md;

// var
$v = $_POST['group1'];

if($a == 4){
$link = $_POST["link"];
$codCta = $_POST["codCta"];
$nCta = $_POST["nCta"];
$debe = $_POST["debe"];  
$haber = $_POST["haber"];
$text = $_POST["text"];
$rubroId = $_POST["rubroId"];
    $insert = $connection -> prepare ("
        INSERT INTO oc
        (a,projectId, amId, rubroId, link, codCta, nCta, debe, haber, text)
        VALUES
        (?,?,?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiiisiis",
      $a, $c, $amId, $rubroId, $link, $codCta, $nCta, $debe, $haber, $text
    );

    $insert -> execute();

  echo "<script> window.location='../c/project.php?m=edit&p=p&c={$c}&amId={$amId}&serviceId={$serviceId}&md={$md}'</script>";   
}else{
$_mp = mysqli_query($master, "
    SELECT * FROM puntoscontrol
    WHERE puntosControlId= '" . $v . "'
");

$mp = $_mp -> fetch_object();
    
$name = $mp -> puntosControlName;
$rubroId = $mp -> rubroId;
$tt = $mp -> puntosControlName;
$d1 = $mp -> d1;
$d2 = $mp -> d2;
$d2 = $mp -> d2;


    $insert = $connection -> prepare ("
        INSERT INTO oc
        (a,projectId, amId, rubroId, titulo, name, d1, d2)
        VALUES
        (?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiissss",
      $a, $c, $amId, $rubroId, $tt, $name, $d1, $d2
    );

    $insert -> execute();


echo "<script> window.location='../c/project.php?m=edit&p=p&c={$c}&amId={$amId}&serviceId={$serviceId}&md={$md}'</script>";  }