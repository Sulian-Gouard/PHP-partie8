<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 4</title>
</head>

<body>
  <h1>Exercice 4</h1>
  <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.</p>

  <form method="post" action="user.php">
    <label for="logIn">Identifiant :</label><br>
    <input type="text" id="logIn" name="logIn" placeholder="Votre identifiant"><br>
    <label for="firstName">Mot de passe :</label><br>
    <input type="password" id="passW" name="passW" placeholder="Entrez votre mot de passe"><br><br>
    <input type="submit" value="S'identifier">
  </form>

</body>

</html>