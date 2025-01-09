<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Page questionnaire</title>
  <link rel="stylesheet" href="../../public/css/main.css">
</head>
<body>
    <head>
        <h1>Bienvenue dans votre questionnaire</h1>

    </head>
    <main>
        <form action="submit.php" method="POST">
        <?php
            use src\controller\Questionnaire
            $questionnaire=new Questionnaire("../../public/json/quizz.json");
            $questionnaire->affichage();
        ?>
        
        </form>
        <button type="submit"> Répondre</button>
    </main>
</body>
</html>