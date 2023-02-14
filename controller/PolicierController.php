<?php

namespace app\controller;

use app\controller\Controller;

class PolicierController extends Controller
{
    public function policierMovies()
    {
        return $this->view('pages/policier');
    }
}