<?php

use controller\Questionnaire;

// Charge l'autoloader
require_once 'Autoloader.php';
AutoLoader::register();

session_start();


$filePath = __DIR__ . "/public/json/quizz.json";
if (!file_exists($filePath)) {
    error_log("Erreur : Fichier JSON introuvable : $filePath");
    exit("Erreur : Fichier JSON introuvable");
}

$questionnaire = new Questionnaire($filePath);
$_SESSION["les_questions"] = $questionnaire->getQuestions();

header("Location: /src/view/pageAcceuil.php");
exit;
