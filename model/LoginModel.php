<?php

namespace app\model;

use app\model\Database;

class LoginModel 
{
    public $db;

    public function __construct()
    {
        return $this->db = new Database();
    }
    
    public function validateLogin()
    {
        $query = 
        "SELECT *
        FROM register";

        $res = $this->db->getInstance()->prepare($query);
        $res->execute();
        $data = $res->fetchAll($this->db->getInstance()::FETCH_ASSOC);
        return $data;
    }
}