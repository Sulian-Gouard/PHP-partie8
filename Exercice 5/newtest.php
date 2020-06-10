<?php
if (isset($_GET['modif']) && ($_GET['modif'])) {

    setcookie('stockName', 'mercredi', time() + 365 * 24 * 3600, null, null, false, true);
    setcookie('stockPassW', 'jeudi', time() + 365 * 24 * 3600, null, null, false, true);
    header('Location: newtest.php');
}

$message = 'ton identifiant : ' . $_COOKIE['stockName'] . ' ton mot de passe : ' . $_COOKIE['stockPassW'];



?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>

<body>
    <h1>Exercice 5</h1>
    <p><?= $message ?></p>
    <a href="index.php">INDEX</a>

</body>

</html>