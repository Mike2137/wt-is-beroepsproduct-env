<?php

$date = new DateTimeImmutable('2026-6-4');
$currentDay = $date->format('w');


if ($currentDay === '1' || $currentDay ==='2') {
    echo('Nee, nog lang niet.');
} elseif ($currentDay === '3' || $currentDay ==='4') {
    echo('Nog even wachten.');
} elseif ($currentDay === '5') {
    echo('Bijna');
} elseif ($currentDay === '6' || $currentDay ==='7') {
    echo('Jaaaaa, het is weekend!');
}
?>