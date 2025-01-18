<?php
namespace controller;

class Score {

    public static function calculerResultats($reponsesUser, $questionnaire) {
        $resultats = ['bonnes' => 0, 'mauvaises' => 0, 'details' => []];

        foreach ($questionnaire as $question) {
            // Vérification si la réponse est un tableau pour les cases à cocher
            $reponseUtilisateur = isset($reponsesUser["question-{$question->getId()}"]) ? $reponsesUser["question-{$question->getId()}"] : null;
            $bonneReponse = $question->getReponse();

            // Vérification de la bonne réponse
            if (is_array($bonneReponse)) {
                // Vérification de correspondance avec les réponses multiples
                $correct = empty(array_diff($bonneReponse, $reponseUtilisateur)) && empty(array_diff($reponseUtilisateur, $bonneReponse));
            } else {
                $correct = $bonneReponse === $reponseUtilisateur;
            }

            if ($correct) {
                $resultats['bonnes']++;
            } else {
                $resultats['mauvaises']++;
            }

            $resultats['details'][] = [
                'question' => $question->getId(),
                'bonne_reponse' => $bonneReponse,
                'reponse_utilisateur' => $reponseUtilisateur,
                'correct' => $correct
            ];
        }

        return $resultats;
    }
}

