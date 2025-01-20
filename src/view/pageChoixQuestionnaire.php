<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Liste de Questionnaires</title>
  <link rel="stylesheet" href="../../public/css/listeQuestionnaire.css">
</head>
<body>
    <header>
        <h1>Sommaire des Questionnaires</h1>
    </header>
    <main>
        <ul>
            <?php
                
                $dossier = '../../public/json';

                
                if (is_dir($dossier)) {
                    $fichiers = glob($dossier . '/*.json');
                    foreach ($fichiers as $index => $fichier) {
                        $nomFichier = basename($fichier);
                        echo "<li><form action='../controller/choixJson.php' method='POST'>";
                        echo "<input type='hidden' name='file' value='$nomFichier'>";
                        echo "<button type='submit'>Questionnaire " . ($index + 1) . "</button>";
                        echo "</form></li>";
                    }
                } else {
                    echo "<li>Aucun questionnaire disponible.</li>";
                }
            ?>
        </ul>
    </main>
</body>
</html>
