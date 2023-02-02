<?php

namespace app\controller;
use app\controller\Controller;

class LoginForm extends Controller
{
    public function loginform()
    {
        return $this->view('loginform');
    }
}