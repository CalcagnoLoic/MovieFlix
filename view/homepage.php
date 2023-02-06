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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="block1">
                <img src="frontend/assets/img/iconmonstr-menu-circle-lined-240.png" alt="Menu" class="menu">
                <h1>MovieFlix</h1>
            </div>
            <div class="searchbar">
                <form>
                    <input type="text" placeholder="Recherche..">
                    <button><i class="fa fa-search"></i></button>
                </form>
                
            </div>
        </nav>
    </header>
    <main>
        <div class="main">
            <img src="frontend/assets/img/bg-image.jpg" alt="poster film">
        </div>
        <div class="site">
            <div class="categorie">
                <h2>Les films les mieux notés</h2>
            </div>
            <div class="categorie">
                <h2>Les films à l'affiche</h2>
            </div>
            <div class="categorie">
                <h2>Les films populaires</h2>
            </div>
            <div class="categorie">
                <h2>Les émission télévisées les mieux notées</h2>
            </div>
            <div class="categorie">
                <h2>Les émissions télévisées en cours de diffusion</h2>
            </div>
            <div class="categorie">
                <h2>Les émissions télévisées populaires</h2>
            </div>
        </div>
    </main>
    <?php

    use app\controller\Controller;

    $footer = new Controller;
    $footer->view('template/footer');

    ?>
</body>
</html>