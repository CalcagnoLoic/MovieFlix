<?php 

namespace app\controller;
use app\controller\Controller;

class Error extends Controller
{
    public function getError()
    {
        return $this->view('error');
    }
}