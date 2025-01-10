<?php
$_SESSION["nom"]=$_POST["nom"];

$bdd=$_SESSION["bdd"];

$presenceNom=$bdd->prepare("select COUNT(*) from UTILISATEUR where nom=:nom");
$presenceNom->bindParam(":nom",$dev,PDO::PARAM_STR);
$presenceNom->execute();
$nombre = $presenceNom->fetchColumn();

if($nombre>0){
    $requetteScore=$bdd->prepare("select score from UTILISATEUR where nom=:nom");
    $requetteScore->bindParam(":nom",$dev,PDO::PARAM_STR);
    $requetteScore->execute();
    $score = $requetteScore->fetchColumn();
    $_SESSION["score"] = $score;
    header("Location: ../view/utilisateurDejaPris.php");
}

else{
    $req = $bdd->prepare("INSERT INTO UTILISATEUR (nom,score) VALUES (:nom,0)");
    $req->bindParam(":nom", $dev, PDO::PARAM_STR);
    $req->execute();
    $_SESSION["score"] = 0;
    header("Location: ../view/pageQuestionnaire.php");
}
?>