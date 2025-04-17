<?php

$logo = "LigaVersus Cosmic";

?>

<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a href="/index.php">
                <h1> <?= $logo ?> </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto px-5">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?section=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?section=about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link active"href="index.php?section=catalogo_completo">Catalogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?section=comics&uni=batman">Batman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?section=comics&uni=arrow">Arrow</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link active" href="index.php?section=comics&uni=justice_league">Liga de la Justicia</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>