<?php

use controller\Questionnaire;

require 'Autoloader.php';
AutoLoader::register();

session_start();

$filePath = __DIR__ . "/public/json/quizz.json";
$questionnaire = new Questionnaire($filePath);
$_SESSION[$les_questions] = $questionnaire->getQuestions();

header("Location: /src/view/pageAcceuiL.php");
exit;