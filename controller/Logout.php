<?php 

namespace app\controller;
use app\controller\Controller;

class Logout extends Controller
{
    public function logout()
    {
        return $this->view('logout');
    }
}