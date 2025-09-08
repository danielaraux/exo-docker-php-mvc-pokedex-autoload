<?php

$url = $_GET['url'] ?? 'home'; // on défini la variable qui va récupérer l'url de l'index sinon, pointer sur home
$arrayUrl = explode('/', $url); // je transforme l'url en tableau
$page = $arrayUrl[0] ?? 'home'; // je récupère l'index pour la page


$id = $arrayUrl[1] ?? null; // je récupère l'id ou j'affiche null


// if ($id == $arrayUrl[1]) {
//         return $arrayUrl[1];
// } else {
//         header("Location: ../views/page404.php");
// }


// var_dump($page, $id);

switch ($page) {
        case 'home':
                require_once __DIR__ . '/pokedex/controllers/HomeController.php';
                $objectController = new HomeController(); // Je crée un objet qui va utiliser la class HomeController
                $objectController->index(); // L'objet va executer la méthode index pour afficher le contenu
                break; // Le break sert a arrêter les actions ensuite
        case 'details':
                require_once __DIR__ . '/pokedex/controllers/DetailsController.php';
                $objectController = new DetailsController(); // Je crée un objet qui va utiliser la class detailsController
                $objectController->show($id); // L'objet va executer la méthode show($id) pour afficher le contenu du pokémon en question
                break;

        default:
                require_once __DIR__ . '/pokedex/views/page404.php'; // Je redirige vers ma page error404 si l'url n'est pas home ou details
                break;
}
