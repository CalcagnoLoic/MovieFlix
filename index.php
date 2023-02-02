<?php

require __DIR__."/vendor/autoload.php";

$url = $_SERVER['REQUEST_URI'];

//var_dump($_SERVER);

use app\controller\Welcome;
use app\controller\LoginForm;
use app\controller\Error;
use app\controller\HomePage;
use app\controller\PricesPlan;
use app\controller\Register;

switch ($url) {
    case '/MovieFlix/':
        $welcome = new Welcome();
        $welcome->welcome();
        break;

    case '/MovieFlix/login':
        $login = new LoginForm();
        $login->loginform();
        break;

    case '/MovieFlix/register':
        $register = new Register();
        $register->registerForm();
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
