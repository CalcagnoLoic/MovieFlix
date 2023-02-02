<?php 

namespace app\controller;
use app\controller\Controller;

class Register extends Controller
{
    public function registerForm() 
    {
        return $this->view('register');
    }
}