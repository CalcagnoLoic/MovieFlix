<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Calcagno Loïc">
    <meta name="description" content="Bienvenue sur MovieFlix, votre site de streaming regroupant les films sortis dans les salles de cinéma.">
    <title>MovieFlix</title>
    <link rel="stylesheet" href="frontend/assets/sass/homepage.css">
    <link rel="icon" href="frontend/assets/img/logo.png">
</head>
<body>
    <header>
        <nav>
            <div class="block1">
                <h1>MovieFlix</h1>
                <img src="frontend/assets/img/logo.png" alt="Logo responsive" class="img-responsive">
            </div>
            <div class="block2">
                <a href="logout">
                    <img src="frontend/assets/img/logout.png" alt="logout" class="logout">
                </a>
            </div>
        </nav>
    </header>
    <main>
        <div class="site">
            <?php
            if (!empty($_SESSION['Customer'])) {
                echo "
                <div>
                    <ul>
                        <li>Liste des genres pour les films</li>
                        <li>Recherche d'un film par son nom</li>
                    </ul>
                </div>";
            }
            ?>

            <h1>Bienvenue, <?php 
            if (!empty($_SESSION['Customer'])) {
                echo $_SESSION['Customer'] . '!';
            } else {
                echo "veuillez vous connecter SVP!!";
            }
            ?>
            </h1>

            <?php 
            if (empty($_SESSION['Customer'])) {
                echo "<h2>Un abonnement est obligatoire pour pouvoir avoir accès à la suite du site...</h2>";
                echo "<img src='frontend/assets/img/oops.gif' class='connect'/>";
            } else {
                echo "
                <div class='container'>
                    <div id='slider'></div>
                    <div class='chevron'>
                        <img src='frontend/assets/img/chevron-gauche.png' alt='chevron gauche' id='g-chevron' class='btn'>
                        <img src='frontend/assets/img/chevron-droit.png' alt='chevron droit' id='d-chevron' class='btn'>
                    </div>
                    </div>
                </div>";
            }
            ?>
        </div>
    </main>
    <?php

    use app\controller\Controller;

    $footer = new Controller;
    $footer->view('template/footer');

    ?>
    <script src="frontend/assets/js/apiKey.js"></script>
    <script src="frontend/assets/js/carrouselHomepage.js"></script>
</body>
</html>