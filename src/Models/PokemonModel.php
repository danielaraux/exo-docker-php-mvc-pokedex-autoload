<?php

// Nom du dossier virtuel "namespace" Models pour le modèle
namespace Models;

class PokemonModel
{

    public function getAll(): array // fonction pour retourner tous les pokémons
    {
        $pokemonJson = file_get_contents(__DIR__ .  "/../data/pokemons.json"); // On va chercher le fichier json pour l'ajouter
        $pokemonsList = json_decode($pokemonJson, true);                // Je crée une variable pour retourner tous les pokémons
        return $pokemonsList;                                           // Je retourne la variable avec tous les pokémons.
    }



    /**
     * Méthode permettant de récupérer toutes les infos d'un Pokemon selon son ID
     * 
     * @param $id ID du pokemon à rechercher
     * @return array tableau contenant toutes les infos
     */
    public function getById(int $id) // fonction pour retourner le pokémon par ID
    {
        $pokemonJson = file_get_contents(__DIR__ .  "/../data/pokemons.json");
        $pokemonsList = json_decode($pokemonJson, true);

        // je parcours mon tableau de pokemon, si il trouve l'id correspondant, on retourne le pokemon avec toutes ses infos
        foreach ($pokemonsList as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }
    }
}
