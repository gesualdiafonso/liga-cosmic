<?php

$msg = "© 2025 Todos los derechos reservados.";
$dev = "Desarrollado por Afonso • Proyecto academico"

?>

<footer class="footer bg-cosmic text-light py-4">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
        <div class="footer-left text-center text-md-start mb-3 mb-md-0">
            <h5 class="fw-bold text-cyan"><?= $logo?> </h5>
            <p class="small mb-0"><?php echo "$msg <br> $dev"; ?>
                </p>
        </div>

        <div class="footer-center text-center mb-3 mb-md-0">
            <a href="index.php?section=home" class="footer-link">Home</a>
            <a href="index.php?section=catalog" class="footer-link">Catalogo</a>
            <a href="index.php?section=about" class="footer-link">Sobre</a>
        </div>

        <div class="footer-right text-center text-md-end ">
            <p class="small mb-1">Materia: Programación 2 PHP</p>
            <p class="small mb-1"><strong>Docente: </strong> Jorge Perez</p>
            <p class="small mb-1">Escuela Da Vinci</p>
        </div>
    </div>
</footer>
