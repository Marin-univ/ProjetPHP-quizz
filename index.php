<?php

require 'Autoloader.php';

use controller\Questionnaire;
AutoLoader::register();

session_start();


header("Location: /src/view/pageAcceuil.php");
exit;
