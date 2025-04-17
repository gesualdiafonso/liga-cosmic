<?php 
$id = $_GET['id'] ?? 0;

$comic = producto_id($id);
?>

<div class="container">
    <div class="row">
        <?php if (!empty($comic)){?>
            <div class="col">
                <h1> <?= $comic['titulo']; ?>, <?= $comic['personaje']; ?>, Vol. <?= $comic['volume']; ?> </h1>
                <di class="card mb-5">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img class="card-img-top img-fluid" src="/public/assets/comics/<?= $comic['imagens'] ?>" alt="Image do cosmic de comics dc" class="img-fluid">
                        </div>
                        <div class="col-md-7 d-flex flex-column p-3">
                            <div class="card-body flex-grow-0">
                                <p class="fs-4 m-0 fw-bold text-danger"><?= $comic['titulo']?></p>
                                <h2 class="card-title fs-2 mb-4"><?= $comic['personaje']?></h2>
                                <p class="card-text"><?= $comic['description']?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?= $comic['publicacion']?></li>
                                <li class="list-group-item"><?= $comic['arte']?></li>
                                <li class="list-group-item"><?= $comic['name']?></li>
                                <li class="list-group-item"><?= $comic['volume']?></li>
                            </ul>
                            <div class="card-body flex-grow-0 mt-auto">
                                <div class="fs-3 mb-3 fw-bold text-center text-danger"> $<?= number_format($comic['precio'], 2, ",", "."); ?></div>
                                <a href="#" class="btn btn-danger w-100 fw-bold">COMPRAR</a>
                            </div>
                        </div>
                    </div>
                </di>
            </div>
        <?php } else { ?>
            <div class="col">
                <h1 class="text-center m-5">Produto não encontrado</h1>
                <p>O produto que você está procurando não existe ou foi removido.</p>
            </div>
        <?php } ?>
    </div>
</div>