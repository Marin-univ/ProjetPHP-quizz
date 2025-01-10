<?php

namespace controller;
use controller\Question;

class Questionnaire {

    private $lesQuestions = array();
    private $nomDuFichier;

    public function __construct($fichier) {
        $this->nomDuFichier = $fichier;
        if (!file_exists($this->nomDuFichier)) {
            error_log($this->nomDuFichier);
            die("Le fichier JSON spécifié est introuvable.");
        }

        $json = file_get_contents($this->nomDuFichier);
        $info = json_decode($json, true);
        foreach ($info as $inf) {
            $this->lesQuestions[] =  new Question($inf["id"],$inf["type"],$inf["question"],$inf["choix"],$inf["reponse"]);
        }
    }

    public function getQuestions(): array {
        return $this->lesQuestions;
    }
}