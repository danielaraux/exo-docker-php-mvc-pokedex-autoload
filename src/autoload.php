<?php
// Fonction d'autoloading anonyme qui a comme attribut la variable $class (qui contient le nom complet de la class)
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php'; // on remplace les \ par des / lisibles par l'archi de dossiers Linux
    if (file_exists($file)) {
        require_once $file;
    }
});
