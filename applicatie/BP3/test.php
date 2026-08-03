<?php

require_once 'includes/db_connection.php';

$verbinding = maakVerbinding();

$sql = "SELECT name, price FROM Product";

$resultaat = $verbinding->query($sql);

foreach ($resultaat as $product) {
    echo $product["name"] . " - €" . $product["price"] . "<br>";
}
