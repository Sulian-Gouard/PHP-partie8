<?php
if (isset($_POST['logIn']) && ($_POST['passW'])) {

    setcookie('stockName', $_POST['logIn'], time() + 365 * 24 * 3600, null, null, false, true);
    setcookie('stockPassW', $_POST['passW'], time() + 365 * 24 * 3600, null, null, false, true);
    header('Location: user.php');
}

$message = 'ton identifiant : ' . $_COOKIE['stockName'] . ' ton mot de passe : ' . $_COOKIE['stockPassW'];

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>

<body>
    <h1>Exercice 4</h1>
    <p><?= $message ?></p>

</body>

</html>