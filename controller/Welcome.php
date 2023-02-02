<?php

namespace app\controller;
use app\controller\Controller;

class Welcome extends Controller
{
    public function welcome()
    {
        return $this->view('welcome');
    }
}