<?php

require 'Autoloader.php';
AutoLoader::register();

session_start();

header("Location: /src/view/pageAcceuiL.php");
exit;