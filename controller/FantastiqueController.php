<?php

namespace app\controller;

use app\controller\Controller;

class FantastiqueController extends Controller
{
    public function fantastiqueMovies()
    {
        return $this->view('pages/fantastique');
    }
}