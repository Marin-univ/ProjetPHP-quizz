<?php

use controller\Questionnaire;

require 'autoload.php';
AutoLoader::register();

session_start();

$questionnaire = new Questionnaire("./quizz.json");
$_SESSION[$les_questions] = $questionnaire->getQuestions();