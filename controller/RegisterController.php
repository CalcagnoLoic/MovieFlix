<?php 

namespace app\controller;

use app\controller\Controller;
use app\model\RegisterModel;

class RegisterController extends Controller
{
    public function newUser() 
    {
        if(!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['address']) && !empty($_POST['prices']) && !empty($_POST['password']) && empty($_POST['honeypot'])) 
        {
            $email = $_POST['email'];
            $name = $_POST['name'];
            $username = $_POST['username'];
            $address = $_POST['address'];
            $prices = $_POST['prices'];
            $password = $_POST['password'];

            //Sanitization 
            $emailFilter = filter_var($email, FILTER_SANITIZE_EMAIL);
            $nameFilter = htmlspecialchars($name);
            $usernameFilter = htmlspecialchars($username);
            $addressFilter = htmlspecialchars($address);
            $passwordFilter = htmlspecialchars($password);
            $passwordHash = password_hash($passwordFilter, PASSWORD_DEFAULT);

            $addNewUser = new RegisterModel();
            $addNewUser->addUser($emailFilter, $nameFilter, $addressFilter, $prices, $passwordHash, $usernameFilter);  
            
            header('Location: http://localhost/MovieFlix/login');
        } else {
            return $this->view('register');
        }
    }
}