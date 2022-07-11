<?php

if ($_SESSION["userTypeId"] == 1) {

    // select

    $_allow = mysqli_query($master, "
        SELECT * FROM access
        INNER JOIN subscriber
        ON access.subscriberId = '" . $_SESSION["subscriberId"] . "'
        INNER JOIN user
        ON access.userId = '" . $_SESSION["userId"] . "'
        INNER JOIN module
        ON access.moduleId = '" . $moduleId . "'
        WHERE access.userId = '" . $_SESSION["userId"] . "'
    ");

    $allow = $_allow -> fetch_object();

}

elseif ($_SESSION["userTypeId"] == 2) {
            
    if (isset($moduleId) ) {
        
        include 'connection2.php';
        
        // select

        $_allowS = mysqli_query($connection, "
            SELECT * FROM access
            WHERE subscriberId = '" . $_SESSION["subscriberId"] . "'
            AND userId = '" . $_SESSION["userId"] . "'
            AND moduleId = '" . $moduleId . "'
        ");

        $allowS = $_allowS -> fetch_object();

    }
    
}
