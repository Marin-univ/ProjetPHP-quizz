<?php
namespace controller;

class Question {
    private $id;
    private $type;
    private $question;
    private $choix;
    private $reponse;
    
    public function __construct($id, $type, $question, $choix, $reponse) {
        $this->id = $id;
        $this->type = $type;
        $this->question = $question;
        $this->choix = $choix;
        // Gérer le cas des réponses multiples
        $this->reponse = is_array($reponse) ? $reponse : [$reponse];
    }

    public function affiche() {
        echo "<p><strong>{$this->question}</strong></p>";
        
        switch ($this->type) {
            case 'radio':
                $i = 0;
                foreach ($this->choix as $c) {
                    echo "<input type='radio' name='question-{$this->id}' value='{$c}' id='radio-{$i}'><label for='radio-{$i}'>{$c}</label><br>";
                    $i++;
                }
                break;
            case 'checkbox':
                $i = 0;
                foreach ($this->choix as $c) {
                    echo "<input type='checkbox' name='question-{$this->id}[]' value='{$c}' id='checkbox-{$i}'><label for='checkbox-{$i}'>{$c}</label><br>";
                    $i++;
                }
                break;
            case 'texte':
                echo "<input type='text' name='question-{$this->id}'><br>";
                break;
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getReponse() {
        return $this->reponse;
    }

    public function getType() {
        return $this->type;
    }
}
