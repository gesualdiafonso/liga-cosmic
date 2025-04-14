<?php

require 'router.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $sections[$views]['title'] ?></title>
    <meta name="description" content="<?= $sections[$views]['content'] ?>">
    <meta name="keywords" content="<?= $sections[$views]['meta_keywords'] ?>">
    <meta name="author" content="Cosmic Comics">
    <meta name="robots" content="index, follow">

    <link href="public/css/global.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
    </style>
</head>
<body class="body mx-auto">

    <?php require "includes/components/header.php"; ?>
    
    <main class="container">

        <?php 
        // if (file_exists(("views/$views.php"))){
        //     require_once "views/$views.php"; 
        // } else {
        //     require_once "views/404.php"; 
        // }
        require_once "views/$views.php";
        
        
        ?>

    </main>

    <?php require "includes/components/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
</body>
</html>