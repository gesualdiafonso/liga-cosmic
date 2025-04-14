<?php

// echo "<pre>";
// print_r($product[$universo]);
// echo "</pre>";

?>

<section class="my-5 animated fade-in-up delay-1">
    <h2>Universo <?= $universo ?></h2>
    <div class="row">
        <?php foreach ($product[$universo] as $cosmics) {?>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 g-5">
                <div class="card h-100 d-flex flex-column justify-content-center align-items-center mb-3">
                    <img class="card-img-top img-fluid" src="/public/assets/comics/<?= $cosmics['imagens'] ?>" alt="Image do cosmic de comics dc" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title"> <?= $cosmics['personaje'] ?></h3>
                        <span class="card-title"> <?= $cosmics['titulo'] ?> - Vol. <?= $cosmics['volume'] ?></span>
                        <p class="card-text"> <?= $cosmics['description'] ?> </p>
                        <span class="card-text"> <strong>Publicación: </strong><?= $cosmics['publicacion'] ?> </span>
                    </div>
                    <div class="card-body d-flex flex-column gap-2 fs-3 mb-3 fw-bold text-center">
                    <div class="fs-3 mb-3 fw-bold text-center text-danger">$<?= $cosmics['precio'] ?></div>
                        <a href="">Comprar</a>
                    </div>
                </div>
            </div>
        <?php }?>    
    </div>
</section>