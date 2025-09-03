<?php

// exemple pour afficher home
// on inclut le controller respectif : HomeController
require_once __DIR__ . '/pokedex/controllers/HomeController.php';

$controller = new HomeController(); // Je crée un objet Controller
$controller->index(); // On utilise la méthode index