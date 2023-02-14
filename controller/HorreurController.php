<?php

namespace app\controller;

use app\controller\Controller;

class HorreurController extends Controller 
{
    public function horreurMovies()
    {
        return $this->view('pages/horreur');
    }
}   