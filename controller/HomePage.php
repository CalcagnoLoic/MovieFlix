<?php 

namespace app\controller;
use app\controller\Controller;

class HomePage extends Controller
{
    public function homePage()
    {
        return $this->view('homepage');
    }
}