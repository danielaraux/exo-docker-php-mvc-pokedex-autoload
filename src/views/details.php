<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Pokédex d'Alola</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/../../assets/css/style.css">
</head>

<body>
    <header>
        <nav>
            <div class="text-center bg-dark text-light py-2">
                <h1>Détails du pokémon </h1>
            </div>
        </nav>
    </header>

    <main class="min-vh-100">

        <div class="d-flex justify-content-end m-3">
            <a href="index.php?url=home" class="btn btn-primary">Revenir à l'accueil</a>
        </div>

        <div class="container container-description card-bordure">
            <div class="card mx-auto m-2 card-bordure">
                <div class="card-body card-container">
                    <div>
                        <p class="card-text">N° <b><?= $showPokemon['id'] ?></b></p>
                        <img src="<?= $showPokemon['image'] ?>" alt="Image du pokémon" class="card-img-top mx-auto" style="width:100%">
                        <h5 class="card-title my-3">Nom : <b><?= $showPokemon['name'] ?></b></h5>
                        <hr>
                        <span class="card-text">Type(s) : </span>
                        <?php
                        foreach ($showPokemon['type'] as $type) {
                            echo "<span class='badge type-$type'>$type</span> ";
                        }
                        ?>
                        <hr>
                    </div>

                    <div>
                        <p class="my-2">Description :
                        </p>
                        <p class="fs-5"><?= $showPokemon['description'] ?></p>
                    </div>
                </div>
            </div>


        </div>
        </div>


    </main>

    <footer class="text-center bg-dark text-light py-2">
        <div>
            <h1>Mini Pokédex d'Alola</h1>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>