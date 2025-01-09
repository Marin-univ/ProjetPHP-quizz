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
        $this->reponse = $reponse;
    }

    public function affiche() {
        echo "<br><label name=$this->id>$this->question</p><br>";
        switch($this->type) {
            case 'radio':
                $html = "";
                $i = 0;
                foreach ($this->choix as $c) {
                    $html .= "<br><input type=radio name=radio-$i id=radio value=$c></br>";
                    $html .= "<br><label name=label-$i>$c</p><br>";
                    $i+=1;
                }
                echo $html;
                break;

            case 'texte':
                echo "<br><input type=text name=text id=text value=$this->id></br>";
                break;

            case 'checkbox':
                $html = "";
                $i = 0;
                foreach ($this->choix as $c) {
                    $html .= "<br><input type=checkbox name=checkbox-$i id=checkbox value=$c></br>";
                    $html .= "<br><label name=label-$i>$c</p><br>";
                    $i+=1;
                }
                echo $html;
                break;
        }
        echo "<br><input type=hidden name=id id=id value=$this->id></br>";
        echo "<br><input type=hidden name=reponse id=reponse value=$this->reponse></br>";
    }
    
}