<?php

class HomeController
{
    public function index()
    {
        require_once __DIR__ . '/../models/PokemonModel.php'; //Nous allons chercher le modèle

        $PokemonModel = new PokemonModel(); // Je crée mon objet à partir de la class PokemonModel
        $tousLesPokemons = $PokemonModel->getAll(); // On appelle la méthode getAll() quyi va afficher tous les pokémons

        require_once __DIR__ . '/../views/home.php'; // On appelle la vue Home
    }
}
