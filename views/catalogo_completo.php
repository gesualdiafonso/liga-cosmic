<?php

// echo "<pre>";
// print_r($product);
// echo "</pre>";

$title = "Catálogo de produtos";

?>

<section class="my-5">
    <h2 class="text-center mt-5 animated fade-in-up delay-1"> <?= $title ?> </h2>
    <div class="row animated fade-in-up delay-2">
        <?php

        // echo "<pre>";
        // echo catalogo_completo();
        // echo "</pre>";

        ?>
        <?php foreach($catalogo as $comic) { ?>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 g-5">
                    <div class="card h-100 d-flex flex-column justify-content-center align-items-center">
                        <img class="card-img-top img-fluid" src="/public/assets/comics/<?= $comic['imagens']; ?>" alt="Imagem de <?= $comic['titulo']; ?>">
                        <div class="card-body">
                            <h3 class="card-title"><?= $comic['personaje']?></h3>
                            <span class="card-text my-4"><?= $comic['titulo'] ?>  - Vol. <?= $comic['volume'] ?></span>
                            <p class="card-text"><?= $comic['description'] ?> </p>
                            <span class="card-text"><strong>Arte: </strong> <?= $comic['arte'] ?> </span>
                        </div>
                        <div class="d-flex flex-column gap-2 fs-3 mb-3 fw-bold text-center text-danger">
                            <span class="card-text">$<?= $comic['precio'] ?></span>
                            <a href="index.php?section=producto&id=<?= $comic['id']?>">Comprar</a>
                        </div>
                    </div>
                </div>
        <?php }?>
    </div>
</section>