<?php

// On va chercher les namespace qui pointent sur les classes qu'on veut utiliser. (Plus besoin d'utiliser les require_once sur les case des switch).
use Controllers\HomeController;
use Controllers\DetailsController;


$url = $_GET['url'] ?? 'home'; // on défini la variable qui va récupérer l'url de l'index sinon, pointer sur home
$arrayUrl = explode('/', $url); // je transforme l'url en tableau
$page = $arrayUrl[0] ?? 'home'; // je récupère l'index pour la page


$id = $arrayUrl[1] ?? null; // je récupère l'id ou j'affiche null



switch ($page) {
        case 'home':
                $objectController = new HomeController(); // Je crée un objet qui va utiliser la class HomeController
                $objectController->index(); // L'objet va executer la méthode index pour afficher le contenu
                break; // Le break sert a arrêter les actions ensuite
        case 'details':
                $objectController = new DetailsController(); // Je crée un objet qui va utiliser la class detailsController
                $objectController->show($id); // L'objet va executer la méthode show($id) pour afficher le contenu du pokémon en question
                break;

        default:
                require_once __DIR__ . '/views/page404.php'; // Je redirige vers ma page error404 si l'url n'est pas home ou details
                break;
}
