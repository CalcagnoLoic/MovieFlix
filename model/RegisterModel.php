<?php

namespace app\model;

use app\model\Database;

class RegisterModel
{
    public $db;

    public function __construct()
    {
        return $this->db = new Database();        
    }

    public function addUser($email, $name, $address, $prices, $password, $username) 
    {
        $query = 
            "INSERT INTO register(email, name, address, prices, password, username)
            VALUES('$email', '$name', '$address', '$prices', '$password', '$username')";
        
        $res = $this->db->getInstance()->prepare($query);
        $res->execute();
    }
}
