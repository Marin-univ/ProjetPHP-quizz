<?php
// src/view/result.php
session_start();
require_once __DIR__ . '/../autoloader.php';
require_once __DIR__ . '/../config/config.php';

use controller\Questionnaire;
use controller\Score;

$questionnaire = new Questionnaire(JSON_FILE_PATH);
$questions = $questionnaire->getQuestions();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resultats = Score::calculerResultats($_POST, $questions);
    echo "<h1>Résultats</h1>";
    echo "<p>Bonnes réponses : {$resultats['bonnes']}</p>";
    echo "<p>Mauvaises réponses : {$resultats['mauvaises']}</p>";

    foreach ($resultats['details'] as $detail) {
        $correct = $detail['correct'] ? 'Correct' : 'Incorrect';
        echo "<p>Question {$detail['question']}: <strong>{$correct}</strong></p>";
        echo "<p>Bonne réponse: {$detail['bonne_reponse']}</p>";
        echo "<p>Votre réponse: {$detail['reponse_utilisateur']}</p>";
    }
}
?>
