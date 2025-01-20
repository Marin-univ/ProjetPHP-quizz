<?php
namespace controller;
use Database;
$base=new Database;
$bdd=$base::getConnection();

$nom=$_POST["nom"];
$_SESSION["nom"]=$nom;

$requete=$bdd->prepare("select count(*) as nb from UTILISATEUR where nom=:nom");
$requete->bindParam(":nom",$nom);
$requete->execute();

$nombre=$requete->fetch()["nb"];

if($nombre===0){
    $score=0;
    $requete=$bdd->prepare("insert into UTILISATEUR VALUES (:nom,:score)");
    $requete->bindParam(":nom",$nom);
    $requete->bindParam(":score",$score);
    $requete->execute();
}

else{
    $requete=$bdd->prepare("select score from UTILISATEUR where nom=:nom");
    $requete->bindParam(":nom",$nom);
    $requete->execute();
    $score=$requete->fetch()["score"];
}

$_SESSION["score"]=$score;
header("Location: ../view/pageChoixQuestionnaire.php");
exit;
?>