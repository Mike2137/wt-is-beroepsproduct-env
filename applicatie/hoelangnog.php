<?php
$origin = new DateTimeImmutable('2026-6-4');
$omschrijving = $_GET['omschrijving'];
$datum = new DateTimeImmutable($_GET['datum']);

$interval = date_diff($origin, $datum);
echo $interval->format('%R%a days');

?>