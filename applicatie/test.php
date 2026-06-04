<?php
echo ('Hallo Mike');

$artikelen = 'schoenen';
$naam = 'NIKE ';

echo 'Dit zijn ' . $artikelen . ' van ' . $naam;
echo "Dit zijn $artikelen van $naam";
echo "Dit zijn {$artikelen} van {$naam}";


$tekst = '<h1>PHP - Hoofdstuk 1</h1>';

echo $tekst . '<br>';

echo strlen($tekst) . '<br>';

echo strtoupper($tekst) . '<br>';

echo strip_tags($tekst) . '<br>';


$campert = <<<EOD
Verzet begint niet met grote woorden
maar met kleine daden

zoals storm met zacht geritsel in de tuin
of de kat die de kolder in zijn kop krijgt

zoals brede rivieren
met een kleine bron
verscholen in het woud

zoals een vuurzee
met dezelfde lucifer
die een sigaret aansteekt

zoals liefde met een blik
een aanraking iets wat je opvalt in een stem

jezelf een vraag stellen
daarmee begint verzet

en dan die vraag aan een ander stellen.
EOD;

echo ($campert);
?>