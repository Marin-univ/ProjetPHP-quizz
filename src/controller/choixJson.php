<?php

namespace controller;
use controller\Questionnaire;
require ("../../Autoloader.php");

error_log($_POST["file"]);
$filePath = __DIR__ . "/../../public/json/".$_POST["file"];
error_log($filePath);
if (!file_exists($filePath)) {
    error_log("Erreur : Fichier JSON introuvable : $filePath");
    exit("Erreur : Fichier JSON introuvable");
}

$questionnaire = new Questionnaire($filePath);
$_SESSION["les_questions"] = $questionnaire->getQuestions();

?>