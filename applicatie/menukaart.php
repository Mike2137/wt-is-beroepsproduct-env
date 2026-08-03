<?php 
$eten = [
  ["categorie" => "Food"],
  ["naam" => "Shoarma", "prijs" => 6.95],
  ["naam" => "Appels", "prijs" => 10.95],
  ["naam" => "Tabouleh", "prijs" => 3.12],
  ["naam" => "Hamburger", "prijs" => 9.15],
];

$drinken = [
  ["categorie" => "Drinks"],
  ["naam" => "Cola", "prijs" => 2.00],
  ["naam" => "Ayran", "prijs" => 2.30],
  ["naam" => "Fernandes", "prijs" => 2.50],
  ["naam" => "Bier", "prijs" => 5.50],
];
?>

<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <title>Restaurantmenu</title>
    <style>
      td:first-child {
        width: 8em;
      }
      td:nth-child(2) {
        font-style: italic;
        text-align: right;
        width: 4em;
      }
    </style>
  </head>
  <body>
    <h1>Menu</h1>

    <h2><?= $eten[0]["categorie"] ?></h2>
    
    <table>
      <?php foreach($eten as $key => $value) { 
        if (isset($value["naam"])){

        }
        ?>
      
        <tr>
          <td><?= $value["naam"] ?></td>
          <td><?= $value["prijs"] ?></td>
        </tr>
      <?php } ?>
    </table>

    <h2><?= $drinken[0]["categorie"] ?></h2>
    <table>
        
    </table>
  </body>
</html>

