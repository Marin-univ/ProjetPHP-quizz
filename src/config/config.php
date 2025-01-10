<?php
use controller\Bdd;
use controller\Bdd\Database;

$base=new Database();
$_SESSION["bdd"]=$base->getConnection();


?>