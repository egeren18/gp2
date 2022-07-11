<?php

// connection

include '../connection.php';

// module

$module = 'subscriber';

// select

$_access = mysqli_query($master, "
    SELECT * FROM access
    INNER JOIN module
    ON access.moduleId = module.moduleId
    INNER JOIN user
    ON access.userId = user.userId
    WHERE user.userId = '" . $_SESSION["userId"] . "'
    AND module.moduleController = '" . $module . "'
");

$access = $_access -> fetch_object();

// select

$_subscriber = mysqli_query($master, "
    SELECT * FROM subscriber
    INNER JOIN country
    ON subscriber.countryId = country.countryId
    INNER JOIN subscription
    ON subscriber.subscriptionId = subscription.subscriptionId
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

$_audit = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN accesssubscriber
    ON module.moduleId = accesssubscriber.moduleId
    WHERE module.moduleStatus = 1
    AND module.moduleType = 4
    AND module.moduleController IS NOT NULL
    GROUP BY accesssubscriber.moduleId
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
    WHERE module.moduleStatus = 1
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
    WHERE module.moduleStatus = 1
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
    WHERE module.moduleStatus = 1
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
    WHERE module.moduleStatus = 1
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
$_userPrimary = mysqli_query($master, "
    SELECT * FROM user
    WHERE subscriberId = '" . $_GET["id"] . "'
    AND userPrimary = 1
");

$userPrimary = $_userPrimary -> fetch_object();

// select

$_riskPartner = mysqli_query($master, "
    SELECT * FROM user
    WHERE subscriberId = '" . $_GET["id"] . "'
    AND userAdmin = 3
");

$riskPartner = $_riskPartner -> fetch_object();

// view

require_once '../v/subscriber/jRead.php';
