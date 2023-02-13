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
                <img src="frontend/assets/img/logo.png" alt="Logo responsive" class="img-responsive">
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
        <h1 style="color: white;">Bienvenue,  <?php 
        if (!empty($_SESSION['Customer'])) {
            echo $_SESSION['Customer'];
        } else {
            echo "erreur";
        }
        ?> !
        </h1>
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
                    <img src="frontend/assets/img/chevron-gauche.png" alt="chevron gauche" id="g-aventure" class="btn">
                    <img src="frontend/assets/img/chevron-droit.png" alt="chevron droit" id="d-aventure" class="btn">
                </div>
            </div>
            <div class="categorie-comedie">
                <h2>Comédie</h2>
                <div id="slider-comedie"></div>
                <div class="chevron">
                    <img src="frontend/assets/img/chevron-gauche.png" alt="chevron gauche" id="g-comedie" class="btn">
                    <img src="frontend/assets/img/chevron-droit.png" alt="chevron droit" id="d-comedie" class="btn">
                </div>
            </div>
            <div class="categorie-drame">
                <h2>Drame</h2>
                <div id="slider-drame"></div>
                <div class="chevron">
                    <img src="frontend/assets/img/chevron-gauche.png" alt="chevron gauche" id="g-drame" class="btn">
                    <img src="frontend/assets/img/chevron-droit.png" alt="chevron droit" id="d-drame" class="btn">
                </div>
            </div>
            <div class="categorie-fantastique">
                <h2>Fantastique</h2>
                <div id="slider-fantastique"></div>
                <div class="chevron">
                    <img src="frontend/assets/img/chevron-gauche.png" alt="chevron gauche" id="g-fantastique" class="btn">
                    <img src="frontend/assets/img/chevron-droit.png" alt="chevron droit" id="d-fantastique" class="btn">
                </div>
            </div>
            <div class="categorie-horreur">
                <h2>Horreur</h2>
                <div id="slider-horreur"></div>
                <div class="chevron">
                    <img src="frontend/assets/img/chevron-gauche.png" alt="chevron gauche" id="g-horreur" class="btn">
                    <img src="frontend/assets/img/chevron-droit.png" alt="chevron droit" id="d-horreur" class="btn">
                </div>
            </div>
            <div class="categorie-policier">
                <h2>Policier</h2>
                <div id="slider-policier"></div>
                <div class="chevron">
                    <img src="frontend/assets/img/chevron-gauche.png" alt="chevron gauche" id="g-policier" class="btn">
                    <img src="frontend/assets/img/chevron-droit.png" alt="chevron droit" id="d-policier" class="btn">
                </div>
            </div>
            <div class="categorie-docu">
                <h2>Documentaire</h2>
                <div id="slider-docu"></div>
                <div class="chevron">
                    <img src="frontend/assets/img/chevron-gauche.png" alt="chevron gauche" id="g-docu" class="btn">
                    <img src="frontend/assets/img/chevron-droit.png" alt="chevron droit" id="d-docu" class="btn">
                </div>
            </div>
            <div class="categorie-mystere">
                <h2>Mystère</h2>
                <div id="slider-mystere"></div>
                <div class="chevron">
                    <img src="frontend/assets/img/chevron-gauche.png" alt="chevron gauche" id="g-mystere" class="btn">
                    <img src="frontend/assets/img/chevron-droit.png" alt="chevron droit" id="d-mystere" class="btn">
                </div>
            </div>
            <div class="categorie-scifi">
                <h2>Science Fiction</h2>
                <div id="slider-scifi"></div>
                <div class="chevron">
                    <img src="frontend/assets/img/chevron-gauche.png" alt="chevron gauche" id="g-scifi" class="btn">
                    <img src="frontend/assets/img/chevron-droit.png" alt="chevron droit" id="d-scifi" class="btn">
                </div>
            </div>
            <div class="categorie-thriller">
                <h2>Thriller</h2>
                <div id="slider-thriller"></div>
                <div class="chevron">
                    <img src="frontend/assets/img/chevron-gauche.png" alt="chevron gauche" id="g-thriller" class="btn">
                    <img src="frontend/assets/img/chevron-droit.png" alt="chevron droit" id="d-thriller" class="btn">
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
    <script src="frontend/assets/js/carrouselCrime.js"></script>
    <script src="frontend/assets/js/carrouselDocumentaire.js"></script>
    <script src="frontend/assets/js/carrouselMystere.js"></script>
    <script src="frontend/assets/js/carrouselScifi.js"></script>
    <script src="frontend/assets/js/carrouselThriller.js"></script>
</body>
</html>