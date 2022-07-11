<?php

// connect database
include '../connection.php';

// set variables
$userId = $_GET['c'];
$newPassword = $_POST['newPassword'];
$repeatNewPassword = $_POST['repeatNewPassword'];

// if they exist
if ($newPassword != '' & $repeatNewPassword != '') {

    // compare passwords
    if (strcmp($newPassword, $repeatNewPassword) !== 0 or $newPassword == '1234') { 
	    echo "
    	<body>
            <script> window.location='../c/main.php?m=changePassword&c=" . $userId . "&n=doNotMatch'; </script>
	    </body>
	    ";
    }
    // else
    else {
        
        // encrypt new password
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        
        // update
        $update = $connection -> prepare ("
            UPDATE user
            SET
            userPassword = ?
            WHERE
            userId = ?
        ");
        
        // configure parameters
        $update -> bind_param (
            "si",
            $hashedPassword, $userId
        );
        
        // execute
        $update -> execute();
        
        // set variables
        $userId = 0;
        $module = 'user';
        $action = 'Change Password';
        $itemId = $userId;
        
        // add
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

        // start again
        echo "
        <body>
            <script> window.location='../c/main.php?m=logInEmail&n=passwordChanged'</script>
        </body>
        ";

    }
}
