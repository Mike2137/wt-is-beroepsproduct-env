<?php
session_start();

$logged_in = false;
if (isset($_SESSION['username'])) {
    $html = "<h1>Welcome {$_SESSION['username']}</h1>";
    $logged_in = true;
}

var_dump($_POST);

var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testsessie</title>
</head>

<body>
    <?php
    if ($logged_in) {
        echo $html;
    }
    ?> 

    <p>Blablabla</p>
    <!-- TODO: ongeldige waarde voor `action`. -->
    <form action="" method="post">
        <input type="text" name="username">
        <input type="password" name="pass">
        <input type="submit" value="login">
    </form>
    <a href="logout.php">Log uit</a>
</body>

</html>