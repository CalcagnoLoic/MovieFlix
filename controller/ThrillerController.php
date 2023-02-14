<?php

namespace app\controller;

use app\controller\Controller;

class ThrillerController extends Controller
{
    public function thrillerMovies()
    {
        return $this->view('pages/thriller');
    }
}