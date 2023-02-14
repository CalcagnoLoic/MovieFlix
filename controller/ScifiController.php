<?php

namespace app\controller;

use app\controller\Controller;

class ScifiController extends Controller
{
    public function scifiMovies()
    {
        return $this->view('pages/scifi');
    }
}