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
        <div class="site">
            <div class="categorie-action">
                <h2>Action</h2>
                <div id="slider-action"></div>
                <div class="chevron">
                    <img src="frontend/assets/img/chevron-gauche.png" alt="chevron gauche" id="g-action" class="btn">
                    <img src="frontend/assets/img/chevron-droit.png" alt="chevron droit" id="d-action" class="btn">
                </div>
                
            </div>
            <div class="categorie-aventure">
                <h2>Aventure</h2>
                <div id="slider-aventure"></div>
                <div class="chevron">
                    <img src="frontend/assets/img/chevron-gauche.png" alt="chevron gauche" id="g-action" class="btn">
                    <img src="frontend/assets/img/chevron-droit.png" alt="chevron droit" id="d-action" class="btn">
                
                </div>
            </div>
            <div class="categorie-comedie">
                <h2>Comédie</h2>
                <div id="slider-comedie"></div>
                <div class="chevron">
                    <img src="frontend/assets/img/chevron-gauche.png" alt="chevron gauche" id="g-action" class="btn">
                    <img src="frontend/assets/img/chevron-droit.png" alt="chevron droit" id="d-action" class="btn">
                </div>
            </div>
            <div class="categorie-drame">
                <h2>Drame</h2>
                <div id="slider-drame"></div>
                <div class="chevron">
                    <img src="frontend/assets/img/chevron-gauche.png" alt="chevron gauche" id="g-action" class="btn">
                    <img src="frontend/assets/img/chevron-droit.png" alt="chevron droit" id="d-action" class="btn">
                </div>
            </div>
            <div class="categorie-fantastique">
                <h2>Fantastique</h2>
                <div id="slider-fantastique"></div>
                <div class="chevron">
                    <img src="frontend/assets/img/chevron-gauche.png" alt="chevron gauche" id="g-action" class="btn">
                    <img src="frontend/assets/img/chevron-droit.png" alt="chevron droit" id="d-action" class="btn">
                </div>
            </div>
            <div class="categorie-horreur">
                <h2>Horreur</h2>
                <div id="slider-horreur"></div>
                <div class="chevron">
                    <img src="frontend/assets/img/chevron-gauche.png" alt="chevron gauche" id="g-action" class="btn">
                    <img src="frontend/assets/img/chevron-droit.png" alt="chevron droit" id="d-action" class="btn">
                </div>
            </div>
        </div>
    </main>
    <?php

    use app\controller\Controller;

    $footer = new Controller;
    $footer->view('template/footer');

    ?>
    <script src="frontend/assets/js/apiKey.js"></script>
    <script src="frontend/assets/js/carrouselAction.js"></script>
    <script src="frontend/assets/js/carrouselAventure.js"></script>
    <script src="frontend/assets/js/carrouselComedie.js"></script>
    <script src="frontend/assets/js/carrouselDrame.js"></script>
    <script src="frontend/assets/js/carrouselFantastique.js"></script>
    <script src="frontend/assets/js/carrouselHorreur.js"></script>
</body>
</html>