<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Pokédex d'Alola</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/../../assets/css/style.css">
</head>

<body>
    <header>
        <nav>
            <div class="text-center bg-dark text-light py-2">
                <h1>Mini Pokédex d'Alola (7G)</h1>
            </div>
        </nav>
    </header>

    <main class="min-vh-100">


        <div class="container my-5 ">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
                <?php
                foreach ($tousLesPokemons as $item) { ?>
                    <div class="col d-flex">
                        <div class="card cards h-100 d-flex flex-column mx-auto">
                            <p class="card-text ms-3 my-2">N° <b><?= $item['id'] ?></b></p>
                            <img src="<?= $item['image'] ?>" class="card-img-top mx-auto" alt="photo du pokémon" style="width: 50%;">

                            <div class="card-body ">
                                <h5 class="card-title"><b><?= $item['name'] ?></b></h5>
                                <hr>
                                <span class="card-text">Type(s) : </span>
                                <?php
                                foreach ($item['type'] as $type) {
                                    echo "<span class='badge type-$type'>$type</span> ";
                                }
                                ?>
                                <hr>
                                <a href="index.php?url=details/<?= $item['id'] ?>" class="btn btn-primary w-100 mt-auto">Détails</a>
                            </div>
                        </div>
                    </div>

                <?php } ?>
                <!-- Autres cards -->

            </div>
        </div>

        <div class="d-flex justify-content-end m-3">
            <a href="index.php?url=home" class="btn btn-primary">Revenir en haut</a>
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