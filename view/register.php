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
            <form method="post" action="">
                <div class="form1">
                    <select required name="prices">
                        <option value="">--Veuillez choisir une option--</option>
                        <option value="essentiel">Pack essentiel</option>
                        <option value="standard">Pack standard</option>
                        <option value="familial">Pack familial</option>
                    </select>
                    <a href="prices">Plus d'infos sur les plans tarifaires?</a>
                </div>
                <div class="form2">
                    <div class="input-control">
                        <div class="error"></div>
                        <input type="text" placeholder="Nom et prénom" class="input" id="nom" required name="name">
                        <input type="text" placeholder="Pseudo" class="input" id="prenom" required name="username">
                    </div>
                </div>
                <div class="form3">
                    <div class="input-control">
                        <div class="error"></div>
                        <input type="text" placeholder="Adresse complète" class="input" id="address" required name="address">
                    </div>
                    
                    <div class="input-control">
                        <div class="error"></div>
                        <input type="email" placeholder="Votre adresse email" id="email" class="input" required name="email">
                    </div>

                    <div class="input-control">
                        <div class="error"></div>
                        <input type="password" placeholder="Votre mot de passe" class="input" id="password" required name="password">
                    </div>
                    <div class="input-control">
                        <div class="error"></div>
                        <input type="password" placeholder="Confirmez votre mot de passe" class="input" id="password2" required>
                    </div>
                </div>
                <input type="submit" class="btn" value="S'enregistrer">
            </form>
        </div>
    </main>

    <?php
        use app\controller\Controller;

        $footer = new controller;
        $footer->view('template/footer');
    ?>

    <script src="frontend/assets/js/matchingInput.js"></script>
</body>
</html>