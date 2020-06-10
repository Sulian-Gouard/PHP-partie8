<?php
session_start();

var_dump($_SESSION);

$_SESSION['prenom'] = 'John';
$_SESSION['nom'] = 'Doe';
$_SESSION['age'] = '34';


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
  <p>Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.
    Ces variables auront été définies directement dans le code.
    Il faudra afficher le contenu de ces variables sur la deuxième page.
  </p>

  <a href="user.php">Page suivante</a>

</body>

</html>