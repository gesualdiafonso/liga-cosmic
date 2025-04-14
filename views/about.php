<?php

$title = "Quiénes Somos?";

$about_content = [
    "historia" =>[
        "titulo" => "Nuestra Historia",
        "texto" => "En el vibrante escenario de la Argentina Comic Con, donde más de 100,000 entusiastas se reúnen anualmente, nació la inspiración para LigaVersus Cosmic. Observamos una creciente comunidad de fans apasionados por los cómics en inglés que enfrentaban barreras para acceder a ediciones originales. Este desafío nos motivó a crear una plataforma accesible para todos los lectores locales."
    ],
    "vision" => [
        "titulo" => "Nuestra Visión",
        "texto" => "Nos inspiramos en espacios icónicos como El Ateneo Grand Splendid, fusionando literatura, arte y experiencia cultural. Aspiramos a traducir esa experiencia a lo digital, ofreciendo un catálogo selecto de cómics en inglés que conecte con el público argentino y preserve la esencia original de las historias."
    ],
    "mision" => [
        "titulo" => "Nuestra Misión",
        "texto" => "LigaVersus Cosmic fomenta la lectura de cómics originales en inglés, promoviendo el acceso y la valorización de estas obras en Argentina. Nuestra meta es enriquecer la cultura pop local a través de una plataforma confiable, curada y orientada a los verdaderos fanáticos."
    ],
    "innovacion" => [
        "titulo" => "Nuestra Innovación",
        "texto" => "Ofrecemos ediciones auténticas en inglés y colaboramos con eventos como la Argentina Comic Con. Nuestra propuesta digital va más allá de una tienda: es un portal que conecta universos, culturas y personas apasionadas por los cómics de verdad."
    ],
]

?>
<section>
    <h2 class="fs-1 text-center my-4 animated fade-in-up delay-1"> <?= $title ?> </h2>
    <?php foreach($about_content as $about) : ?>
        <div class="d-flex flex-column justify-content-center align-items-center animated fade-in-up delay-3">
            <h3 class="text-center w-100 fs-3"><?= $about['titulo'] ?></h3>
            <p class="w-100 mt-5 fs-5"><?= $about['texto'] ?></p>
        </div>
        <?php endforeach; ?>
</section>