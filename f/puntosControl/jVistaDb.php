<?php

// connect database
include '../connection.php';
// set id
$c = $_GET["c"];
$debilidad = mysqli_query(
    $connection,
    "SELECT * FROM debilidad
    WHERE proyectoId = '" . $c . "'
    AND  rubroId = 1
");

 
// Module 1
$module = 1;
$jList1  = $_POST["l1"] == '' ? 0 : 1 ;
$jList2  = $_POST["l2"] == '' ? 0 : 1 ;
$jList3  = $_POST["l3"] == '' ? 0 : 1 ;
$jList4  = $_POST["l4"] == '' ? 0 : 1 ;
$jList5  = $_POST["l5"] == '' ? 0 : 1 ;
$jList6  = $_POST["l6"] == '' ? 0 : 1 ;
$jList7  = $_POST["l7"] == '' ? 0 : 1 ;
$jList8  = $_POST["l8"] == '' ? 0 : 1 ;
$jList9  = $_POST["l9"] == '' ? 0 : 1 ;
$jList10 = $_POST["l10"] == '' ? 0 : 1 ;
$jList11 = $_POST["l11"] == '' ? 0 : 1 ;
$jList12 = $_POST["l12"] == '' ? 0 : 1 ;
$jList13 = $_POST["l13"] == '' ? 0 : 1 ;
$jList14 = $_POST["l14"] == '' ? 0 : 1 ;
$jList15 = $_POST["l15"] == '' ? 0 : 1 ;
$jList16 = $_POST["l16"] == '' ? 0 : 1 ;
$jList17 = $_POST["l17"] == '' ? 0 : 1 ;
$jList18 = $_POST["l18"] == '' ? 0 : 1 ;
$jList19 = $_POST["l19"] == '' ? 0 : 1 ;
$jList20 = $_POST["l20"] == '' ? 0 : 1 ;
 
 $l1 =1;
 $l2 =2;
 $l3 =3; 
 $l4 =4; 
 $l5 =5;
 $l6 =6;
 $l7 =7;
 $l8 =8;
 $l9 =9;
 $l10 =10;
 $l11 =11;
 $l12 =12;
 $l13 =13;
 $l14 =14;
 $l15 =15;
 $l16 =16;
 $l17 =17;
 $l18 =18;
 $l19 =19;
 $l20 =20;
    
    if($jList1 == 1){
        $statusd = 1;
        $update = $connection -> prepare ("
	    UPDATE debilidad 
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l1 
            );
        // execute
        $update -> execute();
    }
    if($jList1 == 0){
        $statusd = 0;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l1 
            );
        // execute
        $update -> execute();
    }
    
    
    if($jList2 == 1){
        $statusd = 1;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l2
            );
        // execute
        $update -> execute();
    }
    if($jList2 == 0){
        $statusd = 0;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l2
            );
        // execute
        $update -> execute();
    }
    
    if($jList3 == 1){
        $statusd = 1;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l3
            );
        // execute
        $update -> execute();
    }
    if($jList3 == 0){
        $statusd = 0;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l3
            );
        // execute
        $update -> execute();
    }
    
    if($jList4 == 1){
        $statusd = 1;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l4
            );
        // execute
        $update -> execute();
    }
    if($jList4 == 0){
        $statusd = 0;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l4
            );
        // execute
        $update -> execute();
    }
    
    if($jList5 == 1){
        $statusd = 1;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l5
            );
        // execute
        $update -> execute();
    }
    if($jList5 == 0){
        $statusd = 0;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l5
            );
        // execute
        $update -> execute();
    }
    
    if($jList6 == 1){
        $statusd = 1;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l6
            );
        // execute
        $update -> execute();
    }
    if($jList6 == 0){
        $statusd = 0;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l6
            );
        // execute
        $update -> execute();
    }
    
    if($jList7 == 1){
        $statusd = 1;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l7
            );
        // execute
        $update -> execute();
    }
    if($jList7 == 0){
        $statusd = 0;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l7
            );
        // execute
        $update -> execute();
    }
    
    if($jList8 == 1){
        $statusd = 1;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l8
            );
        // execute
        $update -> execute();
    }
    if($jList8 == 0){
        $statusd = 0;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l8
            );
        // execute
        $update -> execute();
    }
    
    if($jList9 == 1){
        $statusd = 1;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l9
            );
        // execute
        $update -> execute();
    }
    if($jList9 == 0){
        $statusd = 0;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l9
            );
        // execute
        $update -> execute();
    }
    
    if($jList10 == 1){
        $statusd = 1;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l10
            );
        // execute
        $update -> execute();
    }
    if($jList10 == 0){
        $statusd = 0;
        $update = $connection -> prepare ("
	    UPDATE debilidad
	    SET
	    debilidadStatus = ?
	    WHERE
	    debilidadId = ?
	");
        
        // configure parameters
        $update -> bind_param (
            "ii",
            $statusd , $l10
            );
        // execute
        $update -> execute();
    }
    
 
    // view
    $URL="../c/proyecto.php?m=update&n=updated&c=". $c ;
    echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
    echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
    
    
    
















