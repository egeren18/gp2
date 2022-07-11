<?php

// connection

include '../connection.php';

// select

$_qty = mysqli_query($master, "
    SELECT count(*) as total FROM notification
    WHERE notificationStatus = 0
");

$qty = mysqli_fetch_array($_qty);

// select

$_user = mysqli_query($master, "
    SELECT * FROM user
    INNER JOIN subscriber
    ON user.subscriberId = subscriber.subscriberId
    INNER JOIN subscription
    ON subscriber.subscriptionId = subscription.subscriptionId
    WHERE user.userId = '" . $_SESSION['userId'] . "'
");

$user = $_user -> fetch_object();

// select

$_home = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN access
    ON module.moduleId = access.moduleId
    WHERE module.moduleStatus = 1
    AND access.userId = '" . $_SESSION["userId"] . "'
    ORDER BY access.jAccess DESC, module.moduleName ASC
");

$home = $_home -> fetch_object();

// select

$_subscribers = mysqli_query($master, "
    SELECT * FROM module
    INNER JOIN access
    ON module.moduleId = access.moduleId
    WHERE module.moduleStatus = 1
    ORDER BY access.jAccess DESC, module.moduleName ASC
");

$subscribers = $_subscribers -> fetch_object();

// var

$start = $user -> subscriberStart;
$subscriberStart = date('d/m/Y', strtotime($start));
$expires = $user -> subscriberExpires;
$subscriberExpires = date('d/m/Y', strtotime($expires));
$start = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('America/Caracas'));
$expires = new DateTime($expires);
$diff = $start -> diff($expires);
$availableDays = $diff -> days;

// alert

$alert = $availableDays  <= 20 ? "<i class='material-icons orange-text right'>warning</i>" : "<i class='material-icons green-text right'>done</i>";

// view

require_once '../v/main/jNavBar.php';
