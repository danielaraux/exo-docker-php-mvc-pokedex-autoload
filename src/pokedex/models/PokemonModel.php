<?php

class PokemonModel
{

    public function getAll(): array // fonction pour retourner tous les pokémons
    {
        $pokemonJson = file_get_contents("pokedex/data/pokemons.json"); // On va chercher le fichier json pour l'ajouter
        $pokemonsList = json_decode($pokemonJson, true);                // Je crée une variable pour retourner tous les pokémons
        return $pokemonsList;                                           // Je retourne la variable avec tous les pokémons.
    }

    public function getById(int $id) // fonction pour retourner le pokémon par ID
    {
        $pokemonJson = file_get_contents("pokedex/data/pokemons.json");
        $pokemonsList = json_decode($pokemonJson, true);

        foreach ($pokemonsList as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }
    }
}
