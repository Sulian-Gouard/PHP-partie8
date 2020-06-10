<?php
// var_dump($_SERVER);

$adrrIp = 'votre adresse IP  est : ' . $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$serverName = $_SERVER['SERVER_NAME'];
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 1</title>
</head>

<body>
  <h1>Exercice 1</h1>
  <p>Faire une page HTML permettant de donner à l'utilisateur :
    <ul>
      <li>son User Agent</li>
      <li>son adresse ip</li>
      <li>le nom du serveur</li>
    </ul>
  </p>

  <p><?= $adrrIp ?></p>
  <p><?= $userAgent ?></p>
  <p><?= $serverName ?></p>


</body>

</html>