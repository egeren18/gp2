<?php

/*
 * incluye y evalúa el archivo especificado.
 */
include '../connection.php';

$userId = $_GET['c'];
$userPasswordForm = $_POST['userPassword'];

/*
 * Es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.
 */
switch ($userPasswordForm) {

    case '1234':

        /*
         * Realiza una consulta a la base de datos.
         */
        $_user = mysqli_query($master,"SELECT * FROM user WHERE userId = '" . $userId . "'");
        $user = $_user -> fetch_object();

        /*
         * Comprueba que la contraseña coincida con un hash.
         */
        if (password_verify($userPasswordForm, $user -> userPassword)) {
            
            echo "<body><script>window.location='../c/main.php?m=changePassword&c={$userId}&n=welcome'</script>";
        }
        else {

            echo "<body'><script>window.location='../c/main.php?m=logInEmail&n=startProblems'</script>";
        }
        break;

    default:
        
        /*
         * Realiza una consulta a la base de datos.
         */
        $_user = mysqli_query($master,"SELECT * FROM user WHERE userId = '" . $userId . "'");
        $user = $_user -> fetch_object();

        /*
         * Realiza una consulta a la base de datos.
         */
        $_subscriber = mysqli_query($master,"SELECT * FROM subscriber INNER JOIN user ON subscriber.subscriberId = user.subscriberId WHERE user.userId = '" . $user -> userId . "' AND user.userStatus = 1");
        $subscriber = $_subscriber -> fetch_object();

        $userSessionId = '';

        /*
         * Realiza una actualizacion a la base de datos.
         */
        $lastSession = $master -> prepare ("UPDATE user SET userSessionId = ? WHERE userId = ?");
        $lastSession -> bind_param ("si", $userSessionId, $userId);
        $lastSession -> execute();

        /*
         * Comprueba que la contraseña coincida con un hash.
         */
        if (password_verify($userPasswordForm, $user -> userPassword)) {
            
            /*
             * Obtener y/o establecer el id de sesión actual.
             */
            $userSessionId = session_id();

            /*
             * Realiza una actualizacion a la base de datos.
             */
            $newSession = $master -> prepare ("UPDATE user SET userSessionId = ? WHERE userId = ?");
            $newSession -> bind_param ("si", $userSessionId, $user -> userId);
            $newSession -> execute();
            
            /*
             * Variables de sesión
             */
            $_SESSION["userSessionId"] = $userSessionId;
            $_SESSION["userFullName"] = $user -> userName . ' ' . $user -> userSurname;
            $_SESSION["userId"] = $userId;
            $_SESSION["subscriberId"] = $subscriber -> subscriberId;
            $_SESSION["subscriberName"] = $subscriber -> subscriberName;
            $_SESSION["userTypeId"] = $user -> userTypeId;
            $_SESSION["userAdmin"] = $user -> userAdmin;
            $_SESSION["userPrimary"] = $user -> userPrimary;

            echo "<body><script>window.location='../c/main.php?m=menu'</script>";
        }

        else {

            echo "<body><script>window.location='../c/main.php?m=logInEmail&n=startProblems'</script>";
        }
        break;
}
