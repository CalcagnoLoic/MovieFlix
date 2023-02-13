<?php

require __DIR__."/vendor/autoload.php";

$url = $_SERVER['REQUEST_URI'];

//var_dump($_SERVER);

use app\controller\Welcome;
use app\controller\Error;
use app\controller\HomePage;
use app\controller\LoginController;
use app\controller\PricesPlan;
use app\controller\RegisterController;

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

    default:
        $error = new Error();
        $error->getError();
        break;
}
