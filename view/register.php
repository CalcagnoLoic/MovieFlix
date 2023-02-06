<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Calcagno Loïc">
    <meta name="description" content="Bienvenue sur MovieFlix, votre site de streaming regroupant les films sortis dans les salles de cinéma.">
    <title>S'enregistrer à MovieFlix</title>
    <link rel="stylesheet" href="frontend/assets/sass/register.css">
    <link rel="icon" href="frontend/assets/img/logo.png">
</head>
<body>
    <main>
        <div class="container">
            <h1>MovieFlix</h1>
            <h2>S'enregistrer</h2>
            <form>
                <div class="form1">
                    <select name="" id="">
                        <option value="">--Veuillez choisir une option--</option>
                        <option value="essentiel">Pack essentiel</option>
                        <option value="standard">Pack standard</option>
                        <option value="familial">Pack familial</option>
                    </select>
                    <a href="prices">Plus d'infos sur les plans tarifaires?</a>
                </div>
                <div class="form2">
                    <input type="text" placeholder="Nom de famille">
                    <input type="text" placeholder="Prénom">
                </div>
                <div class="form3">
                    <input type="text" placeholder="Adresse complète">
                    <input type="email" placeholder="Votre adresse email">
                    <input type="email" placeholder="Confirmez votre adresse email">
                    <input type="password" placeholder="Votre mot de passe">
                    <input type="password" placeholder="Confirmez votre mot de passe">
                </div>
                <input type="button" class="btn" value="S'enregistrer">
            </form>
        </div>
    </main>
    <?php
        use app\controller\Controller;

        $footer = new controller;
        $footer->view('template/footer');
    ?>
</body>
</html>