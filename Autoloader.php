<?php

class AutoLoader {
    static function register() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($fqcn) {
        $file = str_replace('\\', '/', $fqcn) . '.php';
        require 'src/controller' . $fqcn . '.php';
    }
}