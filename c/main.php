<?php

/*
 * Iniciar una nueva sesión o reanudar la existente.
 */

@session_start();

/*
 * La sentencia require_once es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
 */

require_once '../m/main.php';

$main -> jTimer();
$main -> jHeader();

$mode = $_GET["m"];

/*
 * Es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.
 */

switch ($mode) {

    case 'checkSession':
        $main -> jCheckSession();
        $main -> jFooter();
        break;

    case 'menu':
        $main -> jCheckSession();
        $main -> jNavbar();
        $main -> jMenu();
        $main -> jFooter();
        break;

    case 'logOut':
        $main -> jLogOut();
        $main -> jFooter();
        break;

    case 'logInEmail':
        $main -> jLogInEmail();
        $main -> jFooter();
        break;

    case 'logInPassword':
        $main -> jLogInPassword();
        $main -> jFooter();
        break;

    case 'aboutUs':
        $main -> jAboutUs();
        $main -> jFooter();
        break;

    case 'changePassword':
        $main -> jChangePassword();
        $main -> jFooter();
        break;

    case 'changePasswordDb':
        $main -> jChangePasswordDb();
        $main -> jFooter();
        break;

    case 'cookies':
        $main -> jCookies();
        $main -> jFooter();
        break;

    case 'dataForwarding':
        $main -> jDataForwarding();
        $main -> jFooter();
        break;

    case 'dataForwardingDb':
        $main -> jDataForwardingDb();
        $main -> jFooter();
        break;

    case 'error':
        $main -> jError();
        $main -> jFooter();
        break;

    case 'forgotPassword':
        $main -> jforgotPassword();
        $main -> jFooter();
        break;


    case 'logInProblems':
        $main -> jLogInProblems();
        $main -> jFooter();
        break;

    case 'privacy':
        $main -> jPrivacy();
        $main -> jFooter();
        break;

    case 'responsibility':
        $main -> jResponsibility();
        $main -> jFooter();
       break;

    case 'securityQuestion':
        $main -> jSecurityQuestion();
        $main -> jFooter();
        break;

    case 'sessionStart':
        $main -> jSessionStart();
        $main -> jFooter();
        break;

    case 'validateAnswer':
        $main -> jValidateAnswer();
        $main -> jFooter();
        break;

    case 'validateEmail':
        $main -> jValidateEmail();
        $main -> jFooter();
        break;

    case 'question':
        $main -> jQuestion();
        $main -> jFooter();
        break;

    default:
        $main -> jError();
        $main -> jFooter();

}
