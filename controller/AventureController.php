<?php

namespace app\controller;

use app\controller\Controller;

class AventureController extends Controller
{
    public function aventureMovies()
    {
        return $this->view('pages/aventure');
    }
}