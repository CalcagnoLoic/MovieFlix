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

    public function addUser($email, $firstname, $lastname, $address, $prices, $password) 
    {
        $query = 
            "INSERT INTO register(email, firstname, lastname, address, prices, password)
            VALUES('$email', '$firstname', '$lastname', '$address', '$prices', '$password')";
        
        $res = $this->db->getInstance()->prepare($query);
        $res->execute();
    }
}
