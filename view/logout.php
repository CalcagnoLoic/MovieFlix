<?php

session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Calcagno Loïc">
    <meta name="description" content="Bienvenue sur MovieFlix, votre site de streaming regroupant les films sortis dans les salles de cinéma.">
    <title>A bientôt</title>
    <link rel="stylesheet" href="frontend/assets/css/logout.css">
    <link rel="icon" href="frontend/assets/img/logo.png">
</head>
<body>
    <main>
        <div>
            <h1>A bientôt sur MovieFlix!</h1>
            <img src="frontend/assets/img/goodbye.gif" alt="Au revoir et à bientôt sur MovieFlix">
            <button onclick="location.href='http://localhost/MovieFlix/'">Retour à la page d'acceuil</button>
        </div>
        
    </main>
    
    <?php
        use app\controller\Controller;

        $footer = new controller;
        $footer->view('template/footer');
    ?>
</body>
</html>

