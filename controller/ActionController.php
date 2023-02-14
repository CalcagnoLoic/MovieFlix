<?php

namespace app\controller;

use app\controller\Controller;

class ActionController extends Controller
{
    public function actionMovies()
    {
        return $this->view('pages/action');
    }
}