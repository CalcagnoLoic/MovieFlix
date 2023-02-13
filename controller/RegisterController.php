<?php 

namespace app\controller;

use app\controller\Controller;
use app\model\RegisterModel;

class RegisterController extends Controller
{
    public function newUser() 
    {
        if(!empty($_POST['email']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['address']) && !empty($_POST['prices']) && !empty($_POST['password'])) 
        {
            $email = $_POST['email'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];
            $prices = $_POST['prices'];
            $password = $_POST['password'];

            //Sanitization 
            $emailFilter = filter_var($email, FILTER_SANITIZE_EMAIL);
            $firstnameFilter = htmlspecialchars($firstname);
            $lastnameFilter = htmlspecialchars($lastname);
            $addressFilter = htmlspecialchars($address);
            $passwordFilter = htmlspecialchars($password);
            $passwordHash = password_hash($passwordFilter, PASSWORD_DEFAULT);

            $addNewUser = new RegisterModel();
            $addNewUser->addUser($emailFilter, $firstnameFilter, $lastnameFilter, $addressFilter, $prices, $passwordHash);  
            
            return $this->view('loginform');
            
        } else {
            return $this->view('register');
        }
    }
}