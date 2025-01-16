<?php
namespace controller;
$_SESSION["nom"]=$_POST["nom"];

use controller\Database;
$base=new Database();
$bdd=$base->getConnection();


$presenceNom=$bdd->prepare("select COUNT(*) from UTILISATEUR where nom=:nom");
$presenceNom->bindParam(":nom",$dev);
$presenceNom->execute();
$nombre = $presenceNom->fetchColumn();

if($nombre>0){
    $requetteScore=$bdd->prepare("select score from UTILISATEUR where nom=:nom");
    $requetteScore->bindParam(":nom",$dev);
    $requetteScore->execute();
    $score = $requetteScore->fetchColumn();
    $_SESSION["score"] = $score;
    header("Location: ../view/utilisateurDejaPris.php");
}

else{
    $req = $bdd->prepare("INSERT INTO UTILISATEUR (nom,score) VALUES (:nom,0)");
    $req->bindParam(":nom", $dev);
    $req->execute();
    $_SESSION["score"] = 0;
    header("Location: ../view/pageQuestionnaire.php");
}
?>