<?php

// connect database
include '../connection.php';

// set variables
$rid = $_GET['rid'];
$c = $_GET['cn'];
$sr = $_POST['sRubroId'];
$pn = $_POST['pruebaName'];

    $insert = $master -> prepare ("
        INSERT INTO prueba
        (sRubroId, pruebaName, rubroId, clientName)
        VALUES
        (?,?,?,?)
    ");

    $insert -> bind_param (
        "isis",
       $sr, $pn, $rid, $c
    );

    $insert -> execute();
    
    $id = $master -> insert_id;


	// view
	echo "
		<body>
			<script> window.location='../c/prueba.php?m=list&n=added'</script>
		</body>
	";