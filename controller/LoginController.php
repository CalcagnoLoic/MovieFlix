<?php
namespace app\controller;

session_start();

use app\controller\Controller;
use app\model\LoginModel;

class LoginController extends Controller
{
    public function loginform()
    {
        $connected = false;
        if(!empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['username']))
        {
            $getUsers = new LoginModel();
            $users = $getUsers->validateLogin();

            $email = trim(htmlspecialchars($_POST['email']));
            $password = trim(htmlspecialchars(($_POST['password'])));
            $username = trim(htmlspecialchars($_POST['username']));

            foreach ($users as $user) {
                if ($email === $user['email'] and $username === $user['username'] and password_verify($password, $user['password'])) {
                    $_SESSION['Customer'] = $username;
                    $connected = True;
                }
            }

            if ($connected == false) {
                echo "<script type='text/javascript'>alert('Votre compte n\'existe pas dans notre base de données, inscrive-vous dès maintenant! Si vous êtes inscrit, vérifiez bien votre mot de passe, il doit être incomplet et/ou erroné ;)');</script>";
                return $this->view('loginform');
            } else {
                header('Location: http://localhost/MovieFlix/homepage');
            }
        } else if(isset($_POST['email']) and isset($_POST['password'])) {
            //echo "<script type='text/javascript'>alert('L\'adresse email ou le mot passe est/sont manquants');</script>";
            return $this->view('loginform');
        } else {
            return $this->view('loginform');
        }
    }
}