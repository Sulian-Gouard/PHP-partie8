<?php


if (isset($_POST['logIn']) && ($_POST['passW'])) {

    setcookie('stockName', $_POST['logIn'], time() + 365*24*3600, null, null, false, true);
    setcookie('stockPassW', $_POST['passW'], time() + 365*24*3600, null, null, false, true);
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 3</title>
</head>

<body>
  <h1>Exercice 3</h1>
  <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</p>

  <form method="post" action="index.php">
    <label for="logIn">Identifiant :</label><br>
    <input type="text" id="logIn" name="logIn" placeholder="Votre identifiant"><br>
    <label for="firstName">Mot de passe :</label><br>
    <input type="password" id="passW" name="passW" placeholder="Entrez votre mot de passe"><br><br>
    <input type="submit" value="S'identifier">
  </form>

</body>

</html>