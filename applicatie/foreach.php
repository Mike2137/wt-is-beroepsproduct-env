<?php

$consumpties = [
  'Bier' => 3.50,
  'Spa rood' => 2.40,
  'borrelnoten' => 4
];

$totaal = 0;
$bon = '';

// hieronder is `$consumptie` de key
// en `$prijs` de value
foreach ($consumpties as $consumptie => $prijs) {
  $bon .= "$consumptie: $prijs<br>";
  $totaal += $prijs;
}

echo $bon . "--------------------<br>Totaal: " . $totaal;




?>