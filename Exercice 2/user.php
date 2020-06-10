<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>

<body>
    <h1>Exercice 2</h1>
    <p>Super <?= $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . $_SESSION['age'] ?> tu es arrivé sur la deuxième page.</p>

    <a href="index.php">Page précédente</a>

</body>

</html>