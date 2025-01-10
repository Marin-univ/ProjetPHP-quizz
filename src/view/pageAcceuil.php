<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Bienvenue</title>
  <link rel="stylesheet" href="../../public/css/acceuil.css">
</head>
<body>
<header>
    <h1>Bienvenue sur le site de quiz</h1>
</header>

<main>
    <form action="../controller/creationUtilisateur.php" method="POST">
        <label for="nom">Entrez votre pseudo</label>
        <input type="text" id="nom" name="nom">
        <button type="submit">Commencer le quiz</button>
    </form>
</body>