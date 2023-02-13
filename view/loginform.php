<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Calcagno Loïc">
    <meta name="description" content="Bienvenue sur MovieFlix, votre site de streaming regroupant les films sortis dans les salles de cinéma.">
    <title>Connexion à MovieFlix</title>
    <link rel="stylesheet" href="frontend/assets/sass/login.css">
    <link rel="icon" href="frontend/assets/img/logo.png">
</head>
<body>
    <main>
        <div class="container">
            <h1>MovieFlix</h1>
            <h2>Connexion à votre compte</h2>
            <form method="post" action="">
                <input type="test" placeholder="Pseudo" required class="input" name='username'>
                <input type="email" placeholder="Email" required class="input" name='email'>
                <input type="password" placeholder="Mot de passe"  class="input" name="password">
                <input type="submit" value="Se connecter" class="btn">
            </form>
            <div class="info">
                <div>
                    <input type="checkbox"><label for="">Se souvenir de moi</label> 
                </div>
                <a href="#">Besoin d'aide?</a>
            </div>
            <p>Nouveau sur MovieFlix? <a href="register">Enregistrez vous!</a></p>
        </div>
    </main>
    <?php
        use app\controller\Controller;

        $footer = new controller;
        $footer->view('template/footer');
    ?>
</body>
</html>