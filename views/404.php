<?php
// Título dinâmico
$page_title = "Página não encontrada | LigaVersus Comics";

// Mensagens heroicas!
$title = "404 - Universo no localizado";
$message = "Parece que este cómic se perdió en el multiverso.";
$suggestion = "Volte para a base e continue explorando nossos heróis!";
$home_link = "/index.php";
?>
<section class="w-full d-flex flex-column justify-content-center align-items-center">
    <div>
        <img class="hero-img" src="/public/assets/error.jpg" alt="Error de la pagina, batma arriba de superman">
    </div>
    <div class="position-absolute error-title">
        <h1><?= $title ?></h1>
    </div>
    <div class="position-absolute info-erro d-flex flex-column justify-content-center align-items-center">
        <p><?= $message ?></p>
        <p><?= $suggestion ?></p>
        <a href="<?= $home_link ?>">Volver al Inicio</a>
    </div>
</section>