<?php

// exemple pour afficher home
// on inclut le controller respectif : HomeController
require_once __DIR__ . '/pokedex/controllers/HomeController.php';
require_once __DIR__ . '/pokedex/controllers/DetailsController.php';

$controller = new HomeController(); // Je crée un objet Controller
$controller->index(); // On utilise la méthode index

$url = $_GET['url'] ?? 'home'; // on défini la variable qui va récupérer l'url de l'index sinon, pointer sur home

$arrayUrl = explode('/', $url); // je transforme l'url en tableau

$page = $arrayUrl[0]; // je récupère l'index pour la page

$id = $arrayUrl[1]; // je récupère l'id

switch ($page) {
    case 'home':
        //code block
        break;
    case 'details':
        //code block;
        break;


    default:
        //code block
}


// Config router a faire, liens des sprites à rechanger avec ia, tester les liens