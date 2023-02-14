<?php

namespace app\controller;

use app\controller\Controller;

class DocuController extends Controller
{
    public function docuMovies()
    {
        return $this->view('pages/docu');
    }
}