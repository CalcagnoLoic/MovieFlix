<?php

namespace app\controller;
use app\controller\Controller;

class PricesPlan extends Controller
{
    public function pricesPlan()
    {
        return $this->view('pricesplan');
    }
}