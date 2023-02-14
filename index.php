<?php

require __DIR__."/vendor/autoload.php";

$url = $_SERVER['REQUEST_URI'];

//var_dump($_SERVER);

use app\controller\ActionController;
use app\controller\AventureController;
use app\controller\ComedieController;
use app\controller\DocuController;
use app\controller\DrameController;
use app\controller\Welcome;
use app\controller\Error;
use app\controller\FantastiqueController;
use app\controller\HomePage;
use app\controller\HorreurController;
use app\controller\LoginController;
use app\controller\Logout;
use app\controller\MystereController;
use app\controller\PolicierController;
use app\controller\PricesPlan;
use app\controller\RegisterController;
use app\controller\ScifiController;
use app\controller\ThrillerController;

switch ($url) {
    case '/MovieFlix/':
        $welcome = new Welcome();
        $welcome->welcome();
        break;

    case '/MovieFlix/login':
        $login = new LoginController();
        $login->loginform();
        break;

    case '/MovieFlix/register':
        $register = new RegisterController();
        $register->newUser();
        break;

    case '/MovieFlix/homepage':
        $homepage = new HomePage();
        $homepage->homePage();
        break;

    case '/MovieFlix/prices':
        $prices = new PricesPlan();
        $prices->pricesPlan();
        break;

    case '/MovieFlix/logout': 
        $logout = new Logout();
        $logout->logout();
        break;

    case '/MovieFlix/action':
        $action = new ActionController();
        $action->actionMovies();
        break;

    case '/MovieFlix/aventure':
        $aventure = new AventureController();
        $aventure->aventureMovies();
        break;

    case '/MovieFlix/comedie':
        $comedie = new ComedieController();
        $comedie->comedieMovies();
        break;

    case '/MovieFlix/documentaire':
        $docu = new DocuController();
        $docu->docuMovies();
        break;

    case '/MovieFlix/drame':
        $drame = new DrameController();
        $drame->drameMovies();
        break;
    
    case '/MovieFlix/fantastique':
        $fantastique = new FantastiqueController();
        $fantastique->fantastiqueMovies();
        break;

    case '/MovieFlix/horreur':
        $horreur = new HorreurController();
        $horreur->horreurMovies();
        break;

    case '/MovieFlix/mystere':
        $mystere = new MystereController();
        $mystere->mystereMovies();
        break;

    case '/MovieFlix/policier':
        $policier = new PolicierController();
        $policier->policierMovies();
        break;

    case '/MovieFlix/scifi':
        $scifi = new ScifiController();
        $scifi->scifiMovies();
        break;

    case '/MovieFlix/thriller':
        $thriller = new ThrillerController();
        $thriller->thrillerMovies();
        break;

    default:
        $error = new Error();
        $error->getError();
        break;
}