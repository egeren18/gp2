<?php

// connection

include '../connection.php';

// module

$module = 'subscriber';

// select

$_subscriber = mysqli_query($master, "
    SELECT * FROM subscriber
    WHERE subscriberId = '" . $_GET["id"] . "'
");

$subscriber = $_subscriber -> fetch_object();

// select

$_country = mysqli_query($master, "
    SELECT * FROM country
    WHERE countryStatus = 1
    ORDER BY countryName
");

// select

$_subscription = mysqli_query($master, "
    SELECT * FROM subscription
    WHERE subscriptionStatus = 1
    ORDER BY subscriptionName
");

// select

$_management = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN accesssubscriber
    ON module.moduleId = accesssubscriber.moduleId
    WHERE accesssubscriber.subscriberId = '" . $_GET["id"] . "'
    AND module.moduleStatus = 1
    AND module.moduleType = 1
    AND module.moduleController IS NOT NULL
    ORDER BY module.moduleName ASC
");

// select

$_managementNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 1
");
        
// select

$_sagragp = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN accesssubscriber
    ON module.moduleId = accesssubscriber.moduleId
    WHERE accesssubscriber.subscriberId = '" . $_GET["id"] . "'
    AND module.moduleStatus = 1
    AND module.moduleType = 2
    AND module.moduleController IS NOT NULL
    ORDER BY module.moduleName ASC
");

// select

$_sagragpNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 2
");

// select

$_module = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN accesssubscriber
    ON module.moduleId = accesssubscriber.moduleId
    WHERE accesssubscriber.subscriberId = '" . $_GET["id"] . "'
    AND module.moduleStatus = 1
    AND module.moduleType = 3
    AND module.moduleController IS NOT NULL
    ORDER BY module.moduleName ASC
");

// select

$_moduleNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 3
");

// select

$_audit = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN accesssubscriber
    ON module.moduleId = accesssubscriber.moduleId
    WHERE accesssubscriber.subscriberId = '" . $_GET["id"] . "'
    AND module.moduleStatus = 1
    AND module.moduleType = 4
    AND module.moduleController IS NOT NULL
    ORDER BY module.moduleName ASC
");

// select

$_auditNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 4
");
        
// select

$_administration = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN accesssubscriber
    ON module.moduleId = accesssubscriber.moduleId
    WHERE accesssubscriber.subscriberId = '" . $_GET["id"] . "'
    AND module.moduleStatus = 1
    AND module.moduleType = 5
    AND module.moduleController IS NOT NULL
    ORDER BY module.moduleName ASC
");

// select

$_administrationNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 5
");

// select

$_rrhh = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN accesssubscriber
    ON module.moduleId = accesssubscriber.moduleId
    WHERE accesssubscriber.subscriberId = '" . $_GET["id"] . "'
    AND module.moduleStatus = 1
    AND module.moduleType = 6
    AND module.moduleController IS NOT NULL
    ORDER BY module.moduleName ASC
");

// select

$_rrhhNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 6
");

// select

$_support = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN accesssubscriber
    ON module.moduleId = accesssubscriber.moduleId
    WHERE accesssubscriber.subscriberId = '" . $_GET["id"] . "'
    AND module.moduleStatus = 1
    AND module.moduleType = 7
    AND module.moduleController IS NOT NULL
    ORDER BY module.moduleName ASC
");

// select

$_supportNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 7
");

// select

$_net = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN accesssubscriber
    ON module.moduleId = accesssubscriber.moduleId
    WHERE accesssubscriber.subscriberId = '" . $_GET["id"] . "'
    AND module.moduleStatus = 1
    AND module.moduleType = 8
    AND module.moduleController IS NOT NULL
    ORDER BY module.moduleName ASC
");

// select

$_netNull = mysqli_query($master, "
    SELECT * FROM module
    WHERE moduleStatus = 1
    AND moduleController IS NULL
    AND moduleType = 8
");

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    WHERE subscriberId = '" . $_GET["id"] . "'
    AND userPrimary = 1
    AND userStatus = 1
");

$user = $_user -> fetch_object();

// select

$_riskPartner = mysqli_query($master, "
    SELECT * FROM user
    WHERE subscriberId = '" . $_GET["id"] . "'
    AND userAdmin = 3
    AND userStatus = 1
");

$riskPartner = $_riskPartner -> fetch_object();

// view

require_once '../v/subscriber/jUpdate.php';
