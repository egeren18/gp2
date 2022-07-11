<?php

/* connection *****************************************************************/

include '../connection.php';

/* ac *************************************************************************/

$ac = mysqli_query(
    $connection,
    "SELECT * FROM ac
    INNER JOIN client
    ON ac.clientId = client.clientId
    INNER JOIN service
    ON ac.serviceId = service.serviceId
");

/* view ***********************************************************************/

require_once '../v/tracing/jList.php';
