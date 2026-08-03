<?php

$db_host = "host.docker.internal,1434";
$db_name = "pizzeria";

$db_user = "sa";
$db_password = "abc123!@#";

$connection = new PDO(
    "sqlsrv:Server=$db_host;Database=$db_name;TrustServerCertificate=1",
    $db_user,
    $db_password
);

unset($db_password);

$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function createConnection(): PDO
{
    global $connection;
    return $connection;
}
