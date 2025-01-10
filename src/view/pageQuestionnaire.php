<?php 
session_start();
$_SESSION["nom"]=$_POST["nom"];
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Page questionnaire</title>
  <link rel="stylesheet" href="../../public/css/questionnaire.css">
</head>
<body>
    <header>
        <h1>Bienvenue dans votre questionnaire</h1>

    </header>
    <main>
        <form action="submit.php" method="POST">
        <?php
            use src\controller\Questionnaire;
            $questionnaire=new Questionnaire("../../public/json/quizz.json");
            $questionnaire->affichage();
        ?>
        <button type="submit">Répondre</button>
        </form>
        
    </main>
</body>
</html>