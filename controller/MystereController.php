<?php

namespace app\controller;

use app\controller\Controller;

class MystereController extends Controller
{
    public function mystereMovies()
    {
        return $this->view('pages/mystere');
    }
}