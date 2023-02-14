<?php

namespace app\controller;

use app\controller\Controller;

class DrameController extends Controller
{
    public function drameMovies()
    {
        return $this->view('pages/drame');
    }
}