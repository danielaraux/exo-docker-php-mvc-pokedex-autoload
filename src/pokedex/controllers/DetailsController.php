<?php

class DetailsController
{
    public function show($id)
    {
        require_once __DIR__ . '/../models/PokemonModel.php'; //Nous allons chercher le modèle

        $PokemonModel = new PokemonModel(); // Je crée mon objet à partir de la class PokemonModel
        $showPokemon = $PokemonModel->getById($id); // On appelle la méthode getById($id) qui va afficher tous les pokémons

        // Condition pour aller sur la page 404 si on entre un numéro de pokemon qui n'existe pas sur le json (qui retourne une valeur null en gros)
        if ($PokemonModel->getById($id) == null) {
            header("Location: ../../pokedex/views/page404.php");
        }

        require_once __DIR__ . '/../views/details.php'; // On appelle la vue détails
    }
}
