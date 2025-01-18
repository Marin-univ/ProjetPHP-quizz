<?php

use controller\Questionnaire;

// Charge l'autoloader
require_once 'Autoloader.php';
AutoLoader::register();

session_start();


header("Location: /src/view/pageAcceuil.php");
exit;
