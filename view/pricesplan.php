<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Calcagno Loïc">
    <meta name="description" content="Bienvenue sur MovieFlix, votre site de streaming regroupant les films sortis dans les salles de cinéma.">
    <title>Plans tarifaires</title>
    <link rel="stylesheet" href="frontend/assets/sass/price.css">
    <link rel="icon" href="frontend/assets/img/logo.png">
</head>
<body>
    <main>
        <h1>MovieFlix</h1>
        <h2>Plus d'infos sur les plans tarifaires de notre site? Vous êtes au bon endroit!</h2>
        <ul>
            <li><img src="frontend/assets/img/bookmark.png" alt="List type" class="list-style-img"> Regardez où vous voulez, sans publicités</li>
            <li><img src="frontend/assets/img/bookmark.png" alt="List type" class="list-style-img"> Recommandations personnalisées</li>
            <li><img src="frontend/assets/img/bookmark.png" alt="List type" class="list-style-img"> Changez ou annulez votre forfait à tout moment</li>
        </ul>

        <table>
            <thead>
                <th></th>
                <th>Pack essentiel</th>
                <th>Pack standard</th>
                <th>Pack familial</th>
            </thead>
            <tbody>
                <tr class="line-btm">
                    <td>Tarif mensuel</td>
                    <td>8.99€</td>
                    <td>13.99€</td>
                    <td>21.99€</td>
                </tr>
                <tr>
                    <td>Qualité vidéo</td>
                    <td>Bonne</td>
                    <td>Meilleure</td>
                    <td>Optimale</td>
                </tr>
                <tr>
                    <td>Résolution *</td>
                    <td>480p</td>
                    <td>1080p</td>
                    <td>4K+HDR</td>
                </tr>
                <tr>
                    <td>MovieFlix sur smartphone, télé et tablette</td>
                    <td><img src="frontend/assets/img/check.png" alt="check" class="check"></td>
                    <td><img src="frontend/assets/img/check.png" alt="check" class="check"></td>
                    <td><img src="frontend/assets/img/check.png" alt="check" class="check"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn-check" onclick="location.href='register'">Je choisis celui-ci!</button></td>
                    <td><button class="btn-check" onclick="location.href='register'">Je choisis celui-ci!</button></td>
                    <td><button class="btn-check" onclick="location.href='register'">Je choisis celui-ci!</button></td>
                </tr>
            </tbody>
        </table>
        <p class="warning">* La résolution HD, full DH, ultra HD et HDR dépend de votre connexion internet</p>
    </main>
    <?php

    use app\controller\Controller;

    $footer = new Controller();
    $footer->view('template/footer');

    ?>
</body>
</html>