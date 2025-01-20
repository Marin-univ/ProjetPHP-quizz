<?php
class AutoLoader {
    public static function register() {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    public static function autoload($fqcn) {
        $file = str_replace('\\', '/', $fqcn) . '.php';

        if (file_exists($file)) {
            require $file;
        } else {
            error_log("Erreur : Impossible de charger la classe. Fichier introuvable : $file");
            throw new Exception("Erreur : Fichier introuvable : $file");
        }
    }
}
