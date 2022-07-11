<?php

// connection

include '../connection.php';
include '../connection2.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM c1
    WHERE c1Id = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$c1Id = $client -> c1Id;
$procesado = $client -> c1Procesado;

// select

$_c = mysqli_query($master, "
    SELECT * FROM c2
    WHERE c1Id = '" . $c1Id  . "'
");


$sd = "localhost";
$ud = "sagracom";
$pd = "Sagra2019";
$dd = 'sagracom_d1';

$mastera = new mysqli($sd, $ud, $pd, $dd);

//categoria 1
$_cp = mysqli_query($mastera, "
    SELECT * FROM c1
    WHERE status > 0  AND c1Id = '" . $_GET["cid"] . "'
");
$cp = $_cp -> fetch_object();

$i1 = 0;
$nada1 = 0; 
$contador1 = 0;
$acumulador1 = 0;

while($i1 < 30){
    $i1++;
$a1 = 'a' . $i1;   
if($cp -> $a1 == null){
     $nada1++;
 }
 else{
 $contador1++;
 $acumulador1 = $acumulador1 + $cp -> $a1; 
 }
$resultado1 = $acumulador1 / $contador1;
} 

//categoria 2
$_cp2 = mysqli_query($mastera, "
    SELECT * FROM c2
    WHERE status > 0  AND c2Id = '" . $_GET["cid"] . "'
");
$cp2 = $_cp2 -> fetch_object();

$i2 = 0;
$nada2 = 0; 
$contador2 = 0;
$acumulador2 = 0;

while($i2 < 30){
    $i2++;
$a2 = 'a' . $i2;   
if($cp2 -> $a2 == null){
     $nada2++;
 }
 else{
 $contador2++;
 $acumulador2 = $acumulador2 + $cp2 -> $a2; 
 }
$resultado2 = $acumulador2 / $contador2;
}

//categoria 3
$_cp3 = mysqli_query($mastera, "
    SELECT * FROM c3
    WHERE status > 0  AND c3Id = '" . $_GET["cid"] . "'
");
$cp3 = $_cp3 -> fetch_object();
$i3 = 0;
$nada3 = 0; 
$contador3 = 0;
$acumulador3 = 0;

while($i3 < 30){
    $i3++;
$a3 = 'a' . $i3;   
if($cp3 -> $a3 == null){
     $nada3++;
 }
 else{
 $contador3++;
 $acumulador3 = $acumulador3 + $cp3 -> $a3; 
 }
$resultado3 = $acumulador3 / $contador3;
} 

//categoria 4
$_cp4 = mysqli_query($mastera, "
    SELECT * FROM c4
    WHERE status > 0  AND c4Id = '" . $_GET["cid"] . "'
");
$cp4 = $_cp4 -> fetch_object();
$i4 = 0;
$nada4 = 0; 
$contador4 = 0;
$acumulador4 = 0;

while($i4 < 30){
    $i4++;
$a4 = 'a' . $i4;   
if($cp4 -> $a4 == null){
     $nada4++;
 }
 else{
 $contador4++;
 $acumulador4 = $acumulador4 + $cp4 -> $a4; 
 }
$resultado4 = $acumulador4 / $contador4;
} 
//categoria 5
$_cp5 = mysqli_query($mastera, "
    SELECT * FROM c5
    WHERE status > 0  AND c5Id = '" . $_GET["cid"] . "'
");
$cp5 = $_cp5 -> fetch_object();
$i5 = 0;
$nada5 = 0; 
$contador5 = 0;
$acumulador5 = 0;

while($i5 < 30){
    $i5++;
$a5 = 'a' . $i5;   
if($cp5 -> $a5 == null){
     $nada5++;
 }
 else{
 $contador5++;
 $acumulador5 = $acumulador5 + $cp5 -> $a5; 
 }
$resultado5 = $acumulador5 / $contador5;
} 
//categoria 6
$_cp6 = mysqli_query($mastera, "
    SELECT * FROM c6
    WHERE status > 0  AND c6Id = '" . $_GET["cid"] . "'
");
$cp6 = $_cp6 -> fetch_object();
$i6 = 0;
$nada6 = 0; 
$contador6 = 0;
$acumulador6 = 0;

while($i6 < 30){
    $i6++;
$a6 = 'a' . $i6;   
if($cp6 -> $a6 == null){
     $nada6++;
 }
 else{
 $contador6++;
 $acumulador6 = $acumulador6 + $cp6 -> $a6; 
 }
$resultado6 = $acumulador6 / $contador6;
} 
//categoria 7
$_cp7 = mysqli_query($mastera, "
    SELECT * FROM c7
    WHERE status > 0  AND c7Id = '" . $_GET["cid"] . "'
");
$cp7 = $_cp7 -> fetch_object();
$i7 = 0;
$nada7 = 0; 
$contador7 = 0;
$acumulador7 = 0;

while($i7 < 30){
    $i7++;
$a7 = 'a' . $i7;   
if($cp7 -> $a7 == null){
     $nada7++;
 }
 else{
 $contador7++;
 $acumulador7 = $acumulador7 + $cp7 -> $a7; 
 }
$resultado7 = $acumulador7 / $contador7;
} 
//categoria 8
$_cp8 = mysqli_query($mastera, "
    SELECT * FROM c8
    WHERE status > 0  AND c8Id = '" . $_GET["cid"] . "'
");
$cp8 = $_cp8 -> fetch_object();
$i8 = 0;
$nada8 = 0; 
$contador8 = 0;
$acumulador8 = 0;

while($i8 < 30){
    $i8++;
$a8 = 'a' . $i8;   
if($cp8 -> $a8 == null){
     $nada8++;
 }
 else{
 $contador8++;
 $acumulador8 = $acumulador8 + $cp8 -> $a8; 
 }
$resultado8 = $acumulador8 / $contador8;
}
//categoria 9
$_cp9 = mysqli_query($mastera, "
    SELECT * FROM c9
    WHERE status > 0  AND c9Id = '" . $_GET["cid"] . "'
");
$cp9 = $_cp9 -> fetch_object();
$i9 = 0;
$nada9 = 0; 
$contador9 = 0;
$acumulador9 = 0;

while($i9 < 30){
    $i9++;
$a9 = 'a' . $i9;   
if($cp9 -> $a9 == null){
     $nada9++;
 }
 else{
 $contador9++;
 $acumulador9 = $acumulador9 + $cp9 -> $a9; 
 }
$resultado9 = $acumulador9 / $contador9;
} 
//categoria 10
$_cp10 = mysqli_query($mastera, "
    SELECT * FROM c10
    WHERE status > 0  AND c10Id = '" . $_GET["cid"] . "'
");
$cp10 = $_cp10 -> fetch_object();
$i10 = 0;
$nada10 = 0; 
$contador10 = 0;
$acumulador10 = 0;

while($i10 < 30){
    $i10++;
$a10 = 'a' . $i10;   
if($cp10 -> $a10 == null){
     $nada10++;
 }
 else{
 $contador10++;
 $acumulador10 = $acumulador10 + $cp10 -> $a10; 
 }
$resultado10 = $acumulador10 / $contador10;
} 

$_cata1 = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE categoriasId = 1
"); 
$cname1 = $_cata1 -> fetch_object();
$cname1d = $cname1 -> categoriasName;

$_cata2 = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE categoriasId = 2
"); 
$cname2 = $_cata2 -> fetch_object();
$cname2d = $cname2 -> categoriasName;

$_cata3 = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE categoriasId = 3
"); 
$cname3 = $_cata3 -> fetch_object();
$cname3d = $cname3 -> categoriasName;

$_cata4 = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE categoriasId = 4
"); 
$cname4 = $_cata4 -> fetch_object();
$cname4d = $cname4 -> categoriasName;

$_cata5 = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE categoriasId = 5
"); 
$cname5 = $_cata5 -> fetch_object();
$cname5d = $cname5 -> categoriasName;


$_cata6 = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE categoriasId = 6
"); 
$cname6 = $_cata6 -> fetch_object();
$cname6d = $cname6 -> categoriasName;


$_cata7 = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE categoriasId = 7
"); 
$cname7 = $_cata7 -> fetch_object();
$cname7d = $cname7 -> categoriasName;



$_cata8 = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE categoriasId = 8
"); 
$cname8 = $_cata8 -> fetch_object();
$cname8d = $cname8 -> categoriasName;


$_cata9 = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE categoriasId = 9
"); 
$cname9 = $_cata9 -> fetch_object();
$cname9d = $cname9 -> categoriasName;


$_cata10 = mysqli_query($master, "
    SELECT * FROM categorias
    WHERE categoriasId = 10
"); 
$cname10 = $_cata10 -> fetch_object();
$cname10d = $cname10 -> categoriasName;



// view

require_once '../v/dformulario/jUpdate.php';