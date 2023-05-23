<?php
namespace App\controller;

class BaseController{
    protected $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
       
}