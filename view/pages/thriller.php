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
    <title>Thriller</title>
    <link rel="stylesheet" href="frontend/assets/css/header.css">
    <link rel="stylesheet" href="frontend/assets/sass/movies.css">
    <link rel="stylesheet" href="frontend/assets/css/footer.css">
    <link rel="icon" href="frontend/assets/img/logo.png">
</head>
<body>
    <?php

    use app\controller\Controller;

    $header = new Controller();
    $header->view('template/header');
    ?>

    <main>
        <div class="site">
        <?php
            if (!empty($_SESSION['Customer'])) {
                echo 
                    "<div class='mainpage'>
                        <div class='sidebar'>
                            <img src='frontend/assets/img/movie.png' alt='movies' class='icon-movie'>
                            <ul>
                                <li><a href='action'>Action</a></li>
                                <li><a href='aventure'>Aventure</a></li>
                                <li><a href='comedie'>Comédie</a></li>
                                <li><a href='policier'>Policier</a></li>
                                <li><a href='documentaire'>Documentaire</a></li>
                                <li><a href='drame'>Drame</a></li>
                                <li><a href='fantastique'>Fantastique</a></li>
                                <li><a href='horreur'>Horreur</a></li>
                                <li><a href='mystere'>Mystère</a></li>
                                <li><a href='scifi'>Science-Fiction</a></li>
                                <li><a href='thriller'>Thriller</a></li>
                            </ul>
                        </div>
                        <div class='movies'>
                            <h1>Thriller</h1>
                            <div class='movie-container'></div>
                        </div>
                    </div>"
                ;
            } else {
                echo "<h1>Bienvenue sur MovieFlix, veuillez vous connecter SVP!!</h1>";
                echo "<h2>Un abonnement est obligatoire pour pouvoir avoir accès à la suite du site...</h2>";
                echo "<img src='frontend/assets/img/error.png' class='connect'/>";
            }
            ?>
        </div>
    </main>

    <?php
    $footer = new Controller();
    $footer->view('template/footer');
    ?>
    <script src="frontend/assets/js/apiKey.js"></script>
    <script src="frontend/assets/js/trhillerMovies.js"></script>
    <script src="frontend/assets/js/displayCards.js"></script>
</body>
</html>