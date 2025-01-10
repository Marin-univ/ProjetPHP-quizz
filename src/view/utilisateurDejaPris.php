<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../public/css/reconnexion.css">
  <title>Bienvenue</title>
</head>
<body>
<header>
    <h1>Bonjour <?php $_SESSION["nom"]?>, votre précédant score était de <?php $_SESSION["score"]?> vous ferez peut être mieux maintenant</h1>
</header>

<main>
    <form action="pageQuestionnaire" method="POST">
        <button type="submit">Commencer le quizzzzzzz !!!!!!!</button>
    </form>
</body>