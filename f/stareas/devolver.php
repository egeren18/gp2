<?php

    $s = 3;

    $update = $master -> prepare ("
        UPDATE stareasm
        SET
        comentarios2 = ?,
        stareasStatus = ?,
        important = ?
        WHERE
        stareasmId = ?
    ");

    // configure parameters
    $update -> bind_param (
        "siii",
        $comentarios2, $s, $important, $_GET["id"]
    );
    
    // execute
    
    $update -> execute();

// view

echo "<script> window.location='../c/{$module}.php?m=matriz&n=updated&cid={$si}'</script>";