<?php
require_once("db_connectie.php");

$verbinding = maakVerbinding();

$sqlquery = 'SELECT stuknr, titel, genrenaam, n.omschrijving
             FROM stuk s 
             LEFT OUTER JOIN niveau n ON s.niveaucode = n.niveaucode';


$data = $verbinding->query($sqlquery);

$my_table = '<table>';
$my_table = $my_table . '<tr>
                            <th>Stuknummer</th>
                            <th>Titel</th>
                            <th>Genre</th>
                            <th>Niveau</th>
                            <th>Componist</th>
                        </tr>';

foreach ($data as $rij) {
    $stuknr = $rij['stuknr'];
    $titel = $rij['titel'];
    $genrenaam = $rij['genrenaam'];
    $omschrijving = $rij['omschrijving'];

    $my_table = $my_table . "<tr>
                                <td>$stuknr</td>
                                <td>$titel</td>
                                <td>$genrenaam</td>
                                <td>$omschrijving</td>
                            </tr>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Titels uit DB:</h1>
    <?= $my_table ?>
</body>

</html>