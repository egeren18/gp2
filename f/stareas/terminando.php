<?php

    $s = 4;

    $update = $master -> prepare ("
        UPDATE stareasm
        SET
        comentarios = ?,
        comentarios2 = ?,
        treal = ?,
        stareasStatus = ?,
        important = ?
        WHERE
        stareasmId = ?
    ");

    // configure parameters
    $update -> bind_param (
        "ssiiii",
        $comentarios, $comentarios2, $treal, $s, $important , $_GET["id"]
    );
    
    // execute
    
    $update -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=matriz&n=updated&cid={$si}'</script>";