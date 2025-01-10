<?php 
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
            $questionnaire = $_SESSION[$les_questions];
            foreach($questionnaire as $q) {
                $q->affiche();
            }
        ?>
        <button type="submit">Répondre</button>
        </form>
        
    </main>
</body>
</html>