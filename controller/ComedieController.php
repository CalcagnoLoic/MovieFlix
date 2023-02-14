<?php

namespace app\controller;

use app\controller\Controller;

class ComedieController extends Controller
{
    public function comedieMovies()
    {
        return $this->view('pages/comedie');
    }
}