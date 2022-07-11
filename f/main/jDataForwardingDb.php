<?php

// connect database
include '../connection.php';

// set variables
$userName = $_POST['userName'];
$subscriberName = $_POST['subscriberName'];
$emailFrom = $_POST['emailFrom'];
$emailSubject = $_POST['emailSubject'];
$emailTo = 'juan.godoy@sagra.com.ve, sistemas@sagra.com.ve';
$emailService = $_POST['emailService'];
$emailPriority = $_POST['emailPriority'];

// send email
$to = $emailTo;
$title = 'SAGRA GP > ' . $emailSubject;
$message = '<html>';
$message .= '<body>';
$message .= '<h4>Solicitud</h4>';
$message .= '<p>Por favor reenviar al cliente su correo de creación de usuario!</p>';
$message .= '<p>Usuario: ' . $userName . '</p>';
$message .= '<p>Empresa: ' . $subscriberName . '</p>';
$message .= '<p>Correo Electrónico: ' . $emailFrom . '</p>';
$message .= '</body>';
$message .= '</html>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf8' . "\r\n";
$headers .= 'From: Plataforma SAGRAGP';
mail($to, $title, $message, $headers);

// set variables
$userId = '0';
$module = 'User';
$action = 'Resend first Email to: ' . $userName . ', email: ' . $emailFrom;
$itemId = '0';
        
// insert
$trace = $connection -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
    ");

// configure parameters
$trace -> bind_param (
    "issi",
    $userId, $module, $action, $itemId
);

// execute
$trace -> execute();

// view
echo "
<body class='function-body'>
	<div class='preloader pl-size-xs'>
		<div class='spinner-layer pl-white'>
			<div class='circle-clipper left'>
				<div class='circle'></div>
			</div>
			<div class='circle-clipper right'>
				<div class='circle'></div>
			</div>
		</div>
	</div>
	<script> window.location='../c/main.php?m=logInEmail&n=processing'</script>
</body>
";
