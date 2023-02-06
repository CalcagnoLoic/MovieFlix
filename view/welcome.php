<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Calcagno Loïc">
    <meta name="description" content="Bienvenue sur MovieFlix, votre site de streaming regroupant les films sortis dans les salles de cinéma.">
    <title>MovieFlix</title>
    <link rel="stylesheet" href="frontend/assets/sass/welcome.css">
    <link rel="icon" href="frontend/assets/img/logo.png">
</head>
<body>
    <header>
        <nav>
            <div class="group1">
                <img src="frontend/assets/img/logo.png" alt="Logo du site MovieFlix">
                <h1>MovieFlix</h1>
            </div>
            <div class="group2">
                <button onclick="location.href='login'">Se connecter</button>
                <button onclick="location.href='register'">S'inscrire</button>
            </div>
        </nav>
    </header>
    <main>
        <div class="welcome">
            <h2 class="main-title">Bienvenue sur MovieFlix</h2>
            <h2>Envie d'un film d'action avec Tom Cruise ou simplement vous retrouver face à face avec un Tyrannosaure de Spielberg?</h2>
            <h2>Vous êtes au bon endroit!</h2>
            <p>Grâce à notre catalogue diversifié, vous avez accès à plus de 10.000 films possibles ainsi que des émissions télévisées.</p>
            <p>Notre catalogue propose une multitude de catégories allant du drame historique aux films d'horreurs en passant par les comédies familiales.</p>
            <img class="img-welcome" src="frontend/assets/img/welcome-removebg-preview.png" alt="Carrousel film">
        </div>
    </main>
    <?php
    use app\controller\Controller;

    $footer = new Controller();
    $footer->view('template/footer');
    ?>
</body>
</html>