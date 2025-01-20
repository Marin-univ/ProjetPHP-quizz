<?php
// src/view/questionnaire.php
session_start();
require_once __DIR__ . '/../../autoloader.php';
require_once __DIR__ . '/../config/config.php';

use controller\Questionnaire;

$questionnaire = new Questionnaire('/../../public/json/quizz.json');
$_SESSION['les_questions'] = $questionnaire->getQuestions();
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Questionnaire</title>
  <link rel="stylesheet" href="../../public/css/questionnaire.css">
</head>
<body>
    <header>
        <h1>Bienvenue dans votre questionnaire</h1>
    </header>
    <main>
        <form action="resultat.php" method="POST">
        <?php
            foreach ($_SESSION['les_questions'] as $q) {
                $q->affiche();
            }
        ?>
        <button type="submit">Voir les résultats</button>
        </form>
    </main>
</body>
</html>
